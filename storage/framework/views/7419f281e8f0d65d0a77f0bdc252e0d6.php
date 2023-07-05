<?php $carbon = app('Carbon\Carbon'); ?>
<?php if (isset($component)) { $__componentOriginal4b816286c686080c15f7921b3fe65677 = $component; } ?>
<?php $component = App\View\Components\IndexLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('index-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\IndexLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="flex gap-4 justify-center mb-8">
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border-b-4 hover:border-b-yellow-400 font-bold">
                <a href="<?php echo e(route('posts.search',$company)); ?>"><?php echo e($company->Sector); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(route('posts.show',$job)); ?>" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div class="absolute left-0 top-0 bg-indigo-600 text-white rounded-tl-lg py-1 px-2 text-sm">
            <?php echo e($job->company->Sector); ?>

        </div>
        <div class="flex">
            <div class=" bg-slate-50 flex items-center justify-center">
                <img src="<?php echo e(Storage::url($job->image->url)); ?>">
            </div>

            <div class="w-80 ml-4">
                <h2 class="mt-6 text-xl font-semibold text-gray-900"><?php echo e($job->Titulo); ?></h2>

            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                <?php echo e($job->Descripcion); ?>

            </p>
            </div>
        </div>
        <div class="text-right">
            <p class="text-xs text-gray-400">Publicado: <?php echo e($carbon::parse($job->updated_at)->diffForHumans()); ?></p>
        </div>

        
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b816286c686080c15f7921b3fe65677)): ?>
<?php $component = $__componentOriginal4b816286c686080c15f7921b3fe65677; ?>
<?php unset($__componentOriginal4b816286c686080c15f7921b3fe65677); ?>
<?php endif; ?>
<?php /**PATH D:\LARAVEL\integrator\resources\views/posts/search.blade.php ENDPATH**/ ?>