<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite('resources/css/app.css')

</head>

<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black">
        <img id="background" class="absolute top-0 w-full object-cover" style="height: 100vh"
            src="{{ URL('images/header.png') }}" />
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl min-h-screen">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3 text-white">
                    <div class="flex lg:justify-center lg:col-start-2"></div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                        <div class="pt-3 sm:pt-5 text-white h-screen">
                            <h1 class="text-6xl text-center">THIS IS SPECTRUM</h1>
                            <p class="mt-4 text-2xl text-center">Responsive. Retina Ready. Sketch Support</p>
                            <div class="flex items-center justify-center gap-3 mt-20">
                                <button type="submit"
                                    class="bg-white text-black py-4 px-8 border border-white rounded float-right ">
                                    START NOW
                                </button>
                                <button type="submit"
                                    class="bg-transparent text-white py-4 px-8 border border-white rounded float-right ">
                                    LEARN MORE
                                </button>
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <h1 class="text-4xl text-center">ABOUT US</h1>
                            <hr class="h-1 w-16 mx-auto rounded my-4 bg-black">
                            <p class="mt-4 text-2xl text-center">Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</p>
                            <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                                <div class="pt-3 sm:pt-5">
                                    <p class="mt-4  text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <p class="mt-4  text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <div class="grid gap-6 lg:grid-cols-4 lg:gap-8">
                                <div class="pt-3 sm:pt-5">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 text-center">Person Name</p>
                                    <p class="mt-2 text-center font-bold">Person Status</p>
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 text-center">Person Name</p>
                                    <p class="mt-2 text-center font-bold">Person Status</p>
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 text-center">Person Name</p>
                                    <p class="mt-2 text-center font-bold">Person Status</p>
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 text-center">Person Name</p>
                                    <p class="mt-2 text-center font-bold">Person Status</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <h1 class="text-4xl text-center">LATEST WORKS</h1>
                            <hr class="h-1 w-16 mx-auto rounded my-4 bg-black">
                            <livewire:welcome />
                            <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
                                @for ($i = 0; $i < 9; $i++)
                                    <div class="mt-3 sm:mt-5 bg-purple-700 relative flex flex-col items-center justify-center">
                                        <img src="{{ URL('images/imagePlaceholder.png') }}" class="max-w-full max-h-full object-cover hover:opacity-30 transition">
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <div class="mb-4">
                                <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                                    <h2
                                        class="font-heading mb-4 font-bold tracking-tight text-gray-900 text-3xl sm:text-5xl">
                                        Get in Touch
                                    </h2>
                                    <hr class="h-1 w-16 mx-auto rounded my-4 bg-black">
                                    <p class="mx-auto mt-4 max-w-3xl text-xl text-gray-600 dark:text-slate-400">Lorem
                                        Lorem Lorem Lorem Lorem Lorem
                                    </p>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-3 ">
                                <div class="pr-6">
                                    <ul class="mb-6 md:mb-0">
                                        <li class="flex">
                                            <div class="flex h-10 w-10 items-center justify-center rounded text-black">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-6 w-6">
                                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                    <path
                                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 mb-4">
                                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Our
                                                    Address
                                                </h3>
                                                <p class="text-gray-600 dark:text-slate-400">1230 Maecenas Street
                                                    Donec Road</p>
                                                <p class="text-gray-600 dark:text-slate-400">New York, EEUU</p>
                                            </div>
                                        </li>
                                        <li class="flex">
                                            <div class="flex h-10 w-10 items-center justify-center rounded text-black">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-6 w-6">
                                                    <path
                                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                    </path>
                                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 mb-4">
                                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">
                                                    Contact
                                                </h3>
                                                <p class="text-gray-600 dark:text-slate-400">Mobile: +1 (123)
                                                    456-7890</p>
                                                <p class="text-gray-600 dark:text-slate-400">Mail:
                                                    tailnext@gmail.com</p>
                                            </div>
                                        </li>
                                        <li class="flex">
                                            <div class="flex h-10 w-10 items-center justify-center rounded text-black">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="h-6 w-6">
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                    <path d="M12 7v5l3 3"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-4 mb-4">
                                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 ">
                                                    Working
                                                    hours</h3>
                                                <p class="text-gray-600 dark:text-slate-400">Monday - Friday: 08:00
                                                    - 17:00</p>
                                                <p class="text-gray-600 dark:text-slate-400">Saturday &amp; Sunday:
                                                    08:00 - 12:00</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <form id="contactForm" class="col-span-2">
                                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                                        <input type="text" id="name" autocomplete="given-name"
                                            placeholder="YOUR NAME"
                                            class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md  sm:mb-0"
                                            name="name">

                                        <input type="email" id="email" autocomplete="email"
                                            placeholder="YOUR E-MAIL"
                                            class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md  sm:mb-0"
                                            name="email">

                                        <input type="text" id="subject" autocomplete="subject"
                                            placeholder="YOUR SUBJECT"
                                            class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md  sm:mb-0"
                                            name="subject">

                                        <input type="text" id="companyName" autocomplete="companyName"
                                            placeholder="COMPANY NAME"
                                            class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md sm:mb-0"
                                            name="companyName">

                                        <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="WRITE YOUR MESSAGE"
                                            class="mb-2 w-full border border-black py-2 pl-2 pr-4 shadow-md sm:mb-0 col-span-2"></textarea>

                                        <div class="text-center flex col-span-2 items-center">
                                            <button type="submit"
                                                class="px-6 py-3 font-xl border border-black sm:mb-0">SEND MESSAGE
                                            </button>
                                            <p class="pl-5"> * We'll contact you as fast as possible. We don't reply
                                                on Monday.</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <footer class="py-16 text-center text-sm bg-violet-900 text-white mt-5" style="width: 100%">
                <div class="flex space-x-4 items-center justify-center ">
                    <div class="flex items-center justify-center w-8 h-8 border-2 border-white rounded-full">
                        <i class="fab fa-twitter text-white text-1xl"></i>
                    </div>
                    <div class="flex items-center justify-center w-8 h-8 border-2 border-white rounded-full">
                        <i class="fab fa-twitter text-white text-1xl"></i>
                    </div>
                    <div class="flex items-center justify-center w-8 h-8 border-2 border-white rounded-full">
                        <i class="fab fa-twitter text-white text-1xl"></i>
                    </div>
                    <div class="flex items-center justify-center w-8 h-8 border-2 border-white rounded-full">
                        <i class="fab fa-twitter text-white text-1xl"></i>
                    </div>
                </div>
                <hr class="h-1 w-16 mx-auto rounded my-4 bg-white">
                2015 STARTUP, DESIGNED BY SHAPEDTHEME
            </footer>
        </div>
    </div>
</body>

</html>
