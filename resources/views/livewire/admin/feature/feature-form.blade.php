@push('pageStyles')
    <link rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
@endpush

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Özellik</strong>
                            @if ($featureId)
                                Düzenle
                            @else
                                Ekle
                            @endif
                        </div>
                        <div class="card-body card-block">
                            @if ($featureId)
                                <form wire:submit.prevent='update()' enctype="multipart/form-data"
                                    class="form-horizontal">
                                @else
                                    <form wire:submit.prevent='save()' enctype="multipart/form-data"
                                        class="form-horizontal">
                            @endif


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Özellik Adı <span
                                            class="text-danger">*</span>
                                    </label>


                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" wire:model="name" placeholder="Özellik Adı"
                                        class="form-control">
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">İkon</label>
                                </div>
                                <div class="col col-md-9">

                                    <div class="card" style="background:rgba(0,0,0,0.02)">
                                        <div class="card-content">
                                            <div class="row p-4">
                                                @foreach ($icons as $icon)
                                                    <div class="col-md-3 mt-4">
                                                        <label for="" class="ml-1">
                                                            <input type="radio" value="{{ $icon }}"
                                                                wire:model="icon" name="icon">
                                                            <i class="{{ $icon }} fa-2x"></i>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Durum</label>
                                </div>
                                <div class="col col-md-9">

                                    <label class="switch switch-3d switch-success mr-3">
                                        <input wire:model="status" type="checkbox" class="switch-input">
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>



                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i>
                                @if ($featureId)
                                    Güncelle
                                @else
                                    Ekle
                                @endif
                            </button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
