<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>所有商品 - <?php echo $webname; ?>触屏版</title>
<meta content="app-id=518966501" name="apple-itunes-app" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<!-- <link href="<?php echo G_TEMPLATES_CSS; ?>/mobile2/comm.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/mobile2/goods.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="<?php echo G_TEMPLATES_CSS; ?>/mobile2/bootstrap.css">
<link rel="stylesheet" media="screen,projection,tv" href="<?php echo G_TEMPLATES_CSS; ?>/mobile2/header_footer.css">
<link rel="stylesheet" media="screen,projection,tv" href="<?php echo G_TEMPLATES_CSS; ?>/mobile2/main.css">
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/jquery190.js" language="javascript" type="text/javascript"></script>
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/pageDialog.js" language="javascript" type="text/javascript"></script>

<link href="<?php echo G_TEMPLATES_CSS; ?>/news/comm.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/news/goods.css" rel="stylesheet" type="text/css" />
<link href="<?php echo G_TEMPLATES_CSS; ?>/news/glist.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
	.nav-wrapper .select-total {
    background-color: #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.19);
    position: absolute;
    right: 0;
    top: 45px;
    width: 100%;
    z-index: 4;
}

.sort_list::after {
    clear: both;
    content: "";
    display: table;
}

.sort_list {
    width: 100%;
}

.sort_list li {
    border-bottom: 1px solid #eee;
    border-right: 1px solid #eee;
    box-sizing: border-box;
    float: left;
    height: 44px;
    line-height: 42px;
    width: 33.3%;
}

.sort_list a {
    color: #666;
    display: block;
    font-size: 14px;
    padding: 0 20px;
    text-align: left;
}
.cateChk + label {
    position: absolute;
    height: 44px;
    width: 44px;
    top: 0;
    right: -6px;
    box-sizing: border-box;
    cursor: pointer;
    z-index: 1;
    background: transparent url("/statics/templates/mowov9mb1/images/check_.png") center 51px / 130% 390%;
    text-align: center;
    line-height: 44px;
    color: #CCC;
}

.cateChk:checked + label, .cateChk.red:checked + label {
    background-position-y: -7px;
    color: #F60;
}
.sort_list li {
    position: relative;
    overflow: hidden;
}

.sort_list li > input {
    display: none;
}

.sort_list li em {
    color: #F60;
}
#lottery a{
     height: 26px;
    padding: 0;
    margin: 8px 12px 0;
    color: #F60;
    border: 1px solid #F60;
    line-height: 26px;
    text-indent: 5px;
    border-radius: 5px;
}
.ico1sa{
    content: "\279C";
    font-size: 1.1rem;
    display: block;
    position: absolute;
    width: 44px;
    height: 30px;
    right: 2px;
    top: 0;
    line-height: 44px;
    text-align: center;
    text-indent: 0;
}
.select-icon {
    background-color: #fff;
    display: inline-block;
    height: 12px;
    overflow: hidden;
    position: relative;
    top: -1px;
    vertical-align: middle;
    width: 13px;
}

.select-icon i:first-child {
    margin-top: 0;
}

.select-icon i {
    background-color: #bbb;
    display: block;
    height: 2px;
    margin-top: 3px;
    width: 13px;
}
.z-Limg {
    float: left;
    width: 80px;
    height: 80px;
    position: relative;
    overflow: hidden;
    z-index: 0;
}
.sort_list a{
	color: #000;
}
</style>
<body>
    <div class="h5-1yyg-v1" id="loadingPicBlock">
    
<!-- 栏目页面顶部 -->
<script src="<?php echo G_TEMPLATES_JS; ?>/mobile/ajax.js"></script>
<!--new-->
  <!-- 导航 --> 
    <nav class="nav-wrapper" id="goodsNav"> 
     <input type="hidden" id="search" value="" /> 
     <input type="hidden" id="parm_order" value="20" /> 
     <input type="hidden" id="parm_cate" value="0" /> 
     <!--点击添加或移除current--> 
     <div class="select-btn current" id="divSort"> 
      <span class="arrow-up" style="display: none;"></span> 
      <span class="select-icon"> <i></i><i></i><i></i> </span> 
      <span><?php echo $key; ?></span> 
     </div> 
     <!--分类--> 
     <div id="selectSort" class="select-total" style="display: none;"> 
      <ul class="sort_list"> 
       <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/10">
        <li sortid="0">
                <a style="color:#f60" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s30/1">全部商品</a>
                <input id="chk0" class="cateChk" type="checkbox" name="0" value="0">
                <label for="chk0"></label>
            </li>
        </a>
            <?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
            <?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
            <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/<?php echo $categoryx['cateid']; ?>">
             <li sortid="<?php echo $categoryx['cateid']; ?>">
                <a href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/<?php echo $categoryx['cateid']; ?>/s30/1"><?php echo $categoryx['name']; ?></a>
                <input id="chk<?php echo $categoryx['cateid']; ?>" class="cateChk" type="checkbox" name="<?php echo $categoryx['cateid']; ?>" value="<?php echo $categoryx['cateid']; ?>">
                <label for="chk17"></label>
            </li>
        	</a>
            <?php  endforeach; $ln++; unset($ln); ?>
            <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>
           

      </ul> 
    
     </div> 
     <div class="select-btn" id="divOrder"> 
      <span><?php echo $onesa; ?></span> 
     </div> 
     <div id="selectOrder" class="select-total" style="display: none;"> 
      <ul class="order_list"> 
       <li order="s10"><a id="s10" style="color: #f60" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s10/1">即将揭晓</a></li>
       <li order="s20"><a id="s20" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s20/1">人气</a></li><!--  class="current" -->
       <li order="s30"><a id="s30" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s30/1">最新</a></li>
       <li order="s50"><a id="s50" href="<?php echo WEB_PATH; ?>/mobile/mobile/glist/0/s50/1">价格</a></li>
      </ul> 
     </div> 
    </nav> 

     <!-- 列表 --> 
    <div id="indexgoodList" class="goodsList" style="padding-top: 40px"> 

    
   <div id="locadings" style="width:100%;text-align: center;">加载中....</div>
 
    </div> 


<script type="text/javascript">
	$("#divSort").click(function(){		
		if($("#selectSort").css("display")=='none'){
			$("#selectSort").show();		
		}else{
			$("#selectSort").hide();
		}
	});
	$("#divOrder").click(function(){		
		if($("#selectOrder").css("display")=='none'){
			$("#selectOrder").show();
			setones = 1;		
		}else{
			$("#selectOrder").hide();
			setones = 0;
		}
	});
</script>


<!-- 内页顶部 -->
	<!-- <div class="search">
	<div class="col-xs-10 text-center f_search_input">
          <input type="text" id="key_words" placeholder="搜索您需要的商品">
          <img src="/statics/templates/mowov9mb1/img/search.png">
      </div>
	  <div class="col-xs-2 text-right f_header_btn">
        <span onclick="searchByKeys()">搜索</span>
      </div>
	</div>
    <section class="container-fluid"> -->
	    <!-- 导航 -->
	  <!--   <div class="c_newgoods_title goodsNav">
            <ul id="divGoodsNav">
       	 	    <li order="10" class="current"><a href="javascript:;">最快<b></b></a></li>
                <li order="20"><a href="javascript:;">最热<b></b></a></li>
                <li order="40"><a href="javascript:;">最新<b></b></a></li>
                <li order="50" type="price"><a href="javascript:;">价格<em></em><b></b></a></li>
				<li order="60" type="price"><a href="javascript:;">价格<em></em><b></b></a></li>
		 <li order=""><li>
           </ul>
        </div>
				<div class="c_clear"></br></br></div> -->
        <!-- 列表 -->
	<!-- 	<div class="Main_body">
		<div class="Nav " id="Nav">
					<li type="0" class="sOrange"><a id="0" href="javascript:;">全部</a></li>
						<?php $data=$this->DB()->GetList("select * from `@#_category` where `model`='1'",array("type"=>1,"key"=>'',"cache"=>0)); ?>
						<?php $ln=1;if(is_array($data)) foreach($data AS $categoryx): ?>
						<li><a id="<?php echo $categoryx['cateid']; ?>" href="javascript:;"><?php echo $categoryx['name']; ?></a></li>
						<?php  endforeach; $ln++; unset($ln); ?>
						<?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #D80000;text-align:center"><b>This Tag</b></div>';}?>
		</div>
		        <div class="goodsList" id="indexgoodList">
		     <div id="divGoodsLoading" class="loading" style="display:none;"><b></b>正在加载...</div>
            <a id="btnLoadMore" class="loading" href="javascript:;" style="display:none;">点击加载更多</a>
            <a id="btnLoadMore2" class="loading"  style="display:none;">没有数据</a>
            <a id="btnLoadMore3" class="loading"  style="display:none;">已经到底了</a>
        </div>
		</div>
    </section> -->
	
    <input id="urladdress" value="" type="hidden" />
    <input id="pagenum" value="" type="hidden" />
<?php include templates("mobile/index","footer");?>
<script type="text/javascript">
$(function(){
	var url = window.location.href;
	var site = url.lastIndexOf("\/");
    //截取最后一个/后的值
    zhis = '';
    zhis = url.substring(site + 2, url.length);
   
})
//打开页面加载数据
window.onload=function(){
    parm = "<?php echo $param_arr; ?>";
    var fg=parm.split("/");
	if(zhis == 's10'){
		$("#s10").css("color","#f60");
        glist_json(fg[0]+'/'+'s10'+'/1');
	}
	if(zhis == 's20'){
		$("#s20").css("color","#f60");
        glist_json(fg[0]+'/'+'s20'+'/1');
	}
	if(zhis == 's30'){
		$("#s30").css("color","#f60");
        glist_json(fg[0]+'/'+'s30'+'/1');
	}
	if(zhis == 's50'){
		$("#s50").css("color","#f60");
        glist_json(fg[0]+'/'+'s50'+'/1');
	}
	if(zhis !== 's10' || zhis !== 's20' || zhis !== 's30'||zhis !== 's50'){
        glist_json(fg[0]+'/'+fg[1]+'/1');
	}
	
	//购物车数量
	$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
		if(data.num){
			$("#btnCart").append('<em>'+data.num+'</em>');
		}
	});
	
}
//获取数据
function searchByKeys(){
$(".goodsList ul").remove();
gnamelist_json($("#key_words").val());
}
function gnamelist_json(parm){
	$("#urladdress").val('');
	$("#pagenum").val('');
	//alert(parm);
	$.getJSON('<?php echo WEB_PATH; ?>/mobile/mobile/gnamelistajax/'+parm,function(data){
	//alert(1);
		$("#divGoodsLoading").css('display','none');		
		if(data){
			var fg=parm.split("/");
			//alert(fg);
			//$("#urladdress").val(fg[0]+'/'+fg[1]);
			//$("#pagenum").val(data[0].page);
			for(var i=0;i<data.length;i++){
			var ul='<ul>';
			    ul+='<div class="c_classfix_goods_out">';
				ul+='<div class="c_img_goods">';
				ul+='<a id="'+data[i].id+'" href="<?php echo WEB_PATH; ?>/mobile/mobile/item/'+data[i].id+'"><img class="img-responsive lazy1" style="width: 100%; display: block;" src="<?php echo G_UPLOAD_PATH; ?>/'+data[i].thumb+'"></a>';
				ul+='</div>';
				ul+='<a id="'+data[i].id+'" href="<?php echo WEB_PATH; ?>/mobile/mobile/item/'+data[i].id+'">'+data[i].title+'</a>';
				ul+='<div class="c_shopping_cart">';
				ul+='<div class="c_progress_outbox">';
				ul+='<p>总需 <i> '+data[i].zongrenshu+'</i></p>';
				ul+='<div class="c_progress_box c_progress" id="'+data[i].id+'">';
				ul+='<span style="width:'+(data[i].canyurenshu / data[i].zongrenshu)*100+'%;"></span>';
				ul+='</div>';
				ul+='<p>剩余 <i> '+data[i].shenyurenshu+'</i></p>';
				ul+='</div>';
				ul+='<div><a class="add" codeid="'+data[i].id+'" href="javascript:;"><s></s></a></div>';
				ul+='</div></div></ul>';
				$("#divGoodsLoading").before(ul);			
			}
			//if(data[0].page<=data[0].sum){
			///	$("#btnLoadMore").css('display','block');
			//	$("#btnLoadMore2").css('display','none');
			//	$("#btnLoadMore3").css('display','none');
			//}else if(data[0].page>data[0].sum){
			//	$("#btnLoadMore").css('display','none');
			//	$("#btnLoadMore2").css('display','none');
			//	$("#btnLoadMore3").css('display','block');
			//}
		}else{
			$("#btnLoadMore").css('display','none');
			$("#btnLoadMore2").css('display','block');	
			$("#btnLoadMore3").css('display','none');			
		}
	});
}

$(document).ready(function(){
    var isbool=true;

    function glist_json(parm){
        // alert(parm);
        // $("#urladdress").val('');
        // $("#pagenum").val('');
        var nowPage = $("#pagenum").val();
        $.getJSON('<?php echo WEB_PATH; ?>/mobile/mobile/glistajax/'+parm,function(data){
            $("#divGoodsLoading").css('display','none');
            // console.log(data[0].page);
            if(data[0].sum){
                if(nowPage > data[0].sum){
                    $.PageDialog.fail('没有更多数据');
                    return false;
                }
                var fg=parm.split("/");
                $("#urladdress").val(fg[0]+'/'+fg[1]+'/'+data[0].page);
                // console.log(fg[0]+'/'+fg[1]+'/'+data[0].page);
                $("#pagenum").val(data[0].page);
                // console.log(data[0].sum);
                for(var i=0;i<data.length;i++){
                    // console.log((data[i].canyurenshu / data[i].zongrenshu)*100+'%');
                    var ul = '<ul id="'+data[i].id+'">';
                    ul += '<li><span class="z-Limg"><a href="<?php echo WEB_PATH; ?>/mobile/mobile/item/'+data[i].id+'"><img style="cursor: pointer" src="<?php echo G_UPLOAD_PATH; ?>/'+data[i].thumb+'" width="100px" height="100px"/></a><em class="cat-lottery_b"></em></span>';
                    ul +='<div class="goodsListR" style="float: none;"><h2>'+data[i].title+'</h2>';
                    ul +='<p class="price">价值：<em class="arial gray">￥'+data[i].money+'</em></p><div class="pRate"><div class="Progress-bar">';
                    ul +='<p class="u-progress" style="margin-bottom:0px;"><span class="pgbar" style="width:'+(data[i].canyurenshu/data[i].zongrenshu)*100+'%;"><span class="pging"></span></span></p><ul class="Pro-bar-li">';
                    ul +='<li class="P-bar01"><em>'+data[i].canyurenshu+'</em>已参与</li><li class="P-bar02"><em>'+data[i].zongrenshu+'</em>总需人次</li><li class="P-bar03"><em>'+data[i].shenyurenshu+'</em>剩余</li></ul> </div><a class="add " codeid="'+data[i].id+'" href="javascript:;"><s></s></a></div></div></li></ul>';
                    $("#locadings").before(ul);
                    //$.parser.parse("#indexgoodList");

                }
                isbool=true;

                if(data[0].page<=data[0].sum){
                    $("#btnLoadMore").css('display','block');
                    $("#btnLoadMore2").css('display','none');
                    $("#btnLoadMore3").css('display','none');
                }else if(data[0].page>data[0].sum){
                    $("#btnLoadMore").css('display','none');
                    $("#btnLoadMore2").css('display','none');
                    $("#btnLoadMore3").css('display','block');
                }
            }else{
                $("#btnLoadMore").css('display','none');
                $("#btnLoadMore2").css('display','block');
                $("#btnLoadMore3").css('display','none');
            }
        });
    }

    parm = "<?php echo $param_arr; ?>";
    var fg=parm.split("/");
    if(zhis == 's10'){
        $("#s10").css("color","#f60");
        glist_json(fg[0]+'/'+'s10'+'/1');
    }
    if(zhis == 's20'){
        $("#s20").css("color","#f60");
        glist_json(fg[0]+'/'+'s20'+'/1');
    }
    if(zhis == 's30'){
        $("#s30").css("color","#f60");
        glist_json(fg[0]+'/'+'s30'+'/1');
    }
    if(zhis == 's50'){
        $("#s50").css("color","#f60");
        glist_json(fg[0]+'/'+'s50'+'/1');
    }
    if(zhis !== 's10' || zhis !== 's20' || zhis !== 's30'||zhis !== 's50'){
        glist_json(fg[0]+'/'+fg[1]+'/1');
    }

	//即将揭晓,人气,最新,价格	
	$("#divGoodsNav li:not(:last)").click(function(){
		var l=$(this).index();
		$("#divGoodsNav li").removeClass().eq(l).addClass('current');
		var parm=$("#divGoodsNav li").eq(l).attr('order');
		$("#divGoodsLoading").css('display','block');
		$(".goodsList ul").remove();
		// var glist=glist_json("list/"+parm);
	});
	
	//商品分类
	var dl=$("#divGoodsNav dl"),
		last=$("#divGoodsNav li:last"),
		first=$("#divGoodsNav dd:first");
	$("#divGoodsNav li:last a:first").click(function(){		
		if(dl.css("display")=='none'){
			dl.show();
			last.addClass("gSort");
			first.addClass("sOrange");			
		}else{
			dl.hide();
			last.removeClass("gSort");
			first.removeClass("sOrange");
		}
	});
	$("#divGoodsNav  dd").click(function(){
		var s=$(this).index();
		var t=$("#divGoodsNav .gSort dd a").eq(s).html();
		var id=$("#divGoodsNav .gSort dd a").eq(s).attr('id');
		$("#divGoodsNav .gSort a:first").html(t+'<s class="arrowUp"></s>');
		var l=$("#divGoodsNav .current").index(),
			parm=$("#divGoodsNav li").eq(l).attr('order');
		if(id){			
			$("#divGoodsLoading").css('display','block');
			$(".goodsList ul").remove();
			// glist_json(id+'/'+parm);
		}else{
			// glist_json("list/"+parm);
			$(".goodsList ul").remove();
		}	
		dl.hide();
		last.removeClass("gSort");
		first.removeClass("sOrange");
	});
		
	$("#Nav li").click(function(){
		var s=$(this).index();
		var t=$("#Nav li a").eq(s).html();
		var id=$("#Nav li a").eq(s).attr('id');
		$("#Nav .gSort a:first").html(t+'<s class="arrowUp"></s>');
		var l=$("#Nav .current").index(),
			parm=$("#Nav li").eq(l).attr('order');
		if(id){			
			$(".goodsList ul").remove();
			// glist_json(id+'/'+parm);
		}else{
			// glist_json("list/"+parm);
			$(".goodsList ul").remove();
		}	

		last.removeClass("gSort");
		first.removeClass("sOrange");
	});
	
    //自动加载更多
    $(window).scroll(function() {

        if ($(document).scrollTop() + $(window).height() > $(document).height() - 100 && isbool==true ) {
            isbool=false;
            var url = $("#urladdress").val();
            //         // page = $("#pagenum").val();
            //     alert(url);
                glist_json(url);
        }


        // if ($(document).height() - $(this).scrollTop() - $(this).height() < 1
        //     && $('#btnLoadMore').css('display')!='none' && isbool==true ){
        //     isbool=false;
        //     var url = $("#urladdress").val();
        //         // page=$("#pagenum").val();
        //     glist_json(url);
        // }
    });


	//返回顶部
	$(window).scroll(function(){
		if($(window).scrollTop()>50){
			$("#btnTop").show();
		}else{
			$("#btnTop").hide();
		}
	});
	$("#btnTop").click(function(){
		$("body").animate({scrollTop:0},10);
	});
	//添加到购物车
	$(document).on("click",'.add',function(){
		var codeid=$(this).attr('codeid');
		$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/addShopCart/'+codeid+'/1',function(data){
			if(data.code==1){
				addsuccess('添加失败');
			}else if(data.code==0){
				addsuccess('添加成功');
			}return false;
		});
	});
	function addsuccess(dat){
		$("#pageDialogBG .Prompt").text("");
		var w=($(window).width()-255)/2,
			h=($(window).height()-45)/2;
		$("#pageDialogBG").css({top:h,left:w,opacity:0.8});
		$("#pageDialogBG").stop().fadeIn(1000);
		$("#pageDialogBG .Prompt").append('<s></s>'+dat);
		$("#pageDialogBG").fadeOut(1000);
		//购物车数量
		$.getJSON('<?php echo WEB_PATH; ?>/mobile/ajax/cartnum',function(data){
			$("#btnCart").append('<em>'+data.num+'</em>');
		});
	}
	//跳转页面
	var gt='.c_img_goods,.c_classfix_goods_out,.c_shopping_cart .c_progress_outbox';
	$(document).on('click',gt,function(){
		var id=$(this).attr('id');
		if(id){
			window.location.href="<?php echo WEB_PATH; ?>/mobile/mobile/item/"+id;
		}			
	});

});

</script>

</div>
</body>
</html>
<style>
#pageDialogBG{-webkit-border-radius:5px; width:255px;height:45px;color:#fff;font-size:16px;text-align:center;line-height:45px;}
</style>
<div id="pageDialogBG" class="pageDialogBG">
<div class="Prompt"></div>
</div>