<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Captcha;
use App\Http\Models\Member;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $input = $request->except('_token');
        $res = Captcha::check($request['verify']);
        if(!$res){
            return response()->json(['status'=>0,'position'=>'verify', 'msg'=>'验证码输入错误']);
        }

        $rules = [
            'username' => 'required|between:4,18',
            'password' => 'required|between:4,18',
            'verify'   => 'required',
        ];
     
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect('/admin')
                        ->withErrors($validator)
                        ->withInput();
        }

        $member = Member::where('username',$input['username'])->first();

        if(!$member){
            return response()->json(['status'=>0,'position'=>'username', 'msg'=>'该用户不存在']);
        }
        
        if(pass($input['password'], $member['salt']) !=  $member['password']){
            return response()->json(['status'=>0,'position'=>'password', 'msg'=>'密码错误']);
        }

        session()->put('member', $member);

        return response()->json(['status'=>1,'url'=>'admin/index']);



    }
}
