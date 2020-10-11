<x-layouts.app title="Blog">
    <div class="container mx-auto mt-8 space-y-16">
        <h2 class="text-3xl">Our Blog Posts</h2>
        @foreach ($posts as $post)
        <div class="flex w-full border rounded">
            @if($post->image)
            <img class="rounded-l w-80 mr-8"
                 src="{{ Storage::disk('s3')->url($post->image) }}">
            @endif
            <div class="p-4 w-full">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl"> {{ $post->title }}</h3>
                    <span class="text-sm text-gray-300">Published {{ $post->published_at->diffForHumans() }} by
                        {{ $post->byline }}</span>
                </div>
                <div>
                    {!! $post->excerpt !!}
                </div>
            </div>

        </div>
        @endforeach
    </div>

</x-layouts.app>
