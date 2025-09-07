@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Contact Us</h1>
        <p class="lead">We’d love to hear from you! Fill out the form below:</p>

        <form class="p-4 shadow rounded bg-light">
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Your Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <!-- Message -->
            <div class="mb-3">
                <label for="message" class="form-label fw-bold">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Write your message"></textarea>
            </div>

            <!-- Fake Button -->
            <button type="button" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
