<!-- Header Bootstrap -->
<header class="py-1 bg-dark sticky-top text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <?php if(!empty($logo_image->value)): ?>
                    <a class="navbar-brand" href="<?php echo e(route('userHome')); ?>">
                        <img style="height: 40px" src="<?php echo e(asset('storage/siteSettings/' . $logo_image->value)); ?>"
                            alt="<?php echo e($brand_title->value ?? 'DG-Estate'); ?>">
                    </a>
                <?php endif; ?>
                <a class="navbar-brand" href="<?php echo e(route('userHome')); ?>"><?php echo e($brand_title->value ?? 'DG-Estate'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php if($menu == 'home'): ?> active <?php endif; ?>" aria-current="page"
                                href="<?php echo e(route('userHome')); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if($menu == 'purpose'): ?> active <?php endif; ?> dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Purpose
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(route('show_purpose', 'sale')); ?>">Sale</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('show_purpose', 'rent')); ?>">Rent</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('show_purpose', 'pg')); ?>">PG</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if($menu == 'category'): ?> active <?php endif; ?> dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo e(route('show_category', $item->slug_name)); ?>"><?php echo e($item->name); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if($menu == 'city'): ?> active <?php endif; ?> dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                City
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo e(route('show_city', $item->slug_city)); ?>"><?php echo e($item->city); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        
                        
                    </ul>
                    <div class="d-flex">
                        <form id="searchFrm" action="<?php echo e(route('propSearch')); ?>" method="POST" class="me-2">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                                <select class="form-select w-25" name="purpose" id="">
                                    <option
                                        <?php if(!empty($purpose)): ?> <?php echo e($purpose == 'sale' ? 'selected' : ''); ?> <?php endif; ?>
                                        value="sale">Sale</option>
                                    <option
                                        <?php if(!empty($purpose)): ?> <?php echo e($purpose == 'rent' ? 'selected' : ''); ?> <?php endif; ?>
                                        value="rent">Rent</option>
                                    <option
                                        <?php if(!empty($purpose)): ?> <?php echo e($purpose == 'pg' ? 'selected' : ''); ?> <?php endif; ?>
                                        value="pg">PG</option>
                                    <option
                                        <?php if(!empty($purpose)): ?> <?php echo e($purpose == '*' ? 'selected' : ''); ?> <?php endif; ?>
                                        value="*">All</option>
                                </select>
                                <input class="form-control w-50" name="search" type="search"
                                    placeholder="Search by Name" value="<?php echo e($SecStr ?? ''); ?>" aria-label="Search">
                                <button class="btn btn-outline-success w-25" type="submit">
                                    <i class="fas fa-search"></i>
                                    Search</button>
                            </div>
                        </form>

                        <?php if($status): ?>
                            
                            <div class="dropdown ms-1 text-end">
                                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo e(!empty($user['data']['image'])? asset('/storage/userdata/' . $user['data']['image']): asset('stockUser.png')); ?>"
                                        alt="<?php echo e($user['name']); ?>" width="38" height="38" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li>
                                        <div class="dropdown-item text-dark text-bold"><?php echo e($user['name']); ?></div>
                                    </li>
                                    <?php if($user['type'] == 'A' || $user['type'] == 'R'): ?>
                                        <li><a class="dropdown-item" target="_blank"
                                                href="<?php echo e(route('AdminHome')); ?>">Admin</a></li>
                                    <?php endif; ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('UserProfile')); ?>">Profile</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('show_saved_pro')); ?>">Saved</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('UserLogout')); ?>">Log out</a></li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <div class="me-2">
                                <a class="btn btn-outline-primary me-1" href="<?php echo e(route('UserLoginForm')); ?>">Login</a>
                                <a class="btn btn-outline-warning" href="<?php echo e(route('UserSignupForm')); ?>">Sign-up</a>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php /**PATH C:\Users\IMARAT\Desktop\Real_Estate_Site-main\Real_Estate_Site-main\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>