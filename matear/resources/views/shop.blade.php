@extends('layouts.app')

@section('content')
{{dd($favorites)}}
    <div class="container" style="margin-top: 80px">
        @if (session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos disponibles</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach ($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                <img src="/images/{{ $pro->image_path }}" class="card-img-top mx-auto"
                                    style="height: 150px; width: 150px;display: block;" alt="{{ $pro->image_path }}">
                                <div class="card-body">
                                    <a href="">
                                        <h6 class="card-title">{{ $pro->name }}</h6>
                                    </a>
                                    <p>${{ $pro->price }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                               
                                                    <div class="col-md-10 p-0">
                                                        <button class="btn btn-secondary btn-sm" class="tooltip-test"
                                                            title="Agregar al carrito">
                                                            <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="col-md-2">
                                                        <div>
                                                            <i onclick="prueba({{$pro->id}})" id="icon-favorite-{{$pro->id}}" class="heart fa fa-heart-o" ></i>
                                                        </div> {{-- ver si pro-id exite en favorite-id --}}
                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
