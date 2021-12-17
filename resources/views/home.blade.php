@extends('layouts.app')

@section('content')
<div class="offers">
@foreach ($offers as $offer)
    <div class='offer'>
        <img src='{{ $offer->image }}' alt='{{ $offer->title }}'>
        <h2>{{ $offer->title }}</h2>
        <p>{{ $offer->author }}</p>
        <div class='price'>
            <p>Our price:</p>
            <h2>{{ $offer->price }}</h2>
        </div>
        @if ($offer->quantity != 0)
            <div class='stock stockGreen'>
                <i class='fas fa-box'></i>
                <p>In stock</p>
            </div>
        @else
            <div class='stock stockRed'>
                <i class='fas fa-times-circle'></i>
                <p>Out of stock</p>
            </div>
        @endif
        <button name='addToCart' type='submit' class='btn btn-danger'><i class='fas fa-shopping-cart'></i> Add to cart</button>
        </div>

@endforeach
</div>
@endsection
