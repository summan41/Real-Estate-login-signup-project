<?php $__currentLoopData = config('dz.public.global.js'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script crossorigin="anonymous" src="<?php echo e($item); ?>"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH C:\Users\IMARAT\Desktop\Real_Estate_Site-main\Real_Estate_Site-main\resources\views/layouts/close.blade.php ENDPATH**/ ?>