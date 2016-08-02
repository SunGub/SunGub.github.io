<?php
$key = $_GET["key"];
$url = "http://dd-search.jd.com/?ver=2&zip=1&key=".$key;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$options=array(		
	'Referer:http://www.jd.com/',
	'User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36',
);
curl_setopt($ch,CURLOPT_HTTPHEADER,$options); // 添加头信息    模拟浏览器
curl_setopt($ch,CURLOPT_HEADER,0);
$result = curl_exec($ch);
echo $result;