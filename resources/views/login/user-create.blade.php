
@extends('login.layout')

@section('title', 'Login')


@section('conteudo')

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        
        <form action="{{route('user.store')}}" method="POST">
          @csrf
       
          <div class="form-outline mb-4">
            <label class="form-label" for="name">Nome</label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" />
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control form-control-lg" />
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block ">Criar conta</button>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection