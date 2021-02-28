<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery beta</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>


        body {
            font-family: 'Nunito';
            margin: 60px 60px 0;
        }


        .banner {
            margin-bottom: 50px;

        }

        .banner-content {

            border-width: medium;
            border-color: black;
            border-style: solid;

            padding: 50px;

            margin-left: auto;
            margin-right: auto;
            width: 50vw;
            text-align: center;
        }

        .banner-content p {
            text-align: justify;
            word-wrap: break-word;
        }

        img {
            border-radius: 3px;
        }

        .foto-container {
            overflow: hidden;
            transition: 0.5s;
            margin: 10px;
            display: inline-block;
            width: fit-content;
            min-width: fit-content;
            padding: 10px;
            border-radius: 5px;
            -webkit-box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.10);
            -moz-box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.10);
            box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.10);
        }

        .foto-container:hover {
            -webkit-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.15);
        }

        .photos {
            /* Prevent vertical gaps */
            line-height: 0;

            -webkit-column-count: 3;
            -webkit-column-gap:   0px;
            -moz-column-count:    3;
            -moz-column-gap:      0px;
            column-count:         3;
            column-gap:           0px;
        }

        .photos img {
            /* Just in case there are inline attributes */
            width: 100% !important;
            height: auto !important;
        }


        @media (max-width: 800px) {


            .banner-content {
                padding: 10px;
                margin: 10px;
                width: unset;
            }

            .foto-container {
                padding: 0px;
            }

            body {
                margin: 0px;
            }

            .photo-group {
                display: unset;
            }
        }

        @media (max-width: 1200px) {
            .photos {
                -moz-column-count:    3;
                -webkit-column-count: 3;
                column-count:         3;
            }
        }
        @media (max-width: 1000px) {
            .photos {
                -moz-column-count:    2;
                -webkit-column-count: 2;
                column-count:         2;
            }
        }
        @media (max-width: 800px) {
            .photos {
                -moz-column-count:    2;
                -webkit-column-count: 2;
                column-count:         2;
            }
        }
        @media (max-width: 400px) {
            .photos {
                -moz-column-count:    1;
                -webkit-column-count: 1;
                column-count:         1;
            }
        }

    </style>

    @livewireStyles
</head>
<body class="antialiased">

        <livewire:gallery-component />

        @livewireScripts


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

</body>
</html>
