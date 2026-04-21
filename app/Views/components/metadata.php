<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title><?= $title ?> - E-Library</title>
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
	<script id="tailwind-config">
		tailwind.config = {
			darkMode: "class",
			theme: {
				extend: {
					"colors": {
						"surface-tint": "#4059aa",
						"primary": "#00103e",
						"inverse-on-surface": "#eff1f3",
						"surface-dim": "#d8dadc",
						"on-primary-fixed": "#00164e",
						"primary-container": "#00216c",
						"on-secondary-container": "#57657a",
						"on-error-container": "#93000a",
						"tertiary-container": "#20283c",
						"outline-variant": "#c5c6cd",
						"background": "#f7f9fb",
						"on-background": "#191c1e",
						"surface-container": "#eceef0",
						"on-surface": "#191c1e",
						"on-secondary-fixed": "#0d1c2e",
						"on-primary-container": "#738ce0",
						"tertiary-fixed": "#dae2fd",
						"surface": "#f7f9fb",
						"on-primary-fixed-variant": "#264191",
						"on-tertiary-container": "#888fa7",
						"primary-fixed-dim": "#b6c4ff",
						"inverse-surface": "#2d3133",
						"on-surface-variant": "#45474c",
						"surface-variant": "#e0e3e5",
						"secondary": "#515f74",
						"inverse-primary": "#b6c4ff",
						"primary-fixed": "#dce1ff",
						"secondary-fixed": "#d5e3fc",
						"secondary-fixed-dim": "#b9c7df",
						"secondary-container": "#d5e3fc",
						"surface-container-low": "#f2f4f6",
						"on-error": "#ffffff",
						"surface-bright": "#f7f9fb",
						"outline": "#75777d",
						"surface-container-lowest": "#ffffff",
						"on-secondary-fixed-variant": "#3a485b",
						"on-secondary": "#ffffff",
						"tertiary-fixed-dim": "#bec6e0",
						"on-tertiary-fixed": "#131b2e",
						"error": "#ba1a1a",
						"on-primary": "#ffffff",
						"surface-container-highest": "#e0e3e5",
						"error-container": "#ffdad6",
						"on-tertiary": "#ffffff",
						"on-tertiary-fixed-variant": "#3f465c",
						"tertiary": "#0b1426",
						"surface-container-high": "#e6e8ea"
					},
					"borderRadius": {
						"DEFAULT": "0.125rem",
						"lg": "0.25rem",
						"xl": "0.5rem",
						"full": "0.75rem"
					},
					"spacing": {},
					"fontFamily": {
						"headline": [
							"Manrope", "sans-serif"
						],
						"body": [
							"Inter", "sans-serif"
						],
						"label": [
							"Inter", "sans-serif"
						]
					}
				},
			},
		}
	</script>
	<style>
		/* Form input reset to remove default borders and apply the "No-Line/Track" style */
		input[type="text"],
		input[type="email"],
		input[type="password"],
		input[type="tel"] {
			box-shadow: none !important;
			outline: none !important;
		}

		input:-webkit-autofill,
		input:-webkit-autofill:hover,
		input:-webkit-autofill:focus,
		input:-webkit-autofill:active {
			-webkit-box-shadow: 0 0 0 30px #e0e3e5 inset !important;
			/* surface-container-highest */
			-webkit-text-fill-color: #191c1e !important;
			/* on-surface */
		}
	</style>
</head>
