@extends('layouts.app')

@section('content')
<h1 class="d-flex justify-content-center">Админ панель</h1>
<h3 class="d-flex justify-content-center">Управление товарами</h3>
<a href="{{url('/admin/product')}}" class="btn btn-success justify-content-center">Создать товар</a>
<a href="{{url('/admin/category')}}" class="btn btn-success justify-content-center">Создать категорию</a>
<a href="{{url('/admin/orders/')}}" class=" btn btn-primary justify-content-center">Заказы</a>

<div class="container">
    
    <div class="row">
        
    @foreach($prod as $obprod)
    

        <div class="col-md-2 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{url('/img')}}/{{$obprod->img_url}}" alt="img товара">
                <div class="card-body">
                  <h5 class="card-title">{{$obprod->name}}</h5>
                  <div class="col">
                    <a href="{{route('productedit',$obprod->id)}}" class="btn btn-warning ">Редактировать</a>
                    <!-- это кнопка отвечает за редактирования товара -->
                </div>
                <div class="col">
                    <a href="{{url('/admin/product/delete/')}}/{{$obprod->id}}" class="btn btn-danger">Удалить</a>
                </div> <!-- это кнопка отвечает за удаление товара из базы данных -->
                </div>
              </div>

            </div>

    @endforeach
    
</div>
</div>
<h3 class=" d-flex justify-content-center">Упрваление категориями</h3>
<div class="container">
    <div class="row">
    @foreach($cat as $obcat)


    <div class="col-md-2 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$obcat->name}}</h5>
              <div class="col">
                <a href="{{route('catedit',$obcat->id)}}" class="btn btn-warning ">Редактировать</a>
                <!-- это кнопка отвечает за редактирования товара -->
            </div>
            <div class="col">
                <a href="{{url('/admin/category/delete/')}}/{{$obcat->id}}" class="btn btn-danger">Удалить</a>
            </div> <!-- это кнопка отвечает за удаление товара из базы данных -->
            </div>
          </div>

        </div>
    @endforeach
</div>

    
</div>




@endsection