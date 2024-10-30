<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $title;
    public string $subtitle;
}; ?>

    <!-- Start Breadcrumb Area  -->
<div class="axil-breadcrumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="inner">
                    <ul class="axil-breadcrumb">
                        <li class="axil-breadcrumb-item">
                            <a href="{{ route('home') }}" wire:navigate>
                                Home
                            </a>
                        </li>
                        <li class="separator"></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">
                            {{ $title }}
                        </li>
                    </ul>
                    <h1 class="title">
                        {{ $subtitle }}
                    </h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="inner">
                    <div class="bradcrumb-thumb">
                        <img src="{{ asset('front/images/product/product-45.png')}}" alt="Image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area  -->
