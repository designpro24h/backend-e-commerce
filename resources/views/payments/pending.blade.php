@extends('layouts.payment')

@section('content')
<div class="paper">
    <div class="main-contents">
        <div class="icon warning">&#10004;</div>
        <div class="title">
            Payment Pending
        </div>
        <div class="description">
            Your payment is pending, please refresh this page to get update your payment info.
        </div>
        <div class="order-details">
            <div class="order-number-label">Transaction ID</div>
            <div class="order-number">{{ $order->id }}</div>
            <div class="complement">Thank You!</div>
        </div>
    </div>
    <div class="jagged-edge"></div>
</div>
@endsection
