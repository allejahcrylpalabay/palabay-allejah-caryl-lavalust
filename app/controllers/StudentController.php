<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Student Home Page';
        $this->call->view('student/index', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00203',       // palitan ng sarili mong ID
            'name'       => 'Allejah Caryl E. Palabay',   // palitan ng sarili mong pangalan
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F5',
            'email'      => 'allejahcrylpalabay@gmail.com',
            'address'    => 'Pola, Oriental Mindoro, Philippines', 
            'contact'    => '09706737257',
            'skills'     => 'Web Development, Graphic Design, Problem Solving',
            'hobbies'    => 'Coding, Reading, Photography',
            'description'=> 'A passionate IT student who loves building web applications and exploring new technologies.',
            'facebook'   => 'https://www.facebook.com/allejahcaryl.e.palabay.1',
            'instagram'  => 'https://instagram.com/allejahcxryl_',
            'github'     => 'https://github.com/allejahcrylpalabay'
        ];

        $this->call->view('student/profile', $student);
    }
}



