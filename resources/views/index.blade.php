<x-layouts.app title="Blog">
    <div class="container mx-auto mt-8 space-y-16">
        <h2 class="text-3xl">Our Blog Posts</h2>
        @foreach ($posts as $post)
        <div class="flex w-full border rounded">
            @if($post->image)
            <img class="rounded-l w-80 mr-8"
                 src="{{ Storage::disk('s3')->url($post->image) }}">
            @endif
            <div class="p-4 w-full flex flex-col">
                <div class="flex items-center justify-between">
                    <a href="{{ url()->current() .'/' . $post->slug }}"
                       class="hover:underline hover:text-blue-800">
                        <h3 class="
                       text-2xl"> {{ $post->title }} </h3>
                    </a>
                    <span class="text-sm text-gray-300">Published {{ $post->published_at->diffForHumans() }} by
                        {{ $post->byline }}</span>
                </div>
                <div>
                    {!! $post->excerpt !!}
                </div>
                <div class="mt-auto text-right text-sm text-blue-800">
                    <a href="{{ url()->current() .'/' . $post->slug }}"
                       class="hover:underline">Read More</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</x-layouts.app>
