<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{
            isset($title)
                ? $title . " - Application Tracker"
                : "Application Tracker"
        }}
    </title>
    <link rel="preconnect" href="<https://fonts.bunny.net>" />
    @vite (["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="h-screen flex flex-col bg-base-200 font-sans">
    <content class="min-w-full flex flex-row h-full">
        <sidebar class="w-[25%] h-full flex items-center justify-center">
            <x-sidebar />
        </sidebar>

        <main class="flex mx-auto px-4 py-8 w-full items-center mr-10">
            <div
                class="flex flex-col m-10 bg-gray-200 w-full h-full items-center overflow-auto rounded-2xl"
            >
                <div class="flex p-2 bg-gray-400 w-[90%] rounded-2xl mt-5">
                    Search
                </div>
                <div class="w-[90%]">{{ $slot }}</div>
            </div>
        </main>
    </content>
</body>
</html>
