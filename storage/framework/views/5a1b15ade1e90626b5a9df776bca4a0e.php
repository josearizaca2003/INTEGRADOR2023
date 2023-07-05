<?php $carbon = app('Carbon\Carbon'); ?>
<div class="mt-16">
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
    <div class="mt-4">
        
        <?php echo e($jobs->links()); ?>

    </div>
</div>
<?php /**PATH D:\integrator\resources\views/livewire/post-livewire.blade.php ENDPATH**/ ?>