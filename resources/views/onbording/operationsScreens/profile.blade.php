@extends('../../layout.main')

@section('title', 'Profile')

{{-- Styles --}}
<link rel="stylesheet" href="/css/screens/profile.css">
{{-- End Styles --}}

@section('content')

<div class="row my-3 column-gap-3">
    <div class="col bg-white rounded ms-3 p-3 item">
        <form class="row g-3">
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
                <label for="inputEmail4" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">ADRESS</label>
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
            <div class="col-12 mt-3">
                <button type="submit" class="btn w-100">Sign up</button>
            </div>
        </form>
    </div>
    <div class="col-auto me-3">
        <div class="card card-user item">
            <div class="card-image">
                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..." class="" style="height: 250px;">
            </div>
            <div class="card-body">
                <div class="author">
                    <h5 class="title text-center fw-bold">Mike Andrew</h5>
                    <p class="description text-center fw-semibold">
                        michael24
                    </p>
                </div>
                <ul class="info-profile">
                    <li><strong>BI</strong>: <span>3123124214</span></li>
                    <li><strong>BIRTH DAY: </strong><span>12/12/2023</span></li>
                    <li><strong>GENDER:</strong> <span>3123124214</span></li>
                    <li><strong>MARITAL STATUS: </strong><span>12/12/2023</span></li>
                    <li><strong>TELEPHONE:</strong> <span>3123124214</span></li>
                    <li><strong>EMAIL: </strong><span>12/12/2023</span></li>
                    <li><strong>ADRESS:</strong> <span>3123124214</span></li>
                    <li><strong>NATIONALITY: </strong><span>12/12/2023</span></li>
                    <li><strong>PPROFISSION:</strong> <span>3123124214</span></li>

                </ul>

            </div>
        </div>

    </div>
</div>



@endsection