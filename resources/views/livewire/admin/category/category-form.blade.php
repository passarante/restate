<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <strong>Kategori</strong>
                            @if ($categoryId)
                                Düzenle
                            @else
                                Ekle
                            @endif
                        </div>
                        <div class="card-body card-block">
                            @if ($categoryId)
                                <form wire:submit.prevent='update()' enctype="multipart/form-data"
                                    class="form-horizontal">
                                @else
                                    <form wire:submit.prevent='save()' enctype="multipart/form-data"
                                        class="form-horizontal">
                            @endif

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Üst Kategori
                                    </label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select wire:model='subcategory_id' class="form-control">
                                        <option value="">Ana Kategori</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Kategori Adı <span
                                            class="text-danger">*</span>
                                    </label>


                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" wire:model="name" placeholder="Kategori Adı"
                                        class="form-control">
                                    @error('name')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label">Açıklama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea wire:model="description" name="textarea-input" id="textarea-input" rows="9" placeholder="Açıklama..."
                                        class="form-control"></textarea>
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

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Resim</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input wire:model="photo" type="file" id="file-input" name="file-input"
                                        class="form-control-file">
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i>
                                @if ($categoryId)
                                    Güncelle
                                @else
                                    Ekle
                                @endif
                            </button>
                        </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">Kategori Resmi</div>
                        <div class="card-body">

                            @if ($photo)
                                <img src="{{ $photo->temporaryUrl() }}" alt="">
                            @elseif ($oldPhoto)
                                <img src="{{ Storage::url($oldPhoto) }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
