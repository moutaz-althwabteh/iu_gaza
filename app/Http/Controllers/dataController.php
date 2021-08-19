<?php

namespace App\Http\Controllers;

use App\Models\Project; 
use Illuminate\Http\Request;

use DataTables;



class dataController extends Controller
{
    
    public function index()
    {
        $data = Project::get();
       
        if (request()->ajax()) {
            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $button = " <a href='" . route('edit',$data->id) . "' class='btn btn-danger'> Edit</a>";
                    $button .= " <a href='" . route('delete',$data->id) . "' class='btn btn-danger'> Delete</a>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Dashboard.show');
    }
}
