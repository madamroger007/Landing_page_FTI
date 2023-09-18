<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    public function AllPost()
    {

        return view('dashboard.page.usermanagement.list_users',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
        ]);
    }

    public function userUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
            {
                $user_id       = $request->user_id;
                $name         = $request->name;
                $email        = $request->email;
                $role_name    = $request->role_name;
                $position     = $request->position;
                $phone        = $request->phone_number;
                $department   = $request->department;
                $status       = $request->status;

                $image_name = $request->hidden_avatar;
                $image = $request->file('avatar');

                if($image_name =='photo_defaults.jpg') {
                    if ($image != '') {
                        $image_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('/images/'), $image_name);
                    }
                } else {

                    if($image != '') {
                        unlink('images/'.$image_name);
                        $image_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('/images/'), $image_name);
                    }
                }

                $update = [
                    'user_id'      => $user_id,
                    'name'         => $name,
                    'role_name'    => $role_name,
                    'email'        => $email,
                    'position'     => $position,
                    'phone_number' => $phone,
                    'department'   => $department,
                    'status'       => $status,
                    'avatar'       => $image_name,
                ];

                User::where('user_id',$request->user_id)->update($update);
            } else {
                Toastr::error('User update fail :)','Error');
            }
            DB::commit();
            Toastr::success('User updated successfully :)','Success');
            return redirect()->back();

        } catch(\Exception $e){
            DB::rollback();
            Toastr::error('User update fail :)','Error');
            return redirect()->back();
        }
    }
}
