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

<div>
    <div class="border-y-2 border-indigo-600 py-3">
        <h3><?php echo e($job->company->Sector); ?></h3>
    </div>
    <div>
        <h1 class="text-2xl font-bold py-6"><?php echo e($job->Titulo); ?></h1>
    </div>
    <div class="grid grid-cols-3 gap-6 w-full">
        <div class="col-span-2">
            <div>
                <img class="w-full" src="<?php echo e(Storage::url($job->image->url)); ?>">
            </div>
            <div>
                <p class="font-bold border-y-2 border-indigo-600 border-dotted py-3 my-4">Publicado el <?php echo e($job->created_at); ?></p>
                <p class="text-sm"><?php echo e($job->Descripcion); ?></p>
            </div>
        </div>
        <div>
            <h3 class="bg-indigo-600 text-white p-2">Ultimas publicaciones</h3>
            <?php $__currentLoopData = $ultimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('posts.show',$item)); ?>">
            <div class="grid grid-cols-2 my-4 border-b-2 border-indigo-600 pb-4">
                <div>
                    <img src="<?php echo e(Storage::url($item->image->url)); ?>" alt="">
                </div>
                <div class="ml-4">
                    <h4><?php echo e($item->Titulo); ?></h4>
                    <p class="text-xs text-gray-400 mr-4">Publicado: <?php echo e($carbon::parse($item->updated_at)->diffForHumans()); ?></p>
                </div>

            </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b816286c686080c15f7921b3fe65677)): ?>
<?php $component = $__componentOriginal4b816286c686080c15f7921b3fe65677; ?>
<?php unset($__componentOriginal4b816286c686080c15f7921b3fe65677); ?>
<?php endif; ?>
<?php /**PATH D:\LARAVEL\integrator\resources\views/posts/show.blade.php ENDPATH**/ ?>