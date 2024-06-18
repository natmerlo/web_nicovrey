<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages/auth/login');
    }

    public function register()
    {
        return view('pages/auth/register');
    }

    public function registerProcess(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => ['required', 'max:15'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d!@#$%^&*()-_+=]{8,}$/'],
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.max' => 'El nombre debe tener como máximo :max caracteres',
            'email.required' => 'El correo es obligatorio',
            'email.unique' => 'Ya existe una cuenta con este correo',
            'password.regex' => 'La contraseña debe tener una letra, un número, un caracter especial, y al menos 8 caracteres.',
            'password.required' => 'La contraseña es obligatoria'
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Iniciar sesión para el usuario recién registrado
        Auth::login($user);

        // Redireccionar al usuario después del registro
        return redirect()->route('admin');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ], [
            'email.required' => 'El correo es obligatorio',
            'password.required' => 'La contraseña es obligatoria',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (!auth()->attempt($credentials)) {
            return redirect()
                ->back()
                ->withInput($request->only('email', 'password'))
                ->withErrors(['password' => 'Las credenciales son incorrectas. Por favor, inténtelo de nuevo.']);
        }
        return redirect()->route('admin');
    }


    public function logoutProcess(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login');
        // ->with('feedback.message', 'Cierre de sesión correcto. ¡Te esperamos pronto!');
    }
}

