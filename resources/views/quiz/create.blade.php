@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center mb-4">Kuiz Kesehatan Mental</h1>
    <form action="{{ route('quiz.store') }}" method="POST">
        @csrf

        @foreach(range(1, 8) as $index)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pertanyaan {{ $index }}</h5>
                    <p class="card-text">
                        @if($index == 1)
                            Dalam 2 minggu terakhir, seberapa sering Anda terganggu oleh masalah-masalah berikut:
                        @elseif($index == 2)
                            Merasa gugup, cemas atau gelisah:
                        @elseif($index == 3)
                            Tidak mampu menghentikan atau mengendalikan rasa khawatir:
                        @elseif($index == 4)
                            Terlalu mengkhawatirkan berbagai hal:
                        @elseif($index == 5)
                            Kesulitan bersantai/relax:
                        @elseif($index == 6)
                            Sangat gelisah hingga kesulitan untuk duduk diam:
                        @elseif($index == 7)
                            Mudah kesal atau mudah tersinggung:
                        @elseif($index == 8)
                            Merasa takut seolah-olah akan terjadi sesuatu yang buruk:
                        @endif
                    </p>
                    <select name="question_{{ $index }}" id="question_{{ $index }}" class="form-control">
                        <option value="0">Tidak Sulit Sama Sekali</option>
                        <option value="1">Agak Sulit</option>
                        <option value="2">Sangat Sulit</option>
                        <option value="3">Luar Biasa Sulit</option>
                    </select>
                </div>
            </div>
        @endforeach

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Kirim</button>
        </div>
        <br>
        <br>
    </form>
</div>

<style>
    body {
        background-color: #f4f7fa; /* Light background for contrast */
    }

    .container {
        max-width: 600px; /* Limit container width for readability */
        margin: auto; /* Center the container */
    }

    .card {
        border: none; /* Remove default card border */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    }

    .form-control {
        transition: border-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for focus */
    }

    .form-control:focus {
        border-color: #007bff; /* Bootstrap primary color */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Subtle glow effect */
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

<br>
<br>
<br>
@include('home.footer')

@endsection
