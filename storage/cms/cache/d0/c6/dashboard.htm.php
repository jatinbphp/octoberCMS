<?php 
class Cms5e5f8e966ab08580207852_dc87cbe259e0f7a7657a3ae2b9b5e2bcClass extends Cms\Classes\PageCode
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
        'birth_date' => 'required',
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
        $birth_date = post('birth_date');
        
        
        DB::table('users')->where('id',$this->param('user_id'))->update([
            'name' => $name,
            'is_activated' => 1,
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
                'birth_date' => $birth_date,
            ]);
        }

        return Redirect::to('dashboard');
    }
}
}
