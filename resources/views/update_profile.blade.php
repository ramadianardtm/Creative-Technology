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

    </style>
    <div class="container">
        <h1 class="text-center p-3">Update Your Profile</h1>
        <div class="card">
            <div class="card-body update-grid">
                <form action="" method="post">
                    @csrf
                    @if ($errors->any())
                        <div class="alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div>
                        <input type="hidden" value="{{ $user->id }}" name="id">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input value="{{ $user->name }}" type="text" class="form-control" placeholder="Name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input value="{{ $user->email }}" type="text" class="form-control" placeholder="Email"
                            name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="description">Address</label>
                        <textarea class="form-control" name="address" rows="4"
                            placeholder="Address">{{ $user->address }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input value="{{ $user->phone }}" type="text" class="form-control" placeholder="Phone number"
                            name="phone">
                    </div>

                    <div class="form-group mt-5">
                        <a href="/profile" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success mx-2">Save</button>
                    </div>

                </form>
            </div>
        </div>
    @endsection
