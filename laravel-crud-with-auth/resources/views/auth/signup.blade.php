@extends('page.main')
@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div style="max-width: 500px;">
            <form class="needs-validation shadow p-4" novalidate method="POST">
                <h2 class="h2 text-center font-bold">Sign Up</h2>
                <hr>
                <div class="form-outline">
                    <input type="text" class="form-control" id="name" required />
                    <label for="name" class="form-label">Name</label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Name Required</div>
                </div>
                <br>
                <div class="form-outline">
                    <input type="email" class="form-control" id="email" required />
                    <label for="email" class="form-label">Email</label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Email is required and must be valid!</div>
                </div>
                <br>
                <div class="form-outline">
                    <input type="password" class="form-control" id="password" required />
                    <label for="password" class="form-label">Password</label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Password Required</div>
                </div>
                <br>
                <div class="form-outline">
                    <input type="password" class="form-control" id="confirm_password" required />
                    <label for="password" class="form-label">Confirm Password</label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Password Required</div>
                </div>
                <br>
                <button class="btn btn-primary shadow form-control" type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
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
    </script>
@endsection
