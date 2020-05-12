@extends('layouts.base')
@section('content')
<form action="/recipes" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <button type="submit">Create recipe</button>
</form>
@endsection
