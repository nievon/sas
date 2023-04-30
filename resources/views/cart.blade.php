@extends('layouts.app')
@section('content')
    <div class="container">


        <h1 class="d-flex justify-content-center">Корзина пользователя: {{ \Illuminate\Support\Facades\Auth::user()->name }}
        </h1>
        <div class="cart">
            <div class="card-header">

            </div>
            <div class="card-body">
                @foreach ($cart_items as $item)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/img') }}/{{ $item->prod->img_url }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Название: {{ $item->prod->name }}</h5>
                            <p class="card-text">Цена: {{ $item->prod->price }}</p>
                            <form action="{{ route('cartUpadate', $item->id) }}" method="POST">
                                @csrf
                                <div>
                                    <button type="submit" name="count" class="btn btn-danger"
                                        value="{{ $item->count - 1 }}">-</button>
                                    <span>{{ $item->count }}</span>
                                    <button type="submit" class="btn btn-success" name="count"
                                        value="{{ $item->count + 1 }}">+</button>
                                </div>
                            </form>
                            <div class="col">


                                <a href="{{ url('cart/remove') }}/{{ $item->id }}" class="btn btn-danger">Удалить</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            

        </div>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <form class="form-inline" action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="form-group mb-2">
                <label for="inputPassword2" class="sr-only">Введите пароль для подтверждения заказа:</label>
                <input type="password" name="password" id="inputPassword2" placeholder="Пароль"
                    class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-2">Сформировать заказ</button>

        </form>
    </div>
</div>
</div>
    
    </div>
    
@endsection
