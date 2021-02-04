<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Moderatorpaneel
    </h2>
</x-slot>

<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-4 text-2xl">
                       Foto's afwachtend op goedkeuring
                    </div>

                </div>

                <div class="bg-gray-200 bg-opacity-25">
                    <div class="p-6">
                        @if(count($pictures) > 0)
                        <div class="flex flex-wrap gap-6 p-6 justify-center">
                            @foreach($pictures as $picture)
                                <div class="flex-shrink" style="flex-basis: 30%">
                                    <img class="rounded shadow" style="flex-basis: 30%; width: 400px;" src="{{ asset('/pictures/' . $picture->filename) }}" alt="geuploade foto">
                                    <div class="mt-2">
                                        <x-jet-button wire:click="accept({{ $picture->id }})">Accept</x-jet-button>
                                        <x-jet-button wire:click="deny({{ $picture->id }})" class="bg-red-600">Deny</x-jet-button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @else
                        Da's alles! Je bent klaar voor vandaag :)

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
