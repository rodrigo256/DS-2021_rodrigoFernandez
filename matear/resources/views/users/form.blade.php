<div class="form-group ">

    <div class="col-md-12">
        <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($user->name) ? $user->name : '' }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="surname" type="text" placeholder="Apellido" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{  isset($user->surname) ? $user->surname : '' }}" required autocomplete="surname" autofocus>

        @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="dni" type="number" placeholder="DNI" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ isset($user->dni) ? $user->dni : ''  }}" required autocomplete="dni" autofocus>

        @error('dni')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="address" type="text" placeholder="Dirección" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ isset($user->address) ? $user->address : ''}}" required autocomplete="address" autofocus>

        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="phone" type="number" placeholder="Teléfono" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ isset($user->phone) ? $user->phone : '' }}" required autocomplete="phone" autofocus>

        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="email" type="email" placeholder="Correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($user->email) ? $user->email : ''}}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


@if(Route::is('register'))
<div class="form-group ">

    <div class="col-md-12">
        <input id="password" type="password" placeholder="Constraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group ">

    <div class="col-md-12">
        <input id="password-confirm" type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
</div>
@endif
<div class="form-group">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" style="width: 100%">
            {{ __($modo) }}
        </button>
    </div>
</div>