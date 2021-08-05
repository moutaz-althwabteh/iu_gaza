<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }
   public function index()
   {
        return view('Dashboard.home');
   }

   public function create()
   {
       return view('Dashboard.page.create');
   }

   public function store(Request $request)
   {
            //  dd($request->coordinate);
  
            //  dd($request->startingdate);


        $rule=$this->rule();
        $message=$this->message();

       

        $validator = validator::make($request->all(),$rule,$message);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }



    Project::create([
        'projectname'=>$request->name,
        'buildingnumber'=>$request->buildingnumber,
        'coordinates'=>$request->coordinate,
        'the owner of real estate'=>$request->theowner,
        'commissioner'=>$request->commissioner,
        'Commissioner ID number'=>$request->commissioneridnum,
        'Commissioner address'=>$request->commissioneraddress,
        'Part number and voucher'=>$request->partnumber,
        'Land area'=>$request->landarea,
        'Supervising engineer'=>$request->supervisingengineer,
        'Project type'=>$request->projecttype,
        'Project status'=>$request->projectstatus,
        'starting date'=>$request->startingdate,
        'Expiry date'=>$request->expirydate,
        'Budget by days'=>$request->budget,
        'the currency'=>$request->currency,
        'Notes'=>$request->notes,
    ]);

    return redirect()->route('home');

   }

   protected function message()
   {

    return  $message=[

        'name.required'=>'the Name required',
        'buildingnumber.required' => 'the building number required',
        'coordinate.required' => 'the coordinate required',
        'theowner.required' => 'the the owner required',
        'commissioner.required' => 'the commissioner required',
        'commissioneridnum.required' => 'the Commissioner ID number required',
        'commissioneraddress.required' => 'the Commissioner address required',
        'partnumber.required' => 'the Part number and voucher required',
        'landarea.required' => 'the Land area required',
        'supervisingengineer.required' => 'the Supervising engineer required',
        'projecttype.required' => 'the Project type required',
        'projectstatus.required' => 'the Project status required',
        'startingdate.required' => 'the starting date required',
        'expirydate.required' => 'the Expiry date required',
        'budget.required' => 'the Budget by days required',
        'currency.required' => 'the the currency required',
        'notes.required' => 'the Notes required',

    ];

   }

   protected function rule()
   {

    return  $rule=[
        'name' => 'required|unique:posts|max:50',
        'buildingnumber' => 'required|unique:posts',
        'coordinate' => 'required|unique:posts',
        'theowner' => 'required|unique:posts',
        'commissioner' => 'required|unique:posts',
        'commissioneridnum' => 'required|unique:posts',
        'commissioneraddress'=>'required|unique:posts',
        'partnumber' => 'required|unique:posts',
        'landarea' => 'required|unique:posts',
        'supervisingengineer' => 'required|unique:posts',
        'projecttype' => 'required',
        'projectstatus' => 'required',
        'startingdate' => 'required',
        'expirydate' => 'required',
        'budget' => 'required|unique:posts',
        'currency' => 'required',
        'notes' => 'required|unique:posts',
    ];

   }

}
