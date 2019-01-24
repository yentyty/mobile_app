<?php

namespace Mobile\Http\Controllers;
use Mobile\User;
use Mobile\Role;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList()
    {
        $role =  Role::all();
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('admin.users.list_user',compact('users','role'));
    }
    public function postThem(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordAgain'=>'required|same:password',
            'phone' => 'required|max:11',
            'address' =>'required|max:255',
        ], [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 3 ký tự',
            'username.unique' => 'Username đã tồn tại',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
            'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',    
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.max' => 'số điện thoại chỉ được tối đa 11 số',
            'address.required' => 'Bạn phải nhập địa chỉ',
            'address.max' => 'Số ký tự không được vượt quá 255',
        ]);
            $user = new User();
            $user->role_id = $request->role_id;  
            $user->name = $request->name;
            $user->username = $request->username;
            $user->birthday = $request->birthday;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->password = bcrypt($request->password);
            $user->gender = $request->gender;
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $name = $file->getClientOriginalName();
                $avatar = str_random(4) . "_" . $name;
                while (file_exists("admin/avatar" . $avatar)) {
                    $avatar = str_random(4) . "_" . $name;
                }
                $file->move("admin/avatar", $avatar);
                $user->avatar = $avatar;
            } else {
                $user->avatar = "";
            }
            $user->save();
            return redirect('admin/user/listuser')->with('thongbao', 'Bạn thêm thành công');
        
    }
    
    public function postUpdate(Request $request, $user_id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|max:11',
            'address' =>'required|max:255',
        ], [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'username.required' => 'Bạn chưa nhập tên đăng nhập',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'username.min' => 'Tên đăng nhập phải có ít nhất 3 ký tự',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'phone.max'=>'Chỉ được tối đa 11 số',
            'address.required' =>'Bạn chưa nhập địa chỉ',
            'address.max'=>'Số ký tự không được vượt quá 255',
        ]);
        $user = User::find($user_id);
        $user->role_id = $request->role_id;  
        $user->name = $request->name;
        $user->username = $request->username;
        if ($request->changePassword == "on") {
            $this->validate($request, [
                'password' => 'required|min:3|max:32',
                'passwordAgain'=>'required|same:password',
            ], [
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự',
                'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp',  
            ]);
            $user->password = bcrypt($request->password);
        }
            $user->birthday = $request->birthday;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->password = bcrypt($request->password);
            $user->gender = $request->gender;
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $avatar = str_random(4) . "_" . $name;
            while (file_exists("admin/avatar" . $avatar)) {
                $avatar = str_random(4) . "_" . $name;
            }
            $file->move("admin/avatar", $avatar);
            if (!empty($user->avatar) && File::exists("admin/avatar/" . $user->avatar)) {
                unlink("admin/avatar/" . $user->avatar);
            }
            $user->avatar = $avatar;
        }
        $user->save();
        return redirect('admin/user/listuser')->with('thongbao', 'Bạn đã sửa dữ liệu thành công');
    }

    public function getDelete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect('admin/user/listuser')->with('thongbao', 'Bạn đã xóa dữ liệu thành công');
    }

    public function getSearch(Request $request)
    {
        $users = User::where('id', 'like', '%' . $request->key . '%')->orwhere('name', 'like', '%' . $request->key . '%')
            ->orwhere('username', 'like', '%' . $request->key . '%')->orwhere('email', 'like', '%' . $request->key . '%')->orwhere('phone', 'like', '%' . $request->key . '%')->orwhere('address', 'like', '%' . $request->key . '%')->paginate(5);
        return view('admin.user.listuser', compact('users'));
    }
}
