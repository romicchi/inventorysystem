    <!-- header -->
    <header class="gb-red relative gb-white-text p-2 lg:p-6">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
            <h1>
                <a href="/" class="text-1xl lg:text-2xl font-bold flex-1">HMP Co. Inventory Management System</a>
            </h1>
            <button id="menu-button" class="md:hidden flex items-center px-3 py-2 border rounded gb-white-text border-white hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v15z"/></svg>
            </button>
            <nav id="menu" class="w-full md:w-auto md:block">
                <ul class="flex flex-col md:flex-row md:space-x-8 text-center">
                    @if(!Route::is('login') && !Route::is('register'))
                        <li><a href="#aboutus-container" class="text-white">About Us</a></li>
                        <li><a href="#pricing-container" class="text-white">Pricing</a></li>
                    @endif

                    @if(Auth::guard('admin')->check())
                        <li><a href="{{ route('admin.dashboard') }}" class="text-white">Home</a></li>
                    @elseif(Auth::guard('client')->check())
                        <li><a href="{{ route('client.dashboard') }}" class="text-white">Home</a></li>
                    @elseif(Route::is('landingpage'))
                        <li><a href="/login" class="text-white">Login</a></li>
                    @elseif(Route::is('register'))
                        <li><a href="/login" class="text-white">Login</a></li>
                    @else
                        <li><a href="{{ route('register') }}" class="text-white">Register</a></li>
                    @endif      
                </ul>
            </nav>
        </div>
    </header>