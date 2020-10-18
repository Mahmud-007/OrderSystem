@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">


    <div class="content">
        
        <div class="title m-b-md">
            Order System
        </div>
        <br><br>
        <h3>{{session('msg')}}</h3>
        <a href="{{route('Order.create')}}">Enter an Order</a>
        <br>
        <br>
        <a href="{{route('Order.items')}}">Dashboard</a>
    </div>
</div>
@endsection