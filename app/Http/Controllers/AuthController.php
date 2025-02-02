<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_mitra(){
        return view('pages.page_mitra.auth.login');
    }
    
    public function registrasi_mitra(){
        return view('pages.page_mitra.auth.registrasi');
    }
    
    public function post_registrasi_mitra(Request $request){
        $credentials = $request->validate([
            'name' => 'required|min:5|max:255',
            'logo' => 'required|file|max:51280|mimes:png,jpg,jpeg',
            'email' => 'required|email|unique:mitras|min:5|max:255',
            'toko' => 'required|min:3|max:255',
            'no_hp' => 'required|min:5|max:16',
            'password' => 'required|min:5|max:255',
        ]);
        
        if($request->file('logo')){
            $logo = $request->file('logo')->store('logo_mitra');
            $credentials['logo'] = $logo;
        }
        $credentials['password'] = bcrypt($request->input('password'));
        $register = Mitra::create($credentials);

        if(!$register){
            return back()->with('message', 'Registrasi tidak berhasil, silahkan isi data dengan benar');
        }

        return redirect()->intended(route('mitra.login'))->with('message', 'Registrasi tidak berhasil, silahkan isi data dengan benar');
    }

    public function post_login_mitra(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if(Auth::guard('mitra')->attempt($credentials)){
            $request->session()->regenerate();
            $mitra = Mitra::find(auth('mitra')->user()->id);
            Auth::guard('mitra')->login($mitra);
            return redirect()->intended(route('mitra.dashboard'))->with('message', 'Login berhasil');
        }
        return back()->with('message', 'Maaf username atau password salah');
    }
}
