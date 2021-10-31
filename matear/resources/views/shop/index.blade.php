@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <div class="container">
            <div class="row gutters" style="display: flex; justify-content: center;">
                @include('partials.aside-profile')
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class=" h-100">
                        <div class="">
                            <h1 class=" mb-2 text-dark">Mis compras</h1>
                        </div>
                        <div class="mb-2">
                            <div class=" row gutters">
                                <div class="col-md-12">
                               
                                    @if (empty($shopCollection))
                                        <div class="card mb-2" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                    border-radius: 15px; width: 100%;">
                                            <div class="card-body">
                                                <div class=" row">
                                                    <label class="col-sm-12 ">Usted no ha realizado ninguna compra.</label>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @foreach($shopCollection as $item)
                                            <div class="card mb-2"
                                            style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%); border-radius: 15px; width: 100%;">
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img src="/images/{{ json_decode($item['product'])->attributes->image }}" style="height: 150px; width: 150px" alt="">
                                                            </div>
                                                            <div class="col-md-9" style="margin: auto">
                                                                <h3>{{json_decode($item['product'])->name}}</h3>
                                                                <h5>Cantidad: {{json_decode($item['product'])->quantity}}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
