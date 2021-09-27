@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        @if (session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        {{-- {{dd($cards)}} --}}
        <div class="container">
            <div class="row gutters" style="display: flex; justify-content: center;">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class=" h-100">
                        <div class="">
                            <div class=" account-settings">
                            <div class="card"
                                style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                            border-radius: 15px; width: 100%; margin-bottom: 15px">
                                <a href="{{ url('/profile/' . auth()->user()->id) }}" style="text-decoration:none">
                                    <div class="card-body title-card" style="padding:15px; text-align:center;">
                                        <h6 style="margin: 0; color:black;">Mis datos</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="card"
                                style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                    border-radius: 15px; width: 100%; margin-bottom: 15px">
                                <a href="{{ route('password.update') }}" style="text-decoration:none">
                                    <div class="card-body title-card" style="padding:15px; text-align:center;">
                                        <h6 style="margin: 0; color:black;">Cambiar contraseña</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="card"
                                style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                            border-radius: 15px; width: 100%; margin-bottom: 15px">
                                <a href="" style="text-decoration:none">
                                    <div class="card-body title-card" style="padding:15px; text-align:center;">
                                        <h6 style="margin: 0; color:black;">Mis compras</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class=" h-100">
                    <div class="">
                            <h1 class=" mb-2 text-dark">Mis datos</h1>
                    </div>
                    <div class="">
                            <h4 class=" mb-2 text-dark">Datos de la cuenta</h4>
                    </div>
                    <div class="">
                            <div class=" mb-2">
                        <div class=" row gutters">
                            <div class="col-md-12">
                                <div class="card" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                border-radius: 15px; width: 100%;">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control"
                                                    style="border: 0; background-color: white;" id="email"
                                                    placeholder="{{ auth()->user()->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h4 class=" mb-2 text-dark">Datos personales</h4>
                    </div>
                    <div class="mb-2">
                        <div class=" row gutters">
                            <div class="col-md-12">
                                <div class="card" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                            border-radius: 15px; width: 100%;">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="phone">Nombre</label>
                                            <div class="col-sm-10">
                                                <input style="border: 0; background-color: white;" type="text"
                                                    class="form-control" id="name"
                                                    placeholder="{{ auth()->user()->name }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="website">Apellido</label>
                                            <div class="col-sm-10">
                                                <input style="border: 0; background-color: white;" type="text"
                                                    class="form-control" id="surname"
                                                    placeholder="{{ auth()->user()->surname }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="website">Documento</label>
                                            <div class="col-sm-10">
                                                <input style="border: 0; background-color: white;" type="text"
                                                    class="form-control" id="surname"
                                                    placeholder="DNI {{ auth()->user()->dni }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="website">Teléfono</label>
                                            <div class="col-sm-10">
                                                <input style=" border: 0; background-color: white;" type="text"
                                                    class="form-control" id="surname"
                                                    placeholder="{{ auth()->user()->phone }}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="website">Dirección</label>
                                            <div class="col-sm-10">
                                                <input style=" border: 0; background-color: white;" type="text"
                                                    class="form-control" id="surname"
                                                    placeholder="{{ auth()->user()->address }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <h4 class=" mb-2 text-dark">Tarjetas</h4>
                </div>
                <div class="mb-2">
                    <div class=" row gutters">
                        <div class="col-md-12">
                            @if (empty($cards))
                                <div class="card mb-2" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                            border-radius: 15px; width: 100%;">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="">
                                                <div class="
                                                    form-group row">
                                                    <label class="col-sm-8 " for="phone">Usted no tiene ninguna tarjeta
                                                    agregada.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                @foreach ($cards as $card)
                                    <div class="card mb-2" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%); border-radius: 15px; width: 100%;">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class=" form-group row">
                                                        <label class="col-sm-2 col-form-label" for="website">Icon</label>
                                                        <div class="col-sm-10">
                                                            <input style=" border: 0; background-color: white; align-items: center"
                                                                type="text" class="form-control" id="surname"
                                                                placeholder="Terminada en {{ substr($card['card_number'], -4) }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label" for="website">Nombre</label>
                                                        <div class="col-sm-10">
                                                            <input style="border: 0; background-color: white;" type="text"
                                                                class="form-control" id="surname"
                                                                placeholder="{{ $card['card_name'] }}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label" for="website">Vencimiento</label>
                                                        <div class="col-sm-10">
                                                            <input style="border: 0; background-color: white;" type="text"
                                                                class="form-control" id="surname"
                                                                placeholder="{{ $card['card_expiry'] }}" disabled>
                                                        </div>
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
                <div class="mb-2">
                    <div class="row gutters" style="padding: 20px">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right" style="display: flex; justify-content: space-between">
                                <a href="{{ url('/user/' . auth()->user()->id . '/edit') }}" type="button"
                                    class="btn btn-success" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                border-radius: 15px;">Editar datos</a>
                                <form action="{{ url('/user/' . auth()->user()->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="button" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                        border-radius: 15px;"
                                        class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        Eliminar cuenta
                                    </button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que
                                                        desea eliminar tu cuenta?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    <input type="submit" class="btn btn-success" value="Si">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
