<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AlgoritimoController extends Controller
{
    public function index()
    {
        //
    }

    public function play(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'credit' => 'required',
            'bet' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 403);
        }

        $credit = $request->credit;
        $bet = $request->bet;

        $slot1 = rand(1, 5);
        $slot2 = rand(1, 5);
        $slot3 = rand(1, 5);
        $slot4 = rand(1, 5);

        if(($slot1 == $slot2) && ($slot1 == $slot3) && ($slot1 == $slot4)
        || ($slot1 != $slot2) && ($slot1 != $slot3) && ($slot1 != $slot4)
        && ($slot2 != $slot3) && ($slot2 != $slot4) && ($slot3 != $slot4)){
            $message = "Congratulations you won!!";
            $credit += $bet;
        }else{
            $message = "You lost.";
            $credit -= $bet;
        }

        $result = [
            "Slot1" => $slot1,
            "Slot2" => $slot2,
            "Slot3" => $slot3,
            "Slot4" => $slot4,
        ];

        $stats = [
            "credit" => $credit,
            "bet" => $bet,
            "message" => $message,
            "result" => $result
        ];

        return response()->json(['game' => $stats], 200);
    }
}
