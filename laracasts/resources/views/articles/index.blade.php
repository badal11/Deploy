@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @forelse ($articles as $article)
                <div id="content">
                    <div class="title">
                        <h3>
                            <a href="/articles/{{ $article->id }}">
                                {{--                            <a href="{{route('articles.show', $article->id) }}">--}}
                                {{ $article->title }}
                            </a>
                        </h3>
                    </div>
                    <p>
                        <img src="images/banner.jpg" alt="" class="image image-full">
                    </p>
                    <p>
                        {{ $article->excerpt }}
                    </p>
                </div>
            @empty
                <p>No Relevant Articles Yet.</p>
            @endforelse

        </div>
    </div>

@endsection
