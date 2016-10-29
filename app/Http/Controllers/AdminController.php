<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use Auth;
use App\User;
use Session;

class AdminController extends Controller
{

    /**
     *  Lista użytkownikow
     * @return $this
     */
    public function usersList()
    {
        $users = User::latest()->get();
        return view('admin.user_list')->with('users', $users);
    }

    /**
     * Formularz edycji uzytkownika
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user_edit')->with('user',$user);
    }

    /**
     * Aktualizacja uzytkownika
     */
    public function updating($id)
    {
        $request = $_POST;
        if($request['password']){
            $request['password'] = bcrypt($request['password']); // kodowanie hasła
        }else{
            unset($request['password']);
        }

        $user = User::findOrFail($id);
        $user->update($request);
        Session::flash('ok','Zedytowano uzytkownika');
        return redirect('users-list');
    }

    /**
     *  Usuwanie uzytkownika
     */
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('ok','Usunięto uzytkownika');
        return redirect('users-list');
    }

    /**
     *  Edycja swojego profilu
     */
    public function profileEdit(){
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        return view('admin.user_edit')->with('user',$user);
    }

    /**
     * Wyswietlamy formularz dodawania uzytkownika
     */
    public function addUser(){
        return view('admin.user_add');
    }

    /**
     *  Tworzenie nowego uzytkownika
     */
    public function createUser(){
        $model = User::where('email', '=', $_POST['email'])->first();

        if(!$model){
            $_POST['password'] = bcrypt($_POST['password']);
            $user = new User($_POST);
            $user->save();
            Session::flash('ok','Dodano uzytkownika');
            return redirect('users-list');
        }else{
            Session::flash('bad','Użytkownik o takim mailu istnieje');
            return redirect('add-user');
        }
    }

}
