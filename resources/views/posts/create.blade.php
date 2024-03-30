@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Post</h1>
        @include('posts.form')
    </div>
@endsection