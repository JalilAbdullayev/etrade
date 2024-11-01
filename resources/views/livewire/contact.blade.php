<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new class extends Component {
    #[Title('Contact')]
    public function mount() {}
}; ?>

<section>
    <livewire:layout.breadcrumb :title="'Contact'" :subtitle="'Contact With Us'"/>
    <!-- Start Contact Area  -->
    <div class="axil-contact-page-area axil-section-gap">
        <div class="container">
            <div class="axil-contact-page">
                <div class="row row--30">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3 class="title mb--10">
                                We would love to hear from you.
                            </h3>
                            <p>
                                If you’ve got great products your making or looking to work with us then drop us a line.
                            </p>
                            <form id="contact-form" method="POST" class="axil-contact-form">
                                <div class="row row--10">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-name">
                                                Name <span>
                                                    *
                                                </span>
                                            </label>
                                            <input type="text" name="contact-name" id="contact-name"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-phone">
                                                Phone <span>
                                                    *
                                                </span>
                                            </label>
                                            <input type="tel" name="contact-phone" id="contact-phone"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="contact-email">
                                                E-mail <span>
                                                    *
                                                </span>
                                            </label>
                                            <input type="email" name="contact-email" id="contact-email"/>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="contact-message">
                                                Your Message
                                            </label>
                                            <textarea name="contact-message" id="contact-message" cols="1"
                                                      rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb--0">
                                            <button name="submit" type="submit" id="submit"
                                                    class="axil-btn btn-bg-primary">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-location mb--40">
                            <h4 class="title mb--20">
                                Our Store
                            </h4>
                            <span class="address mb--20">
                                8212 E. Glen Creek Street Orchard Park, NY 14127, United States of America
                            </span>
                            <span class="phone">
                                Phone: <a href="tel:">
                                    +123 456 7890
                                </a>
                            </span>
                            <span class="email">
                                Email: <a href="mailto:">
                                    Hello@etrade.com
                                </a>
                            </span>
                        </div>
                        <div class="opening-hour">
                            <h4 class="title mb--20">Opening Hours:</h4>
                            <p>
                                Monday to Saturday: 9am - 10pm
                                <br/> Sundays: 10am - 6pm
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Google Map Area  -->
            <div class="axil-google-map-wrap axil-section-gap pb--0">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="1080" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=melbourne&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
            <!-- End Google Map Area  -->
        </div>
    </div>
    <!-- End Contact Area  -->
</section>
