@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container py-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <h2 class="fw-bold text-center mb-4">
                List Report Tracker
            </h2>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="postTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User</th>
                                        <th>Report</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
<script type="text/javascript">
    $(document).ready(function () {
        $('#postTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url()->current() }}',
            columns: [
                { 
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex', 
                    orderable: false, 
                    searchable: false,
                    width: '5%'
                },
                { 
                    data: 'user_id',
                    name: 'user_id',
                    orderable: true,
                    searchable: true,
                    width: '5%'
                },
                { 
                    data: 'report_id', 
                    name: 'report_id',
                    orderable: true,
                    searchable: true,
                    width: '5%'
                },
                { 
                    data: 'status', 
                    name: 'status',
                    orderable: true,
                    searchable: true,
                    width: '15%'
                },
                { 
                    data: 'note', 
                    name: 'note',
                    orderable: true,
                    searchable: true,
                    width: '30%'
                },
                { 
                    data: 'created_at',
                    name: 'created_at',
                    orderable: true,
                    searchable: true,
                    width: '25%'
                },
            ]
        }); 
    });
</script>
@endsection
