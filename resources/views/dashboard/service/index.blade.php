@extends('layouts.admin.app')

@section('content')
    @include('includes.messages')

    <!-- users list start -->
    <section class="app-user-list">
        <div class="mb-2">
            <button class="btn btn-success" data-toggle="modal" data-target="#addServiceModal">
                @lang('lang.Add') @lang('lang.Services')
            </button>
        </div>

        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table id="example1" class="table mb-3 table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('lang.Title')</th>
                            <th>@lang('lang.Description')</th>
                            <th>@lang('lang.Actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light"
                                            data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item edit-button" href="#"
                                                data-id="{{ $service->id }}" data-toggle="modal"
                                                data-target="#editServiceModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 mr-50">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                                <span>@lang('lang.Edit')</span>
                                            </a>

                                            <form action="{{ route('service.destroy', ['service' => $service]) }}" class="mb-3"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash mr-50">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                    <span>@lang('lang.Delete')</span>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $services->links('pagination::bootstrap-4') }}
    </section>
    <!-- users list ends -->

    <!-- Add service Modal -->
    <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addServiceModalLabel">@lang('lang.Add') @lang('lang.Services')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form fields for adding a service -->
                        <div class="form-group">
                            <label for="title">@lang('lang.Title')</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">@lang('lang.Description')</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('lang.Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('lang.Save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit service Modal -->
    <div class="modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="editServiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editServiceForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editServiceModalLabel">@lang('lang.Edit') @lang('lang.Services')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form fields for editing a service -->
                        <div class="form-group">
                            <label for="edit_title">@lang('lang.Title')</label>
                            <input type="text" name="title" id="edit_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_description">@lang('lang.Description')</label>
                            <textarea name="description" id="edit_description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('lang.Close')</button>
                        <button type="submit" class="btn btn-primary">@lang('lang.Save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": true,
                "scrollX": true
            });

            // Edit button click event
            $('.edit-button').on('click', function() {
                var serviceId = $(this).data('id');
                var url = '{{ route('service.edit', ':id') }}';
                url = url.replace(':id', serviceId);
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        var url = '{{ route('service.update', ':id') }}';
                        url = url.replace(':id', serviceId);
                        $('#editServiceForm').attr('action', url);
                        $('#edit_title').val(response.title);
                        $('#edit_description').val(response.description);
                    }
                });
            });
        });
    </script>
@endsection
