<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Kategoriler</h2>
                        <a href="{{ route('categories.form') }}" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>Yeni Ekle</a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Ad</th>
                                    <th>Açıklama</th>
                                    <th>Resim</th>
                                    <th>Durum</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $category->name }}
                                        </td>
                                        <td>{{ $category->description }}</td>
                                        <td>

                                            <img src="{{ Storage::url($category->photo) }}" alt="">
                                        </td>
                                        <td>
                                            @if ($category->status == 1)
                                                <span wire:click='chageStatus({{ $category }})'
                                                    class="badge badge-success">Aktif</span>
                                            @else
                                                <span wire:click='chageStatus({{ $category }})'
                                                    class="badge badge-danger">Pasif</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('categories.form', $category) }}"
                                                class="btn btn-info btn-sm">Düzenle</a>
                                            <button wire:click='confirmDelete({{ $category }})'
                                                class="btn btn-danger btn-sm">Sil</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Henüz kategori eklenmemiş</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
