<?php

namespace App\Livewire;

use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Inventorylist extends Component
{

    public function saveAccount(Request $request)
    {
        dd($request->all()); // to check only at network

        // Account::create($request->objectAccount);// for the audit tray

        // other way

        // DB::table('accounts')->insert($request)

        // // error handling
        // $save = Account::create($request->objectAccount);
        // return response()->json([
        //     'success'=>$save?true:false,
        //     'msg'=>$save?'Successfully Saved':'Failed!'
        // ]);

    }
    public function render()
    {
        return view('livewire.inventorylist');
    }
}
