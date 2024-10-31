<?php

use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new class extends Component {
    #[Title('Privacy Policy')]
    public function mount() {}
}; ?>

<section>
    <livewire:layout.breadcrumb :title="'Privacy Policy'" :subtitle="'Privacy Policy'"/>
    <!-- Start Privacy Policy Area  -->
    <div class="axil-privacy-area axil-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="axil-privacy-policy">
                        <span class="policy-published">
                            This Privacy policy was published on February 26th, 2022.
                        </span>
                        <h4 class="title">
                            GDPR compliance
                        </h4>
                        <p>
                            Sed nec ex vitae justo molestie maximus. Sed ut neque sit amet libero rhoncus tempor. Fusce
                            tempor quam libero, varius congue magna tempus vitae. Donec a justo nec elit sagittis
                            sagittis eu a ante. Vivamus rutrum elit odio. Donec gravida id ligula ut faucibus. Aenean
                            convallis ligula orci, ut congue nunc sodales ut. In ultrices elit malesuada velit ornare,
                            eget dictum velit hendrerit. Praesent bibendum blandit lectus, eu congue neque mollis in.
                            Pellentesque metus diam, hendrerit in purus fringilla, accumsan bibendum sapien. Nunc non
                            facilisis sem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Privacy Policy Area  -->
</section>
