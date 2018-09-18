<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Pedido</title>
</head>
<body>
    <p>Se ha realizado un nuevo pedido!</p>
    <p>Estos son los datos del cliente que realizó el pedido</p>
    <ul>
        <li>
            <strong>Nombre:</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>Email:</strong>
            {{ $user->email }}
        </li>
        <li>
            <strong>Fecha pedido:</strong>
            {{ $cart->order_date }}   
        </li>
    </ul>
    <hr>
        <p>Detalles del pedido:</p>
        <ul>
            @foreach($cart->details as $detail)
            <li>
                {{ $detail->product->name }} x {{ $detail->quantity }}
                ({{ $detail->product->price * $detail->quantity }} €)
            </li>
            @endforeach
        </ul>
        <p>
            <strong>Total a pagar: {{ $cart->total }} €</strong>
        </p>
    <hr>

    <p>
        <a href="{{ url('/admin/orders/'.$cart->id ) }}">Haz click aquí</a>
        para ver más información sobre este pedido.
    </p>
</body>
</html>