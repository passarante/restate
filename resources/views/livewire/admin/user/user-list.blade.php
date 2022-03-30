@push('pageStyles')
    <link rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
@endpush

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Kullanıcılar</h2>
                        <a href="{{ route('users.form') }}" class="au-btn au-btn-icon au-btn--blue">
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
                                    <th>Email</th>
                                    <th>Resim</th>
                                    <th>Tip</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->name }}
                                        </td>

                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>resim</td>
                                        <td>
                                            @if ($user->type == 'admin')
                                                <span class="badge badge-success">Yönetici</span>
                                            @else
                                                <span class="badge badge-danger">Üye</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('users.form', $user) }}"
                                                class="btn btn-info btn-sm">Düzenle</a>
                                            <button wire:click='confirmDelete({{ $user }})'
                                                class="btn btn-danger btn-sm">Sil</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($users->count() > 0)
                            <div class="m-2 float-right">
                                {{ $users->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
