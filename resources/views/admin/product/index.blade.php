@extends('admin/layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product List</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

</div>
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>SL</th>
                      <th>SKU</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i = 1; ?>
                    @foreach($data['products'] as $product)
                    <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $product->product_sku }}</td>
                      <td>{{ $product->product_name }}</td>
                      <td>
                            <img class="" src="{{ asset('images/product_image/'.$product->product_image) }}"  width='50' height='50' alt="SHOW IMAGE HERE">
                      </td>
                      <td>{{ $product->product_price }}</td>
                      <td></td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Page level plugins -->


 @endsection

