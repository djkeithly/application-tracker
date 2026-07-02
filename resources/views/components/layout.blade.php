<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Application Tracker' : 'Application Tracker' }}</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen flex flex-col bg-base-200 font-sans">
    <content class="min-w-full flex flex-row h-full">

        <sidebar class="w-[25%] h-full flex items-center justify-center">
            <x-sidebar />
        </sidebar>

        <main class="flex-1 container mx-auto px-4 py-8 w-[75%]">
            {{ $slot }}
        </main>
    </content>

</body>
</html>