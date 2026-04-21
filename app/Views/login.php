<!DOCTYPE html>

<html lang="en">

<?= $this->include('components/metadata') ?>

<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col font-body">
	<!-- Split Screen Layout -->
	<div class="flex-1 flex flex-col lg:flex-row h-screen overflow-hidden">
		<!-- Left Pane: Editorial Brand Imagery (Hidden on Mobile) -->
		<div class="hidden lg:flex lg:w-1/2 relative bg-tertiary flex-col items-center justify-center overflow-hidden">
			<!-- Background Image -->
			<div class="absolute inset-0 bg-cover bg-center opacity-60 mix-blend-luminosity" data-alt="Abstract architectural shot of a modern library interior with tall wooden shelves and soft natural light filtering through, creating deep sophisticated shadows." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAWh6jyyr59ldgr_Fd_9CBq9EKqNUReInudh4z6dARW3GVagun9Fi71mzQ06IQf5QNSiKlTQTGAt5PFJGQch3nhjm666eH63qqO-JYkhYS5VKGRXgieHMibCQfnciW0YY5PfgBRpC1WGL5MDpKcgwbynevGFPzBCnhDnor2iVV6X0WkoOMtZXva2NLWmQ4gGIxjjRq5igYia0kDI87YIeaT4UvS5WX7a5U56hdRU0NRgOMcAG4j2hwZ-dgX06ciOc4iLB8ntdoWkeIa');">
			</div>
			<!-- Tonal Overlay -->
			<div class="absolute inset-0 bg-primary/40"></div>
			<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
			<!-- Content -->
			<div class="relative z-10 p-16 max-w-xl text-center flex flex-col items-center justify-end h-full pb-32">
				<div class="w-16 h-16 bg-surface-container-lowest/10 backdrop-blur-md rounded-xl flex items-center justify-center mb-8 shadow-sm">
					<span class="material-symbols-outlined text-on-primary text-3xl" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
				</div>
				<h1 class="font-headline text-on-primary text-5xl font-extrabold tracking-tight mb-6 leading-tight">The Digital<br />Archivist</h1>
				<p class="font-body text-surface-container-low text-lg font-medium leading-relaxed max-w-md">
					Curating intellectual assets with precision. Access the repository to manage, circulate, and preserve.
				</p>
			</div>
		</div>
		<!-- Right Pane: Authentication Canvas -->
		<div class="flex-1 w-full lg:w-1/2 flex flex-col bg-surface overflow-y-auto">
			<!-- Mobile Header (Visible only when left pane is hidden) -->
			<div class="lg:hidden p-8 flex items-center justify-center space-x-3 mt-8">
				<span class="material-symbols-outlined text-primary text-2xl" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
				<span class="font-headline text-primary text-xl font-bold tracking-tight">The Scholarly Canvas</span>
			</div>
			<!-- Form Container -->
			<div class="flex-1 flex flex-col justify-center px-6 sm:px-12 md:px-24 py-12 max-w-2xl mx-auto w-full">
				<!-- Welcome Text -->
				<div class="mb-10 text-center lg:text-left">
					<h2 class="font-headline text-3xl font-extrabold text-on-surface tracking-tight mb-3">Access Portal</h2>
					<p class="font-body text-on-surface-variant text-sm">Authenticate to enter the archival systems.</p>
				</div>
				<!-- Toggle Switch (Login / Register) -->
				<div class="flex p-1 mb-10 space-x-1 bg-surface-container-high rounded-xl relative">
					<!-- Active background pill (simulated for visual) -->
					<div class="absolute inset-y-1 left-1 right-1/2 bg-surface-container-lowest rounded-lg shadow-sm"></div>
					<button class="relative z-10 w-1/2 py-2.5 text-sm font-label font-semibold rounded-lg text-primary transition-colors focus:outline-none">
						Login
					</button>
					<button class="relative z-10 w-1/2 py-2.5 text-sm font-label font-medium rounded-lg text-on-surface-variant hover:text-on-surface transition-colors focus:outline-none">
						Register
					</button>
				</div>
				<!-- Login Form Canvas -->
				<form class="space-y-6">
					<!-- Identification Input -->
					<div class="space-y-2">
						<label class="block font-label text-xs font-semibold text-on-surface-variant uppercase tracking-widest pl-1" for="identifier">Identification</label>
						<div class="relative group">
							<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-surface-tint transition-colors">badge</span>
							<!-- Input using 'carved out' high container, no full border, focus bottom border -->
							<input class="w-full pl-12 pr-4 py-3.5 bg-surface-container-highest border-0 border-b-2 border-transparent rounded-t-xl rounded-b-md font-body text-on-surface text-sm focus:ring-0 focus:border-b-surface-tint transition-all placeholder:text-on-surface-variant/50" id="identifier" name="identifier" placeholder="Email address or Member ID" required="" type="text" />
						</div>
					</div>
					<!-- Security Input -->
					<div class="space-y-2">
						<div class="flex items-center justify-between pl-1 pr-2">
							<label class="block font-label text-xs font-semibold text-on-surface-variant uppercase tracking-widest" for="password">Security Key</label>
							<a class="font-label text-xs font-semibold text-surface-tint hover:text-primary transition-colors" href="#">Recover Access</a>
						</div>
						<div class="relative group">
							<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-surface-tint transition-colors">vpn_key</span>
							<input class="w-full pl-12 pr-4 py-3.5 bg-surface-container-highest border-0 border-b-2 border-transparent rounded-t-xl rounded-b-md font-body text-on-surface text-sm focus:ring-0 focus:border-b-surface-tint transition-all placeholder:text-on-surface-variant/50" id="password" name="password" placeholder="••••••••••••" required="" type="password" />
						</div>
					</div>
					<!-- Persistence Toggle -->
					<div class="flex items-center pt-2">
						<input class="h-4 w-4 rounded border-outline-variant text-surface-tint focus:ring-surface-tint bg-surface-container-highest cursor-pointer" id="remember" name="remember" type="checkbox" />
						<label class="ml-3 block font-body text-sm text-on-surface-variant cursor-pointer" for="remember">
							Maintain persistent session
						</label>
					</div>
					<!-- Primary Action -->
					<div class="pt-6">
						<button class="w-full py-4 px-6 flex items-center justify-center gap-3 bg-gradient-to-r from-primary to-primary-container text-on-primary font-label font-semibold text-sm rounded-xl shadow-[0_4px_14px_0_rgba(0,16,62,0.2)] hover:shadow-[0_6px_20px_rgba(0,16,62,0.23)] hover:-translate-y-0.5 transition-all duration-200" type="submit">
							<span>Authenticate</span>
							<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'wght' 600;">arrow_forward</span>
						</button>
					</div>
				</form>
				<!-- Alternative Access (SSO) -->
				<div class="mt-12">
					<div class="flex items-center justify-center space-x-4 mb-6">
						<div class="h-px bg-surface-variant flex-1"></div>
						<span class="font-label text-xs font-semibold text-on-surface-variant uppercase tracking-widest">Delegated Access</span>
						<div class="h-px bg-surface-variant flex-1"></div>
					</div>
					<div class="grid grid-cols-2 gap-4">
						<!-- Tertiary/Ghost buttons with 15% opacity border per rules -->
						<button class="flex items-center justify-center py-3 px-4 rounded-xl border border-outline-variant/20 bg-transparent text-primary font-label text-sm font-medium hover:bg-surface-container-high transition-colors">
							<span class="material-symbols-outlined mr-2 text-[20px]">account_balance</span>
							Institution
						</button>
						<button class="flex items-center justify-center py-3 px-4 rounded-xl border border-outline-variant/20 bg-transparent text-primary font-label text-sm font-medium hover:bg-surface-container-high transition-colors">
							<span class="material-symbols-outlined mr-2 text-[20px]">qr_code_scanner</span>
							Token
						</button>
					</div>
				</div>
			</div>
			<?= $this->include('components/login/footer') ?>
		</div>
	</div>
</body>

</html>
