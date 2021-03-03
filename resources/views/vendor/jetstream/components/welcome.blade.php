<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <!--
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>
    -->

    <div class="mt-4 text-2xl">
        Welkom op de uploadzone, {{ auth()->user()->name }}
    </div>
    <div class="mt-6 text-gray-500">
        Lees eerst eventjes aandachtig de regels voordat je verder gaat. Druk daarna op "begrepen" om naar de <b>uploadzone</b> te gaan.<br>
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25">
    <div class="p-6">
        <div class="flex items-center">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"  class="w-8 h-8 text-gray-400 " xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"  width="18px" height="18px"><g><g><g><path d="M11.88,9.14c1.28,0.06,1.61,1.15,1.63,1.66h1.79c-0.08-1.98-1.49-3.19-3.45-3.19C9.64,7.61,8,9,8,12.14 c0,1.94,0.93,4.24,3.84,4.24c2.22,0,3.41-1.65,3.44-2.95h-1.79c-0.03,0.59-0.45,1.38-1.63,1.44C10.55,14.83,10,13.81,10,12.14 C10,9.25,11.28,9.16,11.88,9.14z M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8 s3.59-8,8-8s8,3.59,8,8S16.41,20,12,20z"/></g></g></g></svg>

            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Geen copyrighted foto's</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-base text-gray-500">
                De geüploade foto mag niet gecopyright zijn, dit betekent dus dat het verboden is om foto's te uploaden van andere mensen zonder hun toestemming (foto's van leerkrachten ook). Als dit toch het geval is, dan wordt de foto afgewezen en zal deze niet in de gallerij staan.
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
    <hr>
    <div class="p-6">
        <div class="flex items-center">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"  class="w-8 h-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"  width="18px" height="18px"><g><path d="M12,12.75c1.63,0,3.07,0.39,4.24,0.9c1.08,0.48,1.76,1.56,1.76,2.73L18,18H6l0-1.61c0-1.18,0.68-2.26,1.76-2.73 C8.93,13.14,10.37,12.75,12,12.75z M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1 C4.76,14.04,4.39,14,4,14c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85 C21.93,14.21,20.99,14,20,14c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M12,6c1.66,0,3,1.34,3,3 c0,1.66-1.34,3-3,3s-3-1.34-3-3C9,7.34,10.34,6,12,6z"/></g></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Privacy</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-base text-gray-500">
                De foto's die je uploadt zullen toegankelijk zijn door iedereen met de link en de QR code. Dus let goed op met wat je uploadt!
            </div>


        </div>



    </div>
    <hr>
    <div class="p-6">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"  viewBox="0 0 24 24" fill="black"><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm1 13h-2v-2h2v2zm0-4h-2V7h2v6z" opacity=".3"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm-1-5h2v2h-2zm0-8h2v6h-2z"/></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Problemen?</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-base text-gray-500">
                Gelieve problemen op de website zo snel mogelijk te melden aan Mohamed via het contactformulier op <a href="https://mohamedelyousfi.be/#contact" class="text-indigo-500"><b>mijn website</b></a>. <br> Beschrijf zo goed mogelijk het probleem!</b>
            </div>


        </div>



    </div>
</div>

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <a href="/upload">
        <x-jet-button>Begrepen!</x-jet-button>
    </a>

</div>
