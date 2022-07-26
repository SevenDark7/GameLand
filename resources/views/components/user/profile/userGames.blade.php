<div class="row text-right" style="display: none" id="myGameBox">
    <div class="col-12 mb-4">
        <h5 class="text-custom">آگهی های من</h5>
    </div>
    <div class="col-12">
        <div class="row justify-content-between">
            @foreach($games as $game)
                <div class="col-12 col-md-5 mb-4 p-0 gamesBox">
                    <div class="row">
                        <div class="col-10">
                            <div class="record my-3">
                                <i class="fa fa-gamepad" aria-hidden="true"></i>
                                <span>{{ $game->name }}</span>
                            </div>
                            <div class="record my-3">
                                <i class="fa fa-tags" aria-hidden="true"></i>
                                <span>{{ $game->platform }}</span>
                            </div>
                            <div class="record my-3">
                                <i class="fa fa-map" aria-hidden="true"></i>
                                <span>{{ $game->city->name }}</span>
                            </div>
                            <div class="record my-3">
                                <i class="fa fa-clock" aria-hidden="true"></i>
                                <span>{{ jdate($game->created_at)->ago() }}</span>
                            </div>
                        </div>
                        <div class="col-2 text-nowrap align-self-center">
                            <a href="{{ '/games/' . $game->slug }}" style="text-decoration: none; color: inherit">
                                <i class='fas fa-long-arrow-alt-left'
                                   style="font-size: 20px !important;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
