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
        <div class="p-4 mt-14">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Inventory Management</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Manage your inventory here</p>
        </div>
    </div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <livewire:inventory-table/>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteConfirmationModal" class="hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded relative">
            <h2 class="text-xl mb-2">Confirm Delete</h2>
            <p>Are you sure you want to delete this item?</p>
            <div class="mt-4 flex justify-end">
                <button id="confirmDeleteButton" class="px-4 py-2 bg-red-500 text-white rounded mr-2">Yes, Delete</button>
                <button id="cancelDeleteButton" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/deleteConfirmation.js') }}"></script>
</html>