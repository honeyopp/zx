<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style>
		i{
		
		color: #fff;
		  display: block;
		  width: 23px;
		  height: 16px;
			animation:myfirst 1s;
			animation-iteration-cont:999999s;				
			background: url(./head-icons.png) no-repeat 0px -30px;    
			/*transform: rotate(9deg);*/
			 /*-webkit-transform: rotate(9deg);
			 -moz-transform: rotate(9deg);     
			 -ms-transform: rotate(9deg);
			 -o-transform: rotate(9deg);  */
			 /* -17  -   36*/
			animation-name:myfirst;
animation-duration:0.1s;
animation-timing-function:linear;
animation-delay:0s;
animation-iteration-count:infinite;
animation-direction:alternate;
animation-play-state:running;
/* Firefox: */
-moz-animation-name:myfirst;
-moz-animation-duration:0.1s;
-moz-animation-timing-function:linear;
-moz-animation-delay:0s;
-moz-animation-iteration-count:infinite;
-moz-animation-direction:alternate;
-moz-animation-play-state:running;
/* Safari and Chrome: */
-webkit-animation-name:myfirst;
-webkit-animation-duration:0.1s;
-webkit-animation-timing-function:linear;
-webkit-animation-delay:0s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:alternate;
-webkit-animation-play-state:running;
/* Opera: */
-o-animation-name:myfirst;
-o-animation-duration:0.1s;
-o-animation-timing-function:linear;
-o-animation-delay:0s;
-o-animation-iteration-count:infinite;
-o-animation-direction:alternate;
-o-animation-play-state:running;
}

		}

		
		div{
			background-color: pink;
		}
	@keyframes myfirst
{
0%   {transform: rotate(-17deg);}
50%  {transform: rotate(0deg);}
100% {transform: rotate(36deg);}
}

@-moz-keyframes myfirst /* Firefox */
{
0%   {transform: rotate(-17deg);}
50%  {transform: rotate(0deg);}
100% {transform: rotate(36deg);}
}

@-webkit-keyframes myfirst /* Safari and Chrome */
{
0%   {transform: rotate(-17deg);}
50%  {transform: rotate(0deg);}
100% {transform: rotate(36deg);}
}

@-o-keyframes myfirst /* Opera */
{
0%   {transform: rotate(-17deg);}
50%  {transform: rotate(0deg);}
100% {transform: rotate(36deg);}
}


		</style>
	</head>
	<body>
		<div>
		<i></i>
		</div>
	</body>
	</html>	