@include('layouts.navbar')
@include('layouts.headlinks')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMP Co. Inventory Management System</title>
</head>
<body>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Client Management</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Manage your clients here</p>
        </div>
    </div>

    <!-- Search left end while at the right end edge is Sort dropdown and Filterdropdown-->
    <div class="p-4 sm:ml-64">
        <div class="flex flex-wrap justify-between">
            <div class="flex-grow mr-2">
                <input type="text" class="w-full p-2 border-2 border-gray-200 rounded-lg dark:border-gray-700" placeholder="Search client">
            </div>
            <div class="flex-grow mr-2 mt-1">
                <select class="w-full p-2 border-2 border-gray-200 rounded-lg dark:border-gray-700">
                    <option value="Sort">Sort</option>
                    <option value="Ascending">Ascending</option>
                    <option value="Descending">Descending</option>
                </select>
            </div>
            <div class="flex-grow mr-2 mt-1">
                <select class="w-full p-2 border-2 border-gray-200 rounded-lg dark:border-gray-700">
                    <option value="Filter">Filter</option>
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                </select>
            </div>
            <div class="flex-grow mt-3">
                <a href="#" class="w-full p-2 gb-lblue text-white rounded-lg text-center">New Client</a>
            </div>
        </div>
    </div>
    
    <!-- Table -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 overflow-auto">
            <table class="w-full table-auto text-gray-700">
                <thead>
                    <tr class="bg-gray-200 dark:bg-gray-800 border-b border-black">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Company</th>
                        <th class="px-4 py-2">Contact Name</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">Report Status</th>
                        <th class="px-4 py-2">Duration</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="py-4 px-2">1</td>
                        <td class="py-4 px-2">HMP Co.</td>
                        <td class="py-4 px-2">John Doe</td>
                        <td class="py-4 px-2">1234567890</td>
                        <td class="py-4 px-2">john_doe@example.com</td>
                        <td class="py-4 px-2">1234 Main St, New York, NY 10001</td>
                        <td class="py-4 px-2">Pending</td>
                        <td class="py-4 px-2">1 month</td>
                        <td class="py-4 px-2">
                            <a href="#" class="text-blue-400 hover:text-blue-600">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-600">Delete</a>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td class="py-4 px-2">1</td>
                        <td class="py-4 px-2">HMP Co.</td>
                        <td class="py-4 px-2">John Doe</td>
                        <td class="py-4 px-2">1234567890</td>
                        <td class="py-4 px-2">john_doe@example.com</td>
                        <td class="py-4 px-2">1234 Main St, New York, NY 10001</td>
                        <td class="py-4 px-2">Pending</td>
                        <td class="py-4 px-2">1 month</td>
                        <td class="py-4 px-2">
                            <a href="#" class="text-blue-400 hover:text-blue-600">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-600">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

