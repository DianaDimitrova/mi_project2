@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Товары</div>

                <div class="panel-body">
<form action="{{asset('home/add')}}" method="post" enctype="multipart/form-data">
	{!! csrf_field() !!}
  <div class="form-group">
    <label for="name">Название товара</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="price">Цена товара</label>
    <input type="text" class="form-control" name="price" id="price" placeholder="price">
  </div>
   <div class="form-group">
    <label for="small_body">Короткое описание товара</label>
    <input type="text" class="form-control" name="small_body" id="small_body" placeholder="small_body">
  </div>
  <div class="form-group"> 
  <label for="body">Полное описание товара</label>
  <textarea class="form-control" name="body" id="body" rows="3"></textarea>
  </div>
  <div class="form-group">
  <label for="catalog_id">Каталог</label>
  <select id="catalog_id" name="catalog_id"> 
@foreach($catalogs as $one)
<option value="{{$one->id}}">{{$one->name}}</option>
@endforeach
</select>
</div>
  <div class="form-group">
    <label for="file">File input</label>
    <input type="file" name="file" id="file">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> vip
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
