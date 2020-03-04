<?php 
class Cms5e5f8ee309136513640121_6aad9bd0fa4c170dfdb6657aa6e5715fClass extends Cms\Classes\PageCode
{
public function onStart()
{
	Auth::logout();
    Session::flash('message', 'You are successfully logged out.');
    Session::flash('message_type', 'success');
    return Redirect::to('/login');
}
}
