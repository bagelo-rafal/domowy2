@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-12 pl-md-0">
            <div style="text-align:center;" class="auth-form-wrapper px-4 py-5">
              <img style="max-width: 210px;margin: auto;display: block;" class="mb-4" src="/assets/images/logo-dp-2.png">
              <h4 class="mb-4">Dokończ rejestrację</h4>
              @include('partials.forms.plan2')
              <a href="{{ url('/my-account/subscriptions') }}" class="d-block mt-3 text-muted">Masz już konto? Zaloguj się</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/inputmask.js') }}"></script>
</div>
@endsection
