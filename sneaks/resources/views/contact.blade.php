@extends('layouts.app')

@section('content')
    <x-section>
        <h1>Contact Us</h1>
        <p>If you have any questions or inquiries, please feel free to reach out to us!</p>
    </x-section>
    <x-section>
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </x-section>
@endsection