@extends('layouts.layout')
@section('abacaxi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white">
              <div class="card-body">
                  <h1>Criar Novo Produto</h1>
                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><b>{{ __('Nome :') }}</b></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Não Preenchido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end"><b>{{ __('Descrição :') }}</b></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Não Preenchido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price_cents" class="col-md-4 col-form-label text-md-end"><b>{{ __('Preço :') }}</b></label>

                            <div class="col-md-6">
                                <input id="price_cents" type="number" class="form-control" name="price_cents">

                                @error('price_cents')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Não Preenchido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="select_is_active" class="col-md-4 col-form-label text-md-end"><b>{{ __('Disponibilidade :') }}</b></label>

                            <div class="col-md-6">
                              <select id="select_is_active" class="form-select" name="is_active">

                                     <option value="1">Disponível</option>
                                     <option value="0">Indisponível</option>

                              </select>

                                @error('is_active')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Não Preenchido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center" class="mb-3">
                          <div><label for="formFileSm" class="form-label">Adicione uma Imagem :</label></div>
                          <div><input class="form-control form-control-sm" id="formFileSm" name="image" type="file"></div>
                        </div>
                        @error('is_active')
                            <span class="invalid-feedback" role="alert">
                                <strong>Não Preenchido</strong>
                            </span>
                        @enderror

                        <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary">Salvar</button></div>
                    </div>
                    </div>
                    </div>
                    </div>

        @endsection
