<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Auth;

class IncomeController extends Controller
{

      public function __construct(){
        $this->middleware('auth');
      }
      public function index(){
$all=Income::where('income_status',1)->orderby('income_id','DESC')->get();
return view('admin/income/main/all',compact('all'));
      }
      public function add(){
return view('admin/income/main/add');
      }


      public function insert(Request $request){
            $this->validate($request,[
              'title'=>'required',
              'category'=>'required',
              'date'=>'required',
              'amount'=>'required',
            ],[
              'title.required'=>'Please enter income title!',
              'category.required'=>'Please select income category!',
              'date.required'=>'Please enter income date!',
              'amount.required'=>'Please enter income amount!',
            ]);

            $slug=uniqid('INC');
            $creator=Auth::user()->id;
            $insert=Income::insert([
              'income_title'=>$request['title'],
              'incate_id'=>$request['category'],
              'income_date'=>$request['date'],
              'income_amount'=>$request['amount'],
              'income_creator'=>$creator,
              'income_slug'=>$slug,
              'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            if($insert){
              Session::flash('success','Successfully add income information.');
              return redirect('dashboard/income/add');
            }else{
              Session::flash('error','Opps! please try again.');
              return redirect('dashboard/income/add');
            }
          }



      public function update(request $request){


      }

      public function edit($slug){

      }


          public function view($slug){

          }

      public function softdelete(){

      }
      public function restore(){

      }
      public function delete(){

      }
}
