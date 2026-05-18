<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrew Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white overflow-x-hidden">

    <!-- BACKGROUND EFFECT -->
    <div class="fixed inset-0 -z-10">

        <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-blue-500/10 blur-3xl rounded-full">
        </div>

        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-purple-500/10 blur-3xl rounded-full">
        </div>

        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]">
        </div>

    </div>

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 w-full bg-black/50 backdrop-blur border-b border-zinc-800 z-50">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-xl font-bold text-white">
                Andrew Portfolio
            </h1>

            <div class="flex items-center gap-6 text-sm text-gray-300">

                <a href="#about" class="hover:text-white transition">
                    About
                </a>

                <a href="#projects" class="hover:text-white transition">
                    Projects
                </a>

                <a href="#contact" class="hover:text-white transition">
                    Contact
                </a>

                <a href="/admin"
                   class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-xl text-white transition">
                    Dashboard
                </a>

            </div>

        </div>

    </nav>

    <!-- HERO -->
    <section class="min-h-screen pt-32 flex flex-col justify-center items-center text-center px-6">

        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-blue-500 mb-6 bg-zinc-900/70 backdrop-blur shadow-2xl shadow-blue-500/20">
            <img src="/profile.jpg"
                 alt="Profile Photo"
                 class="w-full h-full object-cover">
        </div>

        <h1 class="text-5xl md:text-7xl font-bold mb-4">
            Andrew Novan Then
        </h1>

        <p class="text-gray-400 text-lg md:text-xl mb-2">
            20240801024
        </p>

        <p class="text-gray-400 text-lg md:text-xl mb-8">
            Student • Laravel • Filament • MariaDB
        </p>

        <a href="#about"
           class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-2xl shadow-lg shadow-blue-500/30">
            View Profile
        </a>

    </section>

    <!-- ABOUT -->
    <section id="about" class="px-6 md:px-20 py-20">

        <h2 class="text-4xl font-bold mb-10">
            Biodata
        </h2>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl">

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-3xl p-8 shadow-xl">

                <h3 class="text-2xl font-bold mb-6">
                    Profile
                </h3>

                <div class="space-y-4 text-gray-400">

                    <p>
                        <span class="text-white font-semibold">Nama:</span>
                        Andrew Novan Then
                    </p>

                    <p>
                        <span class="text-white font-semibold">NIM:</span>
                        20240801024
                    </p>

                    <p>
                        <span class="text-white font-semibold">Program Studi:</span>
                        Teknik Informatika
                    </p>

                    <p>
                        <span class="text-white font-semibold">Universitas:</span>
                        Universitas Esa Unggul
                    </p>

                </div>

            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-3xl p-8 shadow-xl">

                <h3 class="text-2xl font-bold mb-6">
                    About Me
                </h3>

                <p class="text-gray-400 leading-8">
                    Website ini dibuat sebagai portfolio personal sekaligus media showcase
                    untuk menampilkan project akhir saya, yaitu Endfield Factory Blueprint System.
                    Project ini dikembangkan menggunakan Laravel, Filament, Docker, dan MariaDB
                    sebagai implementasi sistem berbasis web modern.
                </p>

            </div>

        </div>

        <h3 class="text-2xl font-bold mt-12 mb-6">
            Skills & Tech Stack
        </h3>

        <div class="grid md:grid-cols-4 gap-4 max-w-4xl">

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                Laravel
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                Filament
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                MySQL
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                Tailwind CSS
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                Docker
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                REST API
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                GitHub
            </div>

            <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-2xl p-5 shadow-xl">
                VS Code
            </div>

        </div>

    </section>

    <!-- PROJECTS -->
    <section id="projects" class="px-6 md:px-20 py-20">

        <h2 class="text-4xl font-bold mb-10">
            Showcase Project
        </h2>

        <div class="grid md:grid-cols-2 gap-6">

            @foreach ($projects as $project)

                <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-3xl p-6 shadow-xl">

                    <div class="mb-4">
                        <span class="text-xs bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full">
                            {{ $project->progress_status }}
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold mb-3">
                        {{ $project->title }}
                    </h3>

                    <p class="text-gray-400 mb-5">
                        {{ $project->short_description }}
                    </p>

                    <div class="text-sm text-gray-500 mb-5">
                        {{ $project->tech_stack }}
                    </div>

                    <div class="text-sm text-gray-400 leading-7">
                        {{ $project->problem_analysis }}
                    </div>

                    <a href="/projects/{{ $project->id }}"
                       class="inline-block mt-6 text-blue-400 hover:text-blue-300">
                        View Detail →
                    </a>

                </div>

            @endforeach

        </div>

    </section>

    <!-- CONTACT -->
    <section id="contact" class="px-6 md:px-20 py-20">

        <h2 class="text-4xl font-bold mb-10">
            Contact
        </h2>

        <div class="bg-zinc-900/70 backdrop-blur border border-zinc-800 rounded-3xl p-8 max-w-2xl shadow-xl">

            @if (session('success'))
                <div class="mb-4 bg-green-500/20 text-green-400 p-4 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text"
                           name="name"
                           placeholder="Your Name"
                           required
                           class="w-full bg-zinc-800 border border-zinc-700 rounded-xl p-4 outline-none">
                </div>

                <div class="mb-4">
                    <input type="email"
                           name="email"
                           placeholder="Your Email"
                           required
                           class="w-full bg-zinc-800 border border-zinc-700 rounded-xl p-4 outline-none">
                </div>

                <div class="mb-6">
                    <textarea name="message"
                              rows="5"
                              placeholder="Your Message"
                              required
                              class="w-full bg-zinc-800 border border-zinc-700 rounded-xl p-4 outline-none"></textarea>
                </div>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-2xl shadow-lg shadow-blue-500/30">
                    Send Message
                </button>

            </form>

        </div>

    </section>

    <!-- FOOTER -->
    <footer class="border-t border-zinc-800 py-8 text-center text-gray-500 text-sm">
        © 2026 Andrew Novan Then — Endfield Factory Blueprint System
    </footer>

</body>
</html>