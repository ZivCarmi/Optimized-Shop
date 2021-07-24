<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Hash, Session;

class User extends Model
{
    static public function validate($email, $password)
    {

        $valid = false;

        $user = DB::table('users as u')
            ->join('user_permissions as up', 'u.id', '=', 'up.user_id')
            ->join('permissions as p', 'p.id', '=', 'up.kind_id')
            ->select('u.*', 'p.kind', 'up.user_id')
            ->where('u.email', '=', $email)
            ->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {

                $valid = true;
                Session::put('user_name', $user->name);
                Session::put('user_id', $user->id);
                Session::flash('sm', 'Logged in successfully');

                if ($user->kind == 'Admin') {
                    Session::put('is_admin', true);
                }
            }
        }
        return $valid;
    }

    static public function save_new($request)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->country = $request['country'];
        $user->save();

        DB::table('user_permissions')->insert(
            ['user_id' => $user->id, 'kind_id' => 2]
        );

        Session::put('user_name', $request['name']);
        Session::put('user_id', $user->id);
        Session::flash('sm', 'Hey ' . $request['name'] . ', you signed up successfully and you are now logged in!');
    }
}
