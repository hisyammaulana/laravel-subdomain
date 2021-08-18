<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class DashboarController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('dashboard', compact('data'));
    }

    public function create()
    {
        return view('tambah_subdomain');
    }

    public function store(Request $request)
    {
        $customAttributes = [
            'name' => 'Nama Lengkap',
            'email' => 'Email',
            'subdomain' => 'Subdomain',
            'password' => 'Password',
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'subdomain' => 'required|unique:users,subdomain',
            'password' => 'required|min:6'
        ];

        $messages = [
            'required' => ':attribute harus diisi.',
            'unique' => ':attribute sudah terdaftar.',
            'email' => 'Format penulisan :attribute belum benar.',
            'min' => ':attribute minimal :min karakter.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            return redirect('tambah-sub')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'subdomain' => Str::of(Str::lower($request->subdomain))->trim(),
        ]);

        return back()->with(['success' => 'Subdomain berhasil ditambah!']);
    }

    public function cek(Request $request)
    {
        $customAttributes = [
            'cek' => 'Subdomain',
        ];

        $rules = [
            'cek' => 'required',
        ];

        $messages = [
            'required' => ':attribute harus diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $subdomain = User::where('subdomain', $request->cek)->first();

        if ($subdomain == null) {
            return back()->with(['success' => '' . $request->cek . '.mysch.web.id tersedia!']);
        }

        return back()->with(['error' => '' . $request->cek . '.mysch.web.id sudah ada!']);
    }
}
