<header class="container flex items-center justify-between w-full max-w-3xl px-6 py-10 mx-auto xl:max-w-5xl">
    <a rel="noopener noreferrer" href="/" class="block h-6 text-2xl font-semibold">Houssam El Khesassi</a>
    <div class="flex items-center">
        <div class="hidden space-x-2 font-medium sm:block">
            <a rel="noopener noreferrer" href="pricing" class="p-1">Pricing</a>
            <a rel="noopener noreferrer" href="about" class="p-1">About</a>
            <a rel="noopener noreferrer" href="blog" class="p-1">Blog</a>
            <a rel="noopener noreferrer" href="contact" class="p-1">Contact</a>
        </div>
        <div class="sm:hidden">
            <button id="toggle-menu" type="button" aria-label="Toggle Menu" class="w-8 h-8 ml-1 mr-1 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="menu" class="fixed right-0 z-10 w-full h-full duration-300 ease-in-out transform translate-x-full top-24 backdrop-blur-lg bg-white bg-opacity-50">
                <button type="button" aria-label="toggle modal" class="fixed w-full h-full cursor-auto focus:outline-none"></button>
                <nav class="fixed h-full mt-8">
                    <div class="px-12 py-4">
                        <a rel="noopener noreferrer" href="pricing" class="text-2xl font-bold tracking-widest text-gray-900">Pricing</a>
                    </div>
                    <div class="px-12 py-4">
                        <a rel="noopener noreferrer" href="about" class="text-2xl font-bold tracking-widest text-gray-900">About</a>
                    </div>
                    <div class="px-12 py-4">
                        <a rel="noopener noreferrer" href="blog" class="text-2xl font-bold tracking-widest text-gray-900">Blog</a>
                    </div>
                    <div class="px-12 py-4">
                        <a rel="noopener noreferrer" href="contact" class="text-2xl font-bold tracking-widest text-gray-900">Contact</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
    document.getElementById('toggle-menu').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('translate-x-full');
    });
</script>
