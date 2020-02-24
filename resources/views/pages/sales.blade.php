@extends('layouts.app')
@section('content')
<div class="row mx-auto p-3">
  <div class="col-md-8 mx-auto">
    <div class="card card-blue">
      <div class="card-header">
        <h3 class="card-title">Transactions</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Customer Name</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Jan-17-2020</td>
              <td>Nico O. Abrasaldo</td>
              <td>1500.00</td>
              <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-eye">
                  </i>
                  View
              </a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection