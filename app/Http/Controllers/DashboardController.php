<?php

namespace App\Http\Controllers;

use App\Models\CardModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $card = new CardModel();
        // $card->name = 'Rashid';
        // $card->profession = "Engineer";
        // $card->years_of_experience = 2;
        // $card->save();

        // dd(CardModel::all());

        return view('dashboard', [
            'cards'=> CardModel::all()
        ]);
    }

    public function store(User $id)
    {

        $data = request()->validate([
            'name' => ['required', 'min:3'],
            'nickname' => ['required', 'min:3'],
            'profession' => ['required'],
            'years' =>  ['numeric'],
        ]);

        dd($data);

        /*$user = new User();
        $user->name = $data['name'];
        $user->nickname = $data['nickname'];
        $user->profession = $data['profession'];
        $user->years = $data['years'];*/

    }
}
