<?php 
	date_default_timezone_set("PRC");
	$start=strtotime('now');
	$end=mktime(0,0,0,11,20,2017);
	// 年
	$second=$end-$start;
	$year=floor($second/3600/24/365);
	// 月
	$temp=$year*3600*24*365;
	$second=$second-$temp;
	$month=floor($second/3600/24/30);
	// 日
	$temp=$month*3600*24*30;
	$second=$second-$temp;
	$day=floor($second/3600/24);
	// 时
	$temp=$day*3600*24;
	$second=$second-$temp;
	$hour=floor($second/3600);
	// 分
	$temp=$hour*3600;
	$second=$second-$temp;
	$minute=floor($second/60);
	// 秒
	$temp=$minute*60;
	$second=$second-$temp;
	$date=date('Y-m-d',time());

	$wed=date('w',time());
		
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>周二居家日_hao123上网导航</title>
	<link rel="stylesheet" href="./css/index.css">
	<link rel="short icon" href="./images/favicon.ico">
	<link rel="stylesheet" href="./css/lf.css">
	
	
</head>
<body>
	<div class="head">
		<div class="log">
			<a><img src="./images/logo-125.png" alt="hao123上网导航"></a>
		</div>
		<div class="log2">
			<a><img src="./images/jinritejia.png" alt=""></a>
		</div>
		<div class="time">
			<div class="clock">
				<ul>
					<li>
						<ul id="time1">
								<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						       </li>
						        <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
								</ul>
					            </li>
					            <li class="point"><span></span><span></span></li>
					<li>
						<ul id="time2">
							<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						    </li>
						    <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
									</ul>
								</li>
								<li class="point"><span></span><span></span></li>
					<li>
						<ul id="time3">
							<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						    </li>
						    <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
										</ul>
								</li>
								<li class="point"><span></span><span></span></li>
				    <li>
						<ul id="time4">
							<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						    </li>
						    <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
											</ul>
										</li>
										<li class="point"><span></span></li>
				    <li>
						<ul id="time5">
							<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						    </li>
						    <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
												</ul>
											</li>
				    <li>
						<ul id="time6">
							<li>
							    <img src="./images/front.png" width="43px" height="6px" alt="">
						    </li>
						    <li>
									<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="20px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="26px" height="6px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8px" height="18px" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="8" height="18" alt="">
								</li>
								<li>
										<img src="./images/front.png" width="25" height="8" alt="">
								</li>
								</ul>
								</li>
			    </ul>
			    </div>
					<div class="date" id="date">
						<span><?php echo "$date";?></span>
						<span><?php switch ($wed) {
										case '1':
											echo " 星期一";
											break;
										case '2':
											echo " 星期二";
											break;
										case '3':
											echo " 星期三";
											break;
										case '4':
											echo " 星期四";
											break;
										case '5':
											echo " 星期五";
										    break;
										case '6':
											echo " 星期六";
											break;
										case '7':
											echo " 星期天";
											break;

									} ?>
					</span>
					</div>
		        </div>
		<div class="nav">
				<a href="" class="one">首页</a>
				<a href="">9块9</a>
				<a href="">20元封顶</a>
				<a href="">潮流女装</a>
				<a href="">时尚男装</a>
				<a href="">居家生活</a>
				<a href="">鞋包饰品</a>
				<a href="">母婴儿童</a>
				<a href="">食品饮料</a>
				<a href="">品牌特卖</a>
	    </div>
	</div>
	<div id="banner">
			<a href=""><div class="img"></a></div>
	</div>

	<div class="rec_one">
		<div  class="rec_one_m">
		<a href=""  target="_blank"><img src="./images/298x456.7ef34eff477549e9317788798a382724.jpg" alt=""></a>
		<a href="" target="_blank"><img src="./images/297x456.e037beba2387aa69e9b4ed31d9ecd814.jpg" alt=""></a>
		<a href="" target="_blank"><img src="./images/297x456.010814e04b3214f0a502d38dc0cf3bb6.jpg" alt=""></a>
		<a href="" target="_blank"><img src="./images/298x456.ddc9f411ed2c30e66e0bbc9251d69410.jpg" alt=""></a>
		</div>
	</div>

	<div id="content">
		<div class="floor">
			<div class="deal">
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.4cfcbedc42c8a8f9dd7c215f7c7e8a9f.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>

				<!-- 2 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.c34d5e0686eeb755c27fe49ad5feae5e.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 3 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.08074390c67f33951a6582c2427c87c2.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 4 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.2a175a5734f00157dac0a5cbd5c63f3d.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 5 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.32782679153684a12b483e8426894c30.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 6 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.dab286167e822d6aea67286356480b73.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 7 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.d7917cdf9219a9c5aefaaba429d61275.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 8 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.c175b9ad235ad9ef84f2f0018c9d789f.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 9 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.fe1c7d4ffad762552b9b6ad88679f500.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 10 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.717a7b8adf99eabac0daba037029028b.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 11 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.1dc1a698e385cc23610b845efd41b8dc.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>

				<!-- 12 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.c36176a9792f0ad0b74ad7c6aaa917a8.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 13 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.28ad165c7d1893a4fb1acd1f7c88faad.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 14 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.2e2e6ffa87eb0c3376bc103a234d17b3.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 15 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.2ed94282b504ec24b07b98cd3bdb9dfa.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 16 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.4be5ab869feb9e10f79ec23ae40e1064.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 17 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.fdcd029b7c46681e6a5ad0ca92c119a4.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 18 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.01f296107b4ffdeac3f34915b131ed85.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 19 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.bdc686a36a3138f38ea71b5191bce36f.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 20 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.9ac7754eb0a326143f5e9f37cce45a1c.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>

				<!-- 21 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.3b2ce4cf1226a39e6dd29c09b8fffb67.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 22 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.bccafdbde877e9260d17fedad0e5e29c.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 23 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.cdec7bc34257901bc9bb19df3a044d4c.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 24 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.ae0521fe1a4eab2d28e666ee60a65073.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 25 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.d92ceaaf968576dc5e779e24d9f87c30.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>

				<!-- 26 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.d40040a469935176a577bb0853f60e88.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 27 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.8a5346a0e9bd678402520661e7b8dee4.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 28 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.b91653f6fcec40e471196875b4115422.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 29 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.2bfd05152ba168d87fa43657062fef9a.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 30 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.beff14329555aaddcd83c6154bf6a5ad.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 31 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.a84814674ab7ade70a3ea6e33be1bc3d.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 32 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.4abef62f39820d6bb6235e5ef688294f.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 33 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.223543c7deb4905a45b6278c92d0acb3.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 34 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.9fb2dae19139264bcbb220db8d73ee4b.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 35 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.b564f91e62362ef36afbbc2073d1f8b1.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 36 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.a4f8ef7db8b1f09634663bd0e8df90f6.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 37 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.3cfa62d70812a8456088e1da0eb8a5cd.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 38 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/800x800.5bc3077d4e6427893c80608f367b3dca.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 39 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.e999a527020bb74eba8e2748209836b8.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<!-- 40 -->
				<div class="dealtype">
					<a href="" class="img">
						<img src="./images/700x700.82d2e39d85409464fc84f57d540c39b5.382x382.jpg" alt="">
					</a>
					<div class="info">
						<a href="" title="田园半遮光窗帘区间价">田园半遮光窗帘区间价</a>
						<a href=""><span class="price">￥<em>5</em><i>.2</i></span><span class="count fr"><em class="old-price">￥9.2</em><em><i>1096</i>件已售</em></span><span class="qiang"><img src="./images/下载.png" alt=""></span></a>
					</div>
				</div>
				<div class="more">
					<div><span>更多专场 敬请关注</span></div>
					<div class="line"></div>
					<div class="moreimg">
							<a href=""><img src="./images/390x346.a8c46d9529f7e6f007492b6d1396ca62.390x346.jpg" alt=""></a>
							<a href=""><img src="./images/390x346.5eab68e54159e966ce223ed559750445.390x346.jpg" alt=""></a>
							<a href=""><img src="./images/390x346.8ad2534018b192eac1ddfdca1ba1ee9a.390x346.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-toper">
		<div class="footer-toper-content">
			<div> <a href=""><img src="./images/tejia-logo.png" alt=""></a></div>
			<div>今日特价
				<div class="ft-ys-links">
						<a href="">特价</a>
						<a href="">女装</a>
						<a href="">男装</a>
						<a href="">居家</a>
						<a href="">鞋包</a>
						<a href="">母婴</a>
						<a href="">数码</a>
						<a href="">9块9</a>
						<a href="">食品</a>
						<a href="">免税特卖</a>
						<a href="">海外直邮</a>
				</div>
			</div>
			<div>其他类别
				<div class="ft-ot-links">
						<a href="">新闻</a>
						<a href="">军事</a>
						<a href="">小说</a>
						<a href="">搞笑</a>
						<a href="">影视</a>
						<a href="">旅游</a>
						<a href="">游戏</a>
						<a href="">音乐</a>
						<a href="">天气</a>
						<a href="">体育</a>
						<a href="">足球</a>
						<a href="">NBA</a>
						<a href="">特价</a>
						<a href="">购物</a>
						<a href="">团购</a>
						<a href="">彩票</a>
						<a href="">股票</a>
						<a href="">考试</a>
				</div>
			</div>
			<div class="jz-logo"><a href=""></a></div>

		</div>
	</div>
	<div class="footer-bottom">
		<div class="content">
				<div class="left"><a href="">关于我们</a><a href="">常见问题</a><a href="反馈意见"></a><a href="">全站地图</a><a href="">京ICP证030173号</a></div>
				<div class="right"><a href="">官方微博</a><a href="">收藏本站</a><a href="">下载手机端</a></div>
		</div>
	</div>
	<div></div>
	<div></div>
	<div></div>
	<div></div>
</body>
</html>

