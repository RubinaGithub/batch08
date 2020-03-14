<?php $__env->startSection('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Manage Categories</h1>
  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
  </div>
  <div class="card-body">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert"><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(Session::has('message')): ?>
      <p class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>
    <?php endif; ?>
    <form action="<?php echo e(url('admin/category/store')); ?>" method="POST" style="width: 100%">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label>Category Name</label>
          <input type="text"  class ="form-control" id="category_name" name="category_name" placeholder = "Enter category Name">
      </div>
      <div class="form-group">
        <label>Category</label>
          <select name="parent_id" class = "form-control">
            <option value="">Select</option>
            <option value="0"> Main Category </option>
            <?php $__currentLoopData = $data['all_records']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($row->category_row_id); ?>">
            <?php if($row->level == 0): ?> <b>  <?php endif; ?>  

            <?php if($row->level == 0): ?> <b>  <?php endif; ?> 
            <?php if($row->level == 1): ?> &nbsp; - <?php endif; ?>   
            <?php if($row->level == 2): ?> &nbsp; &nbsp; - - <?php endif; ?>     
            <?php if($row->level == 3): ?> &nbsp; &nbsp; &nbsp; - - - <?php endif; ?>       
            <?php if($row->level == 4): ?> &nbsp; &nbsp; &nbsp; &nbsp; - - - - <?php endif; ?>       
            <?php if($row->level == 5): ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  - - - - - <?php endif; ?>       
            <?php if($row->level > 5): ?>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - - - <?php endif; ?>

            <?php echo e($row->category_name); ?> 
            <?php if($row->level == 0): ?> </b>  <?php endif; ?>  
            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

     
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\batch08\resources\views/admin/category/create.blade.php ENDPATH**/ ?>