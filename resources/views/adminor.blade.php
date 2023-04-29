@extends('layouts.app')

@section('content')

@foreach ($orders as $order)
    <tr>
        <td>(ID:{{ $order->id }})</td>
        <td>(Пользователь:{{ $order->user->name }})</td>
        <td>(Продукт:{{ $order->product->name }})</td>
        <td>{{ $order->quantity }}</td>
        <td>{{ $order->total_price }}</td>
        <td>{{ $order->created_at }}</td>
    </tr>
@endforeach
<iframe width="250px" height="250px" src="https://www.youtube.com/embed/kCbxQpn4Yzo" title="Винтаж - Плохая девочка" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"></iframe>
@endsection