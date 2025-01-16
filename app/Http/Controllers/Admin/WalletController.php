<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\Transaction;


class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::with('user')->get();
        return view('admin.wallets.index', compact('wallets'));
    }

    public function show($userId)
    {
        $wallet = Wallet::where('user_id', $userId)->with('transactions')->first();
        return view('admin.wallets.show', compact('wallet'));
    }
}
