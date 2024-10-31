<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Password::defaults()],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        event(new Registered($user = User::create($validated)));
        Auth::login($user);
        $this->redirect(route('home'), true);
    }
}; ?>

<section>
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <a href="{{ route('home') }}" wire:navigate class="site-logo">
                    <img src="{{ asset('front/images/logo/logo.png')}}" alt="logo"/>
                </a>
            </div>
            <div class="col-md-6">
                <div class="singin-header-btn">
                    <p>
                        Already a member?
                    </p>
                    <a href="{{ route('login') }}" wire:navigate class="axil-btn btn-bg-secondary sign-up-btn">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h3 class="title">
                    We Offer the Best Products
                </h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">I'm New Here</h3>
                    <p class="b2 mb--55">Enter your detail below</p>
                    <form class="singin-form" method="POST" wire:submit="register">
                        @csrf
                        <ul class="list-group mb-3">
                            @foreach($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger text-danger">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="form-group">
                            <label for="name">
                                Name
                            </label>
                            <input type="text" wire:model="name" name="name" :value="old('name')" required
                                   @class(['form-control', 'is-invalid' => $errors->has('name')]) autofocus
                                   autocomplete="name" maxlength="255" id="name"/>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="email" wire:model="email" name="email" id="email" :value="old('email')"
                                   @class(['form-control', 'is-invalid' => $errors->has('email')])
                                   required autocomplete="username" maxlength="255"/>
                        </div>
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>
                            <input type="password" id="password" wire:model="password" autocomplete="new-password"
                                   required maxlength="255" minlength="8"
                                   @class(['form-control', 'is-invalid' => $errors->has('password')]) name="password"/>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">
                                Confirm Password
                            </label>
                            <input type="password" wire:model="password_confirmation" id="password_confirmation"
                                   autocomplete="new-password" required name="password_confirmation"
                                   @class(['form-control', 'is-invalid' => $errors->has('password_confirmation')])
                                   maxlength="255" minlength="8"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="axil-btn btn-bg-primary submit-btn">
                                Create Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
