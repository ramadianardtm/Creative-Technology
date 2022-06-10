@extends('layout')

@section('content')
    <style>
        .category-container {
            margin-left: 18rem;
            margin-right: 18rem;
        }

        .category-grid {
            display: grid;
            grid-template-columns: auto auto auto auto;
        }

    </style>
    <div class="category-container">
        <b>Available Category</b>
        <br>
        <div class="category-grid text-center pt-4">
            @foreach ($category as $cat)
                <div class="border border-success rounded mx-2 p-1 mt-2">
                    {{ $cat->name }}
                </div>
            @endforeach
        </div>
        <br>
        <div class="mt-5"></div>
        <b>Add New Category</b>
        <form action="" method="post">
            @csrf
            <div class="form-group pt-2 d-flex">
                <label for="exampleFormControlInput1">Category Name</label>
                <input type="text" class="form-control w-25 mx-3" placeholder="Category..." name="name">
            </div>
            @if ($errors->any())
                <div class="alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif
            <button type="submit" class="btn btn-success">Add Category</button>

        </form>
    </div>
@endsection
