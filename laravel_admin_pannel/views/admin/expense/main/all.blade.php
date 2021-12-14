@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header card_header">
              <div class="row">
                <div class="col-md-8 card_header_title">
                  <i class="mdi mdi-contactless-payment-circle"></i> All Income  Information
                </div>
                <div class="col-md-4 card_button_part">
                  <a class="btn btn-md btn-dark" href="{{url('dashboard/income/add')}}"><i class="mdi mdi-plus-circle me-1"></i> <span>Add Category</span> </a>
                </div>
              </div>
          </div>
          <div class="card-body card_body">
              <table id="allTableInfo" class="table table-bordered table-striped table-hover dt-responsive nowrap w-100">
                  <thead class="table-dark">
                      <tr>
                          <th>Catgory Name</th>
                          <th>Date</th>
                          <th>Amount</th>
                          <th>Manage</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                      <tr>
                          <td>{{$data->income_title}}</td>
                          <td>{{$data->income_date}}</td>
                          <td>{{$data->income_amount}}</td>
                          <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark">Manage</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('dashboard/view/'.$data->income_slug)}}">View</a>
                                    <a class="dropdown-item" href="{{url('dashboard/edit/'.$data->income_slug)}}">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
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
