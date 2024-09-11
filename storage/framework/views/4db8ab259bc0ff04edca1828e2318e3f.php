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
    <h3 class="text-xl">Welcome to Jakarta!</h3>
    <p>Explore Jakarta from my POV!</p>
    <img src="https://media.istockphoto.com/id/1298792710/video/stunning-city-view-of-futuristic-skyline-at-night-skyscrapers-in-asian-indonesian-capital.jpg?s=640x640&k=20&c=4Cx3DNVTniV4fJT3_mdxM6LQv41x6_K6H0uROc-L22I=" alt="jkt cityscape">
	 <p>Jakarta is the capital city of Indonesia, located on the northwest coast of the island of Java. It is the center of economics, culture and politics of Indonesia, with a population of 11 million as of 2023. Jakarta is known for its bustling city life and rich cultural diversity, offering a wide range of entertainment, culinary and lifestyle options.</p>
	 <p>Jakarta boasts the best public transportation system in Indonesia as well, ranging from LRT, MRT, KRL, and TransJakarta. Public transportation in Jakarta is fully integrated and you can switch from one form of transport to another with a special integration fare that is way cheaper from the regular fare.</p>
	
     <h2>MRT Jakarta</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/MRTset3.jpg/1200px-MRTset3.jpg" alt="MRT Jakarta">

    <h2>LRT Jakarta</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/LRT_Jakarta.jpg/1200px-LRT_Jakarta.jpg" alt="LRT Jakarta">

    <h2>KRL</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Kereta_Rel_Listrik_%28KRL%29_di_kota_Jakarta..jpg/1200px-Kereta_Rel_Listrik_%28KRL%29_di_kota_Jakarta..jpg" alt="KRL">
	
	 <h2>TransJakarta</h2>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Transjakarta_Scania_K320iA.jpg/1200px-Transjakarta_Scania_K320iA.jpg" alt="TJ">
	
	<p>Jakarta also owns some of the best parks in Indonesia, such as Taman Literasi Blok M, Taman Suropati, and Taman Langsat. These parks provide a space for Jakartans to relax from the fast paced living of Jakarta.</p>
	
    <h2>Taman Literasi Blok M</h2>
	<img src="https://assets.kompasiana.com/items/album/2022/10/05/taman-literasi-633d3b384addee6cde2f0a22.jpg?t=o&v=770" alt="Taman Literasi Blok M">
	
    <h2>Taman Suropati</h2>
	<img src="https://o-cdn-cas.sirclocdn.com/parenting/images/taman-suropati.width-800.format-webp.webp" alt="Taman Suropati">
	
    <h2>Taman Langsat</h2>
	<img src="https://awsimages.detik.net.id/content/2014/08/18/10/langsat3.jpg" alt="Taman Langsat">
	
	<p>Jakarta is also home to two of the best public libraries in Indonesia, check out Perpusnas RI and Perpustakaan Jakarta when you come to Jakarta! Not only are these libraries aesthetic, but they also have an impressive collection of books!</p>
	
    <h2>Perpusnas RI</h2>
	<img src="https://1.bp.blogspot.com/-WeknL51RSJs/XhFx1ItRbUI/AAAAAAAADAs/ZeUfOJJNV7IsyLdcjBRIeZDrX3QVtdqBgCLcBGAsYHQ/s1600/Travelblogid-Perpustakaan-Nasional-Republik-Indonesia.jpeg" alt="Perpusnas RI">
	
    <h2>Perpustakaan Jakarta</h2>
	<img src="https://manual.co.id/wp-content/uploads/2022/07/manual_perpustakaan_jakarta_web-9-980x719.jpg" alt="Perpus JKT">

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\ITS 2022\campus life\junior\TUGAS\semester 5\FRAMEWORK BASED PROGRAMMING\demo\resources\views/blog.blade.php ENDPATH**/ ?>