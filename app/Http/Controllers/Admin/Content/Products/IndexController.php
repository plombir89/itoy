<?php

namespace App\Http\Controllers\Admin\Content\Products;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductImages;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.content.products.index');
    }

    public function create()
    {
        return view('admin.content.products.create');
    }

    public function edit($product)
    {
        $product = Product::where('id', $product)->with('items.language')->firstOrFail();

        return view('admin.content.products.edit', compact('product'));
    }

    public function get_json(Request $request){

        $lang = Language::defaultLang()->id;
        $filtered = false;

        $draw = $request->input('draw');

        $returnArray = [
            'draw' => (!empty($draw) && is_numeric($draw)) ? abs($draw) : 0,
            'recordsTotal' => 0,
            'recordsFiltered' => 0,
            'data' => []
        ];

        // Columns by which we make 'order by'
        $columns = [
            1 => 'title',
            2 => 'published',
            3 => 'cat_title',
            4 => 'created_at',
        ];

        $limit = $request->input('length');
        $limit = (!empty($limit) && in_array($limit, [10, 25, 50, 100])) ? $limit : 10;

        $start =  $request->input('start');
        $start = ($start !== null && is_numeric($start)) ? abs($start) : 0;

        if (isset($request->input('order')[0]['column']) && !empty($columns[$request->input('order')[0]['column']])) {
            $order = $columns[$request->input('order')[0]['column']];
        } else {
            $order = $columns[3];
        }

        if (!empty($request->input('order')[0]['dir']) && in_array($request->input('order')[0]['dir'], ['asc', 'desc'])) {
            $dir = $request->input('order')[0]['dir'];
        } else {
            $dir = 'asc';
        }

        $query = DB::table('products');

        if (!empty($request->input('search')['value'])) {
            $filtered = true;
            $search = trim($request->input('search')['value']);

            $query->where('product_data.title', 'LIKE',"%{$search}%");
        }

        $news = $query
            ->join('product_data', 'product_data.product_id', '=', 'products.id')
            ->join('languages', 'languages.id', '=', 'product_data.lang')
            ->join('product_categories', 'product_categories.id', '=', 'products.category_id')
            ->join('product_category_data', 'product_category_data.category_id', '=', 'product_categories.id')
            ->select([DB::raw("SQL_CALC_FOUND_ROWS products.id,products.published,products.created_at,product_data.title,product_category_data.title as cat_title")])
            ->where(["product_data.lang" => $lang, 'product_category_data.lang' => $lang])
            ->orderBy($order, $dir)->take($limit)->offset($start)->get();


        Carbon::setLocale('en');

        foreach ($news as $item) {

            $actions = "<a href=". route('admin.content.products.edit', $item->id). "><i class='bx bx-pencil' style='font-size: 16px; padding-right: 10px' ></i></a>
                                <a href='#' onClick='emit({$item->id});return false'><i class='bx bx-trash text-color-danger' style='font-size: 16px;' ></i></a>";

            $status = "<span class='badge badge-success'>".__('Published')."</span>";

            if($item->published == 0){
                $status = "<span class='badge badge-danger'>".__('Unpublished')."</span>";
            }

            $returnArray['data'][] = [
                $item->id,
                $item->title,
                $status,
                $item->cat_title,
                Carbon::create($item->created_at)->translatedFormat('d M, Y'),
                $actions
            ];
        }

        if ($filtered) {
            $query = DB::select(DB::raw('SELECT FOUND_ROWS() as total_found'));

            $returnArray['recordsFiltered'] = $query[0]->total_found;
        } else {
            $total_records = Product::count();
            $returnArray['recordsFiltered'] = $total_records;
        }

        $returnArray['recordsTotal'] = !isset($total_records) ? Product::count() : $total_records;

        return response()->json($returnArray);
    }

    public function upload(Request $request, $product)
    {
        $request->validate([
            'file' => 'required|dimensions:width=770,height=450',
        ]);

        $path = $request->file('file')->store('/products/'.$product);

        ProductImages::create([
            'product_id' => $product,
            'img' => $path
        ]);

        return '/storage/'. $path;
    }
}
