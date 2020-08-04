@extends('layoutadmin')

@section('content')


                    <div class="col-xl-12 pa-0">
                        <div class=" py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form action="{{ route('newUser') }}" method="post">
                                    @csrf
                                    <h1 class="display-4 mb-10">Sign up for free</h1>
                                    <p class="mb-30">Create your account and start your free trial today</p>
                                    @if(session()->get('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div><br />
                                @endif
                                    <div class="form-row">

                                        <div class="col-md-6 form-group">
                                            <input class="form-control @error('name1') is-invalid @enderror" placeholder="First name" name="name1" value="" type="text" required>
                                            @error('name1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control @error('name2') is-invalid @enderror" placeholder="Last name" name="name2" value="" type="text" required>
                                            @error('name2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input class="form-control @error('email') is-invalid @enderror" placeholder="Adresse mail" name="email" type="Email" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">+243</span>
                                            </div>
                                            <input class="form-control @error('numTel') is-invalid @enderror" placeholder="Numero de telephone" name="numTel" type="number" required>
                                            @error('numTel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">NN carte</span>
                                            </div>
                                            <input class="form-control @error('numCart') is-invalid @enderror" placeholder="Numero de la carte d'identite" name="numCart" type="text" required>

                                            @error('numCart')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">PIN parrain</span>
                                            </div>
                                            <input class="form-control @error('parrain') is-invalid @enderror" placeholder="le code pin du parrain" name="parrain" type="text" required>

                                            @error('parrain')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">Role</span>
                                            </div>
                                            <select name="role" class="form-control @error('role') is-invalid @enderror" required>
                                                <option value="">choisir role</option>
                                                
                                                @if(Auth::user()->role == 1)
                                                    <option value="1">Super User</option>
                                                    <option value="2">Admin</option>
                                                    <option value="3">Associe</option>

                                                @else if(Auth::user()->role == 2)
                                                    <option value="3">Associe</option>
                                                
                                                @endif
                                                
                                                <option value="0">Client</option>
                                                
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

@endsection
