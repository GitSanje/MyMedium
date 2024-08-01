<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }


    public function callback(){
        try {
           $googleUser =  Socialite::driver('google')->user();
           dd($googleUser);
           
           $user = User::updateOrCreate(
            ['google_id' => $googleUser->id],
            [
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_token' => $googleUser->token,
                'google_refresh_token' => $googleUser->refreshToken,
            ]
           );
           
           Auth::login($user);

           return redirect('/');
        //    $user = User::where('google_id', $google_user->getId())->first();
        //    if(!$user){
        //     $new_user = User::create(
        //         [
        //          'name' => $google_user->getName(),
        //          'email' => $google_user->getEmail(),
        //          'google_id' => $google_user->getId()
        //         ]
        //         );
        //    }

        } catch (\Exception $e) {
            // Handle and report any errors
            return redirect('/')->withErrors('Something went wrong: ' . $e->getMessage());
        }
        
    }
}
