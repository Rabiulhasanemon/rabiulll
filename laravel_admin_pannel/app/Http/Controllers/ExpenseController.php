<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expense;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Auth;

class ExpenseController extends Controller
{



    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){

    }
    public function add(){
      return view('admin/expense/main/add');

    }




          public function insert(Request $request){
                $this->validate($request,[
                  'title'=>'required',
                  'category'=>'required',
                  'date'=>'required',
                  'amount'=>'required',
                ],[
                  'title.required'=>'Please enter Expense title!',
                  'category.required'=>'Please select Expense category!',
                  'date.required'=>'Please enter Expense date!',
                  'amount.required'=>'Please enter Expense amount!',
                ]);

                $slug=uniqid('INC');
                $creator=Auth::user()->id;
                $insert=Expense::insert([
                  'expense_title'=>$request['title'],
                  'expcate_id'=>$request['category'],
                  'expense_date'=>$request['date'],
                  'expense_amount'=>$request['amount'],
                  'expense_creator'=>$creator,
                  'expense_slug'=>$slug,
                  'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                if($insert){
                  Session::flash('success','Successfully add Expense information.');
                  return redirect('dashboard/expense/add');
                }else{
                  Session::flash('error','Opps! please try again.');
                  return redirect('dashboard/expense/add');
                }
              }


    public function update(){


    }

    public function edit(){

    }


        public function view(){

        }

    public function softdelete(){

    }
    public function restore(){

    }
    public function delete(){

    }



}
