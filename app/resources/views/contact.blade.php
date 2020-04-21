@extends('layouts.app')

@section('title-block')
    Contact
@endsection

@section('content')
    <h1>Contact</h1>

    <div class="content">
        <form action="{{ route('contact-form') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="inputSubject">Subject</label>
                <input type="text" name="subject" class="form-control" id="inputSubject">
            </div>
            <div class="form-group">
                <label for="inputMessage">Message</label>
                <textarea type="text" name="message" class="form-control" id="inputMessage"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
