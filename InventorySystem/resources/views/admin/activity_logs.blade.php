@include('layouts.navbar')
@include('layouts.headlinks')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <livewire:activity-logs/>
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