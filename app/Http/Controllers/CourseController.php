<?php

namespace App\Http\Controllers;

use App\Services\MoodleService;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::all();
        return view('skills', compact('courses'));
    }

    /**
     * Display Moodle courses using API.
     *
     * @return \Illuminate\View\View
     */
    public function moodle(MoodleService $moodleService)
    {
        $courses = [];
        $error = null;

        try {
            $courses = $moodleService->getCourses();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            $error = 'Moodle API request failed: ' . $e->getMessage();
            Log::error($error, ['exception' => $e]);
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        Log::info('Moodle API response', ['courses' => $courses]);

        return view('moodle', ['courses' => $courses, 'error' => $error]);
    }

    /**
     * Enrol the authenticated user in a Moodle course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\MoodleService  $moodleService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function enrol(Request $request, MoodleService $moodleService)
    {
        $user = $request->user();
        $courseId = $request->input('course_id');

        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in to enrol.');
        }

        if (!$courseId) {
            return redirect()->back()->with('error', 'Course ID is required for enrolment.');
        }

        try {
            $moodleService->enrolUser($user->id, $courseId);
            return redirect()->back()->with('success', 'You have been enrolled in the course.');
        } catch (\Exception $e) {
            Log::error('Failed to enrol user in Moodle course', ['user_id' => $user->id, 'course_id' => $courseId, 'error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Failed to enrol in the course: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified course.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\View\View
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
}
