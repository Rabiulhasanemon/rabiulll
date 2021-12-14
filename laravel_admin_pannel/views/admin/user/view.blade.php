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
                  <a class="btn btn-md btn-dark" href="{{url('dashboard/user')}}"><i class="mdi mdi-reorder-horizontal me-1"></i> <span>All User</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
              <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                  <table class="table table-bordered table-striped table-hover custom_view_table">
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>Saidul Islam Uzzal</td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td>01710726035</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>uzzalbd.creative@gmail.com</td>
                    </tr>
                    <tr>
                      <td>Role</td>
                      <td>:</td>
                      <td>Superadmin</td>
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
