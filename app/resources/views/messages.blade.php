@extends('layouts.app')

@section('title-block')
    Massages
@endsection

@section('content')
    <h1>Massages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Info</button></a>
        </div>
    @endforeach
@endsection

@section('aside')
    @parent
    <p>Additional text</p>
@endsection
