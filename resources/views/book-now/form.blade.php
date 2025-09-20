@extends('layouts.app')

@section('title', 'Book Now')

@section('content')
<main id="main-content">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #667eea;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #556cd6;
        }

        .form-container footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .form-container footer a {
            color: #667eea;
            text-decoration: none;
            margin: 0 5px;
        }

        .form-container footer a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="form-container">
        <h1>Book Now</h1>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('book-now.submit') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message (optional):</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit">Submit</button>
        </form>

        <footer>
            <a href="{{ route('legals.privacy') }}">Privacy Policy</a> |
            <a href="{{ route('legals.terms') }}">Terms of Service</a>
        </footer>
    </div>
</main>
@endsection
