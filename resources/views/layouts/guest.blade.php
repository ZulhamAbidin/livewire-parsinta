<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Auth</title>
    <link rel="icon" type="image/png" href="{{ asset('guest/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('guest/css/app.css') }}" />
    <script src="{{ asset('guest/js/app.js') }}" defer></script>
    <link  href="{{ asset('guest/fonts.googleapis.com/css2aa0e.css?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap') }}"  rel="stylesheet" />
    <script>
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");

    </script>
</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">

    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <main class="grid w-full grow grid-cols-1 place-items-center">

            {{ $slot }}

        </main>
    </div>

    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());

    </script>
</body>
</html>