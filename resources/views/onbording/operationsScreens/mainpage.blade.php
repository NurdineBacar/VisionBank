@extends('../../layout.main')

@section('title','Home')
{{-- Styles--}}
<link rel="stylesheet" href="/css/screens/home.css">
{{--EndStyle--}}

@section('content')

<div class="row gap-3 px-3">
    <div class="col">
        <div class="item rounded d-flex py-3">
        <div class="col-7 text-center">
            <h6 class="fw-bold mb-3">TOTAL BALANCE</h6>
            <h1 class="fw-bold balance-total">$200,0</h1>
            <p class="mt-1 text-secondary">DECEMBER 31, 2023</p>
        </div>
        <div class="col mx-5 operacoes px-3">
            <button class="btn my-1">SEND</button>
            <button class="btn my-1">WITHDRAWAL</button>
            <button class="btn my-1">DEPOSIT</button>
            
        </div>
        </div>

        <div class="item rounded mt-3 py-3 px-4 transitions">
            <h5 class="fw-bold mb-3">RECENT TRANSITIONS</h5>
            <div class="d-flex justify-content-between mb-2">
                <div class="">
                    <span class="fw-bold">SENDED</span>
                    <span class="text-secondary">DECEMBER 31, 2023. 9:00 PM</span>
                </div>
    <strong class="fw-bold">$400,0</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="">
                    <span class="fw-bold">RECEIVED</span>
                    <span class="text-secondary">DECEMBER 31, 2023. 9:00 PM</span>
                </div>
    <strong class="fw-bold">$400,0</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="">
                    <span class="fw-bold">WITHDRAWALED</span>
                    <span class="text-secondary">DECEMBER 31, 2023. 9:00 PM</span>
                </div>
    <strong class="fw-bold">$400,0</strong>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="">
                    <span class="fw-bold">DEPOSITED</span>
                    <span class="text-secondary">DECEMBER 31, 2023. 9:00 PM</span>
                </div>
    <strong class="fw-bold">$400,0</strong>
            </div>
        </div>
    </div>
    <div class="col-auto item py-4 rounded">
        <div class="cartao">
            <br><br><br><br><br>
            <ul class="d-flex text-white fw-semibold justify-content-around w-75" id="nr-cartao">
                <li>1234</li>
                <li>1234</li>
                <li>1234</li>
                <li>1234</li>
            </ul>
            <div>
                <p class=" text-white date-card" style="position: relative; bottom: 3px;left: 20px;">MONTH/YEAR</p>
                <p class="d-flex text-white date-card" style="position: relative; bottom: 20px;left: 20px;">EXPIRES END:&nbsp; <span>12-24</span></p>
            </div>
        </div>
        <div class="d-flex justify-content-between w-75 ms-4 mt-3">
            <span class="text-secondary">CARD BALANCE</span>
            <strong>$25,8</strong>
        </div>
        <div class="d-flex justify-content-between w-75 ms-4 mt-2">
            <span class="text-secondary">CREDIT LIMIT</span>
            <strong>$100,0</strong>
        </div>
        <div class="d-flex justify-content-between w-75 ms-4 mt-2">
            <span class="text-secondary">CREDIT</span>
            <strong>$100,0</strong>
        </div>
        <br><br>
        <h6 class="ms-4 fw-bold">INFORMATION</h6>
        <div class="d-flex justify-content-between w-75 ms-4 mt-2">
            <span class="">STATUS</span>
            <strong>ACTIVE</strong>
        </div>
        <div class="d-flex justify-content-between w-75 ms-4 mt-2 pb-3">
            <span class="">CURRENCY</span>
            <strong>US</strong>
        </div>
    </div>
</div>

</div>
</div>

@endsection