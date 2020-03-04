<?php 
class Cms5e5f8f8fda048560657577_0a87e8d1069c957986fe0747a1405ec9Class extends Cms\Classes\PageCode
{
public function onHandleForm()
{
	$rules = [
		'name' => 'required',
		'email' => 'required|email|unique:users,email',
	];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        return back()->withInput()
                ->withErrors($validator)
                ->with('message_type', 'danger')
                ->with('message', 'There were some error try again');
    } else {
	    $name = post('name');
	    $email = post('email');

	    $link = "";
		
		$userId=DB::table('users')->insertGetId([
			'name' => $name,
			'email' => $email,
		]);
		
		$url = asset('/profile/'.$userId);

	    Mail::raw("Welcome $name to OctoberCMS Test", function ($m) use ($email) {
	        $m->from("dhaval.b.php@gmail.com","OctoberCMS");
	        $m->to($email)->subject("Welcome Mail From OctoberCMS Team");
	    });

	    Mail::raw("Login url $url", function ($m) use ($email) {
	        $m->from("dhaval.b.php@gmail.com","OctoberCMS");
	        $m->to($email)->subject("Login Page Details");
	    });

	    return Redirect::to('/register');
    }
}
}
