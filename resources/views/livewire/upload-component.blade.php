<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Upload
    </h2>
</x-slot>
<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

        <div class="mt-4 text-2xl">
            Dag {{ auth()->user()->name }}, ready when you are!
        </div>

    </div>
    <form wire:submit.prevent="save">
    <div class="bg-gray-200 bg-opacity-25">
        <div class="p-6">
            <div class="flex items-center">
                {{-- <input class="p-6" type="file" wire:model="photos" multiple> --}}
                <input wire:model="photos" type="file" name="attachment" id="upload{{ $iteration }}" multiple/>
                <br><br>
                <div wire:loading wire:target="photos">Uploading...</div>
                <br>
                @error('photos.*') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 transition ease-in-out">
            @if(count($photos) > 0)
                <x-jet-button type="submit"> Uploaden!</x-jet-button>
            @else
                <x-jet-button type="submit" disabled> Uploaden!</x-jet-button>
            @endif
        </div>
    </form>
        @if(count($photos) > 0)
            <div class="bg-gray-200 bg-opacity-25 flex gap-4 p-6">
                @foreach($photos as $photo)
                    <div>
                        <img class="rounded transition ease-in-out" width="400" src="{{ $photo->temporaryUrl() }}" alt="geuploade foto">
                        <x-jet-button wire:click="delete({{ array_search($photo, $photos) }})" class="bg-red-600 mt-5"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></x-jet-button>
                        @error('photos.*') oope something went wong @enderror
                    </div>
                @endforeach
            </div>
        @endif
            </div>

        </div>
    </div>


</div>
