@extends('layouts.layout')
@section('abacaxi')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Registro de Funcionários') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('User.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adicione Seu Email ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme Sua Senha ') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                                                    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}">

                                                        @error('cpf')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="row mb-3">
                                                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                   </div>
                                                   <div class="row mb-3">
                                                       <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>

                                                       <div class="col-md-6">
                                                           <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                                                           @error('address')
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $message }}</strong>
                                                               </span>
                                                           @enderror
                                                       </div>
                                                   </div>

                                               <div class="row mb-3">
                                                 <label for="type" class="col-md-1 col-form-label text-md-end">{{ __('Tipo') }}</label>
                                                   <select class="form-select" name='type' aria-label="Default select example">
                                                    <option selected>Selecione</option>
                                                     <option value="manager">Gerente</option>
                                                      <option value="employee">Funcionário</option>
                                                  </select>
                                                </div>
<button type="submit" class="btn btn-primary">Avançar</button>

        @endsection
