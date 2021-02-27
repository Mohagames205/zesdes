<div>

    <div class="banner">
        <div class="banner-content">

            <x-jet-application-logo ></x-jet-application-logo>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed libero id nulla maximus lacinia at non augue. Donec dapibus, sem vitae tempor pharetra, massa libero viverra felis, eget bibendum felis elit vel lectus. Cras finibus cursus fringilla. Proin egestas nunc sed turpis fringilla scelerisque. Quisque est nisl, venenatis quis purus sed, tincidunt hendrerit massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. In vitae feugiat enim. Sed tempor, neque vel vestibulum fermentum, metus odio bibendum ante, in lacinia ex ante sed elit. Nulla porttitor placerat nisl, ut egestas tellus mollis vel. Nulla facilisi. Sed suscipit elit est, id condimentum lectus consectetur eu. In vulputate augue eget nisi pulvinar tristique. Praesent eu imperdiet risus. Maecenas viverra facilisis nibh.</p>
        </div>
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
