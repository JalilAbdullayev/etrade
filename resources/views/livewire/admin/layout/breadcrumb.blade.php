<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $create = false;
    public string $title = '';
}; ?>

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">
            {{ $title === '' ? 'Home' : $title }}
        </h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.index') }}" wire:navigate>
                        Home
                    </a>
                </li>
                @unless(Route::is('admin.index'))
                    <li class="breadcrumb-item active">
                        {{ $title }}
                    </li>
                @endunless
            </ol>
            @if($create)
                <button class="btn btn-info d-none d-lg-block m-l-15 text-white">
                    <i class="fa fa-plus-circle"></i> Create New
                </button>
            @endif
        </div>
    </div>
</div>
