<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Manage Categories</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manage Categories</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>SL</th>
            <th>Category Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php $__currentLoopData = $data['all_records']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($i); ?></td>
              <td> 
                 <?php if($row->level == 0): ?> <b>  <?php endif; ?> 
                 <?php if($row->level == 1): ?> &nbsp; - <?php endif; ?>   
                 <?php if($row->level == 2): ?> &nbsp; &nbsp; - - <?php endif; ?>     
                 <?php if($row->level == 3): ?> &nbsp; &nbsp; &nbsp; - - - <?php endif; ?>       
                 <?php if($row->level == 4): ?> &nbsp; &nbsp; &nbsp; &nbsp; - - - - <?php endif; ?>       
                 <?php if($row->level == 5): ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  - - - - - <?php endif; ?>       
                 <?php if($row->level > 5): ?>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - - - <?php endif; ?>
                 
                 <?php echo e($row->category_name); ?>


                 <?php if($row->level == 0): ?> </b>  <?php endif; ?> 
              </td> 
                
              <td>
                <button onclick="window.location='<?php echo e(url('/')); ?>/admin/category/edit/<?php echo e($row->category_row_id); ?>'" class="btn btn-warning">Edit</button>
                
                <button deleteID="<?php echo e($row->category_row_id); ?>"  class="btn btn-danger deleteLink">Delete</button>

              </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_level_js'); ?>
<script type="text/javascript"> 
 $('.deleteLink').click( function() {
  if( confirm('Are you sure to Delete ? ') )
  {
   var deleteID = $(this).attr('deleteID');   
    window.location.href = "<?php echo e(url('/')); ?>/admin/category/deleteRecord/" + deleteID;    
  }
        
 });
 
 </script> 
<?php $__env->stopSection(); ?>

     
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\batch08\resources\views/admin/category/category_list.blade.php ENDPATH**/ ?>