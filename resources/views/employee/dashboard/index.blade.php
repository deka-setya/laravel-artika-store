@extends('layouts.core')

@section('content')
  <div class="row grid-margin">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Order status</h4>
          <div class="d-flex table-responsive">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-primary"><i class="mdi mdi-plus-circle-outline"></i> Add</button>
            </div>
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
              <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
            </div>
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
            </div>
            <div class="btn-group ml-auto mr-2 border-0 d-none d-md-block">
              <input type="text" class="form-control" placeholder="Search Here">
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
              <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
            </div>
          </div>
          <div class="table-responsive mt-2">
            <table class="table mt-3 border-top">
              <thead>
                <tr>
                  <th>Invoice</th>
                  <th>Customer</th>
                  <th>Ship</th>
                  <th>Best Price</th>
                  <th>Purchsed Price</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>50014</td>
                  <td>David Grey</td>
                  <td>Italy</td>
                  <td>$6300</td>
                  <td>$2100</td>
                  <td><div class="badge badge-success badge-fw">Progress</div></td>
                </tr>
                <tr>
                  <td>50015</td>
                  <td>Stella Johnson</td>
                  <td>Brazil</td>
                  <td>$4500</td>
                  <td>$4300</td>
                  <td><div class="badge badge-warning badge-fw">Open</div></td>
                </tr>
                <tr>
                  <td>50016</td>
                  <td>Marina Michel</td>
                  <td>Japan</td>
                  <td>$4300</td>
                  <td>$6440</td>
                  <td><div class="badge badge-danger badge-fw">On hold</div></td>
                </tr>
                <tr>
                  <td>50017</td>
                  <td>John Doe</td>
                  <td>India</td>
                  <td>$6400</td>
                  <td>$2200</td>
                  <td><div class="badge badge-success badge-fw">Progress</div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
            <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
            <nav>
              <ul class="pagination pagination-primary mb-0">
                <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
                <li class="page-item"><a class="page-link">3</a></li>
                <li class="page-item"><a class="page-link">4</a></li>
                <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
