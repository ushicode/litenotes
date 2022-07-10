<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mb-6">
                <p class="opacity-70"><strong>Created at: </strong> {{ $note->created_at->diffForHumans() }}</p>
                <p class="opacity-70 ml-8"><strong>Updated at: </strong> {{ $note->updated_at->diffForHumans() }}</p>
            </div>
            <div class=" p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h1 class="font-bold text-3xl text-black">{{ $note->title }}</h1>
                <p class="mt-6 text-gray whitespace-pre-wrap">{{ $note->text }}</p>
            </div>
        </div>
       
    </div>
</x-app-layout>
