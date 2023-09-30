<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                    Team {{ $p }}</span>
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
    <div class="2xl:px-36 px-4 mt-[20px] md:flex sm:flex sm:justify-center">

        <div class="md:block lg:flex sm:block space-x-6">
            <div
                class="block w-[30rem] h-[35rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Inputs</h5>
                <form>
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="search" id="default-search"
                            class="block w-full p-3 pl-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Input Anggota" required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">+</button>
                    </div>
                    <hr class="w-full h-1 mx-auto my-3 bg-gray-400 border-0 rounded md:my-3 dark:bg-gray-700">
                    <div class="bg-gray-300 dark:bg-gray-200 rounded-lg w-full py-2.5 px-4 mb-2">
                        <p class="text-gray-900 break-words dark:text-gray-400">tes</p>
                    </div>
                </form>

            </div>
            <div
                class="block max-w-sm h-[25rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Controller</h5>
                <div class="flex items-center">
                    <h3 class="mr-8">Total Anggota :</h3>
                    <input type="number" id="visitors"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                    <h3 class="ml-1">/6</h3>
                </div>
                <div class="flex items-center mt-4">
                    <h3 class="mr-">Nomor Kelompok :</h3>
                    <input type="number" id="visitors"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                    <h3 class="ml-1">/6</h3>
                </div>
                <div class="flex items-center mt-4">
                    <h3 class="mr-9">Max Anggota :</h3>
                    <input type="number" id="visitors"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required>
                    <h3 class="ml-1">/6</h3>
                </div>
            </div>
            <div
                class="block w-[30rem] h-[35rem] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800  ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Results</h5>

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


</body>


</html>
