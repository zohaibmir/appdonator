<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $users = User::get();
        return Response::json(array(
                    'error' => false,
                    'users' => $users->toArray()), 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = User::$rules;
        $data = Input::all();

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return Response::json(array('error' => true, 'message' => $validator->messages()), 400);
        }

        //Save Member
        $user = New User;
        $user->inputData();
        $user->status = 1;
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        //LogIn User with User Object
        Auth::login($user);

        if (Auth::check()) {
            return Response::json(array('error' => false, 'user' => $user->toArray()), 200);
        }
        return Response::json(array('error' => fals), 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $user = User::find($id);
        return Response::json(array(
                    'error' => false,
                    'user' => $user->toArray()), 200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $rules = User::$rulesUpdate;
        $data = Input::all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return Response::json(array('error' => true, 'message' => $validator->messages()), 400);
        }

        $user = User::find($id);
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');
        $user->phone = Input::get('phone');
        $user->address = Input::get('address');
        $user->zip = Input::get('zip');
        $user->city = Input::get('city');
        $user->save();
        return Response::json(array('error' => false, 'user' => $user->toArray()), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $user = User::find(Auth::$id());
        $user->delete();
        Auth::logout();
        return Response::json(array(
                    'error' => false,
                    'message' => 'user deleted'), 200
        );
    }

    /*
     * Get User Donations History
     */

    public function getHistory($id) {
        $donations = User::find($id)->donations()->get();
        return Response::json(array(
                    'error' => false,
                    'organisations' => $donations->toArray()), 200
        );
    }

    /**
     *  LogOut User and its session
     */
    public function logout() {
        Auth::logout();
        Session::flush();
        return Response::json(array(
                    'error' => false,
                    'message' => 'Logout Successfully'), 200
        );
    }

}
