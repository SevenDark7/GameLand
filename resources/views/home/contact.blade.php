@extends('layouts.master')

@section('title', 'About')
@section('content')
    <section class="wrapper py-5 py-md-0">
        <div class="row align-items-center" dir="rtl">
            <div class="col-12 col-md-8 text-right" dir="rtl">
                <h3 class="text-custom">ارتباط با ما</h3>
                <p class="lead text-justify">شما میتوانید با یکی از روش های زیر با ما در ارتباط باشید و انتقادات و
                    پیشنهادات خود را با ما در میان بگذارید. از اینکه با نظرات خود ما را در بهبود کیفیت و ارائه بیشتر و
                    بهتر خدمات یاری مینمائید، صمیمانه از شما سپاس گذاریم.</p>
            </div>
            <div class="col-12 col-md-4">
                <img class="card-img-top" src="/images/about/about1.gif" alt="GameShop">
            </div>
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-5 mr-md-1">
                        <div class="col-12 mx-2 border-top border-left border-info">
                            <div class="row justify-content-center text-center p-4 my-5 aline-items-center border-bottom border-right border-primary">
                                <div class="col-12">
                                    <h4 class="text-custom">نشانی</h4>
                                </div>
                                <div class="col-12">
                                    <h5 class="my-3">اصفهان، خیابان کاوه</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 ml-md-5">
                        <div class="col-12 mx-2 border-top border-right border-info">
                            <div class="row justify-content-center text-center p-4 my-5 aline-items-center border-bottom border-left border-primary">
                                <div class="col-12">
                                    <h4 class="text-custom">تلفن</h4>
                                </div>
                                <div class="col-12">
                                    <h5 class="my-3">6797 513 0933</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 mr-md-5">
                        <div class="col-12 mx-2 border-bottom border-right border-info">
                            <div class="row justify-content-center text-center p-4 my-5 aline-items-center border-top border-left border-primary">
                                <div class="col-12">
                                    <h4 class="text-custom">ایمیل</h4>
                                </div>
                                <div class="col-12">
                                    <h5 class="my-3">SevenEncoder@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 ml-md-1">
                        <div class="col-12 mx-2 border-bottom border-left border-info">
                            <div class="row justify-content-center text-center p-4 my-5 aline-items-center border-top border-right border-primary">
                                <div class="col-12">
                                    <h4 class="text-custom">تلگرام</h4>
                                </div>
                                <div class="col-12">
                                    <h5 class="my-3">SevenDark@</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 border py-3 text-custom m-5 mx-auto">
                <form action="" method="post" class="text-right">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="fullName">نام و نام خانوادگی</label>
                                <input type="text" class="form-control" name="fullName">
                            </div>
                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="subject">عنوان</label>
                                <input type="text" class="form-control" name="subject">
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <label for="description">توضیحات</label>
                            <textarea class="form-control" name="description" rows="9"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-custom mr-3 my-3">ارسال پیام</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
