@extends('../../layout.authentication')

@section('title','Sign Up')
{{-- Styles --}}
<link rel="stylesheet" href="/css/auth/signup.css">
{{-- End Styles --}}
@section('content')
<div class="container-fluid signup w-100">
    <div class="row justify-content-md-center">
        <div class="col-4 bg-sign " style=""></div>
        <div class="col pt-1  justify-content-center ps-5 singup-datas" style="">
            <h3 class="fw-bold mt-4">SIGN UP AND JOIN US</h3>
            <h6 class="mb-4 fw-semibold text-secondary">ENTER YOUR DATAS</h5>

                <form action="/creat_user" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">BI</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">FIRST NAME</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">LAST NAME</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">BIRTH DAY</label>
                        <input type="date" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">GENDER</label>
                        <select name="" class="form-select text-center" id="" style="border-color: #1839B1;">
                            <option value="" class="">SELECT</option>
                            <option value="MALE">MALE</option>
                            <option value="FEMALE">FEMALE</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">MARITAL STATUS</label>
                        <select name="" class="form-select text-center" id="" style="border-color: #1839B1;">
                            <option value="" class="">SELECT</option>
                            <option value="MALE">SIGLE</option>
                            <option value="FEMALE">MARRIED</option>
                            <option value="FEMALE">WIDOW(ER)</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">TELEPHONE</label>
                        <div class="row row-gap-1">
                            <div class="col-2 ">
                                <select name="" id="" class="form-select" style="border-color: #1839B1;">

                                </select>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="inputEmail4" maxlength="9">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label">NATIONALITY</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">PROFESSION</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">CONFIRM PASSWORD</label>
                        <input type="password" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                DO YOU AGREE WITH OUR TERMS AND CONDITIONS?
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn w-100">Sign up</button>
                    </div>
                    <p class="text-center question">YOU ALREADY HAVE AN ACCOUNT? CLICK HERE TO <a href="/signin">SIGN IN</a></p>
                </form>
        </div>
    </div>
</div>
@endsection