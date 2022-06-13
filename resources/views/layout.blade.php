<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://i.ibb.co/16LXThs/WEB-SHELF.png">
    <script src="https://kit.fontawesome.com/cfebdc1fe4.js" crossorigin="anonymous"></script>
    <title>Creative Technology</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        #logo img {
            width: 120px;
        }

        html * {
            font-family: 'Poppins', sans-serif;
        }

        #logo {
            margin-left: 6rem;
        }

        header {
            line-height: 62px;
        }

        .right-btn {
            margin-right: 6rem;
        }

        footer {
            width: 100%;
            color: grey;
        }

        .btn-signin {
            display: inline;
            height: 30px;
            width: 120px;
            border-radius: 30px;
            border: 2px;
            border-style: solid;
            border-color: #1e87c3;
            background-color: #1e87c3;
            color: #fff;
            font-weight: 500;
        }

        .btn-signin:hover {
            width: 200px;
            border-radius: 30px;
            border: 2px;
            border-style: solid;
            border-color: #37c1f0;
            background-color: #37c1f0;
            color: #fff;
        }

        .btn-signup {
            display: inline;
            height: 30px;
            width: 200px;
            border-radius: 30px;
            border: 2px;
            border-style: solid;
            border-color: #116dff;
            background-color: #fff;
            color: #116dff;
        }

        .btn-signup:hover {
            display: inline;
            height: 30px;
            width: 120px;
            border-radius: 30px;
            border: 2px;
            border-style: solid;
            border-color: #116dff;
            background-color: #116dff;
            color: #fff;
            font-weight: 500;
        }

        .titleheader {
            font-weight: 800;
            font-size: 55px;
        }

        .form-control {
            border-radius: 8px;
        }
    </style>

</head>

<!-- Popup modal Signout -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to Sign Out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a type="button" class="btn btn-primary" href="/logout">Confirm</a>
            </div>
        </div>
    </div>
</div>
<!-- Popup modal end -->

<header class="d-flex justify-content-between pt-2 pb-4">
    <div id="logo" class="d-flex">
        <a href="/"><img src="https://i.ibb.co/JCtkv8p/Createch-Logo-Fix.png" alt="Logo-Createch"></a>
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
        <a class="btn btn-signup" href="/logout" data-toggle="modal" data-target="#deletemodalpop">Sign Out</a>
    </div>
    @else
    @if (Route::has('/login'))
    <a class="text-sm text-gray-800 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif
    <div class="right-btn">
        <a class="btn btn-signup" href="/login">Sign In</a>
    </div>
    @endif
</header>

<body>
    <div class="content">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<footer class="text-center pt-5 mt-5 pb-5">
    © 2022 Createch, Inc. All rights reserved
</footer>

</html>