<div class="container">
    <div class="row justify-content-around pt-5 text-right text-light" dir="rtl">
        <section class="gamesCol col-12 col-md-5 border-top border-right border-primary d-flex flex-column">
            <div class="d-flex flex-column">
                <h1 class="display-6">بازی های اخیر</h1>
                <p class="lead">بازی هایی که به تازگی منتشر شده اند</p>
            </div>
            <div class="row w-90 mx-3 p-2 text-right border-top border-left border-info">
                @foreach($recents as $recent)
                    <a href="{{ '/game/' . $recent->slug }}" class="game-col align-items-center col-12 col-md-12 text-dark" style="text-decoration: none">
                        <div class="row w-100 h-100 align-items-center">
                            <div class="col-5">
                                <i class="fa fa-gamepad" aria-hidden="true"></i>
                                <span>{{ $recent->name }}</span>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <span>{{ $recent->platform }}</span>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span>{{ $recent->genre }}</span>
                            </div>
                            <div class="col-1">
                                <i class='fas fa-long-arrow-alt-left' style="font-size: 20px !important;"></i>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </section>
        <section class="gamesCol col-12 col-md-5 border-bottom border-left border-primary d-flex flex-column">
            <div class="d-flex flex-column">
                <h1 class="display-6">بازی های پربازدید</h1>
                <p class="lead">بازی هایی که بیشترین بازدید را دارند</p>
            </div>
            <div class="row w-90 mx-3 p-2 text-right border-bottom border-right border-info">
                @foreach($mosts as $most)
                    <a href="{{ '/game/' . $most->slug }}" class="game-col align-items-center col-12 col-md-12 text-dark" style="text-decoration: none">
                        <div class="row w-100 h-100 align-items-center">
                            <div class="col-5">
                                <i class="fa fa-gamepad" aria-hidden="true"></i>
                                <span>{{ $most->name }}</span>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <span>{{ $most->platform }}</span>
                            </div>
                            <div class="col-3">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span>{{ $most->genre }}</span>
                            </div>
                            <div class="col-1">
                                <i class='fas fa-long-arrow-alt-left' style="font-size: 20px !important;"></i>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    </div>
</div>
