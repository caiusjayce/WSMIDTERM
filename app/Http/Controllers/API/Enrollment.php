<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Enrollment;


class EnrollmentAPI extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();

        return response()->json(['enrollments'=>$enrollments],200);
    }
}