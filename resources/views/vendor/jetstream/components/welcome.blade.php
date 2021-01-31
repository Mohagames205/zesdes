<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <!--
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>
    -->

    <div class="mt-4 text-2xl">
        Welkom, {{ auth()->user()->name }}
    </div>

    <div class="mt-6 text-gray-500">
        Lees eerst eventjes aandachtig de regels voordat je verder gaat. Druk daarna op "begrepen" om verder te gaan.<br>
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25">
    <div class="p-6">
        <div class="flex items-center">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"  width="18px" height="18px"><g><g><g><path d="M11.88,9.14c1.28,0.06,1.61,1.15,1.63,1.66h1.79c-0.08-1.98-1.49-3.19-3.45-3.19C9.64,7.61,8,9,8,12.14 c0,1.94,0.93,4.24,3.84,4.24c2.22,0,3.41-1.65,3.44-2.95h-1.79c-0.03,0.59-0.45,1.38-1.63,1.44C10.55,14.83,10,13.81,10,12.14 C10,9.25,11.28,9.16,11.88,9.14z M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8 s3.59-8,8-8s8,3.59,8,8S16.41,20,12,20z"/></g></g></g></svg>

            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Geen copyrighted foto's</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-base text-gray-500">
                De geuploade foto mag niet gecopyright zijn, dit betekent dus dat het verboden is om foto's te uploaden van andere mensen zonder hun toestemming (foto's van leerkrachten ook). Als dit toch het geval is, dan wordt de foto afgewezen en zal deze niet in de gallerij staan.
            </div>

            <a href="https://nl.wikipedia.org/wiki/Copyright">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700 transform hover:translate-x-1.5 transition ease-in-out">
                        <div>Lees meer over copyright</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 "><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <a href="/upload">
        <x-jet-button>Begrepen!</x-jet-button>
    </a>

</div>
