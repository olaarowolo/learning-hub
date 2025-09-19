<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

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
    public function moodle()
    {
        $moodleUrl = env('MOODLE_URL', 'http://localhost');
        $token = env('MOODLE_TOKEN');

        $functionName = 'core_course_get_courses';
        $restFormat = 'json';

        $serverUrl = $moodleUrl . '/webservice/rest/server.php';

        Log::info('Moodle API URL', ['url' => $serverUrl]);

        $response = Http::get($serverUrl, [
            'wstoken' => $token,
            'wsfunction' => $functionName,
            'moodlewsrestformat' => $restFormat,
        ]);

        $courses = [];
        $error = null;

        if ($response->ok()) {
            $responseData = $response->json();

            if (is_array($responseData)) {
                // Moodle API can return 200 OK with an error payload.
                // A successful response is an array of courses. An error is an object with an 'exception' key.
                if (isset($responseData['exception'])) {
                    $errorMessage = $responseData['message'] ?? 'An unknown Moodle API error occurred.';
                    $error = 'Moodle API Error: ' . $errorMessage;
                    Log::error('Moodle API returned an error', [
                        'exception' => $responseData['exception'],
                        'errorcode' => $responseData['errorcode'] ?? 'N/A',
                        'message' => $errorMessage,
                    ]);
                } else {
                    $courses = $responseData;
                }
            } else {
                $error = 'Unexpected Moodle API response format.';
                Log::warning($error, ['response' => $responseData]);
            }
        } else {
            $error = 'Moodle API request failed with status code: ' . $response->status();
            Log::error($error, ['status' => $response->status(), 'body' => $response->body()]);
        }

        Log::info('Moodle API response', ['courses' => $courses]);

        return view('moodle', ['courses' => $courses, 'error' => $error]);
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
