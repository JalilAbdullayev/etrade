<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new class extends Component {
    #[Title('Blog')]
    public function mount() {}
}; ?>

<section>
    <livewire:layout.breadcrumb :title="'Shop'" :subtitle="'Our Blog'"/>
    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <div class="content-blog blog-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{ route('article') }}" wire:navigate>
                                            <img src="front/images/blog/blog-10.png" alt="Blog Images">
                                        </a>
                                        <div class="blog-category">
                                            <a href="#">Digital Art's</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{ route('article') }}" wire:navigate>Keeping
                                                yourself safe when buying
                                                NFTs on eTrade</a></h5>

                                        <div class="read-more-btn">
                                            <a class="axil-btn right-icon" href="{{ route('article') }}" wire:navigate>Read
                                                More <i
                                                    class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-pagination">
                        <nav class="navigation pagination" aria-label="Products">
                            <ul class="page-numbers">
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <livewire:blog.sidebar/>
                </div>
            </div>
            <!-- End post-pagination -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->
</section>
