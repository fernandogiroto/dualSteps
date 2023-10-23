<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Processes;
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
        $process = Processes::with('user', 'lawyer', 'typeOfProcess')->where('user_id', $userId)->first();
        return Inertia::render('Users/Process', ['process' => $process]);
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
            'surname' => $request->surname,
            'location' => $request->location,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        Auth::login($user);

        Processes::create([
            'user_id' => $user->id,
            'lawyer_id' => 1,
            'type_of_process_id' => 1
        ]);

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
            $request->file('file')->store('', 'public');
        }

        return redirect(RouteServiceProvider::PROCESS);
    }
}
