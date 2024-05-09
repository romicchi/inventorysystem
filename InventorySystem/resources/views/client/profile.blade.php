@include('layouts.clientnavbar')
@include('layouts.headlinks')

@section('content')
<div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Personal</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Manage your personal information here</p>
        </div>
    </div>  
<div class="p-4 sm:ml-64">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-screen-md">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        Personal Information
                    </div>

                    <div class="w-full p-6">
                        <form method="POST" action="{{ route('client.update', $client->id) }}">
                        @csrf
                        @method('PUT')
                            <table>
                                <tr>
                                    <td class="px-4 py-2 text-gray-700 font-bold">Company:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="company" contenteditable="false">{{ $client->company }}</div>
                                        <input type="hidden" name="company" value="{{ $client->company }}">
                                        @error('company')
                                            <small class="text-red-500 text-xs italic">* Company is required.</small>
                                        @enderror
                                    </td>
                                    
                                    <td class="px-4 py-2 text-gray-700 font-bold">Contact Name:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="contact_name" contenteditable="false">{{ $client->contact_name }}</div>
                                        <input type="hidden" name="contact_name" value="{{ $client->contact_name }}">
                                        @error('contact_name')
                                            <small class="text-red-500 text-xs italic">* Contact Name is required.</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-gray-700 font-bold">Phone:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="phone" contenteditable="false">{{ $client->phone }}</div>
                                        <input type="hidden" name="phone" value="{{ $client->phone }}">
                                        @error('phone')
                                            <small class="text-red-500 text-xs italic">* Phone is required.</small>
                                        @enderror
                                    </td>
                                    
                                    <td class="px-4 py-2 text-gray-700 font-bold">Email:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="email" contenteditable="false">{{ $client->email }}</div>
                                        <input type="hidden" name="email" value="{{ $client->email }}">
                                        @error('email')
                                            <small class="text-red-500 text-xs italic">* Email is required.</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-gray-700 font-bold">Address:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="address" contenteditable="false">{{ $client->address }}</div>
                                        <input type="hidden" name="address" value="{{ $client->address }}">
                                        @error('address')
                                            <small class="text-red-500 text-xs italic">* Address is required.</small>
                                        @enderror
                                    </td>
                                    
                                    <td class="px-4 py-2 text-gray-700 font-bold">TIN:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="tin" contenteditable="false">{{ $client->tin }}</div>
                                        <input type="hidden" name="tin" value="{{ $client->tin }}">
                                        @error('tin')
                                            <small class="text-red-500 text-xs italic">* TIN is required.</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-gray-700 font-bold">VN:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="vn" contenteditable="false">{{ $client->vn }}</div>
                                        <input type="hidden" name="vn" value="{{ $client->vn }}">
                                        @error('vn')
                                            <small class="text-red-500 text-xs italic">* VN is required.</small>
                                        @enderror
                                    </td>
                                    
                                    <td class="px-4 py-2 text-gray-700 font-bold">RDO Code:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="rdo_code" contenteditable="false">{{ $client->rdo_code }}</div>
                                        <input type="hidden" name="rdo_code" value="{{ $client->rdo_code }}">
                                        @error('rdo_code')
                                            <small class="text-red-500 text-xs italic">* RDO Code is required.</small>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 text-gray-700 font-bold">Business Type:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="business_type" contenteditable="false">{{ $client->businessType->type }}</div>
                                        <input type="hidden" name="business_type" value="{{ $client->businessType->type }}">
                                    </td>

                                    <td class="px-4 py-2 text-gray-700 font-bold">Socials:</td>
                                    <td class="px-4 py-2 text-gray-700">
                                        <div id="socials" contenteditable="false">
                                            <a href="{{ json_decode($client->socials)[0] }}" target="_blank">{{ json_decode($client->socials)[0] }}</a>
                                        </div>
                                        <input type="hidden" name="socials" value="{{ $client->socials }}">
                                        @error('socials')
                                            <small class="text-red-500 text-xs italic">* Socials is required.</small>
                                        @enderror
                                    </td>
                                </tr>
                            </table>

                            <div class="mt-4">
                                <button type="button" id="edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </button>
                                <button type="submit" id="save" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded hidden">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.getElementById('edit').addEventListener('click', function() {
        // Make all data fields editable
        document.querySelectorAll('[contenteditable="false"]').forEach(function(element) {
            element.contentEditable = "true";
        });

        // Show the save button
        document.getElementById('save').classList.remove('hidden');
    });

    document.getElementById('save').addEventListener('click', function() {
        // Copy the content of each editable div to its corresponding hidden input field
        document.querySelectorAll('[contenteditable="true"]').forEach(function(element) {
            document.querySelector('input[name="' + element.id + '"]').value = element.innerText;
        });
    });
</script>