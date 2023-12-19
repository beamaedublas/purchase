<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request, User $user){
        $fields = $request->validate([
            'last_name' => 'string',
            'first_name' => 'string',
            'address' => 'string',
            'phone' => 'string',
            'email' => 'string',
            'sex' => 'string',
            'birth_date' => 'date',
            'max_credit' => 'numeric|min:0'
        ]);

        $user->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $user->id . 'has been update.'
        ]);

    }

    public function store(Request $request, User $user){
        $fields = $request->validate([
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'string|nullable',
            'email' => 'required|string',
            'sex' => 'required|string',
            'birth_date' => 'required|date',
            'max_credit' => 'numeric|required|min:0'
        ]);

        $fields['phone'] = $request->filled('phone') ? $request->input('phone') : null;

        $user = $user->create($fields);



        return response()->json([
            'status' => 'OK',
            'user' => $user,
            'message' => 'User with ID#' . $user->id . 'has been update.'
        ]);

    }

    public function destroy(User $user) {
        $details = $user->last_name . ", " . $user->first_name;
        $user->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The user  $details has been deleted."
        ]);
    }

    public function index() {
        $users = User::orderBy('id')->orderBy('first_name')->get();

        return response()->json($users);
    }

    public function view(User $user) {

        return response()->json($user);
    }
}
