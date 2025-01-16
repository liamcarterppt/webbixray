<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Referral;

class ReferralController extends Controller
{
    public function referFriend()
    {
        $user = auth()->user();
        $referralLink = route('register', ['ref' => $user->referral_code]);
        return view('admin.referral.index', compact('referralLink'));
    }

    public function registerWithReferral(Request $request)
    {
        $referrer = null;

        if ($request->has('ref')) {
            $decodedRef = base64_decode($request->ref);
            $referrerId = explode('-', $decodedRef)[0];
            $referrer = User::find($referrerId);
        }

        $user = User::create($request->only('name', 'email', 'password'));

        if ($referrer) {
            Referral::create([
                'referrer_id' => $referrer->id,
                'referred_id' => $user->id,
                'referral_code' => $request->ref,
            ]);
        }

        //auth()->login($user);
        return redirect('admin/dashboard')->with('success', 'Account created successfully!');
    }
}
//
