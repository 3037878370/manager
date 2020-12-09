<!-- 顶部开始 -->
<div class="container">
            <div class="logo">
                <a href="./index.html">后台管理系统</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>

            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;"> - {{ $admin['truename'] }}</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('修改密码','http://www.baidu.com')">修改密码</a></dd>
                        <dd>
                            <a href="./login.html">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="/">先锋网首页</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->