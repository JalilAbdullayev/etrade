<?php

use Livewire\Volt\Component;

new class extends Component {
    public function logout() {
        Auth::guard('web')->logout();
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        return $this->redirectIntended(route('home'));
    }
}; ?>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="back/images/users/2.jpg" alt="user-img" class="img-circle"/>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <button wire:click="logout" class="dropdown-item">
                            <i class="ti-power-off"></i> Logout
                        </button>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.index') }}" wire:navigate
                       aria-expanded="false">
                        <i class="ti-home"></i>
                        <span class="hide-menu">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.settings') }}" wire:navigate
                       aria-expanded="false">
                        <i class="icons-Gears"></i>
                        <span class="hide-menu">
                            Settings
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">
                            Dashboard
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="index-2.html">
                                Minimal
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
