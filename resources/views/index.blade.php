<x-layouts.app title="Blog">

    <div class="container mx-auto mt-8 space-y-16">
        @foreach ($posts as $post)
        <div>
            <h2 class="text-2xl"> {{ $post->title }}</h2>
            <div>
                {{ $post->excerpt }}
            </div>
            <div class="p-8 bg-gray-900 min-w-full rounded flex items-center justify-center"
                 style="height:600px">
                <iframe style="width:100%;height:100%;"
                        src="{{ $post->video }}"
                        frameborder="0"
                        webkitAllowFullScreen
                        mozallowfullscreen
                        allowfullscreen></iframe>
            </div>
        </div>
        @endforeach
    </div>

</x-layouts.app>
