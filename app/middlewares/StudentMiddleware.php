<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['student_access'])) {
            $_SESSION['student_access'] = true;
        }

        if ($_SESSION['student_access'] === true) {
            return true;
        } else {
            $_SESSION['access_message'] = 'Oops! You need permission to view this profile. Redirecting you home...';
            redirect('student');
        }
    }
}