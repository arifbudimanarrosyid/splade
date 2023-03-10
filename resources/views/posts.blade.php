<x-guest-layout>
    {{-- <header class="bg-white shadow">
        <div class="max-w-3xl px-4 py-6 mx-auto sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Posts') }}
            </h2>
        </div>
    </header> --}}
    <div class="sm:pt-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden min-h-screen bg-white sm:rounded-lg">
                <div class="p-4 bg-white sm:p-6">

                    <h1
                        class="mt-10 text-4xl font-bold text-gray-800 underline capitalize sm:mt-0 decoration-indigo-500 ">
                        Posts
                    </h1>
                    <h1 class="mt-4 mb-5 text-gray-600 ">Sometimes I write what I have learned, or I will
                        write
                        whatever I like. Use the search bellow to filter by <span class="text-indigo-500">title</span> /
                        <span class="text-indigo-500">excerpt</span> / <span class="text-indigo-500">content</span>.

                    </h1>
                    <div class="flex flex-col w-full gap-5 ">
                        <form class="flex items-center">
                            <div class="relative w-full">
                                <input type="text" id="simple-search" name="search"
                                    class="bg-gray-50 border-2 border-gray-200 text-gray-900 text-sm rounded-lg  block w-full pl-4 p-2.5  "
                                    value="{{ request('search') }}" placeholder="Search by title / excerp / content">
                            </div>
                            <button type="submit"
                                class="p-2.5 ml-2 text-sm font-medium text-white bg-indigo-700 rounded-lg border-2 border-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 ">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                        {{-- <x-splade-form>
                            <div class="relative w-full">
                                <x-splade-input name="search" type="text"
                                    placeholder="Search here ..." value="{{ old('search', request('search')) }}"
                                    />
                            </div>
                        </x-splade-form> --}}

                        @forelse ( $posts as $post)

                        <Link href="{{ route('post', $post->slug) }}" class="w-full p-4 @if ($post->is_featured)
                            bg-orange-50 hover:bg-orange-100
                            @else

                            bg-indigo-50 hover:bg-indigo-100
                            @endif rounded-lg">

                        <div class="flex justify-between ">

                            <h5 class="font-bold tracking-tight text-gray-400 ">
                                {{ $post->category->title }}
                            </h5>
                            <span class="inline-flex items-center text-xs font-medium text-gray-400 ">
                                <svg aria-hidden="true" class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p>{{ $post->published_at->diffForHumans()}}</p>
                            </span>

                        </div>
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-500 ">
                            {{ $post->title }}
                        </h5>
                        <p class="font-normal text-gray-600 ">
                            {{ $post->excerpt }}
                        </p>
                        </Link>
                        @empty
                        <div class="flex p-4 divide-y-2 divide-white rounded-lg bg-gray-50  ">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-col sm:flex-row">
                                        <p class="text-base font-normal text-gray-400">
                                            No post found.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="rounded-lg sm:mt-5 p-4 bg-white sm:p-6">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

</x-guest-layout>
