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
    <h3 class="text-xl">Stay Connected!</h3>
    <a href="www.linkedin.com/in/tranethafranshel" target="_blank">LinkedIn</a>
    <p></p>
    <a href="https://github.com/zanderxrf15" target="_blank">Github</a>
    <p></p>
    <img src="https://media.giphy.com/media/dZRuqt8c3izCmbUVEy/giphy.gif?cid=790b76112v0291oztikslpdsegsu0yjs83d4ehlbg22xu3f7&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="connect">
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\ITS 2022\campus life\junior\TUGAS\semester 5\FRAMEWORK BASED PROGRAMMING\demo\resources\views/contact.blade.php ENDPATH**/ ?>