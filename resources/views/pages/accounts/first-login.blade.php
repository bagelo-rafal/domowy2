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
              <h4 class="mb-1">To Twoje pierwsze logowanie</h4>
              <p class="mb-4">Zgodnie z obowiązującym prawem, w celu świadczenia usług medycznych<br>wymagane jest podanie pełnych danych identyfikacyjnych</p>
              @include('partials.forms.first-login')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
