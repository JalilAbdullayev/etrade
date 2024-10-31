<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();
        $this->redirectIntended(route('home'), true);
    }
}; ?>

<section>
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <a href="{{ route('home') }}" wire:navigate class="site-logo">
                    <img src="{{ asset('front/images/logo/logo.png')}}" alt="logo"/>
                </a>
            </div>
            <div class="col-sm-8">
                <div class="singin-header-btn">
                    <p>
                        Not a member?
                    </p>
                    <a href="{{ route('register') }}" wire:navigate class="axil-btn btn-bg-secondary sign-up-btn">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--9">
                <h3 class="title">
                    We Offer the Best Products
                </h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">
                        Sign in to eTrade.
                    </h3>
                    <p class="b2 mb--55">
                        Enter your detail below
                    </p>
                    <form class="singin-form" method="POST" wire:submit="login">
                        @csrf
                        <ul class="list-group mb-3">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger text-danger">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="email" wire:model="form.email" :value="old('email')" required autofocus
                                   @class(['form-control', 'is-invalid' => $errors->has('form.email')]) name="email"
                                   autocomplete="username" id="email" maxlength="255"/>
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <input type="password" wire:model="form.password" autocomplete="current-password" required
                                   @class(['form-control', 'is-invalid' => $errors->has('form.password')]) name="password"
                                   id="password" maxlength="255" minlength="8"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" wire:model="form.remember" name="remember" id="remember_me"
                                   class="form-control"/>
                            <label for="remember_me">
                                Remember me
                            </label>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
