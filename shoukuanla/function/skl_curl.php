<?php 
//curl获取远程数据
function skl_curl($url=null,$postfields=null){

  $ch = curl_init(); //初始化一个 cURL 对象
	curl_setopt($ch, CURLOPT_URL,$url);//设置你需要抓取的URL

	if(!empty($postfields)){
		curl_setopt($ch, CURLOPT_POST, 1);
	  curl_setopt($ch, CURLOPT_POSTFIELDS,$postfields); 
	}

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  //请求结果保存到字符串中还是输出到屏幕上(0=输出 1=不输出)
	curl_setopt($ch, CURLOPT_TIMEOUT,8);  //响应允许执行的最长时间
	$returnDate=curl_exec($ch); //运行cURL，请求网页
	curl_close($ch); //关闭URL请求
  return $returnDate;

}

