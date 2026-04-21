<!DOCTYPE html>

<html class="light" lang="en">

<?= $this->include('components/metadata') ?>

<body class="bg-surface text-on-surface font-body antialiased min-h-screen flex flex-col">
	<!-- TopAppBar (Shared Component Mapping) -->
	<!-- JSON Specs: style_component_shape: docked full-width top-0 sticky z-50 -->
	<!-- JSON Specs: style_bg_color: bg-white/80 backdrop-blur-md -> mapped to surface-container-lowest/80 -->
	<!-- JSON Specs: Active Tab -> Catalog -->
	<?= $this->include('components/public/header') ?>
	<!-- Main Content Canvas -->
	<main class="flex-grow w-full max-w-[1600px] mx-auto px-8 py-12 flex flex-col gap-16">
		<?= $this->renderSection('content') ?>
	</main>
	<!-- Footer (Shared Component Mapping) -->
	<!-- JSON Specs: style_bg_color: bg-slate-50 -> mapped to surface-container-low for tonal shift -->
	<?= $this->include('components/public/footer') ?>
</body>

</html>
