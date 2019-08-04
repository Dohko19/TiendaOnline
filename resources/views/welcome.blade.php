@extends('layouts.app')
@section('body-class', 'landing-page sidebar-collapse')
@section('content')
{{-- aljfxircfpnysksk --}}
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/botw2.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          {{--  <h1 class="title">Bienvenido a App Shop.</h1>  --}}
          <h4>
                Tienda en linea donde encuentras lo que buscas.
          </h4>
          <br>
          <video width="320" height="240" controls URL pixels>
             <source src="{{ asset('/media/punchitoooo-12.mp4') }}" type="video/mp4">
            <i class="fa fa-play"></i> Watch video
          </video>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Producto</h2>
            <h5 class="description">
                Somos una empresa dedicada a la venta de productos por pedido mas segura.
            </h5>

          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Chat Libre</h4>
                <p>
                    Chatea con nosotros en linea.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Usuarios Confiables</h4>
                <p>Clientes y Vendedores Confiables</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Seguridad</h4>
                <p>
                    Todos tus productos estan seguros con altos protocolos de seguridad
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Productos Disponibles</h2>
        <div class="team">
          <div class="row">
            @foreach($products as $p)
            <div class="col-md-4">
              <div class="card team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ $p->featured_image_url  }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid" width="250">
                  </div>
                  <h4 class="card-title">
                    <a href="{{ url('/products/'.$p->id) }}">
                    {{ $p->name }}
                    </a>
                    <br>
                    <small class="card-description text-muted">{{$p->category_name}}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">{{ $p->description }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            </div>
            <div class="row justify-content-center" >
              {{ $products->links() }}
            </div>
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Contactanos</h2>
            <h4 class="text-center description">
                Usa este medio para enviar tud dudas, comentarios o problemas con algun pedido.
                En breve te responderemos.
            </h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('includes.footer')
@endsection
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
