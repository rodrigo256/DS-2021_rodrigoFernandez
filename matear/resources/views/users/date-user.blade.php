@extends('layouts.app')

{{-- {{( auth()->user())}} --}}

@section('content')
<div class="container" style="margin-top: 80px">
    <div class="container">
        <div class="row gutters" style="display: flex; justify-content: center;">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        {{-- <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                        </div> --}}
                        {{-- <h5 class="user-name">Yuki Hayashi</h5>
                        <h6 class="user-email">yuki@Maxwell.com</h6> --}}
                        <a href="{{ route('user') }}">Mis datos</a>
                    </div>
                    <div class="shop">
                        {{-- <h5>About</h5>
                        <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p> --}}
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
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12">
                        <div class="form-group">
                            <label for="fullName">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="" value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="eMail">Contraseña</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="" value="passwordExample">
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
                            <input type="text" class="form-control" id="name" placeholder="" value="{{auth()->user()->name}}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Apellido</label>
                            <input type="text" class="form-control" id="surname" placeholder="" value="{{auth()->user()->surname}}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">DNI</label>
                            <input type="number" class="form-control" id="dni" placeholder="" value="{{auth()->user()->dni}}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Telefono</label>
                            <input type="number" class="form-control" id="phone" placeholder="" value="{{auth()->user()->phone}}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Direccion</label>
                            <input type="text" class="form-control" id="address" placeholder="" value="{{auth()->user()->address}}">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right" style="display: flex; justify-content: space-between">
                          <!-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> -->
                           <a href="{{route('delete', auth()->user()->id)}}" type="button" class="btn btn-danger">Eliminar cuenta</a>
                           <a href="" type="button" class="btn btn-success">Actualizar datos</a>

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