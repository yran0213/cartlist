@extends('templates.indexTemplate')

@section('main')
  <div class="container">
    <div class="">
      <a href="" class="text-success text-decoration-none">Home</a>
      /
      <a href="" class="text-success text-decoration-none">Shop</a>
      /Shop Checkout
    </div>
  </div>
  <div class="container">
    <h3 class="fw-bold">Checkout</h3>
    <h5 class="">Already have an account?Click here to<a href="" class="text-decoration-none text-success">Sign in.</a></h5>
  </div>
  <div class="container">
    <div class="mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
      </svg>
      付款資訊
    </div>
  </div>
  <div class="container">
    <div class="border rounded-1 mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        </svg>
        <ul class="d-flex flex-column">
          <li class="list-inline-item">臨櫃匯款</li>
          <li class="list-inline-item">0000-123456789-123456</li>
          <li class="list-inline-item">007第一銀行</li>
          <li class="list-inline-item">戶名:洪券雅</li>
          <li class="list-inline-item">匯款後請聯繫洪先生(0987877810)</li>
          <li class="list-inline-item">請告知帳號末五碼以便對帳</li>
        </ul>
      </div>
  </div>
  <div class="container">
    <div class="border mb-3"></div>
  </div>
  <div class="container">
    <div class="border mb-3"></div>
  </div>
  <div class="container">
    <div class="border rounded-1 mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      </svg>
      <ul class="d-flex flex-column">
        <li class="list-inline-item">線上付款</li>
        <li class="list-inline-item">本站線上付款為綠界金流</li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="btn btn-outline-dark">上一步</div>
      <div class="btn btn-outline-dark">下一步</div>
    </div>
  </div>
@endsection

@section('js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script>
    function editmode() {
      const nameInput = document.querySelector('input[name="name"]');
      const username = document.querySelector('.username');
      const btns = document.querySelector('.d-none.column-gap-3');
      username.classList.add('d-none');
      nameInput.classList.remove('d-none');
      btns.classList.remove('d-none');
      btns.classList.add('d-flex');
      console.log(nameInput);
    }
    </script> -->

    @if ($errors->first())
      <!-- <script>
        Swal.fire({
          icon: 'error',
          title: '{{ $errors->first() }}',
        })
      </script> -->
    @endif

    {{-- @error('nameError')
    @enderror --}}
@endsection