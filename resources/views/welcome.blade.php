<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Histobourg-API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            header > img {
                height: 18%;
                width: 50%;
                right: 0%;
                top: 0px;
                z-index: 1;
                position: fixed;
            }
            img {
                vertical-align: middle;
            }

            header {
                top: 0%;
                height: 15.9%;
                width: 50%;
                position: fixed;
                background-color: #fcc200;
                z-index: 1;
            }
        </style>
    </head>
    <header>
        <img src="{{URL::asset('image/BourgoinHeader.png')}}" alt="Menu">
        <nav>
            <div class="container">
                <div class="navbar-header">
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                </div>
            </div>
        </nav>
    </header>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Histobourg-API
                </div>

                <div class="links">
                    <a href="/docs">Docs</a>

                    <a href="https://github.com/slydar/Histobourg-API">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
