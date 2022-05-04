@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="area">
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
      </div >
      <div class="forms-container">
        <div class="signin-signup">
          <!--  -->
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title" style="color: white">Se connecter</h2>
            @error('email')
            <p style="display:block; color:white; background-color: #C72522; padding: 15px 10px; border-radius: 55px" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span></p>
            @enderror

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input 
              id="email" 
              type="email" 
              class="form-control @error('email') is-invalid @enderror" 
              name="email" 
              value="{{ old('email') }}" 
              placeholder="Email" 
              required 
              autocomplete="email" 
              autofocus/>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" style="color: #a8a6a6" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <input type="submit" value="Se connecter" class="btn solid" />
            <br>
            <div class="social-media">
                <div class="bubble">
                  <div class="bubble-text">
                  <p> Tu n'es pas encore inscrit ? Commence par <a href="{{route('register')}}" style="color: #0099ff;text-decoration: none;"> Créer ton compte </a>. Vite on t'attend ! </p>
                  <!--<br>
                    <p> Tu as oublier ton mot de passe ? Ne panique pas, viens 
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="sign-up-btn" style="color: #1F618D;text-decoration: none;"> récupérer ton mot de passe  </a>
                    @endif
                    !</p>-->
                  </div>
                </div>
            </div>
                <div class="imageForm" style="margin-left: -290px; margin-top: 18px">
                <img src="{{asset('assets_login/robot.svg')}}" width="50px" height="50px" style="border-radius: 75px;">
                </div>
          </form>


          @include('auth.application')

        </div>
      </div>

      @include('auth.left-panel')

    <script src="app_login.js"></script>

@endsection
