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
            <a href="/checkout" class="btn btn-success">CHECK OUT</a>

        @endif
    </div>
@endsection
