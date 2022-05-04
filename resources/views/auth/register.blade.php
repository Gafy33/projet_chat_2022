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
          <!--  -->
          <form method="POST" action="{{ route('register') }}" class="sign-in-form">
            @csrf
            <h2 class="title" style="color: white">S'inscrire</h2>
            @error('email')
            <p style="display:block; color:white; background-color: #C72522; padding: 15px 10px; border-radius: 55px" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            @enderror
            @error('password')
            <p style="margin-top: 15px;display:block; color:white; background-color: #C72522; padding: 15px 10px; border-radius: 55px" class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </p>
            @enderror 
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="off" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="new-password">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme le mot de passe" required autocomplete="new-password">
            </div>
            <input type="submit" class="btn" value="S'inscrire" />
            <br>
            <div class="social-media">
                <div class="bubble">
                  <div class="bubble-text">
                  <p> Tu as déjà un Compte ? Vite, dépêche toi de te <a href="{{route('login')}}" style="color: #0099ff;text-decoration: none;"> Connecter </a> ! </p>
                </div>
              </div>
            </div>
            <div class="imageForm" style="margin-left: -290px; margin-top: 18px">
                <img src="https://messenger-lbdf.s3.eu-west-3.amazonaws.com/application/robot.svg" width="50px" height="50px" style="border-radius: 75px;">
                </div>
          </form>

          @include('auth.application')

        </div>
      </div>

      @include('auth.left-panel')

    <script src="app_login.js"></script>

@endsection
