<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Sushi dlya dushi</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
	
	<meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	<meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
	
	<!-- JS -->
	<script src="{{asset('js/jquery-1.4.1.min.js')}}" type="text/javascript"></script>	
	<script src="{{asset('js/jquery.jcarousel.pack.js')}}" type="text/javascript"></script>	
	<script src="{{asset('js/jquery-func.js')}}" type="text/javascript"></script>	
	<!-- End JS -->
	
</head>
<body>
	
<!-- Shell -->	
<div class="shell">
	
	<!-- Header -->	
	<div id="header">
		<h1 id="logo"><font face="Forte">Sushi dlya dushi</font></h1>	
		
		<div class = "smalcart">
		<div id="basket">
<table>
<tbody>
<tr style="display: none;" class="hPb">
<td>Выбрано:</td>
<td><span id="totalGoods">0</span> товаров</td>
</tr>
<tr style="display: none;" class="hPb">
<td>Сумма: &asymp; </td>
<td><span id="totalPrice">0</span> руб.</td>
</tr>
<tr style="display: none;" class="hPb">

</tr>
<tr style="display: table-row;" class="hPe">
<td colspan="2">Корзина пуста</td>
</tr>
<tr>
<td><a style="display: none;" id="clearBasket" href="#">Очистить</a></td>
<td><a style="display: none;" id="checkOut" href="#">Оформить</a></td>
</tr>
</tbody>
</table>
</div>
		</div>	
				
				
		<!-- Navigation -->
		<div id="navigation">
			<ul> 
			    <li><a href="#" class="active">Главная</a></li>
			    <li><a href="{{asset('contacts')}}">Контакты</a></li>
				
			</ul>
		</div>
		<!-- End Navigation -->
	</div>
	<!-- End Header -->
	
	<!-- Main -->
	<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			@yield('content')
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			
			
			<!-- Categories -->
			<div class="box categories">
				<h2><font face="Forte">Take away</font></h2>
				<div class="box-content">
					<ul>
					@foreach ($catalogs as $one)
					<li> <a href = "{{asset('/catalog/'.$one -> id)}}" > {{$one -> name}}
					</a> </li>
					@endforeach
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			

			
			
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Side Full -->
	<div class="side-full">
		
		
		
		
	</div>
	<!-- End Side Full -->
	
	<!-- Footer -->
	<div id="footer">
		<p class="left">
			<a href="#">Home</a>
			<span>|</span>
			<a href="#">Support</a>
			<span>|</span>
			<a href="#">My Account</a>
			<span>|</span>
			<a href="#">The Store</a>
			<span>|</span>
			<a href="#">Contact</a>
		</p>
		<p class="right">
			&copy; 2010 Shop Around.
			Design by <a href="http://bayguzin.ru/" target="_blank" title="">bayguzin.ru</a>
		</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
	
	<script src="{{asset('cart/js/jquery.cookie.js')}}"> 
	</script>
	<script type="text/javascript">
$(document).ready(function(){
		msg = new Array();
		var basket = '';
		var totalprice = 0;
		var totalCountGoods = 0;
		if (!$.cookie("basket")) {$.cookie("basket", '', {path: "/"});}
		basket = decodeURI($.cookie("basket"));
		basketArray = basket.split(",");// Находим все товары
		for(var i=0; i<basketArray.length-1;i++) {
			goodsId = basketArray[i].split(":"); // Находим id товара, цену и количество
			totalCountGoods+=parseInt(goodsId[1]);
			totalprice+=parseInt(goodsId[1])*parseInt(goodsId[2]);
		}
		if (totalprice > 0) {
			$('#clearBasket').show();
			$('#checkOut').show();
			$('#gugu').show();
			$('.hPb').show();
			$('.hPe').hide();
		}
		if (!totalprice) {totalprice = 0;}
		$('#totalPrice').text(totalprice);
		$('#totalGoods').text(totalCountGoods);
		$('#gugu').text($.cookie("basket"));
});



$('a.addCart').click(function() {
   data = $(this).attr('id').split('-');
   addCart(data[1], data[2], 1);
   return false;
  });
  
  
  
  function addCart(p1, p2, p3){
    if (!p3 || p3==0) {p3=1;}
    msg.id = p1; 		  // АйДи
    msg.price =  p2; // Цена
    msg.count = parseInt(p3); // Количество
    var check = false;
    var cnt = false;
    var totalCountGoods = 0;
    var totalprice = 0;
    var goodsId = 0;
    var basket = '';
    $('#clearBasket').show();
    $('#checkOut').show();
    $('#gugu').show();
    $('.hPb').show();
    $('.hPe').hide();
    basket = decodeURI($.cookie("basket"));
    if (basket=='null') {basket = '';}
    basketArray = basket.split(",");
    for(var i=0; i<basketArray.length-1;i++) {
        goodsId = basketArray[i].split(":");
	if(goodsId[0]==msg.id)	// ищем, не покупали ли мы этот товар ранее
	{
            check = true;
	    cnt   = goodsId[1];
	    break;
	}
    }
    if(!check) {
        basket+= msg.id + ':' + msg.count + ':' + msg.price + ',';
    } else {
       alert("Уже есть в корзине! Количество товаров можно будет изменить при оформлении заказа");
    }
    if(!check) {
        basketArray = basket.split(",");// Находим все товары
        for(var i=0; i<basketArray.length-1;i++) {
	    goodsId = basketArray[i].split(":"); // Находим id товара, цену и количество
	    totalCountGoods+=parseInt(goodsId[1]);
	    totalprice+=parseInt(goodsId[1])*parseInt(goodsId[2]);
	}
	$('#totalGoods').text(totalCountGoods);
	$('#totalPrice').text(totalprice);
	$.cookie("totalPrice", totalprice, {path: "/"});
	$.cookie("basket", basket, {path: "/"});
	$('#gugu').text($.cookie("basket"));
    }
}

$('#clearBasket').click(function() {
			$.cookie("totalPrice", '', {path: "/"});
			$.cookie("basket", '', {path: "/"});
			$('#totalPrice').text('0');
			$('#totalGoods').text('0');
			$('#gugu').text('0');
			$('.hPb').hide();
			$('.hPe').show();
			$(this).hide();
			$('#checkOut').hide();
			$.jGrowl("Корзина очищена!");
			return false;
		});

</script>
</body>
</html>
