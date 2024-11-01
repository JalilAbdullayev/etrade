<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component {
    #[Layout('components.layouts.admin')]
    public function mount() {}
}; ?>

<section>
    <livewire:admin.layout.breadcrumb/>
</section>
