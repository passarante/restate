@push('pageStyles')
    <link rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
@endpush

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Özellikler</h2>
                        <a href="{{ route('features.form') }}" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>Yeni Ekle</a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">

                <div class="col-lg-12 mb-2">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" wire:model="searchTerm" placeholder="Arama..." />
                        </div>
                        <div class="col-md-2"> <select wire:model="perPage" class="form-control">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Ad</th>
                                    <th>Simge</th>
                                    <th>Durum</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($features as $feature)
                                    <tr>
                                        <td>
                                            {{ $feature->name }}
                                        </td>

                                        <td>
                                            <i class="{{ $feature->icon }} fa-2x"></i>
                                        </td>
                                        <td>
                                            @if ($feature->status == 1)
                                                <span wire:click='changeStatus({{ $feature }})'
                                                    class="badge badge-success">Aktif</span>
                                            @else
                                                <span wire:click='changeStatus({{ $feature }})'
                                                    class="badge badge-danger">Pasif</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('categories.form', $feature) }}"
                                                class="btn btn-info btn-sm">Düzenle</a>
                                            <button wire:click='confirmDelete({{ $feature }})'
                                                class="btn btn-danger btn-sm">Sil</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Henüz özellik eklenmemiş</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @if ($features->count() > 0)
                            <div class="m-2 float-right">
                                {{ $features->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
