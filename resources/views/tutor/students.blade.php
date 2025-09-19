@extends('layouts.app')

@section('title', 'Registered Students')

@section('content')
@include('partials.breadcrumb', ['title' => 'Registered Students'])

<div class="container my-5">
    <header class="text-center">
        <h1>Registered Students</h1>
        <p>View all registered students in the system</p>
    </header>

    <main>
        <div class="students-content">
            @if($students->count() > 0)
                <div class="students-table-container">
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>School</th>
                                <th>Grade Level</th>
                                <th>Curriculum</th>
                                <th>Registered Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->profile->phone ?? 'Not provided' }}</td>
                                    <td>{{ $student->profile->school_name ?? 'Not provided' }}</td>
                                    <td>{{ $student->profile->grade_level ?? 'Not provided' }}</td>
                                    <td>{{ strtoupper($student->profile->curriculum ?? 'Not specified') }}</td>
                                    <td>{{ $student->created_at->format('M j, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="students-count">
                    <p><strong>Total Students:</strong> {{ $students->count() }}</p>
                </div>
            @else
                <div class="no-students">
                    <h3>No Students Registered</h3>
                    <p>There are currently no students registered in the system.</p>
                </div>
            @endif
        </div>
    </main>
</div>

<style>
    .students-content {
        max-width: 1200px;
        margin: auto;
        background-color: #ffffff;
        border-radius: 15px;
        padding: 2.5rem 2rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        font-family: 'Poppins', sans-serif;
        color: #343a40;
    }

    .students-content h1 {
        color: #2196f3;
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
    }

    .students-table-container {
        overflow-x: auto;
        margin-bottom: 2rem;
    }

    .students-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .students-table th {
        background-color: #2196f3;
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .students-table td {
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.9rem;
    }

    .students-table tbody tr:hover {
        background-color: #f8f9fa;
    }

    .students-table tbody tr:last-child td {
        border-bottom: none;
    }

    .students-count {
        text-align: center;
        margin-top: 2rem;
        padding: 1rem;
        background-color: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid #2196f3;
    }

    .students-count p {
        margin: 0;
        font-size: 1.1rem;
        color: #495057;
    }

    .no-students {
        text-align: center;
        padding: 3rem;
        background-color: #f8f9fa;
        border-radius: 10px;
        border-left: 4px solid #2196f3;
    }

    .no-students h3 {
        color: #6c757d;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .no-students p {
        color: #6c757d;
        font-size: 1rem;
        margin: 0;
    }

    @media (max-width: 768px) {
        .students-content {
            padding: 1.5rem 1rem;
        }

        .students-table th,
        .students-table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.8rem;
        }

        .students-table th {
            font-size: 0.8rem;
        }
    }
</style>
@endsection
