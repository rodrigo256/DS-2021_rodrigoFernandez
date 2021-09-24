@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-6" style="  display: flex;
            justify-content: center;">
                <div class="" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                    border-radius: 15px; width: 80%;">
                    <div style="padding: 20px 20px 0px; text-align:center;">
                        <h3>¡Regístrate!</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" autocomplete="off">
                            @csrf
                            @include('users.form', ['modo' => 'Crear'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
