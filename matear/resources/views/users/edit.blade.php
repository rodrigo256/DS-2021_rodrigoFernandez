@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editá tus datos') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/user/' . $user->id) }}" autocomplete="off">
                            @csrf
                            {{ method_field('PATCH') }}
                            @include('users.form', ['modo' => 'Guardar datos'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
