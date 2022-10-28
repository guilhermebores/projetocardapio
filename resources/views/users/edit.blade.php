@extends('layouts.layout')
@section('abacaxi')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Funcionários') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('User.update', $User->id) }}">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $User->name) }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $User->email) }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', $User->password) }}" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="row mb-3">
                                                    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf', $User->cpf) }}">

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
                                                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone', $User->phone) }}">

                                                            @error('phone')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                   </div>
                                                   <div class="row mb-3">
                                                       <label for="Endereço" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>

                                                       <div class="col-md-6">
                                                           <input id="address" type="text" class="form-control" name="address" value="{{ old('Endereço', $User->address) }}">

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
                                                    <option value="maneger" @if($User->type == 'maneger') 'selected' @endif>Gerente</option>
                                       <option value="employee" @if($User->type == 'employee') 'selected' @endif>Funcionário</option>
                                                  </select>

                                             <button type="submit" class="btn btn-primary">Avançar</button>
  </div>
    </div>
      </div>
        </div>
          </div>
            </div>
        @endsection
