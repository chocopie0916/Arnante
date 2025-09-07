@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="hero text-center py-5">
        <div class="container">
            <h1 class="display-3 fw-bold hero-title mb-4">
                Welcome to the College of Computer Studies
            </h1>
            <img src="{{ asset('images/cspc.jpg') }}" 
                 class="img-fluid hero-img shadow-lg rounded mb-4" 
                 alt="CCS Banner">
            <p class="lead text-secondary">
                Shaping the future of technology and innovation.
            </p>
            <a href="/about" class="btn btn-primary btn-lg mt-3">Learn More</a>
        </div>
    </section>
@endsection
