<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($books as $book)
                <div class="p-6 mt-8 bg-white border-b">

                    <p class="bg-indigo-50" style="font-weight: bold"> {{ $book->title }}</p>
                    <p class="bg-pink-50"> {{ $book->author }}</p>
                    <p class="bg-pink-50"> {{ $book->page_number }} pages ! </p>
                </div>
                <div class="mt-1 bg-white border-b border-indigo-400 ">
                    <a href="{{route('books.show', $book->id)}}" class="btn btn-info m-1">Details</a>
                    <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary m-1">Edit</a>
                </div>
                {{--                <a href="{{route('dashboard/books')}}"></a>--}}
            @endforeach
        </div>
    </div>
</x-app-layout>

