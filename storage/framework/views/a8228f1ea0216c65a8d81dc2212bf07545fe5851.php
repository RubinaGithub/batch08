<?php $__env->startComponent('mail::message'); ?>
	Hello **<?php echo e($name); ?>**,  
	A new category has been created successfully and the name of the category is <?php echo e($data['category_name']); ?>


	<?php $__env->startComponent('mail::button', ['url' => $link]); ?>
	Go to your inbox
	<?php echo $__env->renderComponent(); ?>
	Sincerely,  
	CDIP LARAVEL BATCH 08.
<?php echo $__env->renderComponent(); ?><?php /**PATH C:\xampp\htdocs\batch08\resources\views/mails/exmpl.blade.php ENDPATH**/ ?>