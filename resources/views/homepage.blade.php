@extends('layout')
@section('content')
    <style>
        .home {
            margin-left: 18rem;
            margin-right: 18rem;
        }

        .banner img {
            width: 100%;
        }

        .banner-grid-display {
            display: grid;
            grid-template-columns: 70% 30%;
        }

        .banner-grid-display3 {
            display: grid;
            grid-template-columns: 30% 70%;
        }

        .banner-grid-display3 img {
            width: 100%;
        }

        .banner-grid-display img {
            width: 100%;
        }

        .pr-8 {
            padding-right: 8rem;
        }

        .pl-8 {
            padding-left: 8rem;
        }

    </style>
    <div class="home justify-content-center text-center">
        <h3 class="display-4">Level Up Your</h3>
        <h3 class="display-4 pb-4">Planting Game</h3>
    </div>
    <div class="home banner text-center">
        <img
            src="https://media.istockphoto.com/photos/startup-successful-sme-small-business-entrepreneur-owner-asian-woman-picture-id1262794468?b=1&k=20&m=1262794468&s=170667a&w=0&h=yMBKUaM80T7skmhaHiwDSUQ1h9xpciQEhZSyinsKQII=">
        <h4 class="pt-5">One-stop boutique for all your home and office gardening needs</h4>
        <p>We provide wide variety of plants and gardenning service.</p>
    </div>
    <div class="home banner2 mt-5 pt-5">
        <div class="banner-grid-display align-items-center">
            <div>
                <h3>Be a plant parent now!</h3>
                <p class="pr-8">Beautify your surroundins by adding a touch of live plant. We provide any plant to
                    suits your
                    environment, plant-medium, and we will guide you thorugh every step in becoming plant parent.</p>
            </div>
            <div>
                <img
                    src="https://www.succulentsandsunshine.com/wp-content/uploads/2021/05/rotting-propeller-succulent-dying-278x417@2x.jpg">
            </div>
        </div>
    </div>

    <div class="home banner3 pt-5 mt-5">
        <div class="banner-grid-display3 align-items-center">
            <div>
                <img
                    src="https://www.succulentsandsunshine.com/wp-content/uploads/2021/05/How-to-care-for-and-propagate-Opuntia-Pink-Frost-756x1134.jpg">
            </div>
            <div class="pl-5">
                <h3>Professional plant care</h3>
                <p>Make a great working environment by having plants around to provide fresh air and
                    joyous feelings. We will take care for everything in your office from installation to maintanance.</p>
            </div>
        </div>
    </div>

@endsection
