@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                                                        <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('email') }}">

                                                        @error('cpf')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="row mb-3">
                                                        <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="telefone" type="text" class="form-control" name="phone" value="{{ old('telefone') }}">

                                                            @error('telefone')
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
                                                     <option value="1">Gerente</option>
                                                      <option value="2">Funcionário</option>
                                                  </select>
                                                </div>

                                                <div class="container-fluid">
                                                <h1>Cadastro de Empresas</h1>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="cnpj" class="col-md-4 col-form-label text-md-end">{{ __('CNPJ') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}">

                                                        @error('cnpj')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                               </div>

                                               <div class="row mb-3">
                                                   <label for="trading_name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Fantasia') }}</label>

                                                   <div class="col-md-6">
                                                       <input id="trading_name" type="text" class="form-control" name="trading_name" value="{{ old('trading_name') }}">

                                                       @error('trading_name')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                           </span>
                                                       @enderror
                                                   </div>
                                              </div>

                                              <div class="row mb-3">
                                                  <label for="company_name" class="col-md-4 col-form-label text-md-end">{{ __('Razão Social') }}</label>

                                                  <div class="col-md-6">
                                                      <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">

                                                      @error('company_name')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                             </div>

                                             <div class="row mb-3">
                                                 <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>

                                                 <div class="col-md-6">
                                                     <input id="phone" type="text" class="form-control" name="company_phone" value="{{ old('phone') }}">

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
                                                    <input id="address" type="text" class="form-control" name="company_address" value="{{ old('address') }}">

                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
