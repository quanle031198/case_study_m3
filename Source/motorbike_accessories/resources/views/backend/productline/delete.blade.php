@extends('backend.layouts.home')
@section('title', 'Prodcut line delete')
@section('content')
    <div class="main-card mb-3 card">
        <div class="card-body">
            
            <h5 class="card-title">@yield('title')</h5>
            <form method="POST" action="{{ route('product-line.destroy', $productline->id) }}">
                @csrf
                <h2 class="mb-4 mr-4 badge badge-danger">Do you want to Delete ?</h2>
                <div class="form-row">
                    
                    <div class="col-md-5">
                        <div class="position-relative form-group">
                            <label for="name" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-12">
                                <input disabled name="name" id="name" placeholder="name" type="text"
                                    value="{{ $productline->name }}" class="form-control">
                            </div>
                        </div>
        
                        <div class="position-relative form-group">
                            <div class="col-sm-10">
                                <button type="submit" class="mb-2 mr-2 btn btn-danger">Delete</button>
                                <button class="mb-2 mr-2 btn-transition btn btn-outline-primary"
                                onclick="history.go(-1); return false;" >Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
