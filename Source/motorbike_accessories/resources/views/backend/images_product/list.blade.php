@extends('backend.layouts.home')
{{-- @section('title', __('language.title_head')) --}}
@section('title', 'Album list')

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
                    {{-- <form action="{{ route('image.filter') }}" method="get">
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
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
            @if (Session::has('error'))
                <p class="text-danger">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    {{ Session::get('error') }}
                </p>
            @endif
                </ul>

                <ul class="header-menu nav float-right">
                    <form class="" method="GET" action="{{ route('product-image.search') }}">
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
                                <th>Album name</th>
                                <th>Image 1</th>

                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Image 4</th>
                                <th>Tool</th>






                            </tr>
                        </thead>
                        <tbody>
                            @if (count($images) == 0)
                                <tr>
                                    <td colspan="4">Empty data !</td>
                                </tr>
                            @else
                                @foreach ($images as $key => $image)
                                    <tr>
                                        <th>{{ ++$key }}</th>


                                        <td>
                                            {{ $image->album_name }}

                                        </td>
                                        <td>
                                            @if ($image->image_a)
                                                <img src="{{ asset('storage/' . $image->image_a) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image' }}
                                            @endif

                                        </td>
                                        <td>
                                            @if ($image->image_b)
                                                <img src="{{ asset('storage/app/public' . $image->image_b) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image' }}
                                            @endif

                                        </td>
                                        <td>
                                            @if ($image->image_c)
                                                <img src="{{ asset('storage/' . $image->image_c) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image' }}
                                            @endif

                                        </td>
                                        <td>
                                            @if ($image->image_d)
                                                <img src="{{ asset('storage/' . $image->image_d) }}" alt=""
                                                    style="width: 130px; height: 130px">
                                            @else
                                                {{ 'Not image' }}
                                            @endif

                                        </td>


                                        <td>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-image.edit', $image->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('product-image.delete', $image->id) }}"><i
                                                    class=" pe-7s-trash "></i>
                                                    Delete</a>
                                            {{-- <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('image.edit', $image->id) }}"> <i class="pe-7s-file"></i>
                                                Edit</a>
                                            <a class="mb-2 mr-2 btn btn-secondary"
                                                href="{{ route('image.delete', $image->id) }}"><i
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
                        {!! $images->links('pagination::bootstrap-4') !!}
                    </ul>
                </nav>
            </div>

        </div>
    </div>

@endsection
