@include('layouts.homenav')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMP Co. Inventory Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
  <link href="{{ asset('css/global.css') }}" rel="stylesheet">
</head> 
<body>    
    <!-- Jumbotron -->
    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url('{{ asset('assets/img/jumbotron.png') }}');" loading="lazy">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Business Support & Engineering Solution</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">We provide solutions to the problem encountered by small and medium enterprises through our services.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/login" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                Get started
            </a>  
        </div>
    </div>
</section>

    <!-- About Us -->
    <section class="bg-gray-100 py-6 px-4 md:py-20 md:px-10" id="aboutus-container">
        <h2 class="text-xl md:text-3xl mb-6 md:mb-10 text-center font-bold text-blue-900 text-custom-blue">About Us</h2>
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 text-center mb-6 md:mb-0">
                <img src="{{ asset('assets/img/Aboutus.jpg') }}" alt="About Us" class="mx-auto w-full md:max-w-xs lg:max-w-md h-auto rounded shadow-xl transform transition duration-500 hover:scale-105" loading="lazy">
            </div>
            <div class="w-full md:w-1/2">
                <p class="text-base md:text-lg text-center">We are a company dedicated to providing efficient and effective inventory management solutions. Our system is designed to streamline your business operations and improve productivity.</p>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="gb-lblue py-20 px-10" id="pricing-container">
        <div class="text-center text-white">
            <h2 class="text-3xl mb-10 font-bold">Pricing</h2>
            <p class="text-lg">Streamline your inventory Today!</p>
        </div>

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
    </div>
  </div>
    </section>

    <!-- Footer -->
    <footer class="gb-blue text-white py-6 px-10" id="footer-container">
        <div class="container mx-auto flex flex-wrap justify-between items-start">
            <div class="w-full sm:w-1/2 md:w-1/4">
                <p class="mb-6">Lorem ipsum is not simply random text roots to popular pular belief It has roots in a piece of classic</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4">
                <h3 class="text-lg mb-2">Information</h3>
                <ul class="list-none">
                    <li><a href="#aboutus-container" class="text-white hover:text-gray-300">About Us</a></li>
                    <li><a href="#pricing-container" class="text-white hover:text-gray-300">Contact Us</a></li>
                </ul>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4">
                <h3 class="text-lg mb-2">Address</h3>
                <p>hmpconsultingph@gmail.com</p>
                <p>Visto Commercial Building, Rizal Street, Zone V, Sogod, Philippines</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4">
                <h3 class="text-lg mb-2">Contact</h3>
                <p>+00-1234567890</p>
            </div>
        </div>
        <div class="text-center mt-6 flex justify-center items-center">
          <p class="flex-grow text-center">Copyright &copy; 2024 by HMP Co. All rights reserved.</p>
          <img src="{{ asset('assets/img/landing-footer-logo.png') }}" alt="HMP Co. Logo" class="w-60 h-35 ml-2">
        </div>
    </footer>

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>