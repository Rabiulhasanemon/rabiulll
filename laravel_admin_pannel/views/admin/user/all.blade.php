@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header card_header card_header">
              <div class="row">
                <div class="col-md-8">
                  All User Information
                </div>
                <div class="col-md-4 card_button_part">
                  <a class="btn btn-sm btn-dark"><i class="mdi mdi-rocket me-1"></i> <span>Add User</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                      </tr>
                      <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                      </tr>
                      <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <div class="card-footer card_footer">
              .
          </div>
      </div>
  </div>
</div>
@endsection
