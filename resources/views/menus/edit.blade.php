@extends('layouts.layout')
@section('abacaxi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
              <div class="card-body">
                  <h1>Editar Cardápio</h1>
                    <form method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
                        @csrf
                          @method('put')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome :') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$menu->name}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end"><b>{{ __('Descrição :') }}</b></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$menu->description}}">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="is_active" class="col-md-4 col-form-label text-md-end"><b>{{ __('Disponibilidade :') }}</b></label>

                            <div class="col-md-6">
                                <input id="is_active" type="boolean" class="form-control" name="is_active" value="{{$menu->is_active}}">

                                @error('is_active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Preencha esse campo.</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center" class="mb-8">
                          <div><label for="formFileSm" class="form-label"><b>Selecionar Imagem :</b></label></div>
                          <div><input class="form-control form-control-sm" id="formFileSm" name="image" type="file"></div>
                        </div>

                        <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Salvar</button></div>
                    </div>
                    </div>
                    </div>
                    </div>
        @endsection
