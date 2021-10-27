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
        <div class="container">
            <div class="row gutters" style="display: flex; justify-content: center;">
                @include('partials.aside-profile')
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class=" h-100">
                        <div class="">
                            <h1 class=" mb-2 text-dark">Mis datos</h1>
                        </div>
                        <div class="">
                            <h2 class=" mb-2 text-dark">Datos de la cuenta</h2>
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
                                                            placeholder="{{ $user['email'] }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <h2 class=" mb-2 text-dark">Datos personales</h2>
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
                                                            placeholder="{{ $user['name'] }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label" for="website">Apellido</label>
                                                    <div class="col-sm-10">
                                                        <input style="border: 0; background-color: white;" type="text"
                                                            class="form-control" id="surname"
                                                            placeholder="{{ $user['surname'] }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label" for="website">Documento</label>
                                                    <div class="col-sm-10">
                                                        <input style="border: 0; background-color: white;" type="text"
                                                            class="form-control" id="dni"
                                                            placeholder="DNI {{ $user['dni'] }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label" for="website">Teléfono</label>
                                                    <div class="col-sm-10">
                                                        <input style=" border: 0; background-color: white;" type="text"
                                                            class="form-control" id="phone"
                                                            placeholder="{{ $user['phone'] }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label" for="website">Dirección</label>
                                                    <div class="col-sm-10">
                                                        <input style=" border: 0; background-color: white;" type="text"
                                                            class="form-control" id="address"
                                                            placeholder="{{ $user['address'] }}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h2 class=" mb-2 text-dark">Tarjetas <button type="button" class="btn btn-dark btn-sm"
                                    data-toggle="modal" data-target="#form">
                                    Agregar <i class="bi bi-plus-circle-fill"></i>
                                </button> </h2>
                        </div>
                        <div class="modal fade" id="form" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="border-radius: 15px">
                                    <div class="modal-header border-bottom-0" style="    background: black;
                                color: white;
                                border-radius: 15px 15px 0 0;
                                margin-bottom: 20px;">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar una nueva tarjeta</h5>
                                        <button type="button" style="color: white" class="close"
                                            data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    @include('cards.create')
                                </div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <div class=" row gutters">
                                <div class="col-md-12">
                                    @if (empty($cards))
                                        <div class="card mb-2" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                    border-radius: 15px; width: 100%;">
                                            <div class="card-body">
                                                <div class=" row">
                                                    <label class="col-sm-12 ">Usted no tiene ninguna tarjeta
                                                        agregada.</label>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($cards as $card)
                                            <div class="card mb-2"
                                                style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%); border-radius: 15px; width: 100%;">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <input
                                                                    style=" border: 0; background-color: white; align-items: center"
                                                                    type="text" class="form-control" id="surname"
                                                                    placeholder="Terminada en {{ $card['last_number'] }}"
                                                                    disabled>
                                                            </div>
                                                            <div class="col-sm-2" style="text-align: right">

                                                                <a href="#" class="" data-toggle="modal"
                                                                    data-target="#smallModal">Eliminar</a>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="modal fade" style="" id="smallModal"
                                                                tabindex="-1" role="dialog" aria-labelledby="basicModal"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-sm" style="max-width: 50%">
                                                                    <div class="modal-content" style="border-radius: 20px">
                                                                        <div class="modal-header" style="border-bottom: 0; color: white;
                                                            border-radius: 15px 15px 0 0;
                                                            margin-bottom: 20px; background: black">
                                                                            <h3 class="modal-title" id="myModalLabel">
                                                                                ¿Desea eliminar una tarjeta?</h3>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true"
                                                                                    style="color: white">&times;</span>
                                                                            </button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <h4>Tarjeta terminada en
                                                                                {{ $card['last_number'] }}</h4>
                                                                        </div>
                                                                        <form action="{{ url('/card/' . $card['id']) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            {{ method_field('DELETE') }}
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-default"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                                <input type="submit" class="btn btn-primary"
                                                                                    value="Aceptar">
                                                                            </div>
                                                                        </form>
                                                                    </div>
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
                                        <a href="{{ url('/user/' . $user['id'] . '/edit') }}" type="button"
                                            class="btn btn-success" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                        border-radius: 15px;">Editar
                                            datos</a>
                                        <a href="{{ url('user/export-dates') }}" type="button" class="btn btn-primary"
                                            style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                border-radius: 15px;">Exportar datos</a>
                                        <form action="{{ url('/user/' . $user['id']) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="button" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                                border-radius: 15px;"
                                                class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                Eliminar cuenta
                                            </button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro
                                                                que
                                                                desea eliminar tu cuenta?</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"
                                                                data-dismiss="modal">No</button>
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
