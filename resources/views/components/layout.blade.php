<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Sportify - Dashboard</title>
</head>
<body class="h-screen" x-data="{ sidebarOpen: false }">
    <x-sidebar.mobile />
    <x-sidebar.desktop />
    <x-topbar.layout />
    <main class="h-full">
        {{ $slot }}
    </main>
</body>
</html>
