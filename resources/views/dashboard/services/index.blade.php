@extends('layouts.dashboard')

@section('description')
    <meta name="description" content="website services page in the dashboard">
@endsection

@section('title', 'Services')

@section('content')
    <!-- Zero configuration table -->
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <a href="{{ route('dashboard.services.create') }}" target="_blank">
                                <button class="card-text btn btn-primary my-3">Add New</button>
                            </a>
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead class="text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Arabic Title</th>
                                        <th>English Title</th>
                                        <th>Arabic Description</th>
                                        <th>English Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($services as $key => $service)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $service->title_ar }}</td>
                                            <td>{{ $service->title_en }}</td>
                                            <td>{{ $service->description_ar }}</td>
                                            <td>{{ $service->description_en }}</td>
                                            <td> <a href="{{ $service->image->publicPath }}" target="_blank"><img
                                                        src="{{ $service->image->publicPath }}" width="60px"
                                                        alt="service image"></a></td>
                                            <td class="d-flex flex-row justify-content-center align-items-center" style="gap: 5px">
                                                <a href="{{ route('dashboard.services.edit', $service->id) }}"
                                                    class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <form id="delete-form-{{ $service->id }}" data-id="{{ $service->id }}" action=" {{ route('dashboard.services.destroy', $service->id) }} "
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div onclick="deleteForm({{ $service->id }})" class="btn btn-danger"><i class="fa fa-trash"></i></div>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
@endsection

@push('scripts')
<script>
    function deleteForm(id) {
        if(confirm('Are you sure?')) document.getElementById(`delete-form-${id}`).submit();
    }
</script>
@endpush
