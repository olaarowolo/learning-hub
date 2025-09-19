@extends('countries.ng.layouts.curriculum')

@section('curriculum-content')
<div class="lesson-container">
    <div class="lesson-header">
        <h1>Primary 1 English - Week 1</h1>
        <h2>Introduction to Letters</h2>
        <div class="lesson-meta">
            <span class="subject">English</span>
            <span class="year">Primary 1</span>
            <span class="term">First Term</span>
        </div>
    </div>

    <div class="lesson-content">
        <div class="objectives">
            <h3>Learning Objectives</h3>
            <ul>
                <li>Recognize letters A, B, C</li>
                <li>Write simple letters</li>
                <li>Identify letter sounds</li>
            </ul>
        </div>

        <div class="lesson-text">
            <h3>Letters A, B, C</h3>
            <div class="letters-display">
                <div class="letter-card">
                    <div class="letter">A</div>
                    <div class="word">Apple</div>
                </div>
                <div class="letter-card">
                    <div class="letter">B</div>
                    <div class="word">Ball</div>
                </div>
                <div class="letter-card">
                    <div class="letter">C</div>
                    <div class="word">Cat</div>
                </div>
            </div>
        </div>

        <div class="activities">
            <h3>Activities</h3>
            <ul>
                <li>Trace the letters A, B, C</li>
                <li>Draw pictures of apple, ball, and cat</li>
                <li>Say the sound each letter makes</li>
            </ul>
        </div>

        <div class="practice">
            <h3>Practice</h3>
            <p>Circle the correct letter for each word:</p>
            <div class="practice-questions">
                <p>1. _ _ _ _ _ _ (Apple) - A B C</p>
                <p>2. _ _ _ _ (Ball) - A B C</p>
                <p>3. _ _ _ (Cat) - A B C</p>
            </div>
        </div>
    </div>

    <div class="lesson-navigation">
        <a href="{{ route('lesson.show', ['ng', 'english', 'primary-1', 'week1']) }}" class="btn btn-primary">Complete Lesson</a>
        <a href="{{ route('curriculum.show', ['ng', 'english', 'primary-1']) }}" class="btn btn-secondary">Back to Subject</a>
    </div>
</div>
@endsection
