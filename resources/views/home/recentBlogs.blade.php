<div class="container py-5">

    <!-- Jumbotron -->
    <div class="jumbotron">
        <pre class="h3 text-right" style="overflow: unset" dir="rtl">لول بازی خودتو،
با کمک ما بالا ببر!</pre>
        <p class="lead text-right" dir="rtl">شما میتونید بازی مورد علاقه خودتونو به آسونی توی سایت به مزایده بزارید.
            چطوری؟ فقط کافیه توی گیم لند ثبت نام کنی و بازی خودتو برای هر کنسولی که هست به فروش بزاری یا دنبال بازی مورد
            علاقه خودت بگردی
            تا بتونی بهترین گزینه رو پیدا کنی.</p>
    </div>
    <!-- Jumbotron -->

    <hr class="my-5 bg-light">

    <!--Carousel Wrapper-->
    @if(count($blogs) > 0)
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

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
                                     src="{{ 'http://localhost/' . $blog->image }}"
                                     alt="Blog Image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog->title }}</h4>
                                    <p class="card-text">{{ $blog->description }}</p>
                                    <a class="btn btn-primary">نمایش</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">
                    @foreach(array_slice($blogs, 0, 4) as $blog)
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                     src="{{ 'http://localhost/' . $blog->image }}"
                                     alt="Blog Image Cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog->title }}</h4>
                                    <p class="card-text">{{ $blog->description }}</p>
                                    <a class="btn btn-primary">نمایش</a>
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
