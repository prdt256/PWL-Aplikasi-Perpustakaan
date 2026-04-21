<?= $this->extend('components/public/layout') ?>

<?= $this->section('content') ?>
<!-- Hero Search Section -->
<section class="w-full flex flex-col items-center text-center max-w-3xl mx-auto pt-8">
	<h1 class="font-headline text-5xl md:text-6xl font-extrabold text-primary tracking-tight mb-4">Discover Knowledge</h1>
	<p class="font-body text-lg text-on-surface-variant mb-10 max-w-xl">Search across millions of academic texts, rare manuscripts, and modern journals within our curated digital stacks.</p>
	<!-- Search Bar (Design System: Input Track) -->
	<div class="w-full relative group">
		<div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
			<span class="material-symbols-outlined text-on-surface-variant group-focus-within:text-primary transition-colors text-2xl">search</span>
		</div>
		<!-- Input using surface-container-highest with no border, 2px bottom accent on focus -->
		<input class="w-full bg-surface-container-highest text-on-surface font-body text-lg py-5 pl-16 pr-6 rounded-xl border-none focus:ring-0 focus:outline-none placeholder-on-surface-variant/60 shadow-ambient transition-all relative overflow-hidden" placeholder="Search by title, author, subject, or ISBN..." type="text" />
		<!-- Focus bottom accent line (pseudo-element simulation) -->
		<div class="absolute bottom-0 left-0 h-[2px] bg-surface-tint w-0 group-focus-within:w-full transition-all duration-300 ease-out rounded-b-xl"></div>
		<button class="absolute inset-y-2 right-2 bg-primary text-on-primary font-label font-medium px-6 rounded-lg hover:bg-primary-container transition-colors shadow-sm">
			Search
		</button>
	</div>
	<!-- Quick filters below search -->
	<div class="flex gap-4 mt-6 text-sm font-label font-medium">
		<span class="text-on-surface-variant/60 uppercase tracking-widest text-xs py-2">Quick Toggles:</span>
		<button class="bg-surface-container-low hover:bg-surface-container px-4 py-1.5 rounded-full text-primary transition-colors">Only Available</button>
		<button class="bg-surface-container-low hover:bg-surface-container px-4 py-1.5 rounded-full text-primary transition-colors">Peer Reviewed</button>
		<button class="bg-surface-container-low hover:bg-surface-container px-4 py-1.5 rounded-full text-primary transition-colors">Digital Format</button>
	</div>
</section>
<!-- Catalog Layout (Sidebar + Grid) -->
<div class="grid grid-cols-1 lg:grid-cols-4 gap-12 items-start">
	<!-- Sidebar Filters (No-Line Structural Approach) -->
	<aside class="col-span-1 flex flex-col gap-8 sticky top-32">
		<!-- Category Filter Block -->
		<div class="bg-surface-container-low rounded-xl p-8 flex flex-col gap-6">
			<h3 class="font-headline text-lg font-extrabold text-primary tracking-tight">Disciplines</h3>
			<div class="flex flex-col gap-4 font-label text-sm text-on-surface-variant">
				<label class="flex items-center gap-3 group cursor-pointer">
					<input class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary transition-colors">Arts &amp; Humanities</span>
				</label>
				<label class="flex items-center gap-3 group cursor-pointer">
					<input checked="" class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary font-semibold text-primary transition-colors">Computer Science</span>
				</label>
				<label class="flex items-center gap-3 group cursor-pointer">
					<input class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary transition-colors">Life Sciences</span>
				</label>
				<label class="flex items-center gap-3 group cursor-pointer">
					<input class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary transition-colors">Social Sciences</span>
				</label>
				<button class="text-left mt-2 text-surface-tint font-semibold hover:text-primary transition-colors">+ View 14 More</button>
			</div>
		</div>
		<!-- Format Filter Block -->
		<div class="bg-surface-container-low rounded-xl p-8 flex flex-col gap-6">
			<h3 class="font-headline text-lg font-extrabold text-primary tracking-tight">Resource Type</h3>
			<div class="flex flex-col gap-4 font-label text-sm text-on-surface-variant">
				<label class="flex items-center gap-3 group cursor-pointer">
					<input checked="" class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary font-semibold text-primary transition-colors">Monographs &amp; Books</span>
				</label>
				<label class="flex items-center gap-3 group cursor-pointer">
					<input class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary transition-colors">Academic Journals</span>
				</label>
				<label class="flex items-center gap-3 group cursor-pointer">
					<input class="form-checkbox h-5 w-5 rounded text-surface-tint border-outline-variant bg-surface-container-lowest focus:ring-surface-tint focus:ring-offset-surface-container-low transition duration-150 ease-in-out" type="checkbox" />
					<span class="group-hover:text-primary transition-colors">Audio Visual Media</span>
				</label>
			</div>
		</div>
	</aside>
	<!-- Book Grid (Bento/Asymmetric emphasis) -->
	<div class="col-span-1 lg:col-span-3 flex flex-col gap-8">
		<!-- Results Meta -->
		<div class="flex justify-between items-end pb-4">
			<div class="flex flex-col">
				<span class="font-label text-sm uppercase tracking-widest text-on-surface-variant/70 mb-1">Search Results</span>
				<h2 class="font-headline text-2xl font-extrabold text-primary">Computer Science Collection</h2>
			</div>
			<div class="flex gap-2">
				<button class="p-2 bg-surface-container-lowest rounded-lg text-primary shadow-sm ring-1 ring-outline-variant/15"><span class="material-symbols-outlined">grid_view</span></button>
				<button class="p-2 bg-surface-container-low rounded-lg text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined">view_list</span></button>
			</div>
		</div>
		<!-- Featured Card (Full Width Bento Item) -->
		<!-- Design System: xl roundedness, 32px padding, lowest surface -->
		<article class="bg-surface-container-lowest rounded-xl p-8 flex flex-col md:flex-row gap-8 items-center md:items-start group hover:shadow-ambient transition-shadow duration-300 relative overflow-hidden">
			<!-- Ghost border fallback -->
			<div class="absolute inset-0 ring-1 ring-outline-variant/15 rounded-xl pointer-events-none"></div>
			<div class="w-full md:w-1/3 flex-shrink-0 relative">
				<!-- Book Cover Image -->
				<div class="aspect-[2/3] w-full bg-surface-container rounded-lg overflow-hidden relative shadow-sm group-hover:-translate-y-1 transition-transform duration-300">
					<img alt="Book cover featuring abstract geometric shapes representing algorithms" class="w-full h-full object-cover" data-alt="abstract geometric composition in shades of navy blue and soft white representing algorithmic structures and computer science concepts" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDh6vXA-smcQ_hxOMw2EIHq3cbVfMi5h2WqcQvZDrfOZkb4JuO7s0PiOwqHTFZKa53FcW-hHTzxL4QybWlJL7fogBl6fliPd0nHUV15m2niM338xlXKkDWLKl9aJ0Sn2AvYZDe0VB7qPjBqP7ZaC61sLUBJPo9OzgrNwKKWfr4FhkCE_9z4f-zmyMrwuTBdjLZhr0w0MUYNf3D1XrznpC13TdtsimhlVNImUqDtTbBW4KZejhxMptb0TDADnjhsbdtwVuNOAsqmPm3J" />
				</div>
				<!-- Status Badge (Available: primary-fixed / on-primary-fixed) -->
				<div class="absolute top-4 -left-4 bg-primary-fixed text-on-primary-fixed font-label text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-r-full shadow-sm z-10 flex items-center gap-1">
					<span class="material-symbols-outlined text-[14px]">check_circle</span>
					Available
				</div>
			</div>
			<div class="flex flex-col flex-grow py-2">
				<div class="flex items-center gap-3 mb-2">
					<span class="bg-surface-container-low text-primary px-3 py-1 rounded text-xs font-bold font-label uppercase tracking-wider">Featured Release</span>
					<span class="text-on-surface-variant font-label text-sm">2023 Edition</span>
				</div>
				<h3 class="font-headline text-3xl font-extrabold text-primary leading-tight mb-2">The Architecture of Modern Intelligence</h3>
				<p class="font-body text-lg text-on-surface-variant font-medium mb-6">Dr. Aris Vane &amp; Sarah Jenkins</p>
				<p class="font-body text-on-surface-variant leading-relaxed mb-8 max-w-2xl">
					A comprehensive exploration of neural network topologies and their implications on contemporary computational limits. This foundational text bridges the gap between theoretical models and practical deployment architectures.
				</p>
				<div class="mt-auto flex gap-4">
					<!-- Primary Button: lit from within gradient feel simulated with tint -->
					<button class="bg-primary text-on-primary font-label font-medium px-6 py-3 rounded-md hover:bg-primary-container hover:shadow-lg transition-all duration-200 flex items-center gap-2">
						<span class="material-symbols-outlined text-sm">bookmark_add</span>
						Reserve Item
					</button>
					<!-- Tertiary (Ghost) Button -->
					<button class="bg-transparent text-primary font-label font-medium px-6 py-3 rounded-md hover:bg-surface-container-high transition-colors duration-200 flex items-center gap-2">
						View Details
					</button>
				</div>
			</div>
		</article>
		<!-- Standard Grid Cards -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<!-- Card 1 -->
			<article class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-6 relative group hover:shadow-ambient transition-all duration-300">
				<div class="absolute inset-0 ring-1 ring-outline-variant/15 rounded-xl pointer-events-none group-hover:ring-transparent transition-colors"></div>
				<div class="aspect-[3/4] w-full bg-surface-container rounded-lg overflow-hidden relative shadow-sm">
					<img alt="Book cover showing binary code on a screen" class="w-full h-full object-cover" data-alt="close up macro shot of glowing green binary code on a dark computer monitor with slight screen glare" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGOzwgvHDp1K1lN7UwJGljL-h-h2GZF9rq32ob_x0bX8qPKufDY7pglG2XGciFyKCiWHainPfCHkREnk1I38DjJf77RdA1S2as_WX9doVeCuKInYoBcIHDuk4vR7hDqx5iFNPiboFVp_y7tu4Q6WPb5OW1JD0xkyKzWrU19UqNjJqGe-wrXrTKuEMCGrW5b7m0pIid92CpWazHRd6lhARrqNqrFekqPpTzrwe8F-qCX0x1mRdBBhAzu0Uof0OzNZ4FmVZ_26bVn4U3" />
					<!-- Status Badge (Borrowed/Overdue logic: error-container) -->
					<div class="absolute top-3 right-3 bg-error-container text-on-error-container font-label text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full shadow-sm backdrop-blur-md bg-opacity-90 flex items-center gap-1">
						<span class="material-symbols-outlined text-[14px]">schedule</span>
						Borrowed
					</div>
				</div>
				<div class="flex flex-col flex-grow">
					<h4 class="font-headline text-xl font-bold text-primary leading-snug mb-1 line-clamp-2">Foundations of Data Structures</h4>
					<p class="font-body text-sm text-on-surface-variant font-medium mb-4">Elias M. Roberts</p>
					<div class="mt-auto pt-4 flex justify-between items-center border-t border-surface-container-low">
						<span class="font-label text-xs text-on-surface-variant/70 uppercase tracking-widest">Monograph</span>
						<span class="text-xs font-medium text-surface-tint">Due in 4 days</span>
					</div>
				</div>
			</article>
			<!-- Card 2 -->
			<article class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-6 relative group hover:shadow-ambient transition-all duration-300">
				<div class="absolute inset-0 ring-1 ring-outline-variant/15 rounded-xl pointer-events-none group-hover:ring-transparent transition-colors"></div>
				<div class="aspect-[3/4] w-full bg-surface-container rounded-lg overflow-hidden relative shadow-sm">
					<!-- Abstract gradient cover since not all books have images -->
					<div class="w-full h-full bg-gradient-to-br from-tertiary-container to-primary-container flex items-center justify-center p-6 text-center">
						<h4 class="font-headline font-bold text-on-primary text-xl opacity-80">Design Patterns Refactored</h4>
					</div>
					<!-- Status Badge (Available) -->
					<div class="absolute top-3 right-3 bg-primary-fixed text-on-primary-fixed font-label text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full shadow-sm backdrop-blur-md bg-opacity-90 flex items-center gap-1">
						<span class="material-symbols-outlined text-[14px]">check_circle</span>
						Available
					</div>
				</div>
				<div class="flex flex-col flex-grow">
					<h4 class="font-headline text-xl font-bold text-primary leading-snug mb-1 line-clamp-2">Design Patterns Refactored</h4>
					<p class="font-body text-sm text-on-surface-variant font-medium mb-4">Gamma Collective</p>
					<div class="mt-auto pt-4 flex justify-between items-center border-t border-surface-container-low">
						<span class="font-label text-xs text-on-surface-variant/70 uppercase tracking-widest">Digital E-Book</span>
						<span class="text-xs font-medium text-surface-tint">Instant Access</span>
					</div>
				</div>
			</article>
			<!-- Card 3 -->
			<article class="bg-surface-container-lowest rounded-xl p-6 flex flex-col gap-6 relative group hover:shadow-ambient transition-all duration-300">
				<div class="absolute inset-0 ring-1 ring-outline-variant/15 rounded-xl pointer-events-none group-hover:ring-transparent transition-colors"></div>
				<div class="aspect-[3/4] w-full bg-surface-container rounded-lg overflow-hidden relative shadow-sm">
					<img alt="Book cover showing a glowing computer motherboard" class="w-full h-full object-cover" data-alt="macro photography of a computer motherboard illuminated with neon blue and purple light highlighting microchips" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB48RNVozF8M-RxOQcDnTGD-1_zLROV-_CvrevCtYPlpCgSK-JujsOCWLGAQHfZOF4RXLqk0DcRrQ818Y_TQM1SrakUHbQ_oJ-n96AQ0JmGRvA9wOf3KdgBojZ7uUjRN6EzF8dSaZ5Rd9xJDeLZqd2Y7TO4vgByU09PPubBH0apIMAmXfynT8jDogavSWllQzBi85taqgBot8Ht7nDBrR4hB6TlraXvspzuJp-tGR_fr6Vh_t_0IrCmgeWzqAS4KnH7D6b6j01owPM3" />
					<!-- Status Badge (Available) -->
					<div class="absolute top-3 right-3 bg-primary-fixed text-on-primary-fixed font-label text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full shadow-sm backdrop-blur-md bg-opacity-90 flex items-center gap-1">
						<span class="material-symbols-outlined text-[14px]">check_circle</span>
						Available
					</div>
				</div>
				<div class="flex flex-col flex-grow">
					<h4 class="font-headline text-xl font-bold text-primary leading-snug mb-1 line-clamp-2">System Architecture Principles</h4>
					<p class="font-body text-sm text-on-surface-variant font-medium mb-4">J. K. Thorne</p>
					<div class="mt-auto pt-4 flex justify-between items-center border-t border-surface-container-low">
						<span class="font-label text-xs text-on-surface-variant/70 uppercase tracking-widest">Textbook</span>
						<span class="text-xs font-medium text-surface-tint">Shelf C-42</span>
					</div>
				</div>
			</article>
		</div>
		<!-- Pagination / Load More -->
		<div class="w-full flex justify-center pt-8">
			<button class="bg-surface-container-highest text-primary font-label font-bold px-8 py-3 rounded-full hover:bg-surface-variant transition-colors flex items-center gap-2">
				Load More Results
				<span class="material-symbols-outlined text-sm">expand_more</span>
			</button>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
