@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel</a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-danger" style="padding-top: 30px; color: black;">Contact Us</h1>
    <form action=" " method="POST" class="bg-white p-4 shadow rounded mx-auto" style="max-width: 500px;">
        <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Message:</label>
            <textarea name="message" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Send</button>
    </form>
@endsection

@section('script')
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            console.log("Contact Page Loaded");

            const form = document.querySelector("form");
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                alert("Form submitted successfully!");
            });
        });
    </script>
@endsection
