@extends('backend.layouts.home')
{{-- @section('title', __('language.title_head')) --}}
@section('title', 'Order list')

@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="form-row">
                <div class="col">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
            </div>
            <div style="margin-bottom: 40px">
            <ul class="header-menu nav float-left">
            {{-- <form action="{{ route('order.filter') }}" method="get">
                @csrf

                <select class="custom-select w-100" name="category_id">
                    <option value="">Chooose Category</option>
                    @foreach ($categories as $category)
                        @if (isset($categoryFilter))
                            @if ($category->id == $categoryFilter->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}
                                </option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            
            </form> --}}
            </ul>

            <ul class="header-menu nav float-right">
                <form class="" method="GET" action="#">
                    @csrf
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <div class="input-group"><input name="keyword" value="" type="text" class="form-control">
                                <div class="input-group-append">
                                    <button type="submitAjax" class="btn btn-outline-info"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                {{-- <th>{!! __('language.Stt') !!}</th>
                                <th>{!! __('language.title') !!}</th>

                                <th>{!! __('language.img') !!}</th>
                                <th>{!! __('language.category') !!}</th>
                                <th>{!! __('language.tool') !!}</th> --}}
                                <th>STT</th>
                                <th>Product name</th>

                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Customer name</th>
                                <th>Order date</th>


                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) == 0)
                                <tr>
                                    <td colspan="4">Empty data !</td>
                                </tr>
                            @else
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <th>{{ ++$key }}</th>
                                        {{-- <td><a href="{{ route('order.detail', $order->id) }} "
                                                class="nav-link">{{ $order->name }}</a></td> --}}
                                                <td>
                                                    {{-- @foreach ($order->product as $productname)
                                                        {{ $productname->name }}  
                                                    @endforeach  --}}
                                                      @foreach ($products as $productname)
                                                        {{ $productname->name }}  
                                                    @endforeach 
                                                    
                                                </td>
                                        <td>
                                            {{-- @if ($order->summary_img)
                                                <img src="{{ asset('storage/' . $order->summary_img) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Chưa có ảnh' }}
                                            @endif --}}
                                            {{ $order->quantity_ordered }}
                                        </td>
                                        <td>
                                        {{-- @if ( $order->status == 1 )
                                            {{ 'shipped' }}    
                                        @endif --}}
                                        {{ $order->status }}
                                        
                                        </td>

                                        <td>{{ $order->customer->name }}</td>
                                        <td>{{ $order->order_date}}</td>

                
                                    

                                        <td>
                                            {{-- <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('order.edit', $order->id) }}"> <i class="pe-7s-file"></i>
                                                {!! __('language.edit') !!}</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('order.delete', $order->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    {!! __('language.delete') !!}</a> --}}
                                                    {{-- <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('order.edit', $order->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('order.delete', $order->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    Delete</a> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">
                <nav class="d-flex justify-content-center" aria-label="Page navigation example ">
                    <ul class="pagination">
                        {!! $orders->links('pagination::bootstrap-4') !!}
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection
