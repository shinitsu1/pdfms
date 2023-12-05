<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com /,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

        /* For small screens, move the bottom navigation to the bottom of the screen */
@media (max-width: 767px) {
  .md\\:hidden.md\\:flex {
    display: flex;
    flex-direction: column-reverse;
  }

  .md\\:hidden.md\\:flex ul {
    margin-top: auto;

    flex-direction: column-reverse; /* Display the bottom navigation at the bottom */
  }

  .md\\:hidden.md\\:flex ul {
    margin-top: auto; /* Push the bottom navigation to the bottom of the container */

  }
  /* CSS */
@media (max-width: 768px) {
  .hide-on-small {
    display: none;
  }
  header {

  background-image: linear-gradient(#2f5cff, #6026ff);
  border-bottom-left-radius: 50% 20%;
  border-bottom-right-radius: 50% 20%;
}


}

}


        </style>
    </head>
    <body class="bg-blue-200">
        <!-- Header -->
        <header class="bg-blue-400 p-4 rounded-b-2xl top-0 flex items-center justify-between relative">

            <!-- Apply the background with a linear gradient -->
            <div class="absolute inset-0" style="background-image: linear-gradient(#5678f3, rgb(70, 49, 234));
                border-bottom-left-radius: 50% 20%;
                border-bottom-right-radius: 50% 20%;"></div>


            <!-- Logo (visible on larger screens) -->
            <div class="md:flex items-center space-x-4 hide-on-small z-10 relative">
                <img src="{{ asset('image/FLT_White.png') }}"  alt="FleetLink Logo" class="h-10 w-30" /> <!-- Your logo -->
            </div>

            <!-- Hello, Name -->
            <div class="flex flex-col text-white md:flex-row md:items-right md:space-x-2 md:ml-auto z-10 relative">
                <span class="text-lg font-normal">Good Day!,</span>

                <span class="text-xl font-bold">Kurt Nanalis</span> <!-- Replace with user's name -->
            </div>

            <!-- Profile Image -->
            <div class="rounded-full h-9 w-9 flex items-center justify-center overflow-hidden ml-auto z-10 relative">
                <!-- This assumes you have a 'public' folder where your images are stored -->
                <img src="{{ asset('image/370300681_314711961159645_2470105367045878108_n.jpg') }}"  alt="User profile" class="h-full w-full object-cover" />


            <!-- Logo (visible on larger screens) -->
            <div class="md:flex items-center space-x-4 hide-on-small z-10 relative">
                <img src="{{ asset('images/FLT_White.png') }}"  alt="Your Logo" class="h-8" /> <!-- Your logo -->
            </div>

            <!-- Hello, Name -->
            <div class="flex flex-col text-white md:flex-row md:items-right md:space-x-2 md:ml-auto z-10 relative">
                <span class="text-lg font-normal">Hello,</span>

                <span class="text-xl font-bold">Kurt Nanalis</span> <!-- Replace with user's name -->
            </div>

            <!-- Profile Image -->
            <div class="rounded-full h-9 w-9 flex items-center justify-center overflow-hidden ml-auto z-10 relative">
                <!-- This assumes you have a 'public' folder where your images are stored -->

                <img src="{{ asset('images/kurt.jpg') }}"  alt="User profile" class="h-full w-full object-cover" />

                <img src="{{ asset('image/user.png') }}"  alt="User profile" class="h-full w-full object-cover" />


                <!-- Replace with user's profile image -->
            </div>
        </header>
        <div class="flex">

            <aside class="bg-white p-2 md:w-1/5 h-screen top-0 left-0 overflow-y-auto border-r border-gray-200 ">
                <nav>
                  <!-- Navigation links for larger screens -->
                  <ul class="mt-8 ">

            <aside class="bg-white p-2 md:w-1/4 h-screen top-0 left-0 overflow-y-auto border-r border-gray-200">
                <nav>
                  <!-- Navigation links for larger screens -->
                  <ul class="mt-8">

                    <li>  <a href="#" class="text-blue-500 flex items-center py-2">
                        <i class="fas fa-inbox mr-2"></i> <!-- Inbox icon -->
                        Inbox
                      </a></li>
                    <li> <a href="#" class="text-blue-500 flex items-center py-2">

                        <i class="fas fa-phone-alt mr-2"></i>
                        <!-- Maps icon -->
                        Logs
                      </a></li>
                        <a href="#" class="text-blue-500 flex items-center py-2">
                          <i class="fas fa-bell mr-2"></i> <!-- Report icon -->
                          Notifications
                        </a>
                      </li>
                      <li>
    <a href="{{ asset('calendar') }}" class="text-blue-500 flex items-center py-2">
        <i class="far fa-calendar-alt mr-2"></i> <!-- Calendar icon -->
        Calendar
    </a>
</li>
gi
                      <li>
                        <a href="#" class="text-blue-500 flex items-center py-2">
                          <i class="fas fa-lightbulb mr-2"></i> <!-- Tips icon -->
                          Help

                        <i class="fas fa-map-marker-alt mr-2"></i> <!-- Maps icon -->
                        Maps
                      </a></li>
                    <li> <a href="#" class="text-blue-500 flex items-center py-2">
                        <i class="fas fa-comments mr-2"></i> <!-- Chat icon -->
                        Chats
                      </a></li>
                      <li>
                        <a href="#" class="text-blue-500 flex items-center py-2">
                          <i class="fas fa-cog mr-2"></i> <!-- Settings icon -->
                          Settings
                        </a>
                      </li>


                      <li>
                        <a href="#" class="text-blue-500 flex items-center py-2">
                          <i class="fas fa-ellipsis-h mr-2"></i> <!-- Ellipsis (horizontal) icon -->
                          More
                        </a>

                      </li>

                  </ul>
                </nav>
              </aside>


            <!-- Left side content -->
            <main class="p-5 md:w-3/4 min-h-screen">
                <div class="flex items-center justify-center">
                    <div class="flex bg-white text-white rounded-2xl items-center">

                      </li>
                  </ul>
                </nav>
              </aside>


            <!-- Left side content -->
            <main class="p-5 md:w-3/4 min-h-screen">
                <div class="flex items-center justify-center">
                    <div class="flex bg-white text-white rounded-2xl items-center">

                        <div class="flex justify-around items-center py-2" id="iconContainer">
                            <!-- Icons for the first layer -->
                            <!-- Icon 1 -->
                            <div class="ml-6 flex flex-col items-center">

                              <img src="{{ asset('images/telephone.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                              <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Voice Call</span>
                          </div>

                          <!-- Icon 2 -->
                          <div class="ml-6 flex flex-col items-center">
                              <img src="{{ asset('images/comment.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                              <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Send SMS</span>
                          </div>
                          <!-- Icon 3 -->
                          <div id="qrButton" class="ml-6 mr-6 flex flex-col items-center">
                              <img src="{{ asset('images/qr (1).png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                              <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Scan QR Code</span>
                          </div>
                        </a>


                                <img src="{{ asset('image/telephone.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                                <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Voice Call</span>
                            </div>

                            <!-- Icon 2 -->
                            <div class="ml-6 flex flex-col items-center">
                                <img src="{{ asset('image/comment.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                                <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Send SMS</span>
                            </div>


                            <!-- Icon 3 -->
                            <a href="{{ url('/qr') }}">
    <div id="qrButton" class="ml-6 mr-6 flex flex-col items-center">
        <img src="{{ asset('image/qr (1).png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
        <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Scan QR Code</span>
    </div>
</a>



                        </div>
                    </div>
                </div>

            <!-- Search bar -->
            <div class="flex items-center justify-center mt-0 relative p-4 ">
              <input
                type="text"
                placeholder="Search..."
                class="w-full px-5 py-2 rounded-3xl border-gray-300   "
              />
              <button
              type="button"

                                <img src="{{ asset('image/call.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                                <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Video Call</span>
                            </div>

                            <!-- Icon 2 -->
                            <div class="ml-6 flex flex-col items-center">
                                <img src="{{ asset('image/notify.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                                <span style="font-size: 0.75rem;" class="text-black font-bold mt-1">Notifications</span>
                            </div>
                            <!-- Icon 3 -->
                            <div class="ml-6 mr-6 flex flex-col items-center">
                                <img src="{{ asset('image/message.png') }}" alt="Your Image" class="w-10 h-auto rounded-lg">
                                <span style="font-size: 0.75rem;" class="text-black font-bold  mt-1">Messages</span>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

            <!-- Search bar -->
            <div class="flex items-center justify-center mt-0 relative p-4 ">
              <input
                type="text"
                placeholder="Search..."
                class="w-full px-5 py-2 rounded-3xl border-gray-300   "
              />
              <button
              type="button"

              class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-blue-500 group-hover:bg-blue-300 px-2 py-2 rounded-full "
            >
            <span class="bg-blue-600 rounded-full p-2">
                <i class="fas fa-search text-white"></i>
              </span>


            </button>


            </div>
            <div class="flex items-center">
    <!-- Content on the left side -->
    <div class="flex-1 bg-blue-500 text-white rounded-2xl p-6 flex items-center">
        <div>
            <h2 class="text-xl font-bold mb-2">FleetLink</h2>
            <p class="text-sm">Fleet Management System.</p>
            <!-- Other content on the left side -->
            <!-- ...
        </div>
        <!-- Image inside the blue container with adjusted size -->
        <div class="ml-500">
            <img src="{{ asset('image/car.png') }}" alt="Your Image" class="w-90 h-auto rounded-lg">
        </div>
    </div>
</div>


       <!-- Sidebar for larger screens -->


            </button>


            </div>
                
          </main>

       <!-- Sidebar for larger screens -->


  <nav id="mobileMenu" class="hidden md:hidden fixed bottom-0 w-full bg-blue-200">
    <div class="flex flex-col">
        <!-- First layer of icons -->
        <div class="flex justify-around items-center py-2">
            <!-- Icons for the first layer -->
            <!-- Icon 1 -->
            <div class="text-blue-500 flex flex-col items-center p-2">
                <div class="rounded bg-white bg-opacity-50 backdrop-blur-md m-2 w-6 h-6 flex items-center justify-center">
                    <i class="fas fa-inbox text-blue-600" ></i>
                </div>
                <span style="font-size: 0.75rem; margin-top: -0.4rem;" class="text-black font-bold">Inbox</span>
            </div>
            <!-- Icon 2 -->
            <div class="text-blue-500 flex flex-col items-center p-2">
                <div class="rounded bg-white bg-opacity-50 backdrop-blur-md m-2 w-6 h-6 flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-blue-600" ></i>
                </div>

                <span style="font-size: 0.75rem; margin-top: -0.4rem;" class="text-black font-bold">Logs</span>

                <span style="font-size: 0.75rem; margin-top: -0.4rem;" class="text-black font-bold">QR</span>

            </div>
            <!-- Icon 3 -->
            <div class="text-blue-500 flex flex-col items-center p-2">
                <div class="rounded bg-white bg-opacity-50 backdrop-blur-md m-2 w-6 h-6 flex items-center justify-center">
                    <i class="fas fa-comments text-blue-600" ></i>
                </div>
                <span style="font-size: 0.75rem; margin-top: -0.4rem;" class="text-black font-bold">Chats</span>
            </div>
            <!-- Icon 4 -->
            <div class="text-blue-500 flex flex-col items-center p-2">
              <div class="rounded bg-white bg-opacity-50 backdrop-blur-md m-2 w-6 h-6 flex items-center justify-center">
                  <i class="fas fa-cog text-blue-600" ></i>
              </div>
              <span style="font-size: 0.75rem; margin-top: -0.4rem;" class="text-black font-bold">Setting</span>
            </div>
        </div>
    </div>
</nav>


  <script>
    // JavaScript to hide the sidebar on smaller screens
    function handleResize() {
      const sidebar = document.querySelector('aside');
      const mobileMenu = document.getElementById('mobileMenu');

      if (window.innerWidth < 768) {
        sidebar.classList.add('hidden');
        mobileMenu.classList.remove('hidden');
      } else {
        sidebar.classList.remove('hidden');
        mobileMenu.classList.add('hidden');
      }
    }

    window.addEventListener('resize', handleResize);
    window.addEventListener('load', handleResize);


    document.addEventListener('DOMContentLoaded', (event) => {
            // Your existing JavaScript code

            // Add the following code to handle QR code scanning
            const qrButton = document.getElementById('qrButton');
            const qrScanner = document.getElementById('qrScanner');

            qrButton.addEventListener('click', () => startScanner());

            async function startScanner() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ video: true });
                    qrScanner.srcObject = stream;
                    qrScanner.play();
                    // Add your QR code scanning logic here using a library like ZXing or QuaggaJS
                } catch (error) {
                    console.error('Error accessing camera:', error);
                }
            }
        });
  </script>
</body>
</html>


  </script>
</body>
</html>

