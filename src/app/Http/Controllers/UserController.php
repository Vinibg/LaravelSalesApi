<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function findAll()
    {
        $user = User::all();

        return $user;
    }

    public function create(Request $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            $password = Hash::make($request->password);
            
            $user = User::create([
                'name'=> $name,
                'email'=> $email,
                'password'=> $password   
            ]);

            return $user;
            
        } catch (\Expection $e) {
            return respose(400)->with('msg', 'BAD REQUEST');
        }
    }

    public function update($user_id, Request $request)
    {
        try {
            $name = $request->name;
            $email = $request->email;
            
            $user = User::where('id', $user_id)->first();
            
            $user->update([
                "name"=> $name,
                "email"=> $email
            ]);

            return $user;
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($user_id)
    {
        try {
            $user = User::where('id', $user_id)->first();
            $user->delete();

            return $user;

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
