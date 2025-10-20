<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @stack('css')
    <script>
        // Simple JS to handle sidebar toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const isOpen = sidebar.classList.contains('w-64');
            
            if (isOpen) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-16');
                document.querySelectorAll('.menu-text').forEach(el => el.classList.add('hidden'));
            } else {
                sidebar.classList.remove('w-16');
                sidebar.classList.add('w-64');
                document.querySelectorAll('.menu-text').forEach(el => el.classList.remove('hidden'));
            }
        }
    </script>
</head>

<body>
    <div class="flex">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-base-200 min-h-screen w-64 transition-all duration-300 flex flex-col">
            <ul class="menu w-full grow pt-4">
                <li>
                    <a class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                            stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="size-5">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                            </path>
                        </svg>
                        <span class="menu-text">Homepage</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                            stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="size-5">
                            <path d="M20 7h-9"></path>
                            <path d="M14 17H5"></path>
                            <circle cx="17" cy="17" r="3"></circle>
                            <circle cx="7" cy="7" r="3"></circle>
                        </svg>
                        <span class="menu-text">Settings</span>
                    </a>
                </li>
            </ul>
            
            <!-- Toggle Button -->
            <div class="m-2">
                <button onclick="toggleSidebar()" class="btn btn-error w-full justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                        stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="size-5">
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                        </path>
                        <path d="M9 4v16"></path>
                        <path d="M14 10l2 2l-2 2"></path>
                    </svg>
                    <span class="menu-text">Collapse</span>
                </button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-3 h-screen overflow-y-scroll">
            @yield('content')
        </div>
    </div>

    @stack('scripts')
</body>

</html>