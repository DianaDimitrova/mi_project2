@extends('templates.base')
@section('content')
<div class="products">
<h2>{{$obj->name}}</h2>
<div>{!!$obj->body!!}</div>
<ul>
 @foreach($products as $one)
 				    <li>
				    	<a href="#"><img src="{{asset('img/' . $one->picture)}}" alt="" /></a>
				    	<div class="product-info">
				    		<h3>{{$one->name}}</h3>
				    		<div class="product-desc">
								<h4>{{$one->body}}</h4>
								<p>{{$one->name}}</p>
				    			<strong class="price" style = "display:inline " >{{$one->price}} p </strong> {{$one->small_body}}
								<a id="good-{{$one->id}}-{{$one->price}}" href="#" class="addCart">В корзину</a>
				    		</div> 
				    	</div>
			    	</li>

 @endforeach
</ul>
</div>
@stop