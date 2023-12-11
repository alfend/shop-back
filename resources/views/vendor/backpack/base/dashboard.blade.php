@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
    ];
    $result = \App\Http\Controllers\Api\CartController::getProgress();
    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-info mb-2',
        'value'       => $result['cartsUser'],
        'description' => 'Клиентов оформивших хотя бы 1 заказ',
        'progress'    => $result['cartsUser'] == 0 ? $result['cartsUser'] : (int)(100 * $result['cartsUser'] / $result['countUser']), // integer
        'hint'        => $result['countUser'] . ' всего пользователей.',
    ];

    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-danger mb-2',
        'value'       => $result['countProduct0'],
        'description' => 'Закончившихся продуктов',
        'progress'    => $result['countProduct'] == 0 ? $result['countProduct'] : (int)(100 * $result['countProduct0'] / $result['countProduct']), // integer
        'hint'        => $result['countProduct'] . ' всего продуктов.',
    ];

    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-warning mb-2',
        'value'       => $result['carts1000'],
        'description' => 'Покупок больше 1000',
        'progress'    => $result['countCart'] == 0 ? $result['countCart'] : (int)(100 * $result['carts1000'] / $result['countCart']), // integer
        'hint'        => $result['countCart'] . ' всего покупок.',
    ];

    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-success mb-2',
        'value'       => $result['cartsSum'],
        'description' => 'Сумма всех покупок',
        'progress'    => 100, // integer
        'hint'        => $result['countCart'] . ' всего покупок.',
    ];

@endphp

@section('content')
@endsection
