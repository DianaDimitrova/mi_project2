@extends('templates.base')
@section('content')
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="css/photo/3.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/photo/2.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/photo/1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="css/photo/4.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
				    <li>
				    	<a href="#"><img src="css/photo/5.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>{{(isset($obj->name))?$obj->name:'АКЦИЯ'}}</h3>
				    		<div class="product-desc">
								<h4>Возьми!</h4>
								<p>Соката Маки <br/>с собой<p/>
				    			<strong class="price">за 6.99</strong>
				    		</div>
				    	</div>
			    	</li>
			    	<li>
				    	<a href="#"><img src="css/photo/8.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>ОБЕДЕННЫЕ ЧАСЫ</h3>
				    		<div class="product-desc">
								<h4>Еще доступнее!</h4>
				    			<p>С 12.00 до 16.00<br />СКИДКА</p>
				    			<strong class="price">10%</strong>
				    		</div>
				    	</div>
			    	</li>
			    	<li class="last">
				    	<a href="#"><img src="css/photo/7.jpg" alt="" /></a>
				    	<div class="product-info">
				    		<h3>НОВИНКА</h3>
				    		<div class="product-desc">
								<h4>Попробуй!</h4>
				    			<p>Новые роллы<br />со скидкой</p>
				    			<strong class="price">50%</strong>
				    		</div>
				    	</div>
			    	</li>
				</ul>
		
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->

<h2></h2>
<div></div>
@stop