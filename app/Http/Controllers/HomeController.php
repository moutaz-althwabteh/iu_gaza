<?php

// namespace App\Http\Controllers;
// use App\Models\Project;
// use Illuminate\Support\Facades\Validator;


// use Illuminate\Http\Request;


// class HomeController extends Controller
// {
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public function index()
//    {
//         return view('Dashboard.show');
//    }

//    public function create()
//    {
//        return view('Dashboard.page.create');
//    }

//    public function store(Request $request)
//    {
         
//         $rule=$this->rule();
//         $message=$this->message();

       

//         $validator = validator::make($request->all(),$rule,$message);
//         if($validator->fails()){
//             return redirect()->back()->withErrors($validator)->withInputs($request->all());
//         }



//     Project::create([
//         'projectname'=>$request->name,
//         'buildingnumber'=>$request->buildingnumber,
//         'coordinates'=>$request->coordinate,
//         'theowner'=>$request->theowner,
//         'commissioner'=>$request->commissioner,
//         'CommissionerID'=>$request->commissioneridnum,
//         'CommissionerAddress'=>$request->commissioneraddress,
//         'PartNumber'=>$request->partnumber,
//         'LandArea'=>$request->landarea,
//         'SupervisingEngineer'=>$request->supervisingengineer,
//         'ProjectType'=>$request->projecttype,
//         'ProjectStatus'=>$request->projectstatus,
//         'startingDate'=>$request->startingdate,
//         'ExpiryDate'=>$request->expirydate,
//         'BudgetBydays'=>$request->budget,
//         'theCurrency'=>$request->currency,
//         'Notes'=>$request->notes,
//     ]);

//     return view('Dashboard.show');

//    }

//    protected function message()
//    {

//     return  $message=[

//         'name.required'=>'the Name required',
//         'buildingnumber.required' => 'the building number required',
//         'coordinate.required' => 'the coordinate required',
//         'theowner.required' => 'the the owner required',
//         'commissioner.required' => 'the commissioner required',
//         'commissioneridnum.required' => 'the Commissioner ID number required',
//         'commissioneraddress.required' => 'the Commissioner address required',
//         'partnumber.required' => 'the Part number and voucher required',
//         'landarea.required' => 'the Land area required',
//         'supervisingengineer.required' => 'the Supervising engineer required',
//         'projecttype.required' => 'the Project type required',
//         'projectstatus.required' => 'the Project status required',
//         'startingdate.required' => 'the starting date required',
//         'expirydate.required' => 'the Expiry date required',
//         'budget.required' => 'the Budget by days required',
//         'currency.required' => 'the the currency required',
//         'notes.required' => 'the Notes required',

//     ];

//    }

//    protected function rule()
//    {

//     return  $rule=[
//         'name' => 'required',
//         'buildingnumber' => 'required',
//         'coordinate' => 'required',
//         'theowner' => 'required',
//         'commissioner' => 'required',
//         'commissioneridnum' => 'required',
//         'commissioneraddress'=>'required',
//         'partnumber' => 'required',
//         'landarea' => 'required',
//         'supervisingengineer' => 'required',
//         'projecttype' => 'required',
//         'projectstatus' => 'required',
//         'startingdate' => 'required',
//         'expirydate' => 'required',
//         'budget' => 'required',
//         'currency' => 'required',
//         'notes' => 'required',
//     ];

//    }

//    public function show()
//    {
//        $project=Project::get();
//        return view('Dashboard.show',compact('project'));
//    }

//    public function edit($offer_id)
//    {
    

//     $project = Project::find($offer_id);  // search in given table id only
//     if (!$project){return redirect()->back();}
        

//     //$project = Project::select('projectname', 'buildingnumber')->find($offer_id);

//     return view('Dashboard.update', compact('project'));

//    }

//    public function update(Request $request,$offer_id)
//    {
       
//     $project = Project::find($offer_id);
//     if (!$project){   return redirect()->back();}
         

//             Project::where('id', $offer_id)->update([
//                 'projectname'=>$request->name,
//                 'buildingnumber'=>$request->buildingnumber,
//                 'coordinates'=>$request->coordinate,
//                 'theowner'=>$request->theowner,
//                 'commissioner'=>$request->commissioner,
//                 'CommissionerID'=>$request->commissioneridnum,
//                 'CommissionerAddress'=>$request->commissioneraddress,
//                 'PartNumber'=>$request->partnumber,
//                 'LandArea'=>$request->landarea,
//                 'SupervisingEngineer'=>$request->supervisingengineer,
//                 'ProjectType'=>$request->projecttype,
//                 'ProjectStatus'=>$request->projectstatus,
//                 'startingDate'=>$request->startingdate,
//                 'ExpiryDate'=>$request->expirydate,
//                 'BudgetBydays'=>$request->budget,
//                 'theCurrency'=>$request->currency,
//                 'Notes'=>$request->notes,
//             ]);

//     return view('Dashboard.show');


//     // $rule=$this->rule();
//     // $message=$this->message();

   

//     // $validator = validator::make($request->all(),$rule,$message);
//     // if($validator->fails()){
//     //     return redirect()->back()->withErrors($validator)->withInputs($request->all());
//     // }

//     // return view('Dashboard.page.edit');

//    }

//    public function delete($id)
//    {
//     Project::find($id)->delete();
//     return redirect()->route('home');

//    }

// }
