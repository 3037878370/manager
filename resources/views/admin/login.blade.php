<!doctype html>
<html  class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin2.2</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/login.css') }}">
	  <link rel="stylesheet" href="{{ asset('admin/css/xadmin.css') }}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('admin/lib/layui/layui.js') }}" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      .verify-code{
        width:60%!important;
        float:left;
      }
      .code-img{
        width:35%;
        height: 50px;
        margin-left:5%;
        float:left;
      }
      .clearfix{
        clear:both;
      }
      .login_btn{
        display: inline-block;
        font-size: 14px;
        line-height: 24px;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        color: rgb(255, 255, 255);
        background-color: rgb(24, 159, 146);
        -webkit-appearance: none;
        width: 100%;
        padding: 12px 24px;
        margin: 0px;
        border-radius: 3px;
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
        outline: none;
      }
      .text_danger{
        color:red;
      }
    </style>
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">后台管理登录</div>
        <div id="darkbannerwrap"></div>


        <form class="layui-form" >
            <input name="username" placeholder="用户名" id="username" required="required"  type="text" lay-verify="required" class="layui-input" >
            <span class="text_danger username_error"></span>
            <hr class="hr15">
            <input name="password" lay-verify="required" id="password" required="required" placeholder="密码"  type="password" class="layui-input">
            <span class="text_danger password_error"></span>
            <hr class="hr15">
            <input name="verify"  lay-verify="required" id="verify" required="required" placeholder="验证码"  type="text" class="layui-input verify-code">

            <img src="{{ captcha_src('mini') }}" alt="" class="code-img" onclick="this.src='{{captcha_src('mini')}}'+Math.random()">
            <span class="text_danger verify_error"></span>
            <hr class="hr15">
            <div class="clearfix"></div>
            <!-- <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit"> -->
            <button style="width:100%;" class="login_btn" type="button" onclick="take_form();">登录</button>
            <hr class="hr20" >
        </form>
    </div>

<script>
function take_form(){
    var token = "{{csrf_token()}}";
    var username = $("#username").val();
    var password = $("#password").val();
    var verify = $("#verify").val();

    $.post("{{url('/admin/login')}}",{_token:token, username:username, password:password, verify:verify},function(data){
        console.log(data);
        if(data.status == 0){
            $("#"+data.position).focus();
            $("."+data.position+"_error").html(data.msg);
        }else{
          window.location.href="/index.php/"+data.url;
        }
    });
}
</script>
   
</body>
</html>