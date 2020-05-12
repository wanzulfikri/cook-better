@extends('layouts.base')
@section('content')
<div>
    <ol>
        @forelse ($recipes as $recipe)
        <li>{{$recipe->name}}</li>
        @empty
        <li>No recipe yet</li>
        @endforelse
    </ol>
</div>
@endsection
