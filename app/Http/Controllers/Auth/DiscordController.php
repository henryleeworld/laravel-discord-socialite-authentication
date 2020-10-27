<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Exception;
use App\Http\Controllers\Controller;
use App\Models\User;
use Socialite;
  
class DiscordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToDiscord()
    {
        return Socialite::driver('discord')->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleDiscordCallback()
    {
        try {
            $user = Socialite::driver('discord')->stateless()->user();
            $finduser = User::where('discord_id', $user->id)->first();
            if($finduser) {
                Auth::login($finduser);
                return redirect('/dashboard');
            }else{
                $newUser = User::create([
                    'name'             => $user->name,
                    'email'            => $user->email,
                    'discord_id'       => $user->id,
                    'discord_nickname' => $user->nickname,
                    'discord_avatar'   => $user->avatar,
                    'password'    => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
     
                return redirect('/dashboard');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

