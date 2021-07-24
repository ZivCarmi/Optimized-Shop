@extends('cms.cms_master')

@section('cms_content')
@include ('utils.cms_header', ['title' => 'Shop Orders'])
<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">User Name</th>
                    <th><span class="ml-4">Product Details</span></th>
                    <th class="text-center">Total Amount</th>
                    <th class="text-center">Order Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td class="text-center">{{ $order->id }}</td>
                    <td class="text-center">{{ $order->name }}</td>
                    <td>
                        @foreach(unserialize($order->data) as $item_details)
                        <ul class="list list-style-1 d-inline">
                            <li class="">
                                <b>Product: </b> {{ $item_details['name'] }},
                                <br> <b>Quantity:</b> {{ $item_details['quantity'] }}
                                <br> <b>Price:</b> ${{ $item_details['price'] }}
                            </li>
                        </ul>
                        @endforeach
                    </td>
                    <td class="text-center">${{ $order->total }}</td>
                    <td class="text-center">{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
