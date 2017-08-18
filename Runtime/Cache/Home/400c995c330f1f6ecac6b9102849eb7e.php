<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>1221</title>
	</head>

	<body>
		<div id="title">
			<p class="t1">新闻资讯分页</p>
			<p class="t2"></p>
			<p class="t3"></p>
		</div>

	</body>
	<script src="/object/Public/js/mydata.js"></script>
	<script type="text/javascript">
		var JSONObject = [{
			"title": "新闻资讯分页"
			
		},
		{
			"title": "人才列表分页"
		},
		{
			"title": "我的培训列表"
		}
		]

		function msg() {
			var title=document.getElementById('title');
			var t1 = document.getElementsByClassName('t1')[0];
			t1.innerHTML = JSONObject[1].title;

		}
		msg();
		/*window.onload = function() {
			var title=document.getElementById('title');
			var t1 = document.getElementsByClassName('t1')[0];
			t1.innerHTML = JSONObject[0].title1;
		}*/
		var request = new XMLHttpRequest();
		request.open("get","/object/Public/js/mydata.json",true);
		request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        request.send("firstName=yqz&lastName=lwz");
		request.onreadystatechange = function(){
			if(request.readyState !== 4) return;
			if(request.status == 200){
				console.log( request.responseText ); 
                json.func( request.responseText )
			}
			request.close();
		}
	</script>

</html>