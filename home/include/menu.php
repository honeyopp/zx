
	echo "<style>
	*{
		margin: 0px;
		padding: 0px;
	}


	.menu{
		width: 128px;
		height: 448px;
		margin-left: 128px;
		display: block;
		background-color:#fff;
    position:absolute;
    background-color: rgba(255,255,255,0.4);

	}
	.menu>li{
		list-style: none;
		margin-top: 24px;
		background-color: rgba(255,255,255,0.4);

	}
	.menu>li>span{
		float: right;
		margin;
		margin-top:-23px;
		text-align: center;

	}
	.menu>li:hover{
		transform:translate(0px,8px);

	}

	.menu>li span{
		transform:translate(-30px,0px);
	}
	.menu>li:nth-child(2)>span{
		transform:translate(-60px,0px);

	}
		.menu>li>img{
		display: block;
		width: 26px;
		height: 26px;

	}

	</style>";
		$link=mysql_connect('localhost','root','123456');
		mysql_select_db('shop');
		$sql="select  class.classname from class";
		$res=mysql_query($sql);
		 $arr=array();
		while ($row=mysql_fetch_assoc($res)){

			$arr[]=$row;

		}


			echo "<div></div>";
			echo "<ul class=menu>";
		foreach ($arr as $key => $value) {

			foreach ($value as $key => $value1) {
				// echo "$value1";
				echo"

				<li><img src=./public/img/89f4fd06-94c8-47ff-9071-f00664763983.png alt><span>$value1</span></li>";

			}

		}
		echo "</ul>";