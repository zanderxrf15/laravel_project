<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('title', null, []); ?>  <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <h3 class="text-xl">About Me!</h3>
<p>Name: <?php echo e($name); ?></p>
<p>Hey y'all! Get to know about me!</p>
	<p>Hello! I'm Franshel Tranetha, a 3rd year student at the department of Informatics at Institut Teknologi Sepuluh Nopember Surabaya. I made this website so that you can get to know about me and Jakarta from my POV!</P>
	<p>Enjoy getting to know Jakarta from my POV and overall have a glimpse into my exciting life there. :D</p>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMBn3edFOftdSOwlxiYbwK5hL5gOLO9d570g&s" alt="me, myself, and I">
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\ITS 2022\campus life\junior\TUGAS\semester 5\FRAMEWORK BASED PROGRAMMING\demo\resources\views/about.blade.php ENDPATH**/ ?>