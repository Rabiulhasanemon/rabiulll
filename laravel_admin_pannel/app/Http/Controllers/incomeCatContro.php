<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\incomeCat;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;
use Auth;

class incomeCatContro extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(){
$all=incomeCat::where('incate_status',1)->orderby('incate_id','DESC')->get();
return view('admin.income.category.all',compact('all'));
    }
    public function add(){
      return view('admin.income.category.add');
    }
    public function edit($slug){
      $data=incomeCat::where('incate_status',1)->where('incate_slug',$slug)->firstOrFail();
      return view('admin/income/category/edit',compact('data'));

    }






    public function insert(Request $request){

$this->validate($request,[
'name'=>'required|max:100|unique:income_cats,incate_name',



],[
'name.required'=>'please enter income category!!',
'name.unique'=>'Income category name has already taken',

]);



      $slug=Str::slug($request['name'],'-');
      $creator=Auth::user()->id;
$insert=incomeCat::insert([
  'incate_name'=>$request['name'],
  'incate_remarks'=>$request['remarks'],
  'incate_slug'=>$slug,
  'incate_creator'=>$creator,
  'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
]);
if($insert){
  Session::flash('success','Successfully add income category information');
  return redirect('dashboard/income/category/add');}
  else{
    Session::flash('error','Opps! please try again');
  return redirect('dashboard/income/category/add');
}
    }



    public function update(Request $request){
      $id=$request['id'];
      $this->validate($request,[
      'name'=>'required|max:100|unique:income_cats,incate_name',



      ],[
      'name.required'=>'please enter income category!',
      'name.unique'=>'Income category name has already taken',

      ]);

      $slug=Str::slug($request['name'],'-');
      $editor=Auth::user()->id;

      $update=incomeCat::where('incate_status',1)->where('incate_id',$id)->update([
        'incate_name'=>$request['name'],
        'incate_remarks'=>$request['remarks'],
        'incate_editor'=>$editor,
        'incate_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($update){
        Session::flash('success','value');
        return redirect('dashboard/income/category/view/'.$slug);
      }else{
        Session::flash('error','value');
        return redirect('dashboard/income/category/edit/'.$slug);
      }
    }


    public function view($slug){
      $data=incomeCat::where('incate_status',1)->where('incate_slug',$slug)->firstOrFail();
      return view('admin/income/category/view',compact('data'));
      //return view('dashboard.income.category.view',compact('data'));
    }



    public function softdelete(){

    }
    public function restore(){

    }
    public function delete(){

    }
}
