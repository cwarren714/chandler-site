<?php include './components/header.php'; ?>

<body class="bg-gray-100 dark:bg-gray-800 dark:text-slate-300 w-full">
    <div class="max-w-xl mx-auto my-20 px-10">
        <p class="text-sm font-medium text-blue-500 dark:text-blue-400">404 error</p>
        <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">Page not found</h1>
        <p class="mt-4 text-gray-500 dark:text-gray-400">Whoops, can't find that, buddy.</p>

        <div class="flex items-center mt-6 gap-x-3">
            <button onclick="javascript:history.go(-1)" title="Return to previous page" class="flex items-center justify-center py-2 px-5 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 rtl:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                <span>Back</span>
            </button>

            <a href="/">
                <button class="py-2 px-5 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    Home
                </button>
            </a>
        </div>
    </div>
</body>

<?php include './components/footer.php' ?>