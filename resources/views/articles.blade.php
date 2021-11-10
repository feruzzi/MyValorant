@extends('layout.main-header')
@section('title',$title)
@section('content')
<div class="container my-2">
    <h1 class="text-center text-uppercase">{{$filter}}</h1>
    <div class="row">
        @foreach($data as $article)
        @php
        $date=substr($article['date'], 0, strpos($article['date'], 'T'))
        @endphp
        <div class="align-self-start col my-2">
            <div class="card bg-blackx border border-danger border-2 zoom-article" style="width: 20rem;">
                <img src="{{$article['banner_url']}}" class="card-img-top" alt="{{$article['title']}}">
                <p class="text-center text-capitalize">{{$article['category']}}</p>
                <div class="card-body">
                    <div class="vstack gap-2">
                        <a href="{{$article['url']}}" class="decoration-red">
                            <p class="card-text text-center">{{$article['title']}}</p>
                        </a>
                            <div class="py-2"><p class="text-end">{{$date}}</p></div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>
</div>
@endsection