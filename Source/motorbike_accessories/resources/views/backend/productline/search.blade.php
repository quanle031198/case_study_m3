@extends('backend.layouts.home')
@section('title', 'Search result')
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="form-row">
                <div class="col">
                    <h5 class="card-title">@yield('title')</h5>
                </div>
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
                                <th>Product line</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Tool</th>



                            </tr>
                        </thead>
                        <tbody>
                            @if (count($productlines) == 0)
                                <tr>
                                    <td colspan="4">Empty data !</td>
                                </tr>
                            @else
                                @foreach ($productlines as $key => $productline)
                                    <tr>
                                        <th>{{ ++$key }}</th>
                                        {{-- <td><a href="{{ route('product.detail', $product->id) }} "
                                                class="nav-link">{{ $product->name }}</a></td> --}}
                                                <td>{{ $productline->name }}</td>
                                        <td>
                                            @if ($productline->productline_img)
                                                <img src="{{ asset('storage/' . $productline->productline_img ) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image !' }}
                                            @endif

                                        </td>
                                        <td>{!! $productline->description !!}</td>



                                        <td>
                                             <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-line.edit', $productline->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-line.delete', $productline->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    Delete</a>
                                                    {{-- <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product.edit', $product->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product.delete', $product->id) }}"><i
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
                        {!! $productlines->links('pagination::bootstrap-4') !!}
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection
