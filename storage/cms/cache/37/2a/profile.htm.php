<?php 
class Cms5e5f87934f465319176561_1a5998a9b5ac9a632e0290b4ce2fb7ecClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $userId = $this->param('user_id');
    $this['profile'] = Db::table('users')->where('id', $userId)->first();
}
public function onHandleForm()
{
    $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'city' => 'required',
        'country' => 'required',
        'address' => 'required',
        'password' => 'required',
        'password_confirm' => 'required|same:password',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
        $messages = $validator->messages();
        foreach ($messages->all() as $message) {
            echo $message;
        }
        return false;
    } else {
        $name = post('first_name');
        $lastname = post('last_name');
        $city = post('city');
        $address = post('address');
        $country = post('country');
        $password = post('password');
        $password_confirm = post('password_confirm');
        
        DB::table('users')->where('id',$this->param('user_id'))->update([
            'name' => $name,
            'password' => bcrypt($password),
        ]);

        if(DB::table('user_data')->where('user_id',$this->param('user_id'))->count()>0) {
            $user=DB::table('user_data')->where("user_id",$this->param('user_id'))->update([
                'last_name' => $lastname,
                'city' => $city,
                'address' => $address,
                'country' => $country,
            ]);
        } else {
            $user=DB::table('user_data')->insert([
                'user_id' => $this->param('user_id'),
                'last_name' => $lastname,
                'city' => $city,
                'address' => $address,
                'country' => $country,
            ]);
        }

        return Redirect::to('login');
    }
}
}
