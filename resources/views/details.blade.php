@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
      <h2>Table No: {{$item->table_no}} - Item: {{$item->name}} - Price: {{$item->price}}</h2>
       
       <form action='/menu/{{$item->id}}' method="POST">
            @csrf 
            @method('DELETE')
            <button>Done</button>
       <form>

       <br>
        <br>
        <a href="/menu">Dashboard</a>
       
    </div>
</div>
@endsection