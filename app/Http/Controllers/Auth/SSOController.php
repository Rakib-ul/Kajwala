<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WorkOS\WorkOS;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SSOController extends Controller
{
    public function redirectToSSO(Request $request)
    {
        $organization = $request->query('organization');

        $workos = new WorkOS(env('WORKOS_API_KEY'));

        $authorizationUrl = $workos->sso->getAuthorizationUrl([
            'client_id' => env('WORKOS_CLIENT_ID'),
            'redirect_uri' => env('WORKOS_REDIRECT_URI'),
            'organization' => $organization,
        ]);

        return redirect($authorizationUrl);
    }

    public function handleCallback(Request $request)
    {
        $workos = new WorkOS(env('WORKOS_API_KEY'));

        $code = $request->query('code');

        $response = $workos->sso->getProfileAndToken([
            'client_id' => env('WORKOS_CLIENT_ID'),
            'code' => $code,
        ]);

        $profile = $response->profile;

        $user = User::firstOrCreate(
            ['email' => $profile->email],
            [
                'name' => $profile->firstName . ' ' . $profile->lastName,
                'password' => bcrypt(str()->random(16)), // Random password since SSO handles auth
            ]
        );

        Auth::login($user);

        return redirect()->intended('/dashboard');
    }
}
