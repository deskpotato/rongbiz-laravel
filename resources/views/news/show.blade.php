@extends('common.app')

@section('css')
    {{--  <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style-newsInformation.css') }}"/>  --}}
@endsection




@section('title',"$article->title")

@section('content')


    浏览量：{{ $article->hits }}
    {{--  {{!! $article->content !!}}  --}}

    
@endsection