<?php $__env->startPush('title'); ?>
    Log In To DG-Estate
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Welcome back to DG-Estate</h1>
            <p class="col-lg-10 fs-4">
                This is just bunch of random text you don't need to read it. Stop it already I told you don't read it.
                Fine do whaterver you want read this too. It took me F***ing ** Months to make this Project.
            </p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="<?php echo e(route('UserLogin')); ?>">

                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\LogInput::class, ['type' => 'email','name' => 'email','label' => 'Email address','placeholder' => 'name@example.com']); ?>
<?php $component->withName('log-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e)): ?>
<?php $component = $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e; ?>
<?php unset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\LogInput::class, ['type' => 'password','name' => 'password','label' => 'Password','placeholder' => 'Password']); ?>
<?php $component->withName('log-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e)): ?>
<?php $component = $__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e; ?>
<?php unset($__componentOriginalbdfbd22e2e58b50adcb6c096444b9fae89a23f1e); ?>
<?php endif; ?>

                

                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
                <hr class="my-4">
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                <small class="text-muted">Don't have an account? <a href="<?php echo e(route('UserSignupForm')); ?>">Sign
                        Up</a></small>
            </form>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.close', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\IMARAT\Desktop\Real_Estate_Site-main\Real_Estate_Site-main\resources\views/User/UserLogIn.blade.php ENDPATH**/ ?>