<?php $__env->startSection('content'); ?>


  
  <div class="parallax">
    <div class="material">

      
        <div class="search_keywords">

          <?php echo $__env->make('layouts.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

        <div class="links">


          <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



              <!-- <a href="/materials/<?php echo e($material->id); ?>"> -->

                <a href="/<?php echo e($material->material_name); ?>/faculties">

                <button type="button" class="button_material"><?php echo e($material->material_name); ?></button>

              </a>



          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>