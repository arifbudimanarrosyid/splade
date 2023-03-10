<div class="min-h-screen bg-gray-100">
    @include('layouts.app-navigation')

    <!-- Page Heading -->
    <header class="bg-white">
        <div class="max-w-3xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main class="sm:pb-5">
        {{ $slot }}
    </main>
</div>
