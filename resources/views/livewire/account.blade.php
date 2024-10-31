<?php

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function update() {
        try {
            $validated = $this->validate([
                'current_password' => ['string', 'current_password'],
                'password' => ['string', Password::defaults(), 'confirmed'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore(Auth::user()->id)],
            ]);
        } catch(\Exception $e) {
            $this->reset('current_password', 'password', 'password_confirmation');
            session()->flash('errors', $e->validator->errors());
            return $this->redirectIntended(route('account'), true);
        }
        Auth::user()->update([
            'password' => Hash::make($validated['password']),
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);
        return $this->redirectIntended(route('account'), true);
    }

    public function mount() {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }
}; ?>

    <!-- Start My Account Area  -->
<section>
    <livewire:layout.breadcrumb :title="'My Account'" :subtitle="'Explore All Products'"/>
    <div class="axil-dashboard-area axil-section-gap">
        <div class="container">
            <div class="axil-dashboard-warp">
                <div class="axil-dashboard-author">
                    <div class="media">
                        <div class="thumbnail">
                            <img src="front/images/product/author1.png" alt="Hello Annie">
                        </div>
                        <div class="media-body">
                            <h5 class="title mb-0">
                                Hello {{ auth()->user()->name }}
                            </h5>
                            <span
                                class="joining-date">eTrade Member Since {{ auth()->user()->created_at->format('F Y') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <aside class="axil-dashboard-aside">
                            <nav class="axil-dashboard-nav">
                                <div class="nav nav-tabs" role="tablist">
                                    <a class="nav-item nav-link active" data-bs-toggle="tab" href="#nav-account"
                                       role="tab"
                                       aria-selected="true">
                                        <i class="fas fa-user"></i>Account Details
                                    </a>
                                    <a class="nav-item nav-link" data-bs-toggle="tab" href="#nav-orders" role="tab"
                                       aria-selected="false">
                                        <i class="fas fa-shopping-basket"></i>Orders
                                    </a>
                                    <a class="nav-item nav-link" wire:click="logout" style="cursor: pointer">
                                        <i class="fal fa-sign-out"></i>Logout
                                    </a>
                                </div>
                            </nav>
                        </aside>
                    </div>
                    <div class="col-xl-9 col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-account" role="tabpanel">
                                <div class="col-lg-9">
                                    <div class="axil-dashboard-account">
                                        <form method="POST" wire:submit.prevent="update" class="account-details-form">
                                            @if($errors)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-danger alert-dismissible fade show mb-4"
                                                         role="alert">
                                                        {{ $error }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                                aria-label="Close"></button>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name">
                                                            Name
                                                        </label>
                                                        <input type="text" maxlength="255" autocomplete="name"
                                                               name="name" required wire:model="name" id="name"
                                                            @class(['form-control', 'is-invalid' => $errors->has('name')])/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email">
                                                            Email
                                                        </label>
                                                        <input type="email" maxlength="255" autocomplete="username"
                                                               @class(['form-control', 'is-invalid' => $errors->has('email')])
                                                               required wire:model="email" name="email" id="email"/>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h5 class="title">
                                                        Password Change
                                                    </h5>
                                                    <div class="form-group">
                                                        <label for="current_password">
                                                            Current Password
                                                        </label>
                                                        <input type="password" id="current_password" minlength="8"
                                                               @class(['form-control', 'is-invalid' => $errors->has('current_password')])
                                                               maxlength="255" autocomplete="current-password"
                                                               name="current_password" wire:model="current_password"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">
                                                            New Password
                                                        </label>
                                                        <input type="password" id="password" maxlength="255"
                                                               minlength="8" autocomplete="new-password" name="password"
                                                               @class(['form-control', 'is-invalid' => $errors->has('password')])
                                                               wire:model="password"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password_confirmation">
                                                            Confirm New Password
                                                        </label>
                                                        <input type="password" id="password_confirmation" minlength="8"
                                                               @class(['form-control', 'is-invalid' => $errors->has('password_confirmation')])
                                                               maxlength="255" autocomplete="new-password"
                                                               name="password_confirmation"
                                                               wire:model="password_confirmation"/>
                                                    </div>
                                                    <div class="form-group mb--0">
                                                        <input type="submit" class="axil-btn" value="Save Changes"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-orders" role="tabpanel">
                                <div class="axil-dashboard-order">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Order</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">#6523</th>
                                                <td>September 10, 2020</td>
                                                <td>Processing</td>
                                                <td>$326.63 for 3 items</td>
                                                <td><a href="#" class="axil-btn view-btn">View</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account Area  -->
</section>
