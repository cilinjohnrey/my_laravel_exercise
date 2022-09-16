@extends('page.main')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <form class="needs-validation shadow p-4" novalidate method="POST" action="{{ route('user.signin') }}"
            style="width: 300px; height: auto;">
            @csrf
            <h2 class="h2 text-center font-bold">Sign In</h2>
            <hr>
            <div class="form-outline">
                <input type="email" class="form-control" id="email" name="email" required />
                <label for="email" class="form-label">Email</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Email is required and must be valid!</div>
            </div>
            <span style="color: red;">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <div class="form-outline">
                <input type="password" class="form-control" name="password" id="password" required />
                <label for="password" class="form-label">Password</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Password Required</div>
            </div>
            <span style="color: red;">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <hr>
            <button class="btn btn-primary shadow form-control" type="submit">Sign In</button>
        </form>
    </div>
    {{-- <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach((form) => {
                form.addEventListener('submit', (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script> --}}
@endsection
