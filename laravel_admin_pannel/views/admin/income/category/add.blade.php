@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <form class="form-horizontal" method="get" action="{{url('dashboard/income/category/submit')}}" enctype="multipart/form-data">
      @csrf
      <div class="card">
          <div class="card-header card_header">
              <div class="row">
                <div class="col-md-8 card_header_title">
                  <i class="mdi mdi-contactless-payment-circle"></i>
                </div>
                <div class="col-md-4 card_button_part">
                  <a class="btn btn-md btn-dark" href="{{url('dashboard/income/category')}}"><i class="mdi mdi-reorder-horizontal me-1"></i> <span>Add Income Category</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
            <div class="row mb-3 {{$errors->has('name')? ' has-error': ''}}">
                <label class="col-3 col-form-label col_form_label">Category Name<span class="req_star">*</span>:</label>
                <div class="col-7">
                    <input type="text" class="form-control form_control" id="" name="name" value="{{old('name')}}">
                    @if($errors->has('name'))
                      <span class="invalid-feedback" role="alart">
                        <strong>{{$errors->first('name')}}</strong>
                      </span>
                      @endif
                </div>
            </div>
              </div>
              <div class="card-body card_body">
                <div class="row mb-3 {{$errors->has('remarks')? ' has-error': ''}}">
                    <label class="col-3 col-form-label col_form_label">Remarks<span class="req_star">*</span>:</label>
                    <div class="col-7">
                        <input type="text" class="form-control form_control" id="" name="remarks" value="{{old('remarks')}}">
                    </div>
                </div>
                  </div>

          </div>
          <div class="card-footer card_footer text-center">
              <button type="submit" class="btn btn-md btn-dark">SUBMIT</button>
          </div>
      </div>
    </form>
  </div>

@endsection
