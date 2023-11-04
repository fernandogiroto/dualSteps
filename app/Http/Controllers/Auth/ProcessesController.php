<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Processes;
use App\Models\ProcessesVisaStudentPt;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProcessesController extends Controller
{

    /**
     * Display the registration view.
     */
    public function index(): Response
    {
        $userId = auth()->id();
        $processes = Processes::with('user', 'typeOfProcess')->where('user_id', $userId)->get();

        $activeProcesses = [];

        foreach ($processes as $process) {
            if ($process->type_of_process_id === 1) {


                $processWithLawyer = ProcessesVisaStudentPt::with('lawyer')->where('process_id', $process->id)->first();

                $activeProcesses[] = array_merge($process->toArray(), $processWithLawyer->toArray());
            }
        }

        // dd($activeProcesses);



        return Inertia::render('Users/Process', ['processes' => $activeProcesses]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        Auth::login($user);

        $process = Processes::create([
            'user_id' => $user->id,
            'type_of_process_id' => 1
        ]);

        if ($request->process_type == 'visa_student_pt') {
            ProcessesVisaStudentPt::create([
                'process_id' => $process->id,
                'lawyer_id' => 1
            ]);
        }

        return redirect(RouteServiceProvider::PROCESS);
    }

    public function saveDocument(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'nullable|image|mimes:jpg,png,jpeg|max:3048',
        ]);

        $user_folder = $request->user()->id . '/files';

        if (!Storage::exists($user_folder)) {
            Storage::makeDirectory($user_folder, 0755, true);
        }

        if ($request->hasFile('file')) {
            $request->file('file')->store('user/' . $user_folder, 'public', 'files');
        }

        return redirect(RouteServiceProvider::PROCESS);
    }
}
