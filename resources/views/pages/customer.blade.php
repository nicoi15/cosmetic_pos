@extends('layouts.app')
@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Customer</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Customer</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="row mx-auto p-3">
  
  <div class="col-md-4 mx-auto">
    <div class="card card-blue">
      <div class="card-header">
        <h3 class="card-title">Add Customer</h3>
      </div>
      <form method="POST" role="form" action="">
        <div class="card-body">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="middleName">Middle Name</label>
              <input type="text" class="form-control" id="middleName" placeholder="Enter Middle Name">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
            </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea type="text" class="form-control" id="address" placeholder="Enter Address"></textarea>
          </div>
          <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="number" class="form-control" id="contactNumber" placeholder="Enter Contact Number">
          </div>
          <div class="form-group">
            <label for="contactNumber">Gender</label>
            <select class="custom-select">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-8 mx-auto">
    <div class="card card-blue">
      <div class="card-header">
        <h3 class="card-title">List of Customers</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search Customer">
            <div class="input-group-append">
              <div class="btn btn-default">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Complete Name</th>
              <th>Contact Number</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1.</td>
              <td>Update software</td>
              <td>0929-353-8023</td>
              <td class="project-actions text-right">
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash">
                  </i>
                  Delete
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