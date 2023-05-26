<?php
namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;
 use App\Models\Grade;
 use App\Models\Subject;
 use App\Models\Student;
 use App\Models\Notification;
 use App\Models\Advertisment;
 

 class DashboardController extends Controller
	{
    		public function index(){
                $gc = Grade::count();
                $sbjc = Subject::count();
                $stdc = Student::count();
				$ac = Advertisment::count();
				$nc = Notification::count();
        		return view('admin.dashboard', compact('gc', 'sbjc', 'stdc', 'ac', 'nc'));
    		}
	}