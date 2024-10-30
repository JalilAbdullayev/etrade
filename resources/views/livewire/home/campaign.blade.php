<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

    <!-- Poster Countdown Area  -->
<section class="axil-poster-countdown">
    <div class="container">
        <div class="poster-countdown-wrap bg-lighter">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="poster-countdown-content">
                        <div class="section-title-wrapper">
                            <span class="title-highlighter highlighter-secondary"> <i class="fal fa-headphones-alt"></i> Don’t Miss!!</span>
                            <h2 class="title">Enhance Your Music Experience</h2>
                        </div>
                        <div class="poster-countdown countdown mb--40"></div>
                        <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="poster-countdown-thumbnail">
                        <img src="front/images/product/poster/poster-03.png" alt="Poster Product"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Poster Countdown Area  -->
@section('js')
    <script>
        (() => {
            let eventCounter = $('.poster-countdown');
            if(eventCounter.length) {
                eventCounter.countdown('2025/06/17', function(e) {
                    $(this).html(e.strftime(`<div class='countdown-section'>
                                            <div>
                                                <div class='countdown-number'>%-D</div>
                                                <div class='countdown-unit'>Day</div>
                                            </div>
                                        </div>
                                        <div class='countdown-section'>
                                            <div>
                                                <div class='countdown-number'>%H</div>
                                                <div class='countdown-unit'>Hrs</div>
                                            </div>
                                        </div>
                                        <div class='countdown-section'>
                                            <div>
                                                <div class='countdown-number'>%M</div>
                                                <div class='countdown-unit'>Min</div>
                                            </div>
                                        </div>
                                        <div class='countdown-section'>
                                            <div>
                                                <div class='countdown-number'>%S</div>
                                                <div class='countdown-unit'>Sec</div>
                                            </div>
                                        </div>`));
                });
            }
        })()
    </script>
@endsection
