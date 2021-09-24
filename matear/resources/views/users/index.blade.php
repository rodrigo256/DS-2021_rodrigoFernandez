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
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Datos de la cuenta</h6>

                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9  col-12">
                                    <div class="form-group">
                                        <label for="fullName">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="{{ auth()->user()->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                    <div class="form-group">
                                        <label for="eMail">Contraseña</label>
                                        <div class="input-group">
                                          {{--   <input type="password" class="form-control" id="password" placeholder="" value="passwordExample"> --}}
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="btnGroupAddon"> <a href="{{ route('password.request') }}">Cambiar contraseña</a></div>
                                              </div>
                                        </div>
                                    </div>
                                 {{--    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text" id="btnGroupAddon"> <a href="">¿Olvidaste la contraseña?</a></div>
                                        </div>
                                        <input type="password" class="form-control" value="passwordExample" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                      </div> --}}
                                </div>
                                

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Datos personales</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Nombre</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="{{ auth()->user()->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Apellido</label>
                                        <input type="text" class="form-control" id="surname"
                                            placeholder="{{ auth()->user()->surname }}" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">DNI</label>
                                        <input type="number" class="form-control" id="dni"
                                            placeholder="{{ auth()->user()->dni }}" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Telefono</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="{{ auth()->user()->phone }}" disabled>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">Direccion</label>
                                        <input type="text" class="form-control" id="address"
                                            placeholder="{{ auth()->user()->address }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right" style="display: flex; justify-content: space-between">

                                        <a href="{{ url('/user/'.auth()->user()->id.'/edit') }}" type="button"
                                            class="btn btn-success">Editar datos</a>
                                        <form action="{{ url('/user/' . auth()->user()->id) }}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="submit" class="btn btn-danger"
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
