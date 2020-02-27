@extends('layouts.app')
@section('content')
<div class="row mx-auto p-3">
  <div class="col-md-4 mx-auto">
    <div class="card card-green">
      <div class="card-header">
        <h3 class="card-title">Add Product</h3>
      </div>
      <form method="POST" role="form" action="">
        <div class="card-body">
            <div class="form-group">
              <label for="productId">Product ID</label>
              <input type="text" class="form-control" id="productId" placeholder="Product ID" readonly>
            </div>
            <div class="form-group">
              <label for="firstName">Name</label>
              <input type="text" class="form-control" id="firstName" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="productBrand">Brand</label>
              <input type="text" class="form-control" id="productBrand" placeholder="Product Brand">
            </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="Product Description"></textarea>
          </div>
          <div class="form-group">
            <label for="stockQuantity">Quantity</label>
            <input type="number" class="form-control" id="stockQuantity" placeholder="Stock Quantity">
          </div>
          <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Product Price">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-8 mx-auto">
    <div class="card card-green">
      <div class="card-header">
        <h3 class="card-title">List of Products</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search Product">
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
              <th>ID</th>
              <th>Name</th>
              <th>Brand</th>
              <th>Quantity</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>OKT9ER</td>
              <td>Enervon Active</td>
              <td>Enervon</td>
              <td>333</td>
              <td>500.00</td>
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
            <tr>
              <td>2</td>
              <td>Enervon Active</td>
              <td>Enervon</td>
              <td>333</td>
              <td>500.00</td>
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