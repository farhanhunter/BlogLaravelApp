<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-gray-200">
        <h2 class="mb-1 text-3xl tracking-tight font-extrabold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-slate-500 flex items-center">
            <a href="https://www.instagram.com/fhanadis/" class="mr-2 text-sky-500 hover:underline">{{ $post['author'] }}
            </a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-sky-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
