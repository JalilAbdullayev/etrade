<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>
    <!-- Start Sidebar Area  -->
<aside class="axil-sidebar-area">

    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40">
        <h6 class="widget-title">Latest Posts</h6>

        <!-- Start Single Post List  -->
        <div class="content-blog post-list-view mb--20">
            <div class="thumbnail">
                <a href="{{ route('article') }}" wire:navigate>
                    <img src="front/images/blog/blog-04.png" alt="Blog Images">
                </a>
            </div>
            <div class="content">
                <h6 class="title"><a href="{{ route('article') }}" wire:navigate>Dubai’s FRAME
                        Offers its Take on
                        the</a></h6>
                <div class="axil-post-meta">
                    <div class="post-meta-content">
                        <ul class="post-meta-list">
                            <li>Mar 27, 2022</li>
                            <li>300k Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Post List  -->

    </div>
    <!-- End Single Widget  -->
    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40">
        <h6 class="widget-title">Recent Viewed Products</h6>
        <ul class="product_list_widget recent-viewed-product">
            <!-- Start Single product_list  -->
            <li>
                <div class="thumbnail">
                    <a href="{{ route('article') }}" wire:navigate>
                        <img src="front/images/product/product-12.jpg" alt="Blog Images">
                    </a>
                </div>
                <div class="content">
                    <h6 class="title"><a href="{{ route('article') }}" wire:navigate>Men's Fashion
                            Tshirt</a></h6>
                    <div class="product-meta-content">
                                                <span class="woocommerce-Price-amount amount">
                            <del>$30</del>
                            $20
                        </span>
                    </div>
                </div>
            </li>
            <!-- End Single product_list  -->
        </ul>

    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40 widget_search">
        <h6 class="widget-title">Search</h6>
        <form class="blog-search" action="#">
            <button class="search-button"><i class="fal fa-search"></i></button>
            <input type="text" placeholder="Search">
        </form>
    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40 widget_archive">
        <h6 class="widget-title">Archives List</h6>
        <ul>
            <li><a href="#">January 2020</a></li>
        </ul>
    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40 widget_archive_dropdown">
        <h6 class="widget-title">Archives Dropdown</h6>
        <select>
            <option hidden>Select Month</option>
            <option>April 2020 (4)</option>
        </select>
    </div>
    <!-- End Single Widget  -->

    <!-- Start Single Widget  -->
    <div class="axil-single-widget mt--40 widget_tag_cloud">
        <h6 class="widget-title">Tags</h6>
        <div class="tagcloud">
            <a href="#">Design</a>
        </div>
    </div>
    <!-- End Single Widget  -->

</aside>
<!-- End Sidebar Area -->
