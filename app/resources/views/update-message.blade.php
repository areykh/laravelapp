@extends('layouts.app')

@section('title-block')
    Edit message
@endsection

@section('content')
    <h1>Edit message</h1>

    <div class="content">
        <form action="{{ route('contact-update-submit', $data->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputName">Name</label>
                <input value="{{ $data->name }}" type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input value="{{ $data->email }}" type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <input value="{{ $data->subject }}" type="text" name="subject" class="form-control" id="inputSubject">
            </div>
            <div class="form-group">
                <label for="inputMessage">Message</label>
                <textarea name="message" class="form-control" id="inputMessage">{{ $data->message }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
