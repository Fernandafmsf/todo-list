
@extends('login.layout')

@section('title', 'Login')


@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="alert alert-danger container-sm mt-2" role="alert">
     {{$error}}
    </div>

  @endforeach
  
@elseif($mensagem= Session::get('erro'))
  <div class="alert alert-danger container-sm mt-2" role="alert">
     {{$mensagem}}
    </div>

@endif

@section('conteudo')

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="{{route('login.auth')}}" method="POST">

          @csrf
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

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="remember" checked />
              <label class="form-check-label" for="remember"> Lembrar-me </label>
            </div>
            <a href="#!">Esqueceu a senha?</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block ">Entrar</button>

          <div class="d-flex align-items-center justify-content-center mt-4">
            <p class="mb-2 me-5">Não tem uma conta?</p>
            <button href="" type="button" class=" btn btn-outline-danger">
              <a style="text-decoration: none; color:black" href="{{route('user.create')}}">Criar conta</a>
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>



@endsection