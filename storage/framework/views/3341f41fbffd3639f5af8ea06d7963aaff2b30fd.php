<?php $__env->startSection('content'); ?>

    <main class="my-8">
      <div class="container px-6 mx-auto">
          <div class="flex justify-center my-6">
              <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">

                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-list', [])->html();
} elseif ($_instance->childHasBeenRendered('uDpUrLZ')) {
    $componentId = $_instance->getRenderedChildComponentId('uDpUrLZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('uDpUrLZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uDpUrLZ');
} else {
    $response = \Livewire\Livewire::mount('cart-list', []);
    $html = $response->html();
    $_instance->logRenderedChild('uDpUrLZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
              </div>
            </div>
      </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel-admin\resources\views/cart.blade.php ENDPATH**/ ?>