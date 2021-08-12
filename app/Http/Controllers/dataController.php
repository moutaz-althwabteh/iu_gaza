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
                    $button = " <button class='edit btn  btn-danger' id='" . $data->id . "' >Edit</button>";
                    $button .= " <button class='hapus btn  btn-danger' id='" . $data->id . "' >Hapus</button>";
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('Dashboard.show');
    }
}
