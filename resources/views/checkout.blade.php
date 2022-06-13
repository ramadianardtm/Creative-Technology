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
    <h4>Please confirm your order</h4>
    <br>
    @if ($cart->count() == 10)
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
        <tbody>
            @foreach ($cart as $ca)
            <?php $product_info = App\Models\Product::find($ca->product_id); ?>
            <tr>
                <th scope="row">{{ $product_info->name }}</th>
                <td>{{ $product_info->price }}</td>
                <td>{{ $ca->quantity }}</td>
                <td>{{ $ca->quantity * $product_info->price }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <p>Ship to : {{ $user->address }}</p>
    <form action="" method="post">
        @csrf
        <div class="form-group w-25">
            <label for="exampleFormControlInput1">Please enter the code : TR354</label>
            <input type="text" class="form-control" placeholder="XXXXX" name="code">
            <input type="hidden" class="form-control" placeholder="XXXXX" name="correct" value="TR354">
        </div>
        @if ($errors->any())
        <div class="alert-danger">
            {{ $errors->first() }}
        </div>
        @endif
        <button type="submit" class="btn btn-add w-25">CONFIRM</button>

    </form>
    @endif
</div>
@endsection