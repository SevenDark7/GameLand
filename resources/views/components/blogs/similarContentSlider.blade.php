<section class="bg-custom">
    <div class="container py-5">
        <!--Carousel Wrapper-->
        @if(count($blogs) > 4)
            <div id="multi-item-example" class="carousel text-right slide carousel-multi-item" data-ride="carousel">
                <h4 class="text-light mb-3" dir="rtl">مطالب مشابه:</h4>
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        @foreach(array_slice($blogs, 0, 4) as $blog)
                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{ $blog['image'] }}"
                                         alt="Blog Image cap">
                                    <div class="card-body recent-blog-body text-right">
                                        <a class="card-title h5" href="{{ '/blogs/' . $blog['id'] }}">{{ $blog['title'] }}</a>
                                        <p class="card-text text-justify" dir="rtl">{{ $blog['description'] }}</p>
                                        <a class="btn btn-outline-custom btn-floating" href="{{ '/blogs/' . $blog['id'] }}">نمایش</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        @foreach(array_slice($blogs, 4, 8) as $blog)
                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{ $blog['image'] }}"
                                         alt="Blog Image Cap">
                                    <div class="card-body recent-blog-body">
                                        <a class="card-title h5" href="{{ '/blogs/' . $blog['id'] }}">{{ $blog['title'] }}</a>
                                        <p class="card-text text-justify" dir="rtl">{{ $blog['description'] }}</p>
                                        <a class="btn btn-outline-custom btn-floating" href="{{ '/blogs/' . $blog['id'] }}">نمایش</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--/.Second slide-->
                </div>
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        @endif
    </div>
</section>
