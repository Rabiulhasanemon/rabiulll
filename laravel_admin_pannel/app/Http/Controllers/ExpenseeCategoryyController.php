<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseeCategoryy;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Auth;


class ExpenseeCategoryyController extends Controller
{




  public function __construct(){
    $this->middleware('auth');
  }
  public function index(){
    $all=ExpenseeCategoryy::where('expcate_status',1)->orderby('expcate_id','DESC')->get();
    return view('admin.expense.category.all',compact('all'));

  }
  public function add(){
    return view('admin.expense.category.add');
  }



  public function insert(request $request){
    $this->validate($request,[
    'name'=>'required|max:100|unique:expensee_categoryys,expcate_name',
    ],[
    'name.required'=>'please enter Expense category!',
    'name.unique'=>'Expense category name has already taken',
    ]);
    $slug=Str::slug($request['name'],'-');
    $creator=Auth::user()->id;
    $insert=ExpenseeCategoryy::insert([
      'expcate_name'=>$request['name'],
      'expcate_remarks'=>$request['remarks'],
      'expcate_slug'=>$slug,
      'expcate_creator'=>$creator,
      'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    ]);
    if($insert){
      return redirect('dashboard/expense/category');}
      else{
      return redirect('dashboard/expense/category/add');
    }
  }


  public function update(request $request){
    $id=$request['id'];
    $this->validate($request,[
    'name'=>'required|max:100|unique:expensee_categoryys,expcate_name',



    ],[
    'name.required'=>'please enter expense category!',
    'name.unique'=>'Expense category name has already taken',

    ]);

    $slug=Str::slug($request['name'],'-');
    $editor=Auth::user()->id;

    $update=ExpenseeCategoryy::where('expcate_status',1)->where('expcate_id',$id)->update([
      'expcate_name'=>$request['name'],
      'expcate_remarks'=>$request['remarks'],
      'expcate_editor'=>$editor,
      'expcate_slug'=>$slug,
      'updated_at'=>Carbon::now()->toDateTimeString(),
    ]);

    if($update){
      Session::flash('success','value');
      return redirect('dashboard/expense/category/view/'.$slug);
    }else{
      Session::flash('error','value');
      return redirect('dashboard/expense/category/edit/'.$slug);
    }

  }

  public function edit($slug){
    $data=ExpenseeCategoryy::where('expcate_status',1)->where('expcate_slug',$slug)->firstOrFail();
    return view('admin/expense/category/edit',compact('data'));

  }


      public function view($slug){
        $data=ExpenseeCategoryy::where('expcate_status',1)->where('expcate_slug',$slug)->firstOrFail();
        return view('admin/expense/category/view',compact('data'));
        //return view('dashboard.income.category.view',compact('data'));
      }

  public function softdelete(){

  }
  public function restore(){

  }
  public function delete(){

  }
}
