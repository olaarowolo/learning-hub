@extends('countries.br.layouts.curriculum')

@section('curriculum-content')
<div class="lesson-container">
    <div class="lesson-header">
        <h1>KS1 Year 1 English - Week 1</h1>
        <h2>Reading Comprehension</h2>
        <div class="lesson-meta">
            <span class="subject">English</span>
            <span class="year">Year 1</span>
            <span class="term">Autumn Term</span>
        </div>
    </div>

    <div class="lesson-content">
        <div class="objectives">
            <h3>Learning Objectives</h3>
            <ul>
                <li>Read simple sentences</li>
                <li>Understand basic punctuation</li>
                <li>Answer questions about a text</li>
            </ul>
        </div>

        <div class="lesson-text">
            <h3>Story: The Little Red Hen</h3>
            <p>Once upon a time, there was a little red hen. She lived on a farm with a duck, a cat, and a dog.</p>
            <p>"Who will help me plant the wheat?" asked the little red hen.</p>
            <p>"Not I," said the duck.</p>
            <p>"Not I," said the cat.</p>
            <p>"Not I," said the dog.</p>
        </div>

        <div class="questions">
            <h3>Questions</h3>
            <ol>
                <li>Who is the main character in the story?</li>
                <li>What did the little red hen ask?</li>
                <li>Who said "Not I"?</li>
            </ol>
        </div>

        <div class="activities">
            <h3>Activities</h3>
            <ul>
                <li>Draw a picture of the little red hen</li>
                <li>Write your own simple sentence</li>
                <li>Read the story to a friend</li>
            </ul>
        </div>
    </div>

    <div class="lesson-navigation">
        <a href="{{ route('lesson.show', ['br', 'ks1', 'y1', 'english', 'week1']) }}" class="btn btn-primary">Complete Lesson</a>
        <a href="{{ route('curriculum.show', ['br', 'ks1', 'y1', 'english']) }}" class="btn btn-secondary">Back to Subject</a>
    </div>
</div>
@endsection
