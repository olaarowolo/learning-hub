@extends('layouts.app')

@section('title', 'Book Now – OA Tutors')

@section('content')
<main id="main-content">
    <section style="padding: 4rem 0; text-align: center;">
        <div style="max-width: 800px; margin: 0 auto; padding: 0 1rem;">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem; color: #2c3e50;">Book a Free Discovery Call</h1>
            <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #6c757d;">Fill out the form below to schedule your free discovery call.</p>

            <form action="{{ route('book-now.submit') }}" method="POST" style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                @csrf
                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your Name</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your Email</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Message</label>
                    <textarea id="message" name="message" rows="4" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 5px;"></textarea>
                </div>

                <button type="submit" style="background: #667eea; color: white; padding: 1rem 2rem; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: transform 0.3s ease;">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection