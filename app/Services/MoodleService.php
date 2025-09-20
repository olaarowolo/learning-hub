<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MoodleService
{
    protected $baseUrl;
    protected $token;
    protected $serverUrl;

    public function __construct()
    {
        $this->baseUrl = env('MOODLE_URL');
        $this->token = env('MOODLE_TOKEN');
        $this->serverUrl = rtrim($this->baseUrl, '/') . '/webservice/rest/server.php';
    }

    protected function call($function, $params = [])
    {
        $queryParams = array_merge($params, [
            'wsfunction' => $function,
            'wstoken' => $this->token,
            'moodlewsrestformat' => 'json',
        ]);

        Log::info('Calling Moodle API', ['function' => $function, 'params' => $params]);

        $response = Http::get($this->serverUrl, $queryParams);

        if ($response->failed()) {
            Log::error('Moodle API request failed', ['status' => $response->status(), 'body' => $response->body()]);
            $response->throw();
        }

        $data = $response->json();

        if (is_array($data) && isset($data['exception'])) {
            $errorMessage = sprintf(
                'Moodle API error: %s - %s',
                $data['errorcode'] ?? 'UNKNOWN',
                $data['message'] ?? 'An unknown error occurred.'
            );
            Log::error($errorMessage, ['response' => $data]);
            throw new \Exception($errorMessage);
        }

        return $data;
    }

    // -------------------------
    // Site / User Info
    // -------------------------
    public function getSiteInfo()
    {
        return $this->call('core_webservice_get_site_info');
    }

    public function getUserByField($field, $value)
    {
        return $this->call('core_user_get_users_by_field', [
            'field' => $field,
            'values' => [$value],
        ]);
    }

    public function createUser(array $user)
    {
        return $this->call('core_user_create_users', [
            'users' => [$user],
        ]);
    }

    public function updateUser(array $user)
    {
        return $this->call('core_user_update_users', [
            'users' => [$user],
        ]);
    }

    // -------------------------
    // Courses
    // -------------------------
    public function getCourses()
    {
        return $this->call('core_course_get_courses');
    }

    public function getCourseByField($field, $value)
    {
        return $this->call('core_course_get_courses_by_field', [
            'field' => $field,
            'value' => $value,
        ]);
    }

    public function getCourseContents($courseId)
    {
        return $this->call('core_course_get_contents', [
            'courseid' => $courseId,
        ]);
    }

    // -------------------------
    // Enrolment
    // -------------------------
    public function enrolUser($userId, $courseId, $roleId = 5)
    {
        return $this->call('enrol_manual_enrol_users', [
            'enrolments' => [[
                'roleid' => $roleId,
                'userid' => $userId,
                'courseid' => $courseId
            ]]
        ]);
    }

    public function unenrolUser($userId, $courseId)
    {
        return $this->call('enrol_manual_unenrol_users', [
            'enrolments' => [[
                'userid' => $userId,
                'courseid' => $courseId
            ]]
        ]);
    }

    public function getUserCourses($userId)
    {
        return $this->call('core_enrol_get_users_courses', [
            'userid' => $userId,
        ]);
    }

    // -------------------------
    // Completion & Grades
    // -------------------------
    public function getCourseCompletionStatus($courseId, $userId)
    {
        return $this->call('core_completion_get_course_completion_status', [
            'courseid' => $courseId,
            'userid' => $userId
        ]);
    }

    public function getActivityCompletionStatus($courseId, $userId)
    {
        return $this->call('core_completion_get_activities_completion_status', [
            'courseid' => $courseId,
            'userid' => $userId
        ]);
    }

    public function getUserGrades($courseId, $userId)
    {
        return $this->call('gradereport_user_get_grades_table', [
            'courseid' => $courseId,
            'userid' => $userId
        ]);
    }

    // -------------------------
    // Messaging
    // -------------------------
    public function sendMessage($touserid, $message)
    {
        return $this->call('core_message_send_instant_messages', [
            'messages' => [[
                'touserid' => $touserid,
                'text' => $message
            ]]
        ]);
    }

    // -------------------------
    // Forums (optional)
    // -------------------------
    public function getForumDiscussions($forumId)
    {
        return $this->call('mod_forum_get_forum_discussions', [
            'forumid' => $forumId
        ]);
    }

    public function addForumDiscussion($forumId, $subject, $message)
    {
        return $this->call('mod_forum_add_discussion', [
            'forumid' => $forumId,
            'subject' => $subject,
            'message' => $message
        ]);
    }

    // -------------------------
    // Calendar & Files (optional)
    // -------------------------
    public function getCalendarEvents($userid)
    {
        return $this->call('core_calendar_get_calendar_events', [
            'userid' => $userid
        ]);
    }

    public function getUserFiles($userid)
    {
        return $this->call('core_files_get_files', [
            'contextid' => 0, // adjust if needed
            'component' => 'user',
            'filearea' => 'private'
        ]);
    }
}
