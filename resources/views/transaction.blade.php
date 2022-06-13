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
        <h4 style="font-weight: bold; font-size:25px;">Your Transaction Histories</h4>
        <br>
        @if ($transaction->count() == 0)
            <p>Your transaction is empty, please shop more !</p>
        @else
            @foreach ($transaction as $tran)
                <?php $total_price = 0; ?>
                Transaction Date : {{ $tran->created_at }}
                <table class="table">
                    <thead class="thead-dark">
                        <?php $trandet = App\Models\TransactionDetail::all()->where('transaction_id', $tran->id); ?>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trandet as $td)
                            <?php $product_info = App\Models\Product::find($td->product_id); ?>

                            <tr>
                                <th scope="row">{{ $product_info->name }}</th>
                                <td>{{ $product_info->price }}</td>
                                <td>{{ $td->quantity }}</td>
                                <td>{{ $td->quantity * $product_info->price }}</td>
                            </tr>
                            <?php $total_price += $td->quantity * $product_info->price; ?>

                        @endforeach

                    </tbody>
                </table>
                <div class="mb-5">IDR {{ $total_price }}</div>
            @endforeach
        @endif
    </div>
@endsection
