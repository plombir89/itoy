<?php

namespace App\Http\Controllers\Admin\Content\News;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.content.news.index');
    }

    public function create()
    {
        return view('admin.content.news.create');
    }

    public function edit($news)
    {
        $news = News::where('id', $news)->with('items.language')->firstOrFail();

        return view('admin.content.news.edit', compact('news'));
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
            3 => 'created_at',
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

        $query = DB::table('news');

        if (!empty($request->input('search')['value'])) {
            $filtered = true;
            $search = trim($request->input('search')['value']);

            $query->where('news_data.title', 'LIKE',"%{$search}%");
        }

        $news = $query
            ->join('news_data', 'news_data.news_id', '=', 'news.id')
            ->join('languages', 'languages.id', '=', 'news_data.lang')
            ->select([DB::raw("SQL_CALC_FOUND_ROWS news.id,news.published,news.created_at,news_data.title")])
            ->where("news_data.lang", $lang)
            ->orderBy($order, $dir)->take($limit)->offset($start)->get();


        Carbon::setLocale('en');

        foreach ($news as $item) {

            $actions = "<a href=". route('admin.content.news.edit', $item->id). "><i class='bx bx-pencil' style='font-size: 16px; padding-right: 10px' ></i></a>
                                <a href='#' onClick='emit({$item->id});return false'><i class='bx bx-trash text-color-danger' style='font-size: 16px;' ></i></a>";

            $status = "<span class='badge badge-success'>".__('Published')."</span>";

            if($item->published == 0){
                $status = "<span class='badge badge-danger'>".__('Unpublished')."</span>";
            }

            $returnArray['data'][] = [
                $item->id,
                $item->title,
                $status,
                Carbon::create($item->created_at)->translatedFormat('d M, Y'),
                $actions
            ];
        }

        if ($filtered) {
            $query = DB::select(DB::raw('SELECT FOUND_ROWS() as total_found'));

            $returnArray['recordsFiltered'] = $query[0]->total_found;
        } else {
            $total_records = News::count();
            $returnArray['recordsFiltered'] = $total_records;
        }

        $returnArray['recordsTotal'] = !isset($total_records) ? News::count() : $total_records;

       return response()->json($returnArray);
    }
}
