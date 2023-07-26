@extends('layouts.main')
@section('content')
    <div class="row justify-content-between">
        <div class="col-4"><h2>News List</h2></div>
        <div class="col-sm-3">
            <a href="{{route("news.request")}}" class="btn btn-primary">Выгрузить с источника</a>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse($newsList as $news)
        <div class="col">
            <div class="card shadow-sm">
                <h4><a href="{{ route("news.show",$news->id ) }}">{{$news->title}}</a></h4>
                <img src="{{$news->image}}" />
                <div class="card-body">
                    <p class="card-text">{!! $news->description !!}</p>
                    <p><a href="{{route("category.show",$news->categoryTitle)}}">{{$news->categoryTitle}}</a></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route("news.show",$news->id) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                        <small class="text-body-secondary">{{$news->author}}&nbsp ({{$news->created_at}})</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h2>Новостей нет</h2>
        @endforelse
    </div>
@endsection

