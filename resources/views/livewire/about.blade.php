<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Title;

new class extends Component {
    #[Title('About Us')]
    public function mount() {}
}; ?>

<section>
    <livewire:layout.breadcrumb :title="'About Us'" :subtitle="'About Our Store'"/>
    <!-- Start About Area  -->
    <div class="axil-about-area about-style-1 axil-section-gap ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-thumbnail">
                        <div class="thumbnail">
                            <img src="front/images/about/about-01.png" alt="About Us">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="about-content content-right">
                        <span class="title-highlighter highlighter-primary2">
                            <i class="far fa-shopping-basket"></i>About Store
                        </span>
                        <h3 class="title">
                            Online shopping includes both buying things online.
                        </h3>
                        <span class="text-heading">
                            Salesforce B2C Commerce can help you create unified, intelligent digital commerce
                                experiences — both online and in the store.
                        </span>
                        <div class="row">
                            <div class="col-xl-6">
                                <p>
                                    Empower your sales teams with industry tailored solutions that support manufacturers
                                    as they go digital, and adapt to changing markets & customers faster by creating new
                                    business.
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="mb--0">
                                    Salesforce B2B Commerce offers buyers the seamless, self-service experience of
                                    online shopping with all the B2B
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start About Area  -->
    <div class="about-info-area">
        <div class="container">
            <div class="row row--20">
                <div class="col-lg-4">
                    <div class="about-info-box">
                        <div class="thumb">
                            <img src="front/images/about/shape-01.png" alt="Shape">
                        </div>
                        <div class="content">
                            <h6 class="title">
                                40,000+ Happy Customer
                            </h6>
                            <p>
                                Empower your sales teams with industry tailored solutions that support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start Team Area  -->
    <div class="axil-team-area bg-wild-sand">
        <div class="team-left-fullwidth">
            <div class="container ml--xxl-0">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary">
                        <i class="fas fa-users"></i> Our Team
                    </span>
                    <h3 class="title">
                        Expert Management Team
                    </h3>
                </div>
                <div class="team-slide-activation slick-layout-wrapper--20 axil-slick-arrow  arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="front/images/team/team-01.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Founder</span>
                                <h5 class="title">Rosalina D. Willson</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="front/images/team/team-02.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">CEO</span>
                                <h5 class="title">Ukolilix X. Xilanorix</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="front/images/team/team-03.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="front/images/team/team-04.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                    <div class="slick-single-layout">
                        <div class="axil-team-member">
                            <div class="thumbnail"><img src="front/images/team/team-02.png" alt="Cody Fisher"></div>
                            <div class="team-content">
                                <span class="subtitle">Designer</span>
                                <h5 class="title">Alonso M. Miklonax</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area  -->

    <!-- Start About Area  -->
    <div class="axil-about-area about-style-2">
        <div class="container">
            <div class="row align-items-center mb--80 mb_sm--60">
                <div class="col-lg-5">
                    <div class="about-thumbnail">
                        <img src="front/images/about/about-02.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content content-right">
                        <span class="subtitle">Features #01</span>
                        <h4 class="title">Solutions that work together</h4>
                        <p>Publish your eCommerce site quickly with our easy-to-use store builder— no
                            coding required. Migrate your items from your point of sale system or turn your
                            Instagram feed into a shopping site and start selling fast. Square Online works
                            for all kinds of businesses—retail, restaurants, services.</p>
                        <a href="contact.html" class="axil-btn btn-outline">Get In Touch</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class="about-thumbnail">
                        <img src="front/images/about/about-03.png" alt="about">
                    </div>
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="about-content content-left">
                        <span class="subtitle">
                            Features #01
                        </span>
                        <h4 class="title">
                            Solutions that work together
                        </h4>
                        <p>
                            Publish your eCommerce site quickly with our easy-to-use store builder— no coding required.
                            Migrate your items from your point of sale system or turn your Instagram feed into a
                            shopping site and start selling fast. Square Online works for all kinds of
                            businesses—retail, restaurants, services.
                        </p>
                        <a href="contact.html" class="axil-btn btn-outline">
                            Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->
</section>
