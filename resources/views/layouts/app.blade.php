<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel app</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">My Application</p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
            <li class="mx-6">
                <p class="text-xl">Welcome <b>{{ auth()->user()->name }}</b> </p>
            </li>
            <li>
                <a href="{{ route('login.logout')}}" class="font-bold py-3
                 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
            </li>
            <li>
                <a href="{{ route('profile.user') }}" class="font-semibold hover:bg-indigo-700 py-3
                 px-4 rounded-md">
                    Profile
                </a>
            </li>
        @else
            <li class="mx-6">
                    <a href="{{ route('login.index')}}" class="font-semibold hover:bg-indigo-700 py-3 
                    px-4 rounded-md">Login</a>
                </li>
                <li>
                    <a href="{{ route('register.index')}}" class="font-semibold border-2 border-white 
                    py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
                </li>
        @endif
        </ul>

    </nav>


    @yield('content')



  </body>
</html>