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
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">New Inventory</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Add inventory items here</p>
        </div>
    </div>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-4 p-4">
                    <!-- Inventory Field -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Inventory</h3>
                        <div class="mb-2">
                            <label class="inline-block w-32">Product Name:</label>
                            <input type="text" name="name" placeholder="Name" class="p-2 border rounded">
                            @error('name')
                                <small class="text-red-500 text-xs italic">* Name is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Inventory Type:</label>
                            <select name="inventory_type_id" required class="p-2 border rounded">
                                @foreach($inventoryTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Image:</label>
                            <input type="file" name="image" accept="image/*" required class="p-2 border rounded">
                            @error('image')
                                <small class="text-red-500 text-xs italic">* Image is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Description:</label>
                            <textarea name="description" placeholder="Description" required class="p-2 border rounded"></textarea>
                            @error('description')
                                <small class="text-red-500 text-xs italic">* Description is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Unit:</label>
                            <input type="text" name="unit" placeholder="Unit" required class="p-2 border rounded">
                            @error('unit')
                                <small class="text-red-500 text-xs italic">* Unit is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Price:</label>
                            <input type="number" name="price" placeholder="Price" required class="p-2 border rounded">
                            @error('price')
                                <small class="text-red-500 text-xs italic">* Price is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Quantity:</label>
                            <input type="number" name="quantity" placeholder="Quantity" required class="p-2 border rounded">
                            @error('quanity')
                                <small class="text-red-500 text-xs italic">* Quantity is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Total:</label>
                            <input type="number" name="total" placeholder="Total" required class="p-2 border rounded">
                            @error('total')
                                <small class="text-red-500 text-xs italic">* Total is required.</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Date of Purchase:</label>
                            <input type="date" name="date_purchase" required class="p-2 border rounded">
                            @error('date_purchase')
                                <small class="text-red-500 text-xs italic">* Date of Purchase is required.</small>
                            @enderror
                        </div>
                    </div>
                    <!-- Document Field -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Document</h3>
                        <div class="mb-2">
                            <label class="inline-block w-32">Document Name:</label>
                            <input type="text" name="doc_name" placeholder="Name" class="p-2 border rounded">
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Document Type:</label>
                            <select name="document_type_id" class="p-2 border rounded">
                                @foreach($documentTypes as $documentType)
                                    <option value="{{ $documentType->id }}">{{ $documentType->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">File:</label>
                            <input type="file" name="file" class="p-2 border rounded" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.txt">
                        </div>
                        <div class="mb-2">
                            <label class="inline-block w-32">Additional Notes:</label>
                            <textarea name="additional_notes" placeholder="Additional Notes" class="p-2 border rounded"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Add Inventory</button>
            </form>
        </div>
    </div>
</body>
</html>