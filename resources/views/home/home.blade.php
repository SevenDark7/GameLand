@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <article class="row justify-content-center align-items-center text-light bg-custom descrip">
        <div class="col-12 col-xl-5"><img class="card-img-top" src="/images/home/homeImage.gif" alt="GameShop"></div>
        <div class="col-12 col-xl-7 home-descrip">روزانه اخبار گسترده ای در زمینه صنعت گیم و بازی های متنوعی برای انواع
            کنسول های بازی از
            کمپانی های مختلف تولید و منتشر میشود.
            این موضوع باعث شده تا گیم لند با توجه به تعداد و علاقه قابل توجه گیمر های ایرانی به این صنعت، در راستای پوشش
            این اخبار و بازی ها گام بردارد و در استفاده
            و دسترسی راحت تر و سریع تر نقش خود را ایفا کند.
        </div>
    </article>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <pre class="h3 text-right" style="overflow: unset" dir="rtl">گیم لند، به راحتی
جوی استیک روی دستت!!</pre>
        <p class="lead text-right" dir="rtl">شما میتونید بازی مورد علاقه خودتونو به آسونی توی سایت به مزایده بزارید.
            چطوری؟ فقط کافیه توی گیم لند ثبت نام کنی و بازی خودتو برای هر کنسولی که هست به فروش بزاری یا دنبال بازی
            مورد
            علاقه خودت بگردی
            تا بتونی بهترین گزینه رو پیدا کنی.</p>
    </div>
    <!-- Jumbotron -->

    <hr class="my-5 bg-custom">

    @include('components.home.slider')

    <!-- Jumbotron -->
    <div class="jumbotron">
        <pre class="h3 text-right" style="overflow: unset" dir="rtl">گیم لند
دقیقا چیکار میکنه؟!</pre>
        <p class="lead text-right" dir="rtl">گیم لند یه یار کمکیه که اومده تا مشکل انتخاب، خرید، فروش، صرفه جویی در زمان، کاهش هزینه ها و هر مشکل دیگه ای که داری رو واست حل کنه
        تا بتونی با خیال راحت بازی کنی و برنده باشی. پس وقتو تلف نکن، زودتر تروفیارو بگیر که پلات بازی های بعدی که تو ذهنته منتظرته...</p>
    </div>
    <!-- Jumbotron -->

    <hr class="my-5 bg-custom">

    @include('components.home.recentBlogs')

    @include('components.home.gamesColumn')

@endsection
