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
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $client->company }} {{ $client->id }}</h2>
        </div>
    </div>

    <div class="p-4 sm:ml-64 text-center">
        <button id="inventoryButton" class="gb-lblue hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mr-2">Inventory</button>
        <button id="documentButton" class="gb-lblue hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Document</button>
    </div>
    
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <!-- horizontal box with 3 column and 2 for each column: 'contact_name', 'phone', 'email', 'address', 'tin', 'vn', 'rdo_code', 'report_status_id', 'duration', -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <div class="flex">
                        <span class="font-bold">Contact Person:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->contact_name }}</span>
                    </div>
                    <div class="flex mt-2">
                        <span class="font-bold">Contact Number:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->phone }}</span>
                    </div>
                </div>
                <div>
                    <div class="flex">
                        <span class="font-bold">Email Address:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->email }}</span>
                    </div>
                    <div class="flex">
                        <span class="font-bold">Located At:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->address }}</span>
                    </div>
                </div>
                <div>
                    <div class="flex mt-2">
                        <span class="font-bold">Tin:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->tin }}</span>
                    </div>
                    <div class="flex mt-2">
                        <span class="font-bold">Vendor Number:</span>
                        <span class="ml-2 overflow-ellipsis overflow-hidden">{{ $client->vn }}</span>
                    </div>
                </div>
            </div>

            <!-- Inventory Table owned by the Client  -->
            <div id="inventoryTable" class="mt-4">
                <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">Inventory</h2>
                <livewire:inventory-table :client_id="$client->id"/>
            </div>

            <!-- Document Table owned by the Client  -->
            <div id="documentTable" class="mt-4" style="display: none;">
                <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">Documents</h2>
                <livewire:document-table :client_id="$client->id"/>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/tableSwitch.js') }}"></script>
</html>

