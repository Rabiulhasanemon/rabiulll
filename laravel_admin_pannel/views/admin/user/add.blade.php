@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <form class="form-horizontal" method="get" action="" enctype="multipart/form-data">
      <div class="card">
          <div class="card-header card_header">
              <div class="row">
                <div class="col-md-8 card_header_title">
                  <i class="mdi mdi-contactless-payment-circle"></i> User Registration
                </div>
                <div class="col-md-4 card_button_part">
                  <a class="btn btn-md btn-dark" href="{{url('dashboard/user')}}"><i class="mdi mdi-reorder-horizontal me-1"></i> <span>All User</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                <div class="col-7">
                    <input type="text" class="form-control form_control" id="" name="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Phone:</label>
                <div class="col-7">
                    <input type="text" class="form-control form_control" id="" name="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                <div class="col-7">
                    <input type="text" class="form-control form_control" id="" name="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Password<span class="req_star">*</span>:</label>
                <div class="col-7">
                    <input type="password" class="form-control form_control" id="" name="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Confirm-Password<span class="req_star">*</span>:</label>
                <div class="col-7">
                    <input type="password" class="form-control form_control" id="" name="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">User Role<span class="req_star">*</span>:</label>
                <div class="col-4">
                    <select class="form-control form_control" id="" name="">
                      <option value="">Select Role</option>
                      <option value="">Admin</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-3 col-form-label col_form_label">Photo:</label>
                <div class="col-7">
                    <input type="file" id="" name="" value="">
                </div>
            </div>
          </div>
          <div class="card-footer card_footer text-center">
              <button type="submit" class="btn btn-md btn-dark">REGISTRATION</button>
          </div>
      </div>
    </form>
  </div>
</div>
@endsection
