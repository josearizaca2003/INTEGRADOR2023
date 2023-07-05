<?php if (isset($component)) { $__componentOriginal4b816286c686080c15f7921b3fe65677 = $component; } ?>
<?php $component = App\View\Components\IndexLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('index-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\IndexLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('post-livewire')->html();
} elseif ($_instance->childHasBeenRendered('BUEl1sW')) {
    $componentId = $_instance->getRenderedChildComponentId('BUEl1sW');
    $componentTag = $_instance->getRenderedChildComponentTagName('BUEl1sW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BUEl1sW');
} else {
    $response = \Livewire\Livewire::mount('post-livewire');
    $html = $response->html();
    $_instance->logRenderedChild('BUEl1sW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4b816286c686080c15f7921b3fe65677)): ?>
<?php $component = $__componentOriginal4b816286c686080c15f7921b3fe65677; ?>
<?php unset($__componentOriginal4b816286c686080c15f7921b3fe65677); ?>
<?php endif; ?>
<?php /**PATH D:\LARAVEL\integrator\resources\views/welcome.blade.php ENDPATH**/ ?>