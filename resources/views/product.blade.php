@extends('layout')

@section('content')
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: auto auto auto auto;
            color: black;
        }

        .product-grid a {
            text-decoration: none;
            color: black;
        }

    </style>
    <div class="main-box">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h4>Our Products</h4>
                <form action="/search" method="post" class="row">
                    @csrf
                    <div class="col-md-8">
                        <input name="search" type="text" class="form-control" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-light">Search</button>
                </form>
                @if (\Illuminate\Support\Facades\Auth::check())

                    @if (\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                        <a href="/add" class="btn btn-light">Add Product</a>
                    @endif
                @endif
            </div>

            <div class="product-grid">
                @foreach ($product as $pr)
                    <div class="card mx-1 mt-4" style="width: 15rem;">
                        <a href="/detail/{{ $pr->id }}">
                            <div class="rounded"><img src="/storage/{{ $pr->image }}"
                                    class="card-img-top p-4 rounded" alt="Flower Image">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text text-center">{{ $pr->name }}</p>
                                <div class="text-center">
                                    IDR {{ $pr->price }}
                                </div>
                                <?php $cat = App\Models\Category::find($pr->category_id); ?>
                                <div class="text-center pb-4">
                                    {{ $cat->name }}
                                </div>
                                @if (\Illuminate\Support\Facades\Auth::check())

                                    @if (\Illuminate\Support\Facades\Auth::user()->role == 'member')
                                        <a href="/detail/{{ $pr->id }}" class="text-primary">Add To Cart</a>
                                    @else
                                        <div class="w-100">
                                            <a href="/edit/{{ $pr->id }}" class="btn btn-warning ">Edit</a>
                                            <a href="/remove/{{ $pr->id }}" class="btn btn-danger ">Remove</a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </a>

                    </div>

                @endforeach


            </div>
            <div class="d-flex mt-4">
                {{ $product->links('pagination::bootstrap-4') }}
            </div>

        </div>

    </div>
@endsection
