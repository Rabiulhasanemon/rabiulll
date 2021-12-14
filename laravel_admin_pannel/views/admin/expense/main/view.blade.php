@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header card_header">
              <div class="row">
                <div class="col-md-8 card_header_title">
                  <i class="mdi mdi-contactless-payment-circle"></i> View User Information
                </div>
                <div class="col-md-4 card_button_part">
                  <a class="btn btn-md btn-dark" href="{{url('dashboard/income')}}"><i class="mdi mdi-reorder-horizontal me-1"></i> <span>All User</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                  <table class="table table-bordered table-striped table-hover custom_view_table">
                    <tr>
                      <td>Category Name</td>
                      <td>:</td>
                      <td>{{$data->incate_name}}</td>
                    </tr>
                    <tr>
                      <td>Remarks</td>
                      <td>:</td>
                      <td>{{$data->incate_remarks}}</td>
                    </tr>
                    <tr>
                      <td>Creator</td>
                      <td>:</td>
                      <td>{{$data->creatorInfo->name}}</td>
                    </tr>
                    <tr>
                      <td>Editor</td>
                      <td>:</td>
                      <td>...</td>
                    </tr>
                    <tr>
                      <td>Create Time</td>
                      <td>:</td>
                      <td>{{$data->created_at->format('d-m-Y | h:i:s a')}}</td>
                    </tr>
                    <tr>
                      <td>Update Time</td>
                      <td>:</td>
                      <td>...</td>
                    </tr>
                  </table>
                </div>
                <div class="col-2"></div>
              </div>
          </div>
          <div class="card-footer card_footer">
            <div class="btn-group mb-2">
                <a href="#" class="btn btn-secondary">Print</a>
                <a href="#" class="btn btn-dark">PDF</a>
                <a href="#" class="btn btn-secondary">Excel</a>
            </div>
          </div>
      </div>
  </div>
</div>
@endsection
