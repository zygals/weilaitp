<div class="header" id="head">
    <div class="navi_body">
        <div style="width:1200px; margin:0 auto;">
            <div class="navi_logo"><a href="/" class="logo"><img src="__STATIC__images/logo_03.png"
                                                                 alt="未来和讯" title="未来和讯"> </a></div>
            <div class="navi_head">
                <div>
					<span style="width:94px;">
						<p class="navi_title"><a href="/" class="nav_index">首页</a></p>
					</span>
                    <span>
						<p class="navi_title"><a href="/yewu/"  class="nav_yewu">业务体系</a></p>
						<p><a href="/yewu/yingxiao/">全案营销专家</a></p>
    <p><a href="/yewu/tuoguan/">金牌托管管家</a></p>
    <p><a href="/yewu/qyy/">轻应用联盟</a></p>
	    <p><a href="http://yfw.weilaihexun.com/" target="_blank">云服务平台</a></p>
					</span>
                    <span>
						<p class="navi_title"><a href="/anli/"  class="nav_anli">品牌案例</a></p>
						<p><a href="/anli/yingxiao/">营销专家</a></p>
						<p><a href="/anli/guanjia/">托管专家</a></p>
                        <p><a href="/anli/website/">网站建设</a></p>
						<p><a href="/anli/app/">APP开发</a></p>
                        <p><a href="/anli/">更多案例</a></p>
					</span>
                    <span>
						<p class="navi_title"><a href="/news/" class="nav_news">资讯中心</a></p>
						<p><a href="/news/Media/">媒体报道</a></li>
    <p><a href="/news/industry/">行业资讯</a></p>
    <p><a href="/news/dynamic/">企业动态</a></p>
                            <p><a href="/news/chuangke/">运营课堂</a></p>
					</span>
                    <span>
						<p class="navi_title"><a href="/channel/"  class="nav_channel">渠道与招商</a></p>
					</span>
                    <span>
						<p class="navi_title"><a href="/about/" class="nav_about">关于我们</a></p>
						  <p><a href="/about">公司简介</a></li>
    <p><a href="/about/service/">客户服务</a></p>
    <p><a href="/about/law/">法律声明</a></p>
    <p><a href="/about/job/">招贤纳士</a></p>
    <p><a href="/about/contact/">联系我们</a></p>
					</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--导航上浮-->
<script src="__STATIC__js/ch.js" type="text/javascript" charset="utf-8"></script>
<script>
    //当前导航显示 #097ec6
    $(function () {
        var la = window.location.pathname;

        if(la.indexOf('about') >-1){
            $('.nav_about').css({"color":'#097ec6'})
        }else if(la.indexOf('news') >-1){
            $('.nav_news').css({"color":'#097ec6'})
        }else if(la.indexOf('yewu') >-1){
            $('.nav_yewu').css({"color":'#097ec6'})
        }else if(la.indexOf('anli') >-1){
            $('.nav_anli').css({"color":'#097ec6'})
        }else if(la.indexOf('channel') >-1){
            $('.nav_channel').css({"color":'#097ec6'})
        }else {
            $('.nav_index').css({"color":'#097ec6'})
        }

    })

</script>
