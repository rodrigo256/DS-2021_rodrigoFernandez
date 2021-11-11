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
                            <h1 class=" mb-2 text-dark">Productos favoritos</h1>
                        </div>
                        <div class="mb-2">
                            <div class=" row gutters">
                                <div class="col-md-12">

                                    @if (empty($products))
                                        <div class="card mb-2" style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%);
                                                                    border-radius: 15px; width: 100%;">
                                            <div class="card-body">
                                                <div class=" row">
                                                    <label class="col-sm-12 ">Usted no ha realizado ninguna
                                                        compra.</label>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        @foreach ($products as $item)
                                            @if ($item->favorite == true)

                                                <div class="card mb-2"
                                                    style="box-shadow: 0 5px 20px rgb(0 0 0 / 0%), 0 5px 10px rgb(0 0 0 / 10%); border-radius: 15px; width: 100%;">
                                                    <div class="card-body">
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="/images/{{ $item->image_path }}"
                                                                        style="height: 100px; width: 100px" alt="">
                                                                </div>
                                                                {{-- url('/favorite/' . $item->id) --}} {{-- <div class="col-md-9"
                                                                    style="margin: auto">
                                                                    <h4>{{ $item->name }}</h4>
                                                                    <a href="{{ url('/favorite/' . $item->id) }}"
                                                                        class="">Eliminar</a>
                                                                </div> --}}
                                                                <div class="col-md-9" style="margin: auto">

                                                                    <h4>{{ $item->name }}</h4>
                                                                    <form
                                                                        action="{{ url('/favorite/' . $item->favoriteId) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        {{ method_field('DELETE') }}
                                                                        <a href="" data-toggle="modal"
                                                                            data-target="#exampleModal"> Eliminar </a>

                                                                        <div class="modal fade" id="exampleModal"
                                                                            tabindex="-1"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">¿Estás
                                                                                            seguro
                                                                                            que
                                                                                            desea eliminar este favorito?</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-danger"
                                                                                            data-dismiss="modal">No</button>
                                                                                        <input type="submit"
                                                                                            class="btn btn-success"
                                                                                            value="Si">
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
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
