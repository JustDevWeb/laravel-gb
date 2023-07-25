@extends('layouts.main')

@section('content')
    <h2>Categories</h2>
@forelse($categories as $category)
    <ul class="list-group list-group-item-action">
        <li class="list-group-item"><a href="{{ route("category.show",$category)}}">{{$category}}</a></li>
    </ul>
@empty
    <h2>Категорий еще нет</h2>
@endforelse
@endsection

