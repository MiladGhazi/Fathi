@extends('master')

@section('content')
<div class="container-fluid p-0">
    <div class="container he800main p-0 mb-4">
        <div class="col-12 h-100">
            <div class="row h-50">
                <div class="col-6 pr-2 pl-0 pb-2 pt-1">
                    <a href="">
                        <img src="{{ asset('images/custom/bgslider.jpg') }}" class="w-100 h-100" alt="عکس لود نشده">
                        <div class="mainimgcontent text-white w-75 pr-3 pt-2 pb-2">ویندوز جدید</div>
                    </a>
                </div>
                <div class="col-6">
                    <div class="row h-50">
                        <div class="col-12 pr-0 pl-2 pb-2 pt-1">
                            <a href="">
                                <img src="{{ asset('images/custom/bgheader.jpg') }}" class="h-100 w-100"
                                    alt="عکس لود نشده">
                                <div class="wideimgcontent text-white w-75 pr-3 pt-1 pb-1">تبلت سرفیس</div>
                            </a>
                        </div>
                    </div>
                    <div class="row h-50">
                        <div class="col-6 w-50 pr-2 pl-2 pb-2 pt-2">
                            <a href="">
                                <img src="{{ asset('images/custom/bg1.jpg') }}" class="w-100 h-100" alt="عکس لود نشده">
                                <div class="rsmallimgcontent text-white w-75 pr-3 pt-1 pb-1"> ویندوز جدید راست
                                </div>
                            </a>
                        </div>
                        <div class="col-6 w-50 pr-0 pl-2 pb-2 pt-2">
                            <a href="">
                                <img src="{{ asset('images/custom/bgslider.jpg') }}" class="w-100 h-100"
                                    alt="عکس لود نشده">
                                <div class="lsmallimgconten text-white w-75 pr-3 pt-2 pb-2">ویندوز جدید چپ</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-50">
                <div class="col-4 pr-2 pl-0 pb-2 pt-2">
                    <a href="">
                        <img src="{{ asset('images/custom/bg1.jpg') }}" class="w-100 h-100" alt="عکس لود نشده">
                        <div class="right3imgcontent text-white w-75 pr-3 pt-1 pb-1">ویندوز جدید راست</div>
                    </a>
                </div>
                <div class="col-4 pr-2 pl-2 pb-2 pt-2">
                    <a href="">
                        <img src="{{ asset('images/custom/bg2.png') }}" class="w-100 h-100" alt="عکس لود نشده">
                        <div class="center3imgcontent text-white w-75 pr-3 pt-1 pb-1">ویندوز جدید وسط</div>
                    </a>
                </div>
                <div class="col-4 pr-0 pl-2 pb-2 pt-2">
                    <a href="">
                        <img src="{{ asset('images/custom/bg3.jpg') }}" class="w-100 h-100" alt="عکس لود نشده">
                        <div class="left3imgcontent text-white w-75 pr-3 pt-1 pb-1">ویندوز جدید چپ</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row he300main stmainslider justify-content-center bg-dark">
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-info"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-danger"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-info"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-danger"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-info"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-danger"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-info"></div>
        </div>
        <div class="col-2 p-2 pt-5 pb-5">
            <div class="w-100 h-100 bg-danger"></div>
        </div>
    </div>
    <div class="container he700main p-0 mt-4 mb-4">
        <div class="col-12 h-100">
            <div class="row h-50">
                <div class="col-3 pr-2 pl-0 pb-2 pt-1">
                    <div class="w-100 h-100 bg-dark"></div>
                </div>
                <div class="col-6 pr-2 pl-2 pb-2 pt-1">
                    <div class="w-100 h-100 bg-danger"></div>
                </div>
                <div class="col-3 pr-0 pl-2 pb-2 pt-1">
                    <div class="w-100 h-100 bg-dark"></div>
                </div>
            </div>
            <div class="row h-50">
                <div class="col-6 pr-2 pl-0 pb-2 pt-2">
                    <div class="w-100 h-100 bg-danger"></div>
                </div>
                <div class="col-6 pr-0 pl-2 pb-2 pt-2">
                    <div class="w-100 h-100 bg-dark"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection
