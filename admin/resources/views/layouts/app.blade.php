<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS dependencies -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-style.css" />
	<link rel="stylesheet" type="text/css" href="css/aos.css" />


	<title>@yield('title')</title>
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.jpg">

    @yield('head')
</head>
<body>



	@yield('content')

	<!-- Javascript -->
	<script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/conditionize.flexible.jquery.js"></script>




    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
            width: '100%',
            height: '100%',
            videoId: '6q3r4Zec-RU',
            playerVars: { 'autoplay': 1, 'playsinline': 1,  'loop' : 1,'controls': 0, 'showinfo': 0  },
            events: {
                'onReady': onPlayerReady
            }
            });
        }

        // 4. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            event.target.mute();
            event.target.playVideo();
        }
    </script>

	<script>

        $('#form').on('submit', function(event) {
            event.preventDefault(); //stops form on submit
            var formData = {};
            $.each($("#form").serializeArray(), function (i, field) {
                formData[field.name] = field.value;
            });
            $.ajax({
                url: 'php/formulario.php',
                data: formData,
                method:'POST',
                success: function(response) {
                    if(response == 'ok') {
                        $(this).hide(); //sets css display:none to form
                        var message = "<p style='font-size: 19px;font-weight: 700;color: #128512;line-height: 27px;'>Tu mensaje fue enviado,<br> pronto nos estaremos comunicando!</p>";
                        $('.formulario').html(message);
                    } else {
                        var message = "<p style='font-size: 19px;font-weight: 700;color: #851212;line-height: 27px;'>Tu mensaje no fue enviado</p>";
                        $('.errors').html(message);

                    }
                }


            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.condicional').conditionize();

        });
    </script>

    @yield('scripts')

</body>
</html>
