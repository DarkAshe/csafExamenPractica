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
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-left lg:col-start-1">LOGO</div>
                    <div class="lg:flex lg:justify-center lg:col-start-2 hidden"></div>
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
                        <div class="pt-3 sm:pt-5 h-screen">
                            <h1 class="text-6xl text-center">PLATFORMA DE PROMOVARE</h1>
                            <p class="mt-4 text-1xl text-center">Centrul Republican de Învățământ din subordinea
                                Ministerului Educației Publice Platforma unică servește la popularizarea celor mai bune
                                practici ale pedagogilor</p>
                            <div class="flex items-center justify-center gap-3 mt-20">
                                <button type="submit"
                                    class=" bg-slate-400 text-black py-4 px-8 border border-gray rounded float-right ">
                                    Inscriete
                                </button>
                                <button type="submit"
                                    class="bg-transparent py-4 px-8 border border-white rounded float-right ">
                                    Autentificare
                                </button>
                            </div>
                        </div>

                        <div class="-mt-24">
                            <div class="grid gap-6 lg:grid-cols-5 lg:gap-8">
                                <div class=" col-span-3 justify-center flex flex-col">
                                    <p class="mt-4 text-left text-4xl">We connect our customers with the best, and help
                                        them keep up-and stay open.</p>
                                    <p class="mt-4 text-left text-1xl bg-slate-200 rounded py-5 px-5"
                                        style="width: 30rem">We connect our customers with the best.</p>
                                    <p class="mt-4 text-left text-1xl bg-slate-200 rounded py-5 px-5"
                                        style="width: 30rem">Advisor success customer launch party.</p>
                                    <p class="mt-4 text-left text-1xl bg-slate-200 rounded py-5 px-5"
                                        style="width: 30rem">Business-to-consumer long tail.</p>
                                </div>
                                <div class="pt-3 sm:pt-5 col-span-2">
                                    <img class="" src="{{ URL('images/welcomeImage1.png') }}">
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <h1 class="text-4xl text-center pb-12">Produse metodice</h1>
                            <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
                                <div class="hover:bg-slate-300 transition rounded">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 font-bold px-5">Dezvoltarea lecției</p>
                                    <p class="mt-2 text-sm px-5">Este dezvoltarea unei clase de eșantion de o oră de nivel
                                        înalt sau a unui training de grup, bazat pe experiențe internaționale,
                                        desfășurat cu metode interactive avansate.</p>
                                </div>
                                <div class=" hover:bg-slate-300 transition rounded">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 font-bold px-5">Lectie Video</p>
                                    <p class="mt-2 text-sm px-5 pb-5">Un videoclip cu o durată de până la 7 minute și un volum de
                                        cel mult 300 mb, care explică o prezentare a unei lecții sau o experiență
                                        metodică inovatoare personală care luminează metodele interactive în clasă sau
                                        activități extracurriculare. Nu contează pe ce dispozitiv a fost făcut
                                        videoclipul.</p>
                                </div>
                                <div class=" hover:bg-slate-300 transition rounded">
                                    <img src="{{ URL('images/person.png') }}">
                                    <p class="mt-4 font-bold px-5">Ghid metodic</p>
                                    <p class="mt-2 text-sm px-5">Manuale educaționale metodice; scrisoare de recomandare;
                                        brosurile sunt trimise in format pdf.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-3 sm:pt-5">
                            <h1 class="text-4xl text-center">Exemple lucrari</h1>
                            <div class="grid gap-6 lg:grid-cols-3 lg:gap-8">
                                @for ($i = 0; $i < 3; $i++)
                                    <div
                                        class="mt-3 sm:mt-5 bg-purple-700 relative flex flex-col items-center justify-center">
                                        <img src="{{ URL('images/imagePlaceholder.png') }}"
                                            class="max-w-full max-h-full object-cover hover:opacity-30 transition">
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
