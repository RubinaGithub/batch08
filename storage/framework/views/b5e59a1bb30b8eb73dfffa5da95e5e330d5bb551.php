<div id="comment_rating_<?php echo e($insertedId); ?>" class="row" style="border: 2px solid #337ab7;border-radius: 5px;margin: 10px 0px;padding: 10px;">
  <div class="col-md-2 col-sm-2 hidden-xs">
    <figure class="thumbnail">
      <img class="img-responsive" src="<?php echo e(asset('images/sample_user.png')); ?>">
      <figcaption class="text-center"></figcaption>
    </figure>
  </div>
  <div class="col-md-10 col-sm-10">
    <div class="panel panel-default arrow left">
      <div class="panel-body">
        <header class="text-left">
          <div class="comment-user"><i class="fa fa-user"></i> <?php echo e($product_ratings['author']); ?></div>
          <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> 
          <?php echo e(date('d-M-Y')); ?> </time>
        </header>
        <div class="comment-post">
          <p>
            <?php echo e($product_ratings['comment']); ?>

          </p>
        </div>
        <input type="hidden" id="reviewId" name="reviewId" value="<?php echo e($insertedId); ?>">
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\laravel_new\resources\views/show_review_ajax.blade.php ENDPATH**/ ?>