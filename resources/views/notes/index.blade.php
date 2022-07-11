<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div class=" m-2 mt-0">
                <a href="{{ route('notes.create') }}" class=" btn-link bg-black p-2 text-yellow-300 rounded-md">+ New Note</a>
            </div>
        <div class="inline-flex p-2">
           @forelse ($notes as $note)
           <a href="{{ route('notes.show', $note->uuid) }}">
               <div class="card max-w-xs border-2 border-orange-500 bg-yellow-100 rounded-xl shadow-md   p-2  m-2 ">
                <h2 class="font-bold text-2xl text-black">{{ $note->title }}</h2>
                <p class=" mt-2 text-gray">{{ Str::limit($note->text, 200) }}</p>
                <span class=" block mt-4 text-sm opacity-70 text-gray-600">{{ $note->updated_at->diffForHumans() }}</span>
               </div>
            </a>
               @empty
                <p>You have no notes yet!</p>
           @endforelse
        </div>
        </div>
        </div>
        <div class="flex justify-center p-2">
            <div>
                {{-- For pagination --}}
                {{ $notes->links() }}
            </div>
          </div>
    
    </div>
</x-app-layout>
