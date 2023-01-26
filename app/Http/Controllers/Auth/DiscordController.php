<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Exception;
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
            $discordUser = Socialite::driver('discord')->stateless()->user();
            $user = User::updateOrCreate([
                'discord_id'       => $discordUser->id,
            ], [
                'name'             => $discordUser->name,
                'email'            => $discordUser->email,
                'password'         => encrypt('123456dummy'),
                'discord_nickname' => $discordUser->nickname,
                'discord_avatar'   => $discordUser->avatar,
            ]);
            Auth::login($user);
            return redirect('/dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

