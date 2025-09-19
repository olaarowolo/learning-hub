@extends('layouts.app')

@section('title', $course->title)

@push('styles')
<style>
.interactive-section {
    margin-top: 30px;
    padding: 20px;
    border: 2px solid #007bff;
    border-radius: 10px;
    background-color: #f8f9fa;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.interactive-section h3 {
    color: #007bff;
    margin-bottom: 15px;
}
.interactive-section h4 {
    color: #495057;
    margin-top: 20px;
    margin-bottom: 10px;
}
.quiz-option {
    margin: 10px 0;
    padding: 5px;
    background-color: #ffffff;
    border-radius: 5px;
    border: 1px solid #ced4da;
}
.quiz-option input {
    margin-right: 10px;
}
.btn-custom {
    margin: 5px;
    border-radius: 5px;
}
#solution, #quiz-result, #word-count {
    font-weight: bold;
    color: #28a745;
    margin-top: 10px;
}
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    margin-top: 10px;
}
input[type="text"] {
    padding: 8px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    margin-right: 10px;
}
.progress {
    margin-bottom: 20px;
}
</style>
@endpush

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $course->title }}</h1>
            <p>{{ $course->description }}</p>
        </div>
        <div class="col-md-4">
            <img src="{{ $course->image_url }}" alt="Course image for {{ $course->title }}" class="img-fluid rounded" style="max-height: 200px; width: 100%; object-fit: cover;">
        </div>
    </div>

    @if ($course->progress > 0)
        <div class="progress mb-2" style="height: 20px;">
            <div class="progress-bar @if($course->progress < 20) bg-warning @else bg-success @endif" role="progressbar" style="width: {{ $course->progress }}%;" aria-valuenow="{{ $course->progress }}" aria-valuemin="0" aria-valuemax="100">
                {{ $course->progress }}%
            </div>
        </div>
        <a href="#" class="btn btn-success btn-block">Continue Course</a>
    @else
        <a href="#" class="btn btn-primary btn-block mt-auto">Start Course</a>
    @endif

    <div class="interactive-section">
        @if(str_contains($course->title, 'Algebra'))
            <h3>Algebra Basics</h3>
            <p>Algebra is a branch of mathematics dealing with symbols and the rules for manipulating those symbols.</p>
            <h4>Simple Equation: 2x + 3 = 7</h4>
            <p>Solve for x:</p>
            <button class="btn btn-info" onclick="showSteps('algebra')">Show Steps</button>
            <div id="algebra-steps" style="display:none; margin-top:10px;">
                <p>Step 1: Subtract 3 from both sides: 2x = 4</p>
                <p>Step 2: Divide both sides by 2: x = 2</p>
            </div>
            <h4>Try it yourself:</h4>
            <input type="text" id="user-equation" placeholder="Enter equation like 3x + 5 = 11">
            <button class="btn btn-primary" onclick="solveEquation()">Solve</button>
            <div id="solution" style="margin-top:10px;"></div>
        @elseif(str_contains($course->title, 'Biology'))
            <h3>Biology Fundamentals</h3>
            <p>Biology is the study of living organisms and their interactions with the environment.</p>
            <h4>Quick Quiz: What is the powerhouse of the cell?</h4>
            <div class="quiz-option">
                <input type="radio" name="quiz" value="nucleus"> Nucleus
            </div>
            <div class="quiz-option">
                <input type="radio" name="quiz" value="mitochondria"> Mitochondria
            </div>
            <div class="quiz-option">
                <input type="radio" name="quiz" value="ribosome"> Ribosome
            </div>
            <button class="btn btn-success" onclick="checkAnswer()">Check Answer</button>
            <div id="quiz-result" style="margin-top:10px; font-weight:bold;"></div>
        @elseif(str_contains($course->title, 'History'))
            <h3>Ancient Civilizations</h3>
            <p>Ancient civilizations laid the foundation for modern society.</p>
            <button class="btn btn-secondary" onclick="toggleSection('egypt')">Toggle Egypt Info</button>
            <div id="egypt" style="display:none; margin-top:10px;">
                <p>The ancient Egyptian civilization lasted for over 3,000 years and is known for its pyramids, pharaohs, and hieroglyphics.</p>
            </div>
            <button class="btn btn-secondary" onclick="toggleSection('rome')">Toggle Rome Info</button>
            <div id="rome" style="display:none; margin-top:10px;">
                <p>Rome was a powerful empire that influenced law, language, and architecture across Europe.</p>
            </div>
        @elseif(str_contains($course->title, 'Writing'))
            <h3>Creative Writing</h3>
            <p>Creative writing allows you to express your imagination through words.</p>
            <h4>Writing Prompt:</h4>
            <p>"Write a short story about a character who discovers a hidden talent."</p>
            <textarea id="story" rows="5" cols="50" placeholder="Start writing your story here..."></textarea>
            <br>
            <button class="btn btn-warning" onclick="countWords()">Count Words</button>
            <div id="word-count" style="margin-top:10px;"></div>
        @endif
    </div>

    <a href="{{ route('skills.index') }}" class="btn btn-secondary mt-3">Back to Skills</a>
</div>

<script>
function showSteps(id) {
    var steps = document.getElementById(id + '-steps');
    steps.style.display = steps.style.display === 'none' ? 'block' : 'none';
}

function solveEquation() {
    var equation = document.getElementById('user-equation').value;
    // Simple parser for ax + b = c
    var match = equation.match(/(\d*)x\s*\+\s*(\d+)\s*=\s*(\d+)/);
    if (match) {
        var a = parseInt(match[1]) || 1;
        var b = parseInt(match[2]);
        var c = parseInt(match[3]);
        var x = (c - b) / a;
        document.getElementById('solution').innerHTML = 'x = ' + x;
    } else {
        document.getElementById('solution').innerHTML = 'Please enter a valid equation like 3x + 5 = 11';
    }
}

function checkAnswer() {
    var selected = document.querySelector('input[name="quiz"]:checked');
    if (selected) {
        if (selected.value === 'mitochondria') {
            document.getElementById('quiz-result').innerHTML = 'Correct! The mitochondria is the powerhouse of the cell.';
        } else {
            document.getElementById('quiz-result').innerHTML = 'Incorrect. The correct answer is Mitochondria.';
        }
    } else {
        document.getElementById('quiz-result').innerHTML = 'Please select an answer.';
    }
}

function toggleSection(id) {
    var section = document.getElementById(id);
    section.style.display = section.style.display === 'none' ? 'block' : 'none';
}

function countWords() {
    var text = document.getElementById('story').value;
    var words = text.trim().split(/\s+/).length;
    if (text === '') words = 0;
    document.getElementById('word-count').innerHTML = 'Word count: ' + words;
}
</script>
@endsection
