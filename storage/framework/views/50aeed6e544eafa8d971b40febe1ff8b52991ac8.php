<?php $__env->startSection('content'); ?>
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
                    <?php $__currentLoopData = $data['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($i); ?></td>
                      <td><?php echo e($product->product_sku); ?></td>
                      <td><?php echo e($product->product_name); ?></td>
                      <td>
                            <img class="" src="<?php echo e(asset('images/product_image/'.$product->product_image)); ?>"  width='50' height='50' alt="SHOW IMAGE HERE">
                      </td>
                      <td><?php echo e($product->product_price); ?></td>
                      <td></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Page level plugins -->


 <?php $__env->stopSection(); ?>


<?php echo $__env->make('admin/layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\batch08\resources\views/admin\product/index.blade.php ENDPATH**/ ?>