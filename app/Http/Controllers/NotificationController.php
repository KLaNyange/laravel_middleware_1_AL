<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\NewMember;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function newMember(){

        $user = User::first();

        $newMemberData= [
            'body' => 'Your sign up has been added successfully',
            'text'=> 'Go check this',
            'url'=>url('/'),
            'thx'=>'Thank you for sign up'
        ];

        $user->notify(new NewMember($newMemberData));
    }
}
