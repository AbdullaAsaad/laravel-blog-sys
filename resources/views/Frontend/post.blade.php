<x-app-layout title="post">
    <div class="flex justify-between container mx-auto">
        <div class="w-full lg:w-8/12">
            <div class="mt-6">
                <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                    <div class="pb-3">
                        <h1 class="text-3xl">{{ $post->title }}</h1>
                        <p class="font-light text-gray-600 py-3">{{ $post->created_at->diffForHumans() }}</p>
                        <img src="{{ $post->image_path }}" class="w-100">

                        <p class="mt-2 text-gray-600 pt-2">
                            {{$post->desc }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span
                            class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded">{{ $post->tag->name }}</span>
                        <span class="flex items-center">
                            <h1 class="text-gray-700 font-bold">
                                @if ($post->user_id)
                                    {{ $post->user->name }}
                                @else 
                                {{ auth()->user()->name }}
                                @endif
                            </h1>
                        </span>
                    </div>
                </div>
            </div>
        </div>
       {{-- <x-front-tag /> --}}
    </div>
</x-app-layout>