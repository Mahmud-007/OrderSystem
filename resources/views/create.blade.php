@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
             Push the Order To Dashboard
        </div>
        <br><br>
        <form action='/menu' method='POST'>
        @csrf
            <label for="table_no">Table No:</label>
            <input type="number" name="table_no" id="table_no" required>
            <label for="name"> Item Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="price"> Price:</label>
            <input type="number" name="price" id="price" required>
            <input type="submit" value="Order">
        </form>
        <br>
        <br>
        <a href="/menu">Dashboard</a>
    </div>
    
</div>

@endsection