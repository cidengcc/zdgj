<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"E:\PHP\project\zd\public/../application/home\view\about\index.html";i:1516033616;s:65:"E:\PHP\project\zd\public/../application/home\view\pub\header.html";i:1515513717;s:65:"E:\PHP\project\zd\public/../application/home\view\pub\footer.html";i:1514906749;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ZDGJ</title>
    <meta name="description" content="111111111" />
    <meta name="keywords" content="2222222222" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link href="/static/index/images/favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" type="text/css" href="/static/index/css/metinfo.css" />
    <!--[if IE]><script src="/static/index/js/html5.js" type="text/javascript"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/index/css/metinfo-v2.css" />
</head>
<body>
<header class="v2-ac">
    <div class="head-v2__top v2-ac">
        <h1 class="pull-left"> <a href="" title="2222222222"> <img src="/static/index/images/logo.png" alt="" style="margin:15px 0px 0px 50px;" title="臻邸国际" /> </a> </h1>
        <ul class="head-v2__right pull-right v2-list">
            <li class="pull-left head-v2__li1 hidden-xs"> <span class="search-v2 glyphicon glyphicon-search"></span>
                <form id="form1" name="form1" method="get" action="/m342/Search.asp" target="_self">
                    <span class="navsearch_input"> <input type="text" name="SearchStr" value="搜索你想了解的内容..." size="20" /> </span>
                    <input type="submit" name="Submit" value=" " class="searchgo" />
                </form> </li>
            <li class="pull-left btn head-v2__li3 navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_v2__list"> <span class="glyphicon glyphicon-menu-hamburger"></span> </li>
        </ul>
    </div>
    <nav class="nav-v2">
        <ul class="nav nav-justified collapse navbar-collapse" id="nav_v2__list">
            <li class="active visible-xs-block search-home-v2"> <span class="search-icon-v2 glyphicon glyphicon-search"></span>
                <form id="form1" name="form1" method="get" action="/m342/Search.asp" target="_self">
                    <span class="navsearch_input pull-left v2-ac"> <input type="text" name="SearchStr" value="搜索你想了解的内容..." size="20" /> </span>
                    <input type="submit" name="Submit" value=" " class="searchgo" />
                </form> </li>
            <li class="active home-v2  navdown "><a href="<?php echo url('Index/index'); ?>" title="首页" navdown="">首页</a></li>
            <li class="dropdown   nav-v2__list2  "> <a href="<?php echo url('About/index'); ?>" title="关于我们" role="button" data-hover="dropdown">关于我们</a>
                <ul class="dropdown-menu  nav-v2__list2__ul " role="menu">
                    <li><a href="/m342/?Col1/Col8/" title="公司简介">公司简介</a></li>
                    <li><a href="/m342/?Col6/" title="公司荣誉">公司荣誉</a></li>
                    <li><a href="/m342/?Col7/" title="精英团队">精英团队</a></li>
                </ul> </li>
            <li class="dropdown   nav-v2__list2  "> <a href="<?php echo url('News/index'); ?>" title="新闻动态" role="button" data-hover="dropdown">新闻动态</a>
                <ul class="dropdown-menu  nav-v2__list2__ul " role="menu">
                </ul> </li>
            <li class="dropdown   nav-v2__list2  "> <a href="<?php echo url('Cases/index'); ?>" title="案例展示" role="button" data-hover="dropdown">案例展示</a>
                <ul class="dropdown-menu  nav-v2__list2__ul " role="menu">
                    <li><a href="case_detail.html?Col9/" title="办公医疗">办公医疗</a></li>
                    <li><a href="case_detail.html?Col11/" title="办公设施">办公设施</a></li>
                    <li><a href="case_detail.html?Col13/" title="酒店会所">酒店会所</a></li>
                    <li><a href="case_detail.html?Col14/" title="精装修房">精装修房</a></li>
                </ul> </li>
            <li class="dropdown   nav-v2__list2  "> <a href="<?php echo url('Service/index'); ?>" title="客户服务" role="button" data-hover="dropdown">客户服务</a>
                <ul class="dropdown-menu  nav-v2__list2__ul " role="menu">
                </ul> </li>
            <li class="dropdown   nav-v2__list2  "> <a href="<?php echo url('Contact/index'); ?>" title="联系我们" role="button" data-hover="dropdown">联系我们</a>
                <ul class="dropdown-menu  nav-v2__list2__ul " role="menu">
                    <li><a href="/m342/?Col12/" title="人才招聘">人才招聘</a></li>
                    <li><a href="/m342/?Col4/" title="在线留言">在线留言</a></li>
                </ul> </li>
        </ul>
    </nav>
</header>
<div class="v2_banner">
    <div id="slidershow" class="carousel slide">
        <ol class="carousel-indicators">
            <li class="active" data-target="#slidershow" data-slide-to="0"></li>
            <li class="" data-target="#slidershow" data-slide-to="1"></li>
            <li class="" data-target="#slidershow" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <a href="#" title="1"><img src="<?php echo $img1; ?>" alt="1" /></a>
            </div>
            <!--x="1920" y="654"-->
            <div class="item ">
                <a href="#" title="2"><img src="<?php echo $img2; ?>" alt="2" /></a>
            </div>
            <!--x="1920" y="654"-->
            <div class="item ">
                <a href="#" title="3"><img src="<?php echo $img3; ?>" alt="3" /></a>
            </div>
            <!--x="1920" y="654"-->
        </div>
        <a class="left carousel-control" href="javascript:;" role="button"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
        <a class="right carousel-control" href="javascript:;" role="button"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
    </div>
</div>
<section class="sidebar-v2__section">
    <div class="section__head">
        <div class="navbar sidebar-v2">
            <div class="container-fluid" id="sidebar-v2__accordion">
                <div class="navbar-header   ">
                    <button type="button" class="navbar-toggle collapsed sidebar-v2__button btn" data-toggle="collapse" data-target="#sidebar-v2__list2" aria-expanded="false" data-parent="#sidebar-v2__accordion"> <span class="glyphicon glyphicon-menu-hamburger"></span> </button>
                    <h1 class="dropdown-toggle sidebar-v2__h1 btn " data-toggle="collapse" data-target="#sidebar-v2__list3" data-parent="#sidebar-v2__accordion"> <button type="button" disabled="disabled"></button> <span>关于我们 </span> </h1>
                </div>
                <div class="panel">
                    <div class="collapse navbar-collapse" id="sidebar-v2__list2">
                        <ul class="nav navbar-nav navbar-right" id="collapseTwo">
                            <li><a href="<?php echo url('About/index'); ?>">公司简介</a></li>
                            <li><a href="<?php echo url('About/honor'); ?>">公司荣誉</a></li>
                            <li><a href="<?php echo url('About/honor'); ?>">精英团队</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="met_clear"></div>
<article class="sidebar-v2__article">
    <div class="met_article">
        <div class="met_editor met_module1">
            <p>古典家具有限公司是中国家居行业的龙头企业，是一家集全球产品运营、卖场渠道管理、家居品牌推广、家居创意研发于一体的多元化、综合型的家居集团公司。公司创立于2000年，位于“中国家具商贸之都——顺德乐从”。10多年来，公司锐意进取，始终专注于全球家具、家居产业链的广度与纵深发展，先后投资成立古典家具有限公司等数家实力雄厚的公司。&nbsp;</p>
            <p>古典家具有限公司始终坚持“以服务创品牌、以诚信立品牌”的经营理念和“以人为本、追求卓越”的企业核心价值观，不断完善面对全球的销售网络与服务系统，为中国家居企业搭建了一个“环境一流、服务一流、管理一流”的国际交易平台。&nbsp;</p>
            <p>古典家具有限公司连续多年被评为“中国家具产业十大渠道品牌”， 2010年1月，“古典家具有限公司”获认定为“中国驰名商标”；2012~2013年，古典家具有限公司获连续两年被评定为“广东省五百强企业”和“亚洲品牌500强”；2014年，荣获“中国最具影响力品牌500强”与“中国（行业）十大标杆品牌”；在“2015获颁中国千万富豪青睐的“奢华家居体验中心”荣誉。并被各级政府指定为商贸经济指定考察单位，深受国家政府和社会各阶层的喜爱与信赖，古典家具有限公司每年接待国内外社会名流、政府政要、商务考察团体的参观、访问与购物达180万人次，声名远扬。&nbsp;</p>
            <p>在新的历史时期，罗浮宫人秉承传统、心怀梦想，高举“中国创造”带领中国家居走向世界，古典家具有限公司，敞开七星级家居殿堂，喜迎各国宾朋！！</p>
            <div class="clear"></div>
        </div>
    </div>
</article>
<div class="met_clear"></div>

<footer class="v2_footer">
    <section class="v2-inner v2-ac">
        <div class="v2_footer_nav col-sm-6">
            <a href="<?php echo url('About/index'); ?>" title="1关于我们">关于我们</a>
            <a href="<?php echo url('News/index'); ?>" title="新闻动态">新闻动态</a>
            <a href="<?php echo url('Cases/index'); ?>" title="案例展示">案例展示</a>
            <a href="<?php echo url('Service/index'); ?>" title="客户服务">客户服务1</a>
            <a href="<?php echo url('Contact/index'); ?>" title="联系我们">联系我们</a>
        </div>
        <div class="v2_footer_text col-sm-6 v2-ac">
            <p>装饰公司 版权所有 2008-2016 鄂ICP备8888888
                <!--统计代码--></p>
            <p>
                电话：13385290909 QQ:904725327  Email:904725327@qq.com</p>
            <div id="metinfo_91mb_Powered"></div>
            <p></p>
        </div>
        <div class="met_clear"></div>
    </section>
</footer>
<script src="/static/index/js/jquery.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
</body>
</html>
