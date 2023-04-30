@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach ($orders as $order)
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <img class="card-img-top" src="{{url('/img')}}/{{$order->product->img_url}}" alt="товар">
                            <li class="list-group-item">(ID:{{ $order->id }})</li>
                            <li class="list-group-item">(Пользователь:{{ $order->user->name }})</li>
                            <li class="list-group-item">(Продукт:{{ $order->product->name }})</li>
                            <li class="list-group-item">{{ $order->created_at }}</li>
                            <li class="list-group-item">{{ $order->total_price }}</li>
                            <li class="list-group-item">{{ $order->quantity }}</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
@endsection
