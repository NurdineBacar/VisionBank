@extends('../../layout.authentication')

@section('title','Sign In')
{{--   Styles --}}
<link rel="stylesheet" href="/css/auth/signin.css">
{{-- End Styles --}}
@section('content')
<div class="container-sm mt-5 rounded sign w-75">
    <div class="row justify-content-md-center">
        <div class="col-5 bg-sign " style=""></div>
        <div class="col py-5 justify-content-center ps-5" style="">
            <h3 class="fw-bold">WELCOME TO VISIONBANK</h3>
            <h6 class="mb-4 fw-semibold text-secondary">ENTER YOUR DATAS</h5>

            <form class="needs-validation w-75">
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">EMAIL OR USERNAME</label>
                    <input type="email" class="form-control" id="validationCustom01" placeholder="EMAIL OR USERNAME" style="border-color: #1839B1;" required>
                    <div class="invalid-feedback">
                        ENTER YOUR EMAIL OR USERNAME
                    </div>
                </div>
                <div class="mb-3">
                    <label for="validationCustom02" class="form-label">PASSWORD</label>
                    <input type="email" class="form-control" id="validationCustom02" placeholder="PASSWORD" style="border-color: #1839B1;" maxlength="10" required>
                    <div class="invalid-feedback">
                        ENTER YOUR PASSWORD
                    </div>
                </div>
                <button type="submit" class="btn btn-signin mt-3" style=" color: white; background-color:  #1839B1;">Sing In</button>

                <p class="mt-3">DON'T HAVE AN ACCOUNT? <a href="/signup"> CLICK HERE TO CREAT</a></p>
            </form>
        </div>
    </div>
</div>
@endsection