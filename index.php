<?php get_header(); ?>

	<body>
		<div  style="height:5px;background:#428bca"></div>
		<div class="container">

			<div class="container">
				<div class="col-lg-4 col-sm-4">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" style="    width: 100%;height: 127px;">
				</div>
				<div class="col-lg-4 col-sm-4"></div>
				<div class="col-lg-4 col-sm-4">
					<h3>免费热线：400-8000-461</h3>
					<div><span>关键词：</span><input type="text" name="" id=""><span>类型：</span><select name="" id=""></select><input class="btn btn-default" type="button" value="搜索"></div>
				</div>
			</div>
			<header>
				<ul class="nav menu">
					<li clas="col-lg-1"><a href="">首页</a></li>
					<?php

					for ($i=2; $i <10 ; $i++) { 
						$cate_name = get_the_category_by_ID($i);
						$category_link = get_category_link($i);
						?>
						<?php echo "<li clas='col-lg-1'><a href='$category_link'>$cate_name</a></li>"; ?>	
						<?php
					}
						
					?>
					<?php ?>
					
				</ul>
			</header>


			<div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-captions" data-slide-to="0" class=""></li>
					<li data-target="#carousel-example-captions" data-slide-to="1" class=""></li>
					<li data-target="#carousel-example-captions" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item">
						<img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="<?php bloginfo('template_url'); ?>/img/1.jpg" data-holder-rendered="true">
						<div class="carousel-caption">
							<h3>First slide label</h3>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="item">
						<img data-src="holder.js/900x500/auto/#666:#666" alt="900x500" src="<?php bloginfo('template_url'); ?>/img/2.jpg" data-holder-rendered="true">
						<div class="carousel-caption">
							<h3>Second slide label</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="item active">
						<img data-src="holder.js/900x500/auto/#555:#555" alt="900x500" src="<?php bloginfo('template_url'); ?>/img/3.jpg" data-holder-rendered="true">
						<div class="carousel-caption">
							<h3>Third slide label</h3>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>



		</div> <!-- /container -->
		<div class="row" style="padding-top:20px;">
			<div class="container">
				<div class="col-sm-3">
					<ul class="list-group">
						<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
						<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
						<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
						<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-group">
						<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
						<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
						<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
						<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="list-group">
						<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
						<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
						<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
						<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
						<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row news" style="padding-top:20px;">
			<div class="container">
				<div class="col-sm-3">
					<p><img src="<?php bloginfo('template_url'); ?>/img/link1.jpg" alt=""></p>
					<p><img src="<?php bloginfo('template_url'); ?>/img/link2.jpg" alt=""></p>
				</div>
				<div class="col-sm-3">
					<a href="#" class="thumbnail">
						<img data-src="holder.js/100%x180" alt="100%x180" src="<?php bloginfo('template_url'); ?>/img/aboout.jpg" data-holder-rendered="true" style="height: 265px; width: 100%; display: block;">
					</a>
				</div>
				<div class="col-sm-6">
					<ul class="list-group">
						<li class="">
						<h4>智磊展柜专业团队打造《固镇白马样板间专柜》<span class="text-right">[2016-11-19]</span></h4>
							<p>店名：固镇白马样板间地址：固镇白马环球港热烈祝贺【固镇白马样板间】安装成功！祝生意兴隆，财源滚滚！这是【智磊展柜】又一力作！得到了店主对柜台的认可及高度评价。&</p>
						</li>
						<li class="">
						<h4>智磊展柜专业团队打造《固镇白马样板间专柜》<span class="text-right">[2016-11-19]</span></h4>
							<p>店名：固镇白马样板间地址：固镇白马环球港热烈祝贺【固镇白马样板间】安装成功！祝生意兴隆，财源滚滚！这是【智磊展柜】又一力作！得到了店主对柜台的认可及高度评价。&</p>
						</li>
						<li class="">
						<h4>智磊展柜专业团队打造《固镇白马样板间专柜》<span class="text-right">[2016-11-19]</span></h4>
							<p>店名：固镇白马样板间地址：固镇白马环球港热烈祝贺【固镇白马样板间】安装成功！祝生意兴隆，财源滚滚！这是【智磊展柜】又一力作！得到了店主对柜台的认可及高度评价。&</p>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<table width="100%" height="44" border="0" cellpadding="0" cellspacing="0" background="/Templates/zl/imgs/gdbg.jpg">
  <tbody><tr>
    <td align="center">
	
	<table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="60" align="center"><img src="/Templates/zl/imgs/left1.png" width="17" height="17" name="arrLeft2" class="pointer" id="arrLeft2"></td>
        <td width="960" align="center">
		<div id="scrollbox2" style="width: 960px; overflow: hidden;"><div style="overflow: hidden; zoom: 1; width: 32766px;"><div style="float: left;">
        <li><table height="25" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?7_1.html">男女装展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?6_1.html">实拍展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?29_1.html">化妆品展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?37_1.html">黄金珠宝展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?31_1.html">男女/童鞋展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?32_1.html">童装/孕婴展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?36_1.html">时尚家纺展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?38_1.html">内衣/家居服展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?39_1.html">食品展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?40_1.html">商超烟酒类展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?41_1.html">其他样式类展柜</a></td>
			
          </tr>
        </tbody></table></li></div><div style="float: left;">
        <li><table height="25" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?7_1.html">男女装展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?6_1.html">实拍展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?29_1.html">化妆品展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?37_1.html">黄金珠宝展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?31_1.html">男女/童鞋展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?32_1.html">童装/孕婴展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?36_1.html">时尚家纺展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?38_1.html">内衣/家居服展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?39_1.html">食品展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?40_1.html">商超烟酒类展柜</a></td>
			
            <td width="120" align="center" background="http://www.ahzhilei.cn/Templates/zl/imgs/bg1.png" class="bg1"><a href="/list/?41_1.html">其他样式类展柜</a></td>
			
          </tr>
        </tbody></table></li></div></div></div></td>
        <td width="60" align="center"><img src="/Templates/zl/imgs/right1.png" width="17" height="17" name="arrRight2" class="pointer" id="arrRight2"></td>
      </tr>
    </tbody></table>
	 <script language="javascript" type="text/javascript">
		var scrollPic_01 = new ScrollPic();
		scrollPic_01.scrollContId   = "scrollbox2"; //内容容器ID
		scrollPic_01.arrLeftId      = "arrLeft2";//左箭头ID
		scrollPic_01.arrRightId     = "arrRight2"; //右箭头ID

		scrollPic_01.frameWidth     = 960;//显示框宽度
		scrollPic_01.pageWidth      = 120; //翻页宽度

		scrollPic_01.speed          = 10; //移动速度(单位毫秒，越小越快)
		scrollPic_01.space          = 10; //每次移动像素(单位px，越大越快)
		scrollPic_01.autoPlay       = true; //自动播放
		scrollPic_01.autoPlayTime   = 3; //自动播放间隔时间(秒)

		scrollPic_01.initialize(); //初始化
</script> 
	</td>
  </tr>
</tbody></table>


<?php get_footer(); ?>
