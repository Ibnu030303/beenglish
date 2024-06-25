<?php

namespace App\Http\Controllers;

use App\Models\accordion_questions;
use App\Models\Article;
use App\Models\Course;
use App\Models\details;
use App\Models\Feature;
use App\Models\Price;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Service;
use App\Models\Siswa;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $defaultCourseId = 1;
        $course = Course::find($defaultCourseId);
        $programs = $course ? $course->programs : collect();

        return view('welcome', compact('courses', 'defaultCourseId', 'programs'));
    }

    public function showAllCourses()
    {
        $courses = Course::all();
        return view('course.show', compact('courses'));
    }

    public function showProfile() {
        $profiles = Profile::all();
        return view('profile.show', compact('profiles'));
    }

    public function showBiaya() {
        $courses = Course::all();
        $biayas = Details::all();
        return view('biaya.show', compact('biayas', 'courses'));
    }

    public function fetchPrograms($courseId)
    {
        $programs = Program::where('course_id', $courseId)->with('details')->get();
        return response()->json($programs);
    }

    public function register(){
        $courses = Course::all();
        $programs = Program::all();

        return view('register', compact('courses', 'programs'));
    }

    public function registerStore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nis' => 'required|string|max:20',
            'nama_lengkap' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:500',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'course_id' => 'required|exists:courses,id',
            'program_id' => 'required|exists:programs,id',
        ]);

        // Create a new registration record
        $registration = new Siswa();
        $registration->nis = $request->nis;
        $registration->nama_lengkap = $request->nama_lengkap;
        $registration->tempat_lahir = $request->tempat_lahir;
        $registration->tanggal_lahir = $request->tanggal_lahir;
        $registration->jenis_kelamin = $request->jenis_kelamin;
        $registration->alamat = $request->alamat;
        $registration->nomor_telepon = $request->nomor_telepon;
        $registration->email = $request->email;
        $registration->course_id = $request->course_id;
        $registration->program_id = $request->program_id;
        $registration->save();
        $nama_lengkap = $request->nama_lengkap;

        $admins = User::whereHas('roles', function($query) {
            $query->where('name', 'admin');
        })->get();
    
        Log::info('Admins found: ', $admins->pluck('id')->toArray());
    
        Notification::make()
            ->success()
            ->title('Murid ' . $nama_lengkap . ' Telah Mendaftar')
            ->sendToDatabase($admins);

        // Redirect to a success page with a success message
        return redirect()->route('daftar.register')->with('message', 'Pendaftaran Berhasil, Silahkan Datang atau Hubungi Pihak Lembaga');

    }
    
}
