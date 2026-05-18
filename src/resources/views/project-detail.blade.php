<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">

    <section class="px-6 md:px-20 py-20 max-w-5xl mx-auto">

        <a href="/#projects" class="text-blue-400 mb-10 inline-block">
            ← Back to Projects
        </a>

        <div class="mb-6">
            <span class="text-xs bg-blue-500/20 text-blue-400 px-3 py-1 rounded-full">
                {{ $project->progress_status }}
            </span>
        </div>

        <h1 class="text-5xl font-bold mb-6">
            {{ $project->title }}
        </h1>

        <p class="text-gray-400 text-lg leading-8 mb-10">
            {{ $project->short_description }}
        </p>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 mb-8">
            <h2 class="text-3xl font-bold mb-4">Analisis Masalah</h2>
            <p class="text-gray-400 leading-8">
                {{ $project->problem_analysis }}
            </p>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 mb-8">
            <h2 class="text-3xl font-bold mb-4">Kebutuhan Sistem</h2>
            <p class="text-gray-400 leading-8">
                {{ $project->system_requirements }}
            </p>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8 mb-8">
            <h2 class="text-3xl font-bold mb-4">Tech Stack</h2>
            <p class="text-gray-400 leading-8">
                {{ $project->tech_stack }}
            </p>
        </div>

        <div class="bg-zinc-900 border border-zinc-800 rounded-3xl p-8">
            <h2 class="text-3xl font-bold mb-4">ERD / Flowchart</h2>
            <p class="text-gray-400 leading-8">
                Diagram ERD dan flowchart digunakan untuk menggambarkan rancangan database
                serta alur sistem Endfield Factory Blueprint System.
            </p>
        </div>

    </section>

</body>
</html>