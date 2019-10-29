<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/bulma/css/bulma.min.css">
        <title>OTP App</title>
        <!-- Fonts -->
        <style>
            @font-face {
              font-family: 'Quicksand';
              font-style: normal;
              font-weight: 400;
              src: local('Quicksand'), local('Quicksand-Regular'), url('/fonts/Quicksand-Regular.ttf') format('truetype');
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Quicksand', sans-serif;
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
        </style>
    </head>
    <body>
        <div id="app">
            <section class="section has-text-centered">
                <div class="container">
                      <div>
                          <h1 class="title has-text-centered">
                            otp-app
                          </h1>
                          <p class="subtitle has-text-centered">
                            browser otp generator
                          </p>
                      </div>
                </div>
            </section>
            <one-time-password></one-time-password>
            <section class="section">
                <div class="container">
                    <div class="columns has-text-centered has-text-info">
                        <param-column></param-column>
                        <param-column></param-column>
                    </div>
                </div>
            </section>
            <inputs></inputs>
        </div>
    <script type="text/javascript" src="js/app.js"></script>            
    </body>
</html>
