@include('layouts.homenav')
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
        <div class="flex flex-col items-center justify-center my-8 mx-4 mt-8 sm:mx-0 lg:mt-16">
            <div class="w-full lg:max-w-6xl gb-lblue rounded-lg shadow-lg p-4 md:p-8 lg:p-16 flex flex-col justify-between space-y-10 md:space-y-0 md:space-x-10">
                <div class="self-center w-32 md:w-48 lg:w-64 mb-0 lg:mb-8">
                    <img src="{{ asset('assets/img/login-logo.png') }}" alt="HMP Co. Inventory Management System" class="w-full h-auto">
                </div>
                <form action="" method="POST" class="mt-4 lg:mt-8 space-y-8" id="registration" style="margin-left: 0px;">
                    @csrf
                    <h2 class="text-2xl text-center sm:text-base lg:text-4xl font-bold gb-white-text">Register</h2>
                    <div class="flex flex-wrap -mx-3">
                        <!-- Name -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="name" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Name</label>
                            <input type="text" name="name" id="name" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Name">
                        </div>
                        <!-- Email -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="email" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Email</label>
                            <input type="email" name="email" id="email" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Username">
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3">
                        <!-- Company -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="company_name" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Company</label>
                            <input type="text" name="company_name" id="company_name" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Company Name">
                        </div>
                        <!-- Contact -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="contact" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Contact</label>
                            <input type="text" name="contact" id="contact" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Contact">
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3">
                        <!-- Address -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="address" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Address</label>
                            <input type="text" name="address" id="address" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Address">
                        </div>
                        <!-- TIN # -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="tin" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">TIN #</label>
                            <input type="text" name="tin" id="tin" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="TIN NUMBER (Optional)">
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3">
                        <!-- RDO Code -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="rdo" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">RDO Code</label>
                            <input type="text" name="rdo" id="rdo" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="RDO Code">
                        </div>
                        <!-- Business Type -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="business_type" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Business Type</label>
                            <select name="business_type" id="business_type" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="">Select</option>
                                <option value="Sole Proprietorship">Sole Proprietorship</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Corporation">Corporation</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap -mx-3">
                        <!-- Socials -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="socials" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Socials</label>
                            <input type="text" name="socials" id="socials" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Company Link ex. fb">
                        </div>
                        <!-- Password -->
                        <div class="w-full md:w-1/2 px-3">
                            <label for="password" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Password</label>
                            <input type="password" name="password" id="password" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="button" class="justify-center gb-red border border-transparent rounded-md py-2 px-4 inline-flex items-center text-sm sm:text-base lg:text-lg font-medium text-white hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" onclick="showChoosePlan()">
                            Next
                        </button>
                    </div>
                </form>
                <div class="hidden" id="choosePlan">
                    <!-- "Choose a Plan" section here -->
                    <h2 class="text-2xl text-center sm:text-base lg:text-4xl font-bold gb-white-text">Choose a Plan</h2>
                    <div class="container mx-auto px-4 py-8">

        <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">
    <div class="w-full md:w-1/2 bg-white rounded-md shadow-md p-4 text-center">
    <div class="gb-black text-white p-4 rounded-md w-3/4 mx-auto mt-0">
        <h2 class="text-xl font-bold mb-4">Standard</h2>
        <p class="mb-4">Available Nationwide</p>
        <p class="text-2xl font-bold mb-4">$19.99</p>
    </div>
    <div class="ml-10 pt-10">
    <div class="list-disc pl-4 mb-4 mx-auto text-left">
        <p>For individual use, Keep track of inventory list</p>
    </div>
        <ul class="space-y-4 mx-auto text-left">
        <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              Keep Track of Inventory Items
              </p>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              Generate Reports
              </p>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              1 year plan
              </p>
            </li>
        </ul>
        </div>
        <div class="flex justify-center items-center pt-6">
            <button class="px-10 py-4 gb-black text-white transform transition duration-500 hover:scale-105">Free Trial</button>
        </div>
      </div>
      
      <div class="w-full md:w-1/2 bg-white rounded-md shadow-md p-4 text-center">
        <div class="gb-black text-white p-4 rounded-md w-3/4 mx-auto mt-0">
            <h2 class="text-xl font-bold mb-4">Standard</h2>
            <p class="mb-4">Available on selected Regions only</p>
            <p class="text-2xl font-bold mb-4">$29.99</p>
        </div>
        <div class="ml-10 pt-10">
    <div class="list-disc pl-4 mb-4 mx-auto text-left">
        <p>Stay Organized and Efficient with Our Inventory Tracking Solutions</p>
    </div>
        <ul class="space-y-4 mx-auto text-left">
        <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              Standard & Advanced Features
              </p>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              Document processing & submissions done by Us!
              </p>
            </li>
            <li class="flex items-center">
              <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
              </svg>
              <p class="ml-4">
              1 year plan
              </p>
            </li>
        </ul>
        </div>
        <div class="flex justify-center items-center pt-6">
            <button class="px-10 py-4 gb-black text-white transform transition duration-500 hover:scale-105">Free Trial</button>
        </div>
      </div>
    </div>
  </div>

                    <div class="flex justify-center">
                        <button type="button" class="justify-center gb-red border border-transparent rounded-md py-2 px-4 inline-flex items-center text-sm sm:text-base lg:text-lg font-medium text-white hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" onclick="showRegistration()">
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        function showChoosePlan() {
            document.getElementById("registration").style.display = "none";
            document.getElementById("choosePlan").style.display = "block";
            // Here you can add code to transition to the next slide
            // Example: window.location.href = '/choose-plan'; // Redirect to another page
        }
        
        function showRegistration() {
            document.getElementById("registration").style.display = "block";
            document.getElementById("choosePlan").style.display = "none";
        }
    </script>
</html>