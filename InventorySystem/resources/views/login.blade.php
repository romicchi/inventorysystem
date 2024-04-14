@include('layouts.homenav')
@include('layouts.headlinks')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMP Co. Inventory Management System</title>
</head>

<body>
    <div class="flex flex-col items-center justify-center mx-4 mt-8 sm:mx-0 lg:mt-16">
        <div class="w-full lg:max-w-6xl gb-lblue rounded-lg shadow-lg p-4 md:p-8 lg:p-16 flex flex-col-reverse md:flex-row justify-between space-y-10 md:space-y-0 md:space-x-10">
            <div class="w-full">
                <h2 class="text-sm sm:text-base lg:text-lg font-bold gb-white-text">Sign In</h2>
                <form action="{{ route('login.post') }}" method="POST" class="mt-8 space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Email</label>
                        <input type="email" name="email" id="email" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Username">
                        @error('email')
                            <small class="text-red-500 text-xs italic">* Email is required.</small>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm sm:text-base lg:text-lg font-medium gb-white-text">Password</label>
                        <input type="password" name="password" id="password" class="p-2 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Password">
                        @error('password')
                            <small class="text-red-500 text-xs italic">* Password is required.</small>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember-me" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <label for="remember-me" class="ml-2 block text-sm sm:text-base lg:text-lg gb-white-text">Remember me</label>
                        </div>
                        <div class="flex-shrink-0 text-sm sm:text-base lg:text-lg">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="w-full justify-center gb-red border border-transparent rounded-md py-2 px-4 inline-flex items-center text-sm sm:text-base lg:text-lg font-medium text-white hover:bg-gray-200 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
            <div class="self-center w-48 md:w-auto">
                <img src="{{ asset('assets/img/login-logo.png') }}" alt="HMP Co. Inventory Management System" class="w-full h-auto">
            </div>
        </div>
    </div>
</body>

</html>
