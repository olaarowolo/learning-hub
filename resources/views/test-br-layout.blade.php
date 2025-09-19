@extends('countries.br.layouts.curriculum')

@section('curriculum-title', 'Test Britain Curriculum Layout')
@section('curriculum-name', 'Test KS1')

@section('curriculum-content')
    <div class="test-content">
        <h2>Test Britain Layout</h2>
        <p>This is a test of the Britain curriculum layout structure.</p>

        <div class="test-sections">
            <div class="section">
                <h3>Year 1 English</h3>
                <p>Content for Year 1 English curriculum</p>
            </div>

            <div class="section">
                <h3>Year 1 Maths</h3>
                <p>Content for Year 1 Maths curriculum</p>
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
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
@endsection
