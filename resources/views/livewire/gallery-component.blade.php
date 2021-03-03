<div>

    <div class="banner">
        <div class="banner-content">

            <x-jet-application-logo ></x-jet-application-logo>

            <p>Wil je zelf een foto uploaden? Maak dan nu een account aan en upload al je favoriete herinneringen!</p>
            <div class="mt-5">
                @if(!Auth::check())
                    <a href="/register">
                        <x-jet-button>Account aanmaken</x-jet-button>
                    </a>
                    <a href="/login">
                        <x-jet-button>Inloggen</x-jet-button>
                    </a>
                @else
                    <a href="/dashboard">
                        <x-jet-button>Uploadzone</x-jet-button>
                    </a>
                @endif
            </div>

        </div>
    </div>


        <div class="photos" id="photos">
                @foreach($pictures as $picture)
                    <div class="foto-container">
                        <img data-enlargeable style="cursor: zoom-in" src="{{ asset('/pictures/' . $picture->filename) }}" width="500px" height=auto alt="foto">
                    </div>
                @endforeach
        </div>
    <br>
    <hr>
    <div class="mb-4 mt-4">
    {{ $pictures->links() }}
    </div>

    <script>
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function(){
            var src = $(this).attr('src');
            var modal;
            function removeModal(){ modal.remove(); $('body').off('keyup.modal-close'); }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.65) url('+src+') no-repeat center',
                backgroundSize: 'contain',
                width:'100%', height:'100%',
                position:'fixed',
                zIndex:'10000',
                top:'0', left:'0',
                cursor: 'zoom-out'
            }).click(function(){
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e){
                if(e.key==='Escape'){ removeModal(); }
            });
        });
    </script>
</div>
