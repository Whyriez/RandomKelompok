<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/x-icon" href="{{ asset('Frame 3.jpg') }}">
    <title>Randomize Team</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    {{-- Navbar --}}
    <nav class="dark:bg-slate-800 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center">
                <img src="{{ asset('Frame 3.jpg') }}" class="h-8 mr-3" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Randomize
                    Team</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100  bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800  dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- container --}}
    <div class="px-36 mt-[20px]">

        <div class="grid grid-cols-3 gap-4">
            <div
                class="block max-w-sm pointer-events-none h-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Result</h5>
                <div class="bg-black rounded-lg shadow text-white m-4 dark:bg-gray-800">
                    <input type="text" placeholder="Input" class="w-4/5 rounded-md">
                    <button class="h-5 bg-white text-black p-5"><i></i> </button>
                </div>
            </div>
            <div
                class="block max-w-sm pointer-events-none h-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Controller</h5>
                <div class="bg-black rounded-lg shadow text-white m-4 dark:bg-gray-800">
                    tes
                </div>
            </div>
            <div
                class="block max-w-sm pointer-events-none h-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Inputs</h5>
                <div class="bg-black rounded-lg shadow text-white m-4 dark:bg-gray-800">
                    tes
                </div>
                <div class="grid sm:grid-cols-2">
                    <div class="border-2 rounded  border-gray-300 m-2">
                        <h1 class="bg-gray-300 pl-3"> Team 1</h1>
                        <div class="p-3 text-white  ">
                            <p>hilal</p>
                            <p>jiwon</p>
                        </div>
                    </div>
                    <div class="border-2 rounded  border-gray-300 m-2">
                        <h1 class="bg-gray-300 pl-3"> Team 1</h1>
                        <div class="p-3 text-white  ">
                            <p>hilal</p>
                            <p>jiwon</p>
                        </div>
                    </div>
                    <div class="border-2 rounded  border-gray-300 m-2">
                        <h1 class="bg-gray-300 pl-3"> Team 1</h1>
                        <div class="p-3 text-white  ">
                            <p>hilal</p>
                            <p>jiwon</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>


</body>


</html>
