<x-layouts.app :title="$post->title">
    <div class="container mx-auto mt-8">
        <div class="flex items-center justify-between">
            <h2 class="text-3xl">
                {{ $post->title }}
            </h2>
            <a href="{{ Str::replaceFirst($post->slug, '',url()->current())}}"
               class="text-blue-800 hover:underline">Back to Blog</a>
        </div>
        @if($post->video)
        <div class="bg-gray-900 flex items-center justify-center h-md rounded p-4 mt-8">
            <iframe src="{{ $post->video }}"
                    class="w-full h-full"
                    frameborder="0"
                    allow="autoplay; fullscreen"
                    allowfullscreen></iframe>
        </div>
        @endif
        <div class="mt-8">
            {!! $post->body !!}
        </div>
    </div>

</x-layouts.app>
