<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\ContactsLocations;
use App\Models\Language;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contacts extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contacts::with('items')->first();
        return view('admin.pages.contacts', compact('contacts'));
    }

    public function locations()
    {
        return view('admin.pages.contacts_locations');
    }

    public function create()
    {
        return view('admin.pages.contacts_locations_create');
    }

    public function edit(ContactsLocations $location)
    {
        $location->load('items');

        return view('admin.pages.contacts_locations_edit', compact('location'));
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
            1 => 'country',
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

        $query = DB::table('contacts_locations');

        if (!empty($request->input('search')['value'])) {
            $filtered = true;
            $search = trim($request->input('search')['value']);

            $query->where('contacts_locations_data.country', 'LIKE',"%{$search}%");
        }

        $news = $query
            ->join('contacts_locations_data', 'contacts_locations_data.location_id', '=', 'contacts_locations.id')
            ->join('languages', 'languages.id', '=', 'contacts_locations_data.lang')
            ->select([DB::raw("SQL_CALC_FOUND_ROWS contacts_locations.id,contacts_locations.published,contacts_locations.created_at,contacts_locations_data.country")])
            ->where("contacts_locations_data.lang", $lang)
            ->orderBy($order, $dir)->take($limit)->offset($start)->get();


        Carbon::setLocale('en');

        foreach ($news as $item) {

            $actions = "<a href=". route('admin.pages.contacts.locations.edit', $item->id). "><i class='bx bx-pencil' style='font-size: 16px; padding-right: 10px' ></i></a>
                                <a href='#' onClick='emit({$item->id});return false'><i class='bx bx-trash text-color-danger' style='font-size: 16px;' ></i></a>";

            $status = "<span class='badge badge-success'>".__('Published')."</span>";

            if($item->published == 0){
                $status = "<span class='badge badge-danger'>".__('Unpublished')."</span>";
            }

            $returnArray['data'][] = [
                $item->id,
                $item->country,
                $status,
                Carbon::create($item->created_at)->translatedFormat('d M, Y'),
                $actions
            ];
        }

        if ($filtered) {
            $query = DB::select(DB::raw('SELECT FOUND_ROWS() as total_found'));

            $returnArray['recordsFiltered'] = $query[0]->total_found;
        } else {
            $total_records = ContactsLocations::count();
            $returnArray['recordsFiltered'] = $total_records;
        }

        $returnArray['recordsTotal'] = !isset($total_records) ? ContactsLocations::count() : $total_records;

        return response()->json($returnArray);
    }
}
