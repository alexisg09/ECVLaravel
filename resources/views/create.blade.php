<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mt-8 bg-white border-b border-indigo-400 ">
                <form method="post" action="{{ route('/dashboard/create/?{title}&{description}') }}">
                    <input type="text" name="title"/>
                    <br>
                    <textarea name="description"></textarea>
                    <button type="submit">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

