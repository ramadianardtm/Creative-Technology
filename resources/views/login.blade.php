@extends('layout')

@section('content')
    <style>
        .detail {
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
            grid-template-columns: 30% 45% 25%;
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

        .logincard {
            margin-left: 20rem;
            margin-right: 20rem;
        }

    </style>
    <div class="container">
        <h4 class="text-center pt-3">Tokem</h4>
        <h1 class="text-center pb-3">Login</h1>
        <div class="card logincard">
            <div class="card-body update-grid">
                <form action="" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    @if ($errors->any())
                        <div class="alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Sign In</button>
                        <a href="/register" class="btn btn-secondary mx-2">Sign Up</a>
                    </div>

                </form>
            </div>
        </div>
    @endsection
