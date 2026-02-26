    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="w-full mx-auto px-5">
            <div class="flex items-center justify-between h-20">
                <div class="shrink-0 text-xl font-bold text-amber-500">Pawon Sari</div>
                <div class="hidden md:flex gap-x-4 font-medium">
                    {{-- <a href="#" class="hover:text-orange-500">Home</a> --}}
                    <a href="#" class="hover:text-orange-500">About</a>
                    <a href="#" class="hover:text-orange-500">Menu</a>
                    <a href="#" class="hover:text-orange-500">Contact</a>
                </div>
                <button id="mob-btn" class="md:hidden text-amber-500 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="max-h-0 overflow-hidden transition-all duration-300 md:hidden px-5 font-medium">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500">Home</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500">About</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500">Menu</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-orange-500">Contact</a>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('mob-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('max-h-0');
            menu.classList.toggle('max-h-60');
        });
    </script>
