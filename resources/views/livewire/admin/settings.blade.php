<?php

use App\Models\Settings;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    #[Validate('required|max:255|string')]
    public $title;
    #[Validate('max:255|string')]
    public $author;
    #[Validate('string')]
    public $description;
    #[Validate('string')]
    public $keywords;
    #[Validate('image|max:2048')]
    public $logo;
    #[Validate('image|max:2048')]
    public $favicon;

    public function save() {
        $settings = Settings::first();
        try {
            $settings->title = $this->title;
            $settings->author = $this->author;
            $settings->description = $this->description;
            $settings->keywords = $this->keywords;
            if($this->logo) {
                $this->logo->store('/', 'public');
                $settings->logo = $this->logo->hashName();
            }
            if($this->favicon) {
                $this->favicon->store('/', 'public');
                $settings->favicon = $this->favicon->hashName();
            }
            $settings->save();
            session()->flash('success', 'Settings updated successfully!');
        } catch(Exception $exception) {
            session()->flash('error', 'Settings update failed!');
        }
        return $this->redirectIntended(route('admin.settings'), true);
    }

    #[Layout('components.layouts.admin')]
    #[Title('Settings')]
    public function mount() {
        $settings = Settings::first();
        $this->title = $settings->title;
        $this->author = $settings->author;
        $this->description = $settings->description;
        $this->keywords = $settings->keywords;
    }
}; ?>

@section('css')
    @vite(['public/back/node_modules/toast-master/css/jquery.toast.css'])
@endsection
<section>
    <livewire:admin.layout.breadcrumb :title="'Settings'"/>
    @session('success')
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
        <h3 class="text-success">
            <i class="icon-check"></i> Success
        </h3>
        {{ session('success') }}
    </div>
    @endsession
    @session('error')
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"></span>
        </button>
        <h3 class="text-danger">
            <i class="icon-close"></i> Error
        </h3>
        {{ session('error') }}
    </div>
    @endsession
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" placeholder="Title" wire:model="title"/>
                            <label for="title">
                                Title
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="author" placeholder="Author"
                                   wire:model="author"/>
                            <label for="author">
                                Author
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="description">
                        Description
                    </label>
                    <textarea class="form-control" rows="5" id="description" wire:model="description"></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="keywords">
                        Keywords
                    </label>
                    <textarea class="form-control" rows="5" id="keywords" wire:model="keywords"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="logo" class="form-label">
                            Logo <span wire:loading wire:target="logo">
                                is uploading...
                            </span>
                        </label>
                        <input type="file" id="logo" class="form-control" accept="image/*" wire:model="logo"/>
                        @if($logo)
                            <div class="mt-3">
                                <img src="{{ $logo->temporaryUrl() }}" alt=""/>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="favicon" class="form-label">
                            Favicon <span wire:loading wire:target="favicon">
                                is uploading...
                            </span>
                        </label>
                        <input type="file" id="favicon" class="form-control" accept="image/*" wire:model="favicon"/>
                        @if($favicon)
                            <div class="mt-3">
                                <img src="{{ $favicon->temporaryUrl() }}" alt=""/>
                            </div>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">
                    <span wire:loading.remove>
                        Save
                    </span>
                    <span wire:loading wire:target="save">
                        Saving...
                    </span>
                </button>
            </form>
        </div>
    </div>
</section>
@section('js')
    <script src="{{ asset('back/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{ asset('back/js/pages/toastr.js')}}"></script>
@endsection
