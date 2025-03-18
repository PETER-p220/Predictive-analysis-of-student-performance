@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            Search Results for "{{ $query }}"
        </h1>

        <!-- Error Message -->
        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                {{ session('error') }}
            </div>
        @endif

        <!-- Search Form -->
        <form method="GET" action="{{ route('search') }}" class="mb-8 flex justify-center">
            <div class="flex w-full max-w-md">
                <input
                    type="text"
                    name="name"
                    value="{{ $query ?? '' }}"
                    placeholder="Search by name..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                >
                <button
                    type="submit"
                    class="bg-blue-500 text-white px-6 py-2 rounded-r-md hover:bg-blue-600 transition duration-300"
                >
                    Search
                </button>
            </div>
        </form>

        <!-- Results -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @if($results->isEmpty())
                <div class="p-6 text-center text-gray-500">
                    No results found for "{{ $query }}".
                </div>
            @else
                <ul class="divide-y divide-gray-200">
                    @foreach($results as $user)
                        <li class="p-6 hover:bg-gray-50 transition duration-200">
                            <div class="flex items-center space-x-4">
                                <!-- Avatar (optional) -->
                                <div class="flex-shrink-0">
                                    <div class="h-12 w-12 bg-blue-500 text-white rounded-full flex items-center justify-center text-lg font-semibold">
                                        {{ substr($user->name, 0, 1) }}
                                    </div>
                                </div>
                                <!-- User Info -->
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $user->name }}</h3>
                                    <p class="text-gray-600">{{ $user->email }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
