@extends('countries.ng.layouts.curriculum')

@section('curriculum-title', 'Test Nigeria Curriculum Layout')
@section('curriculum-name', 'Test Primary 1')

@section('curriculum-content')
    <div class="test-content">
        <h2>Test Nigeria Layout</h2>
        <p>This is a test of the Nigeria curriculum layout structure.</p>

        <div class="test-sections">
            <div class="section">
                <h3>Primary 1 English</h3>
                <p>Content for Primary 1 English curriculum</p>
            </div>

            <div class="section">
                <h3>Primary 1 Maths</h3>
                <p>Content for Primary 1 Maths curriculum</p>
            </div>

            <div class="section">
                <h3>Primary 1 Science</h3>
                <p>Content for Primary 1 Science curriculum</p>
            </div>
        </div>
    </div>

    <style>
        .test-content {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .test-sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }

        .section h3 {
            color: #28a745;
            margin-bottom: 10px;
        }
    </style>
@endsection
