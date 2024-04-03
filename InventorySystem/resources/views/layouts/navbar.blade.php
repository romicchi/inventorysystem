

<nav class="fixed top-0 z-50 w-full gb-red dark:bg-gray-800">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end p-0 lg:p-1">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-800 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
         <h1>
             <a href="/" class="text-sm gb-white-text lg:text-2xl font-bold flex-1">HMP Co. Inventory Management System</a>
         </h1>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div class="mx-2">
                <a href="#" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">Profile</a>
            </div>
            <!-- notification bell & Logout -->
            <div class="mx-2">
                <a href="#" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                    <i class="fas fa-bell"></i>
                </a>
            </div>
            <div class="mx-2">
               <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm font-medium gb-white-text dark:text-gray-300 hover:text-gray-700 dark:hover:text-white">
                  <i class="fas fa-sign-out-alt"></i>
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full aside-bg-blue border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto aside-bg-blue dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/admin/dashboard" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-tachometer-alt gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/admin/clients" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-users gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Clients</span>
            </a>
         </li>
         <li>
            <a href="/admin/logs" class="flex items-center p-2 gb-white-text rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <i class="fas fa-clipboard-list gb-white-text transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Logs</span>
            </a>
         </li>
      </ul>
        <div class="absolute bottom-0 left-0 w-full aside-bg-blue text-center text-gray-100 p-4 border-gray-200 dark:bg-gray-800 dark:border-gray-700">
          <p class="text-md lg:text-xl">{{ date('h:i A') }}</p>
          <p class="text-sm">{{ date('M d, Y') }}</p>    
        </div>
   </div>
</aside>
