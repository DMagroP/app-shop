@extends('layouts.app')

@section ('title', 'App Shop | Dashboard')
@section('body-class', 'profile-page')

@section('styles')
    <style>
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
            display: flex;
            flex-direction: column;
        }
    </style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        <img src="{{ $category->featured_image_url }}" alt="Imagen Categoria {{ $category->name }}" class="img-circle img-responsive img-raised">
                    </div>

                    <div class="name">
                        <h3 class="title">{{ $category->name }}</h3>
                    </div>

                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="description text-center">
                <p>{{ $category->description }}</p>
            </div>

            <div class="team">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">
                                <a href="{{ url('/products/'.$product->id) }}">{{ $product->name }}</a>
                                <br>
                            </h4>
                            <p class="description">{{ $product->description }}</p>

                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                        <div class="center-block">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>    

        </div>
    </div>
</div>

@include('includes.footer')
@endsection

