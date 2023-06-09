@extends('layouts.master')
@section('content')
    <section class="u-clearfix u-section-1">

        <div>
            <div class="u-align-center u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-2"
                data-interval="5000" data-u-ride="carousel" id="carousel-2a64">
                <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                    <li data-u-target="#carousel-2a64" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                    <li data-u-target="#carousel-2a64" data-u-slide-to="1" class="u-grey-70 u-shape-circle"
                        style="width: 10px; height: 10px;"></li>
                </ol>
                <div class="u-carousel-inner u-gallery-inner" role="listbox" style="border-radius: 0;">
                    <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                        <div class="u-back-slide" data-image-width="100%" data-image-height="836">
                            <img class="u-back-image u-expanded lazyload"
                                data-src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg">
                        </div>
                    </div>
                    <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                        <div class="u-back-slide" data-image-width="100%" data-image-height="836">
                            <img class="u-back-image u-expanded lazyload"
                                data-src="{{ asset('/assets/bks') }}/images/iStock-1081560570-1591947820.jpg">
                        </div>
                    </div>
                </div>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1"
                    href="#carousel-2a64" role="button" data-u-slide="prev">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2"
                    href="#carousel-2a64" role="button" data-u-slide="next">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-1 container">
        <div class="row store">
            <div class="container">

                <div class="col-md-2 box3">
                    <h3>
                        أمان
                    </h3>
                    <p class="font-weight-bolder">
                        الدفع عند التوصيل
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        صحي
                    </h3>
                    <p class="font-weight-bolder">
                        بدون مواد حافظة
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        النظافة
                    </h3>
                    <p class="font-weight-bolder">
                        طعام بيتي صحي
                    </p>
                </div>
                <div class="col-md-2 box">
                    <h3>
                        الجودة
                    </h3>
                    <p class="font-weight-bolder">
                        ضمان جودة المنتجات
                    </p>
                </div>
                <div class="col-md-2 box2">
                    <h3>
                        توصيل سريع
                    </h3>
                    <p class="font-weight-bolder">
                        لجميع انحاء المملكة
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="u-clearfix u-section-1 container-fluid">
        <div class="row store">
            <div class="ct-blog col-sm-6 col-md-3 my-3">
                <div class="fauxcrop">
                    <a href="#"><img class="category" alt="khayba"
                            src="{{ asset('/assets/bks') }}/images/khayba.jpg"></a>
                </div>
            </div>
            @foreach ($data as $value)
                <div class="col-sm-6 col-md-3 my-3">
                    <form id="FormCard" action="{{ route('showProduct', ['id' => $value['id']]) }}" method="post">
                        @csrf
                        <div class="product">
                            <h3>{{ $value['name'] }}</h3>
                            <p>{{ $value['description'] }}</p>
                            <hr class="myhr">
                            <img class="myimg" width="" alt="product" src="/storage/img/{{ $value->image }}">
                            <hr class="myhr">
                            @auth

                                @if (!empty($productSizes[0]))
                                    <select name="productSizeId" id="">
                                        @foreach ($productSizes as $size)
                                            @if ($value->id == $size->product_id)
                                                <option value="{{ $size['id'] }}"> {{ $size['size'] }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                    <button type="submit"> اعرض المنتج</button>
                                @endif
                            @endauth
                        </div>
                    </form>
                </div>
            @endforeach
        </div>

    </section>

    <section class="container my-5">
        <h2 class="text-center">نضمن لك عملية شراء سريعة ، مريحة وآمنة</h2>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/person.png') }}" alt="">
            <div class="contentVa">
                <h2>تسجيل الدخول</h2>
                <p>أضف معلوماتك (اسمك ، رقم هاتفك ، موقعك)</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/chart.png') }}" alt="">
            <div class="contentVa">
                <h2>أضف منتجاتك للسلة</h2>
                <p>أضف منتجاتك المفضلة للسلة</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/rightSign.png') }}" alt="">
            <div class="contentVa">
                <h2>تأكيد طلبك</h2>
                <p>أكد طلبك بعد التحقق من الطلبات وقيمة الفاتورة النهائية</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/customer.png') }}" alt="">
            <div class="contentVa">
                <h2>تأكيد موعد وموقع التسليم</h2>
                <p>سيتواصل معك موظف خدمة العملاء لتأكيد موعد وموقع التسليم</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/car.png') }}" alt="">
            <div class="contentVa">
                <h2>توصيل وإستلام الطلب خلال ٢٤ ساعة والدفع</h2>
                <p>توصيل منتجاتك لك لتستلمها، ودفع ثمنها</p>
            </div>
        </div>
        <div class="contentVa0">
            <img src="{{ asset('/assets/images/heart.png') }}" alt="">
            <div class="contentVa">
                <h2 class="text-danger">الإستمتاع بألذ وأشهى المنتجات من بيت خيرات سوف</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="chooseEat container text-center py-2 my-5">
            <h2 class="text-white">إختر ألذ وأشهى المنتجات</h2>
        </div>
    </section>

    <section class="container chooseClass0 my-5">
        <div class="d-flex justify-center">
            <img src="{{ asset('/assets/images/soufKitchen.jpg') }}" alt="">
        </div>
        <div class="chooseClass">
            <img src="{{ asset('/assets/images/friends.jpg') }}" alt="">
            <h2>
                تصنع منتجات بيت خيرات سوف من أيدي نساء أردنيات
            </h2>
        </div>
        <div class="chooseClass">
            <h2>
                تحفظ في عبوات وأماكن مخصصة
            </h2>
            <img src="{{ asset('/assets/images/library.jpg') }}" alt="">
        </div>
        <div class="chooseClass">
            <img src="{{ asset('/assets/images/kais.jpg') }}" alt="">
            <h2>
                تصلك مغلفة بإحكام جاهزة للأكل
            </h2>
        </div>
    </section>

    <section class="my-5">
        <div class="chooseEatSuger container text-center py-2 my-5">
            <h2 class="text-white">منتجات خالية من السكر تماما!</h2>
        </div>
    </section>


    <section class="mt-5">
        <div class="baitKhairatDate">
            <h1 class="container">بيت خيرات سوف<br>قصة بدأت من عام ١٨٨١م <span><a href={{ url('/about') }}><button class="general-btn border-0 text-white h3 p-3 m-4">اعرف
                        عنها</button></a></span></h1>
        </div>
    </section>
@endsection
