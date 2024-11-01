<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

    <!-- Start New Arrivals Product Area  -->
<section class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
    <div class="container">
        <div class="product-area pb--50">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"><i
                        class="far fa-shopping-basket"></i>This Week’s</span>
                <h2 class="title">New Arrivals</h2>
            </div>
            <div class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                <div class="slick-single-layout">
                    <div class="axil-product product-style-two">
                        <div class="thumbnail">
                            <a href="{{ route('product') }}" wire:navigate>
                                <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500"
                                     src="front/images/product/electric/product-05.png" alt="Product Images">
                            </a>
                            <div class="label-block label-right">
                                <div class="product-badget">10% OFF</div>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="inner">
                                <div class="color-variant-wrapper">
                                    <ul class="color-variant">
                                        <li class="color-extra-01 active"><span><span class="color"></span></span>
                                        </li>
                                        <li class="color-extra-02"><span><span class="color"></span></span>
                                        </li>
                                        <li class="color-extra-03"><span><span class="color"></span></span>
                                        </li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="{{ route('product') }}" wire:navigate>Demon's Souls</a></h5>
                                <div class="product-price-variant">
                                    <span class="price old-price">$40</span>
                                    <span class="price current-price">$30</span>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal"
                                                                 data-bs-target="#quick-view-modal"><i
                                                    class="far fa-eye"></i></a></li>
                                        <li class="select-option"><a href="{{ route('product') }}" wire:navigate>Add to
                                                Cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .slick-single-layout -->
            </div>
        </div>
    </div>
</section>
<!-- End New Arrivals Product Area  -->
