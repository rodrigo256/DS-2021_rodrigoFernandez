@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Completá tus datos') }}</div>

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
