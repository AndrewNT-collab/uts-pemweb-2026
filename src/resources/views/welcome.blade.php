<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrew Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

    <!-- HERO -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6">
        <h1 class="text-5xl md:text-7xl font-bold mb-4">
            Andrew Novan Then
        </h1>

        <p class="text-gray-400 text-lg md:text-xl mb-2">
            20240801024
        </p>

        <p class="text-gray-400 text-lg md:text-xl mb-8">
            Web Developer • Laravel • Filament • MySQL
        </p>

        <a href="#projects"
           class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-2xl">
            View Projects
        </a>
    </section>

    <!-- ABOUT -->
    <section id="about" class="px-6 md:px-20 py-20">
        <h2 class="text-4xl font-bold mb-6">
            About Me
        </h2>

        <p class="text-gray-400 leading-8 max-w-3xl">
            Saya adalah mahasiswa Teknik Informatika yang memiliki minat dalam
            pengembangan website dan sistem berbasis web. Website ini dibuat
            sebagai portfolio personal sekaligus media showcase untuk menampilkan
            project akhir saya, yaitu Endfield Blueprint System.
        </p>

        <div class="grid md:grid-cols-4 gap-4 mt-10 max-w-4xl">
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5">
                Laravel
            </div>
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5">
                Filament
            </div>
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5">
                MySQL
            </div>
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5">
                Tailwind CSS
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
                <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-6">

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

                </div>
            @endforeach
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="px-6 md:px-20 py-20">
        <h2 class="text-4xl font-bold mb-10">
            Contact
        </h2>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 max-w-2xl">

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
                        class="bg-blue-600 hover:bg-blue-700 transition px-6 py-3 rounded-2xl">
                    Send Message
                </button>
            </form>

        </div>
    </section>

</body>
</html>