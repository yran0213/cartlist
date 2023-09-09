@extends('templates.indexTemplate')

@section('main')
  <div class="container">
    <div class="d-flex justify-content-center m-5 fw-bold">
      感謝您的購買~
    </div>
  </div>
  <div class="container">
    <div class="d-flex justify-content-evenly">
      <div class="btn btn-outline-dark">回首頁</div>
      <div class="btn btn-outline-dark">查看訂單</div>
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