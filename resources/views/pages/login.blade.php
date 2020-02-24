@extends('layouts.app')
@section('content')
<br />
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Login</h3>
      </div>
      <form method="POST" role="form" action="">
        <div class="card-body">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="userPassword">Password</label>
            <input type="password" class="form-control" id="userPassword" placeholder="Enter password">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection