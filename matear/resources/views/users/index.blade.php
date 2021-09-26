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
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <a href="{{ route('user') }}">Mis datos</a>
                                </div>
                                <div class="shop">
                                    <a href="">Mis compras</a>
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
                            <div class=" mb-3">
                            <div class=" row gutters">
                                <div class="col-md-12">
                                    <div class="card"
                                        style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
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
                        <div class="mb-3">
                            <h4 class=" mb-2 text-dark">Datos personales</h4>
                        </div>
                        <div class="mb-3">
                            <div class=" row gutters">
                                <div class="col-md-12">
                                    <div class="card"
                                        style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
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
                    <div class="mb-3">
                        <h4 class=" mb-2 text-dark">Tarjetas</h4>
                    </div>
                    <div class="mb-3">
                        <div class=" row gutters">
                            <div class="col-md-12">
                                <div class="card"
                                    style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                                                border-radius: 15px; width: 100%;">
                                    <div class="card-body">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row gutters" style="padding: 20px">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right" style="display: flex; justify-content: space-between">
                                    <a href="{{ url('/user/' . auth()->user()->id . '/edit') }}" type="button"
                                        class="btn btn-success" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                            border-radius: 15px;">Editar datos</a>
                                    <form action="{{ url('/user/' . auth()->user()->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                            border-radius: 15px;" type="submit" class="btn btn-danger"
                                            onclick="return confirm('¿Quieres borrar tu cuenta?')" value="Eliminar cuenta">
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
