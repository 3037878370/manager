 <!-- 左侧菜单开始 -->
 <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li>
                        <a onclick="xadmin.add_tab('首页','city.html')">
                            <i class="iconfont left-nav-li" lay-tips="首页">&#xe723;</i>
                            <cite>首页</cite>
                        </a>
                    </li>
                    <li>
                        <a onclick="xadmin.add_tab('系统管理','city.html')">
                            <i class="iconfont left-nav-li" lay-tips="系统管理">&#xe723;</i>
                            <cite>系统管理</cite>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="网站配置管理">&#xe6ce;</i>
                            <cite>网站配置管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('地域管理','echarts1.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>地域管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('科室管理','echarts2.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>科室管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('网站栏目管理','echarts3.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>网站栏目管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('浮动窗口管理','echarts4.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>浮动窗口管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('网站专题管理','echarts5.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>网站专题管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('友情链接管理','echarts6.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>友情链接管理</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('词典管理','echarts7.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>词典管理</cite>
                                    <i class="iconfont nav_right">&#xe697;</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a onclick="xadmin.add_tab('信息词典','member-del.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>信息词典</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('标题词典','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>标题词典</cite></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="网站角色管理">&#xe726;</i>
                            <cite>网站角色管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('管理员列表','admin-list.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>管理员列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('管理组列表','admin-role.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>管理组列表</cite>
                                    <i class="iconfont nav_right">&#xe697;</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a onclick="xadmin.add_tab('超级管理员','member-del.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>超级管理员</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('信息审核员','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>信息审核员</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('信息分配员','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>信息分配员</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('信息报送员','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>信息报送员</cite></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('权限分类','admin-cate.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>权限分类</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('权限管理','admin-rule.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>权限管理</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="active">
                            <i class="iconfont left-nav-li" lay-tips="信息管理">&#xe6b4;</i>
                            <cite>信息管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu" style="display:block;">
                            <li>
                            <a onclick="xadmin.add_tab('添加信息','error.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>添加信息</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('已发布信息列表','error.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>已发布信息列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('待分配信息列表','demo.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>待分配信息列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('待审核信息列表','log.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>待审核信息列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('入库信息列表','log.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>入库信息列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('信息回收站','log.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>信息回收站</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('信息统计','log.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>信息统计</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('信息检索','log.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>信息检索</cite></a>
                            </li>
                        </ul>
                    </li>
                    <hr>
                    <!-- <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="会员管理">&#xe6b8;</i>
                            <cite>会员管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('统计页面','welcome1.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>统计页面</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员列表(静态表格)','member-list.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员列表(静态表格)</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员列表(动态表格)','member-list1.html',true)">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员列表(动态表格)</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('会员删除','member-del.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>会员删除</cite></a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="iconfont">&#xe70b;</i>
                                    <cite>会员管理</cite>
                                    <i class="iconfont nav_right">&#xe697;</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a onclick="xadmin.add_tab('会员删除','member-del.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>会员删除</cite></a>
                                    </li>
                                    <li>
                                        <a onclick="xadmin.add_tab('等级管理','member-list1.html')">
                                            <i class="iconfont">&#xe6a7;</i>
                                            <cite>等级管理</cite></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="订单管理">&#xe723;</i>
                            <cite>订单管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('订单列表','order-list.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>订单列表</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('订单列表1','order-list1.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>订单列表1</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="分类管理">&#xe723;</i>
                            <cite>分类管理</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('多级分类','cate.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>多级分类</cite></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="城市联动">&#xe723;</i>
                            <cite>城市联动</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('三级地区联动','city.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>三级地区联动</cite></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="图标字体">&#xe6b4;</i>
                            <cite>图标字体</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('图标对应字体','unicode.html')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>图标对应字体</cite></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li" lay-tips="第三方组件">&#xe6b4;</i>
                            <cite>layui第三方组件</cite>
                            <i class="iconfont nav_right">&#xe697;</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a onclick="xadmin.add_tab('滑块验证','https://fly.layui.com/extend/sliderVerify/')" target="">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>滑块验证</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('富文本编辑器','https://fly.layui.com/extend/layedit/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>富文本编辑器</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('eleTree 树组件','https://fly.layui.com/extend/eleTree/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>eleTree 树组件</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('图片截取','https://fly.layui.com/extend/croppers/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>图片截取</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('formSelects 4.x 多选框','https://fly.layui.com/extend/formSelects/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>formSelects 4.x 多选框</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('Magnifier 放大镜','https://fly.layui.com/extend/Magnifier/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>Magnifier 放大镜</cite></a>
                            </li>
                            <li>
                                <a onclick="xadmin.add_tab('notice 通知控件','https://fly.layui.com/extend/notice/')">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>notice 通知控件</cite></a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->