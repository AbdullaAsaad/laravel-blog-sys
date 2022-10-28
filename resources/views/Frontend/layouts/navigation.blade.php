<nav class="bg-white px-6 py-4 shadow">
    <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <div>
                <a href="/" class="text-gray-800 text-xl font-bold md:text-2xl">Blog</a>
            </div>
            <div>
                <button type="button"
                    class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:flex flex-col items-center md:flex-row md:-mx-4 hidden">
            @auth
            <span class="my-1 text-gray-800 md:mx-4 md:my-0">{{ auth()->user()->name }}</span>
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = ! dropdownOpen"
                    class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                      </svg>                  
                </button>
    
                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                    style="display: none;"></div>
    
                <div x-show="dropdownOpen"
                    class="absolute right-0 mt-5 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                    style="display: none;">    
                    <a href="#" onclick="document.getElementById('logout-user').submit();"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600  hover:text-white">Logout</a>
    
                    <form action="{{ route('logout') }}" method="post" id="logout-user">
                        @csrf
                    </form>
                    
                </div>
            </div>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Login</a>
            <a href="{{ route('register') }}" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Register</a>
            @endguest
        </div>
    </div>
</nav>