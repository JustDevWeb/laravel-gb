<h2>News List</h2>
@foreach($newsList as $news)
<div>
    <h4><a href="{{ route("news.show",$news["id"]) }}">{{$news["title"]}}</a></h4>
    <br/>
    <img src="{{$news["image"]}}" />
    <p><em>{{$news["author"]}}&nbsp ({{$news["created_at"]}})</em></p>
    <p><a href="{{route("category.show",$news["category"])}}">{{$news["category"]}}</a></p>
    <p>{{$news["description"]}}</p>
</div>
@endforeach
