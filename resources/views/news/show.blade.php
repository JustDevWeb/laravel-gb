<h2>{{$news["id"]}}</h2>

<div>
    <img src="{{$news["image"]}}" />
    <p><em>{{$news["author"]}} &nbsp; ({{$news["created_at"]}})</em></p>
    <p><a href="{{route("category.show",$news["category"])}}">{{$news["category"]}}</a></p>
    <p>{{$news["description"]}}></p>
</div>
