<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RajMahal</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c9ff9b;
                color: rgba(0, 0, 0, 0.99);
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 120vh;
                margin: 0;
            }

            .full-height {
                height: 140vh;
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
                font-size: 82px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 20px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
               <!--<div><img src="/fig/Rajmahalfc.jpg" Style=" width:600px; height:350px;" class="pt-20px"></div> --!>
                <video width="640" height="480" controls="">
                    <source src="{{URL::asset("RAJMAHALFOODCOURT.mp4")}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="title m-b-md">
                    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
                    <h3 style="color:red; font-family: Lobster, Monospace;">RajMahal Food Court</h3>
                </div>

                <div class="links">
                    <a>CHICKEN HUT</a>
                    <a>Raj Darbar</a>
                    <a>Burger Time</a>
                    <a>Ice Time</a>
                    <a>Grand Fish</a>
                    <a>SE Mexicano</a>
                </div>
                <div>
                   <h3>About</h3>
                </div>
                <div>
                    <div> Our business is to built on the philosophy to provide an unparalleled experience for our guests and providing a learning and nurturing climate for staffs by maintaining the highest workplace standard and integrity.</div>
                    <div> We take pride in setting new standards for best food better mood by providing personalized and attentive service to our guests with extraordinary features.</div>
                    <div> We try our best to maintain food quality. Day by day we are adding new foods in our food court. We have planned to give more service to our guests. </div>
                    <div> It started its journey on 02 June 2019 with a dialogue of "Best Food Better Mood". The Food Court opens every day from 11:00 AM to 11:00 PM.</div>
                    <div>We have 06 shops named Raj Darbar, Chicken Hut, Burger Time, Ice Time, Grand Fish, SE Mexicano.</div>
                    <div> Raj Mahal is located at 69-70, M A Bari Street, Sonadanga. Our location is so easy to find out. If anyone wants to come from Gollamari he has to go straight ahead to Sonadanga Bus Stand. After a few steps later you can find us at the left-hand side.</div>
                </div>
            </div>
        </div>
    </body>
</html>
