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

    public function deposit(Request $request, $userId)
    {
        $wallet = Wallet::where('user_id', $userId)->first();
        $wallet->balance += $request->amount;
        $wallet->save();

        Transaction::create([
            'wallet_id' => $wallet->id,
            'type' => 'credit',
            'amount' => $request->amount,
            'description' => $request->description ?? 'Deposit'
        ]);

        return response()->json(['message' => 'Deposit successful']);
    }

    public function withdraw(Request $request, $userId)
    {
        $wallet = Wallet::where('user_id', $userId)->first();

        if ($wallet->balance < $request->amount) {
            return response()->json(['message' => 'Insufficient funds'], 400);
        }

        $wallet->balance -= $request->amount;
        $wallet->save();

        Transaction::create([
            'wallet_id' => $wallet->id,
            'type' => 'debit',
            'amount' => $request->amount,
            'description' => $request->description ?? 'Withdrawal'
        ]);

        return response()->json(['message' => 'Withdrawal successful']);
    }
}
