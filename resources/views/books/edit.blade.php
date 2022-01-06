<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 bg-white border-b border-indigo-400 ">
                {{--                <form method="post" action="/">--}}
                <form method="post" action="{{ route('books.update', $book ?? '') }}">
                {{method_field('put')}}

                @csrf <!-- {{ csrf_field() }} -->
                    <input type="text" name="title" placeholder="Titre du livre" class="p-6"
                           value="{{$book -> title ?? ''}}"/>
                    <br>
                    <input type="text" name="author" placeholder="Auteur" class="p-6"
                           value="{{$book -> author ?? ''}}"/>
                    <br>
                    <input type="number" name="page_number" placeholder="Nombre de pages" step="10" class="p-6"
                           value="{{$book -> page_number ?? ''}}"/>
                    <button type="submit">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

