<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 bg-white border-b border-indigo-400 ">
                <form action="/dashboard/update/{{$article->id}}" method="post">
                    {{method_field('put')}}
                    <input type="text" name="title" value="{{$article -> title}}"/>
                    <input type="text" name="description" value="{{$article -> description}}"/>
                    {{csrf_field()}}
                    <button type="submit">Modifier</button>
                </form>
            </div>
            <form action="/dashboard/delete/{{$article->id}}" method="post">
                {{method_field('delete')}}
                {{csrf_field()}}
                <button type="submit">Supprimer</button>
            </form>
        </div>
    </div>
</x-app-layout>

