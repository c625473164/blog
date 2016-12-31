<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/Paper.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
                background: -webkit-linear-gradient(-45deg, #8363a1 0%, #74a8c3 100%);
                background: linear-gradient(135deg, #8363a1 0%, #74a8c3 100%);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                z-index: 1;
            }

            .title {
                font-size: 14px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            svg{
                fill: rgba(255, 255, 255, 0.7);

            }
            .go{
                font-size: 12px;

                font-weight: 600;
                color: #cce1e1
            }
            .video-box{
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;

            }
            video{
                width: 100%;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="video-box">
                <div class="video">
                    <video controls loop="loop" autoplay="autoplay" muted="true" preload="auto">
                        <source src="video/mp4.mp4" type="video/mp4">

                    </video>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="message">
                    <svg width="44" height="49" xmlns="http://www.w3.org/2000/svg">
                        <g class="hk-logo" fill-rule="evenodd">
                            <path d="M11 42l5-5-5-5v10zm19.8714-19.6866c-.985-.9903-2.794-2.1705-5.816-2.1705-3.314 0-6.7258.8565-9.1665 1.6458V8H11v21.063l3.4534-1.5543C14.509 27.4837 20.0847 25 25.0554 25c2.4824 0 3.0318 1.3618 3.0556 2.4954V42H33V27.4286c.003-.311-.0258-3.0023-2.1286-5.1152zM24 16h5.143c2.3257-2.523 3.51-5.2037 3.857-8h-5.143c-.567 2.7902-1.836 5.4615-3.857 8z"></path>
                            <path d="M4.6118.0957C2.2373.0957.11 2.9344.11 5.32v39.36C.11 47.0656 2.9255 49 5.3 49h34.4c2.3746 0 4.3-1.9344 4.3-4.32V5.32C44 2.9344 41.4268.0957 39.0522.0957H4.6118zM41 44.089C41 45.1423 40.148 46 39.1 46H4.9C3.8526 46 3 45.1424 3 44.089V4.911C3 3.857 3.8526 3 4.9 3h34.2c1.048 0 1.9.857 1.9 1.911v39.178z"></path></g></svg>
                    <div class="title"> There's nothing here, yet. </div>
                    <a href="home" class="btn btn-primary go">Build something amazing</a>

                </div>

            </div>
        </div>
    </body>
</html>

<script>
    
</script>
