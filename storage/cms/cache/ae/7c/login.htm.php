<?php 
class Cms5e5f81ff232e5773326800_bd55a9d0dc3a8ff9fefe2bfedcea4aafClass extends Cms\Classes\PageCode
{
public function onHandleForm()
{
	$rules = [
		'email' => 'required|email',
		'password' => 'required',
	];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        return back()->withInput()
                ->withErrors($validator)
                ->with('message_type', 'danger')
                ->with('message', 'There were some error try again');
    } else {
	    $email = post('email');
	    $password = post('password');

	    $credentials['email'] = $email;
	    $credentials['password'] = $password;

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } else {
        	return Redirect::to('/login');
    	}
    }
}
}
