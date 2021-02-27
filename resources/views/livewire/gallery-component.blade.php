<div>
    <div class="banner">
        <x-jet-application-logo></x-jet-application-logo>

    </div>


        <div class="photos" id="photos">
                @foreach($pictures as $picture)
                    <div class="foto-container">
                        <img src="{{ asset('/pictures/' . $picture->filename) }}" width="500px" height=auto/>
                    </div>
                @endforeach
        </div>

    {{ $pictures->links() }}
</div>
