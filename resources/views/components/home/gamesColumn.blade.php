<div class="row justify-content-around py-5 text-right text-dark" dir="rtl">
    <section class="gamesCol col-12 col-md-5 border-top border-right border-primary d-flex flex-column">
        <div class="d-flex flex-column text-nowrap">
            <h2 class="text-nowrap">بازی های اخیر</h2>
            <p class="lead text-nowrap">بازی هایی که به تازگی منتشر شده اند</p>
        </div>
        <div class="row w-90 mx-3 p-2 text-right border-top border-left border-info">
            @foreach($recents as $recent)
                <div class="game-col align-items-center col-12 col-md-12 text-dark">
                    <div class="row w-100 h-100 align-items-center">
                        <div class="col-5 record">
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                            <span>{{ $recent->name }}</span>
                        </div>
                        <div class="col-3 record">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <span>{{ $recent->platform }}</span>
                        </div>
                        <div class="col-3 record">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span>{{ $recent->genre }}</span>
                        </div>
                        <div class="col-1 text-nowrap">
                            <a href="{{ '/games/' . $recent->slug }}" style="text-decoration: none; color: inherit">
                                <i class='fas fa-long-arrow-alt-left' style="font-size: 20px !important;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="gamesCol col-12 col-md-5 border-bottom border-left border-primary d-flex flex-column">
        <div class="d-flex flex-column text-nowrap">
            <h2 class="text-nowrap">بازی های پربازدید</h2>
            <p class="lead text-nowrap">بازی هایی که بیشترین بازدید را دارند</p>
        </div>
        <div class="row w-90 mx-3 p-2 text-right border-bottom border-right border-info">
            @foreach($mosts as $most)
                <div class="game-col align-items-center col-12 col-md-12 text-dark">
                    <div class="row w-100 h-100 align-items-center">
                        <div class="col-5 record">
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                            <span>{{ $most->name }}</span>
                        </div>
                        <div class="col-3 record">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <span>{{ $most->platform }}</span>
                        </div>
                        <div class="col-3 record">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span>{{ $most->genre }}</span>
                        </div>
                        <div class="col-1 text-nowrap">
                            <a href="{{ '/games/' . $most->slug }}" style="text-decoration: none; color: inherit">
                                <i class='fas fa-long-arrow-alt-left' style="font-size: 20px !important;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

