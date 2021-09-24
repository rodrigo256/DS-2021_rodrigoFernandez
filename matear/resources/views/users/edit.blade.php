@extends('layouts.app')

{{-- <section class="container" style="margin-top: 80px">
    @include('users.form', ['modo' => 'Editar datos'])
</section> --}}

@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editá tus datos') }}</div>

                <div class="card-body">
                    <form method="" action="" autocomplete="off">
                        @csrf
                        @include('users.form', ['modo' => 'Editar datos'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection