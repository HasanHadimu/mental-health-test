@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Hasil Test Kesehatan Mental</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Hasil Kuis</h5>
            <p class="card-text">Skor: {{ $score }}</p>
            <p class="card-text">Interpretasi: {{ $interpretation }}</p>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f4f7fa; /* Light background for contrast */
    }

    .container {
        max-width: 600px; /* Limit container width for readability */
        margin: auto; /* Center the container */
    }

    h1 {
        color: #343a40; /* Darker title color for better visibility */
    }
</style>

<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<br> <br> <br> <br> <br><br><br>
@include('home.footer')

@endsection
