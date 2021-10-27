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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
