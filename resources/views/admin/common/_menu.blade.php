<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 網站管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    {{--可以自动在线批量增加网站外链，并且可以随机出现在不同站群网站的不同位置--}}
                    <li><a href="{{url('admin/subWeb/index')}}" title="網站管理">網站管理</a></li>
                    {{--<li><a href="{{url('admin/externalLinks/index')}}" title="外鏈管理">外鏈管理</a></li>--}}
                    <li><a href="{{url('admin/subWeb/index')}}" title="廣告管理">廣告管理</a></li>
                    <li><a href="{{url('admin/subWeb/index')}}" title="内鏈管理">内鏈管理</a></li>
                    <li><a href="{{url('admin/subWeb/index')}}" title="内鏈管理">内鏈管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 自动外鏈<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/externalLinks/index')}}" title="外鏈管理">外鏈管理</a></li>
                    <li><a href="{{url('admin/externalLinksWeb/index')}}" title="引流网站管理">引流网站管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 分类管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/category')}}" title="分类管理">分类管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 博客管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/article/index')}}" title="原创文章管理">原创文章管理</a></li>
                    <li><a href="javascript:0;" title="专题管理">专题管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 采集管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/collectRules')}}" title="采集任务">采集任务</a></li>
                    <li><a href="{{url('admin/collectArticle')}}" title="采集文章管理">采集文章管理</a></li>
                    {{--<li><a href="{{url('admin/collectNews')}}" title="">采集文章管理news</a></li>--}}
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 词库管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/keywords')}}" title="词库管理">词库管理</a></li>
                    <li><a href="{{url('admin/keywords')}}" title="采集设置">采集设置</a></li>
                    <li><a href="{{url('admin/keywords')}}" title="屏蔽词">屏蔽词</a></li>
                    <li><a href="{{url('admin/keywords')}}" title="内链管理[从词库选择分类->词根->二级关键词列表加相关文章内链]">内链管理</a></li>
                    <!-- 假如：词库的关键词和文章标题和内容分词后的词索引相关联的话就好了 这样不现实，文章和内容分词后词汇量特别大，不利于系统查询和搜索，排除此法
					手工根据关键词 指定文章的话，会出现漏选的情况，难以做到全面覆盖 
					 锚文字 是文章标题呢？
					 随机同一分类下的文章，带上标题+超链接 随机植入到内容的开头和结尾

					 首页放二级短词
					 列表页放三级词
					 文章页放所有词的随机植入  这样就和前面点击 连接通过关键词搜索查询文章的结果进行了比对校验
					 这几类词做成tag标签搜索的形式， 点击这类词都会跳转到搜索页的搜索结果列表，这样变相的把内容中的相关关键词和词库的词汇进行了关联
					 词根代表是分类词，词库中的所有词都会得到展现



                     -->
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 模板管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/templates')}}" title="模板管理">模板管理</a></li>
                    <li><a href="{{url('admin/templates_cate')}}" title="模板分类">模板分类</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 文件管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/pictures')}}" title="图片管理">图片管理</a></li>
                    <li><a href="{{url('admin/videos')}}" title="视频管理">视频管理</a></li>
                    <li><a href="{{url('admin/files')}}" title="文件管理">文件管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 友链管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/links')}}" title="友链管理">友链管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 留言管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="picture-list.html" title="留言管理">留言管理</a></li>
                    <li><a href="picture-list.html" title="评论管理">评论管理</a></li>
                    <li><a href="picture-list.html" title="虚拟订单管理">虚拟订单管理</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 商城管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
                    <li><a href="product-category.html" title="分类管理">分类管理</a></li>
                    <li><a href="product-list.html" title="产品管理">产品管理</a></li>
                    <li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
                    <li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
                </ul>
            </dd>
        </dl>
        {{--<dl id="menu-comments">--}}
            {{--<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>--}}
            {{--<dd>--}}
                {{--<ul>--}}

                {{--</ul>--}}
            {{--</dd>--}}
        {{--</dl>--}}
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="member-list.html" title="会员列表">会员列表</a></li>
                    <li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
                    <li><a href="member-level.html" title="等级管理">等级管理</a></li>
                    <li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
                    <li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
                    <li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
                    <li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="admin-role.html" title="角色管理">角色管理</a></li>
                    <li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
                    <li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="charts-1.html" title="折线图">折线图</a></li>
                    <li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
                    <li><a href="charts-3.html" title="区域图">区域图</a></li>
                    <li><a href="charts-4.html" title="柱状图">柱状图</a></li>
                    <li><a href="charts-5.html" title="饼状图">饼状图</a></li>
                    <li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
                    <li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="{{url('admin/config')}}" title="系统设置">系统设置</a></li>
                    <li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
                    <li><a href="system-data.html" title="数据字典">数据字典</a></li>
                    <li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
                    <li><a href="system-log.html" title="系统日志">系统日志</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>