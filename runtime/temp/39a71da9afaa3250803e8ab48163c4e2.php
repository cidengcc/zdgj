<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"E:\PHP\project\zd\public/../application/home\view\index\index.html";i:1516115282;s:65:"E:\PHP\project\zd\public/../application/home\view\pub\header.html";i:1515513717;s:65:"E:\PHP\project\zd\public/../application/home\view\pub\footer.html";i:1514906749;}*/ ?>
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
<section class="v2-product">
    <div class="v2-title">
        <h2 class="v2-title__h2 v2-inner v2-ac"> <span></span> </h2>
    </div>
    <div class="v2-inner v2-product__box">
        <ul class="v2-list v2-ac">
            <?php foreach($list1 as $vo): ?>
            <li class="col-lg-3 col-sm-6"> <a href="<?php echo url('Cases/index',array('type'=>$vo['type'])); ?>" title="<?php echo $vo['title']; ?>" target="_self"> <img src="<?php echo $vo['url']; ?>" title="$typeArr[$vo.type]" alt="<?php echo $vo['title']; ?>" />
                <!--x="400" y="200"--> <h2 class="v2-product__box__h2 v2-to"><i>+</i><?php echo $typeArr[$vo['type']]; ?></h2> </a> </li>
            <?php endforeach; ?>

        </ul>
        <a href="<?php echo url('Cases/index'); ?>" title="" class="v2-product__more"><span>SEE MORE</span></a>
    </div>
</section>
<section class="v2-news">
    <div class="v2-title">
        <h2 class="v2-title__h2 v2-inner v2-ac"> <span>新闻资讯</span> <a href="about.html" title="新闻资讯">MORE</a> </h2>
    </div>
    <div class="v2-news__box v2-inner v2-ac">
        <div class="col-sm-6 v2-news__left">
            <a href="news_detail.html?23.html" title="低碳建筑首选天然石材 环保健康受欢迎" class="a-img" target="_self"> <img src="/static/index/images/201602241939008001.jpg" />
                <!--x="600" y="240"--> </a>
            <a href="news_detail.html?23.html" title="低碳建筑首选天然石材 环保健康受欢迎" class="a-title v2-ac" target="_self"> <span class="v2-to"><p>2016-01-20</p>低碳建筑首选天然石材 环保健康受欢迎</span> </a>
            <p>所谓低碳经济，是指在可持续发展理念指导下，通过技术创新、制度创新、产业转型等多种手段，尽可能地减少煤炭石油等高碳能源消耗，减少排放，达到经济社会发展与生态环境保护双赢的一种经济发展形态。发展低碳经济，一方面是积极承担环境保护责任，完成国家节...</p>
        </div>
        <div class="col-sm-6 v2-news__right">
            <div class="v2-news__right__box">
                <a href="news_detail.html?24.html" title="装修公司黑幕！预算报价陷阱你中枪了没？" class="v2-news__right__a v2-ac" target="_self"> <i>02</i> <span> <h3 class="v2-to"><i>2016-02-24</i>装修公司黑幕！预算报价陷阱你中枪了没？</h3> <p class="v2-lc"> 装修新房，是很多业主既高兴又担心做的事情了。高兴的是，终于可以如愿拥有自己的房子，担心的是：自己没有...</p> </span> </a>
                <a href="news_detail.html?23.html" title="低碳建筑首选天然石材 环保健康受欢迎" class="v2-news__right__a v2-ac" target="_self"> <i>03</i> <span> <h3 class="v2-to"><i>2016-01-20</i>低碳建筑首选天然石材 环保健康受欢迎</h3> <p class="v2-lc"> 所谓低碳经济，是指在可持续发展理念指导下，通过技术创新、制度创新、产业转型等多种手段，尽可能地减少煤...</p> </span> </a>
                <a href="news_detail.html?22.html" title="将文化融入设计 以设计推动创新" class="v2-news__right__a v2-ac" target="_self"> <i>04</i> <span> <h3 class="v2-to"><i>2016-01-20</i>将文化融入设计 以设计推动创新</h3> <p class="v2-lc"> 2013年11月13日，装饰有限公司联合北京大学政府管理学院承办了“文化与设计”主题设计沙龙活动。此...</p> </span> </a>
            </div>
        </div>
    </div>
</section>
<section class="v2-case">
    <div class="v2-title">
        <h2 class="v2-title__h2 v2-inner v2-ac"> <span>案例展示</span> </h2>
    </div>
    <div class="v2-case__box v2-inner v2-ac">
        <ul class="v2-list v2-ac">
            <?php foreach($list2 as $vo): ?>
            <li class="col-lg-3 col-sm-6"> <a href="<?php echo url('Cases/case_detail',array('articlesID'=>$vo['articlesID'])); ?>" class="v2-case__box__img" title="<?php echo $vo['title']; ?>" target="_self"> <img src="<?php echo $vo['url']; ?>" width="400" height="200" title="<?php echo $vo['title']; ?>" alt="<?php echo $vo['title']; ?>" /> </a> <a href="<?php echo url('Cases/case_detail',array('articlesID'=>$vo['articlesID'])); ?>" class="v2-case__h2" title="<?php echo $vo['title']; ?>" target="_self"> <h2> <?php echo $vo['title']; ?> <i class="">+</i> </h2> <p><?php echo $vo['content']; ?></p> </a> </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section class="v2-contact">
    <div class="v2-title">
        <h2 class="v2-title__h2 v2-inner v2-ac"> <span>关于我们</span> </h2>
    </div>
    <!--<div class="v2-inner v2-ac v2-contact__make">
     ABOUT US
    </div> -->
    <div class="v2-inner v2-ac">
        <div class="col-sm-8 col-xs-12 v2-ac v2-contact_right">
            <h3 class="v2-to"><a href="#" title="公司简介">MORE +</a>公司简介</h3>
            <div class="v2-contact--color">
                <p>“装饰设计”是装饰集团旗下的一家子公司。2007年成立。公司主要从事展柜、会展方面的设计、研发、生产、于一体的专业品牌推广服务型企业。公司设有设计部、10000平米生产研发基地。</p>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12 v2-ac v2-contact_left">
            <h3 class="v2-to">加入我们</h3>
            <div class="v2-contact--color">
                <p><span style="color: rgb(99, 99, 99); font-family: 'Microsoft YaHei', 华文细黑, Helvetica, Arial, sans-serif; font-size: 12px; line-height: 22px;">也许您是一位资深设计师（效果图、施工图），这里会提供无数的机会和实现价值的平台。</span></p>
            </div>
        </div>
        <div class="met_clear"></div>
    </div>
</section>
<!--<section class="v2-link">
    <div class="v2-title">
        <h2 class="v2-title__h2 v2-inner v2-ac"> <span>友情链接</span> </h2>
    </div>
    <dl class="v2-inner">
        <dd>
            <div class="tem_txt">
                <a href="" title="" target="_blank">跳转1</a>
            </div>
        </dd>
    </dl>
</section>-->
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
