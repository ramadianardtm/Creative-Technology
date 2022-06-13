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
        .btn-add {
        width: 140px;
        border-radius: 30px;
        border: 2px;
        font-weight: 700px;
        border-style: solid;
        border-color: #000;
        background-color: #000;
        color: #fff;
    }
    .btn-add:hover {
        width: 140px;
        border-radius: 30px;
        border: 2px;
        font-weight: 700px;
        border-style: solid;
        border-color: #a4a4a4;
        background-color: #a4a4a4;
        color: #fff;
    }

    </style>
    <div class="category-container">
        <h4>Your Cart</h4>
        <br>
        @if ($cart->count() == 0)
            <p>Your cart is empty, please shop more !</p>
        @else
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <?php $total_price = 0; ?>
                <tbody>
                    @foreach ($cart as $ca)
                        <?php $product_info = App\Models\Product::find($ca->product_id); ?>
                        <tr>
                            <th scope="row">{{ $product_info->name }}</th>
                            <td>{{ $product_info->price }}</td>
                            <td>{{ $ca->quantity }}</td>
                            <td>{{ $ca->quantity * $product_info->price }}</td>
                        </tr>
                        <?php $total_price += $ca->quantity * $product_info->price; ?>

                    @endforeach

                </tbody>
            </table>
            <b>Total : {{ $total_price }}</b>
            <br>
            <br>
            <div class="w-100">
            <a href="/checkout" class="btn btn-add mt-2" style="float:right;">CHECK OUT</a>
            </div>

        @endif
    </div>
@endsection
