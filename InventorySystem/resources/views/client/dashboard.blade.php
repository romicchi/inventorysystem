@include('layouts.clientnavbar')
@include('layouts.headlinks')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HMP Co. Inventory Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Dashboard</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Welcome to the dashboard</p>
        </div>
    </div>
    
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <!--  Chart's container -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex h-24 rounded bg-gray-50 dark:bg-gray-800 relative shadow">
                <div class="absolute left-0 top-0 h-full w-1/3 card-red rounded-l flex items-center justify-center">
                    <i class="fas fa-user text-2xl text-white"></i>
                </div>
                <div class="flex flex-col items-center justify-center w-2/3 ml-auto">
                    <div class="text-2xl text-gray-400 dark:text-gray-500">
                        1
                    </div>
                    <p class="text-2xl text-gray-400 dark:text-gray-500">Client</p>
                </div>
            </div>
            <div class="flex h-24 rounded bg-gray-50 dark:bg-gray-800 relative shadow">
                <div class="absolute left-0 top-0 h-full w-1/3 card-yellow rounded-l flex items-center justify-center">
                    <i class="fas fa-file-alt text-2xl text-white"></i>
                </div>
                <div class="flex flex-col items-center justify-center w-2/3 ml-auto">
                    <div class="text-2xl text-gray-400 dark:text-gray-500">
                        5
                    </div>
                    <p class="text-normal md:text-2xl text-center text-gray-400 dark:text-gray-500">Total Generated Reports</p>
                </div>
            </div>
            <div class="flex h-24 rounded bg-gray-50 dark:bg-gray-800 relative shadow">
                <div class="absolute left-0 top-0 h-full w-1/3 card-blue rounded-l flex items-center justify-center">
                    <i class="fas fa-user-clock text-2xl text-white"></i>
                </div>
                <div class="flex flex-col items-center justify-center w-2/3 ml-auto">
                    <div class="text-2xl text-gray-400 dark:text-gray-500">
                        2
                    </div>
                    <p class="text-normal md:text-2xl text-center text-gray-400 dark:text-gray-500">Pending Users</p>
                </div>
            </div>
      </div>
      
      <!-- Table -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex flex-col shadow-md items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-lg font-bold mb-2">Latest Clients Registered</p>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Total Sold</th>
                        <th class="px-4 py-2">Total Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data goes here -->
                </tbody>
            </table>
        </div>
        <div class="flex flex-col shadow-md items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-lg font-bold mb-2">New Clients</p>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Title</th>
                        <th class="px-4 py-2">Total Sold</th>
                        <th class="px-4 py-2">Total Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table data goes here -->
                </tbody>
            </table>
        </div>
      </div>
   </div>
</div>
</body>
</html>