<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://i.ibb.co/16LXThs/WEB-SHELF.png">
    <title>Creative Technology</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        #logo img {
            width: 100px;
        }

        #logo {
            margin-left: 6rem;
        }

        header {
            line-height: 50px;
        }

        .right-btn {
            margin-right: 6rem;
        }

        footer {
            width: 100%;
            color: grey;
        }

    </style>

</head>

<header class="d-flex justify-content-between pt-2 pb-4">
    <div id="logo" class="d-flex">
        <div style="height: 100px; width:100px;">
        <a href="/"><img src="https://i.ibb.co/JCtkv8p/Createch-Logo-Fix.png" alt="Logo-Createch"></a>
        </div>
     </div>
    <div class="text-dark">
        @if (\Illuminate\Support\Facades\Auth::check())
            @if (\Illuminate\Support\Facades\Auth::user()->role == 'member')
                <a class="text-dark mx-3" href="/product">Products</a>
                <a class="text-dark mx-3" href="/about">About Us</a>
                <a class="text-dark mx-3" href="/customorder">Custom Order</a>
                <a class="text-dark mx-3" href="/transaction">Transactions</a>
            @else
                <a class="text-dark mx-3" href="/about">About Us</a>
                <a class="text-dark mx-3" href="/product">Manage Products</a>
                <a class="text-dark mx-3" href="/manage">Add Category</a>
            @endif


            {{-- belom login --}}
        @else
            <a class="text-dark mx-3" href="/product">Products</a>
            <a class="text-dark mx-3" href="/about">About Us</a>
        @endif
    </div>
    @if (\Illuminate\Support\Facades\Auth::check())
        <div class="text-dark right-btn">
            @if (\Illuminate\Support\Facades\Auth::user()->role == 'member')
                <a class="text-dark mx-2" href="/cart">Cart</a>
            @endif

            <a class="text-dark mx-2" href="/profile">Profile</a>
            <a class="text-dark mx-2" href="/logout">Sign Out</a>
        </div>
    @else
        <div class="text-dark right-btn">
            <a class="text-dark mx-2" href="/login">Sign In</a>
            <a class="text-dark mx-2" href="/register">Sign Up</a>
        </div>
    @endif
</header>

<body>
    <div class="content">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<footer class="text-center pt-5 mt-5 pb-5">
    © 2021 Tokem, Inc. All rights reserved
</footer>

</html>
