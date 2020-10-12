@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
           Dashboard (On Process)
        </div>

        @foreach($items as $item)
          <div>
            <h1><a href='/menu/{{$item->id}}'>{{ $item['name'] }}</a></h1>
          </div>
        @endforeach
        <a href="/menu/create">Enter an Order</a>
    </div>
</div>
@endsection