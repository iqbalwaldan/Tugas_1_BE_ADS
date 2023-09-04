@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <h2 class="fw-bold text-center mb-4">
            List Report
        </h2>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <table id="postTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tiket</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Action</th>
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
                    data: 'tiket_id',
                    name: 'tiket_id',
                    orderable: true,
                    searchable: true,
                    width: '5%'
                },
                { 
                    data: 'title', 
                    name: 'title',
                    orderable: true,
                    searchable: true,
                    width: '10%'
                },
                { 
                    data: 'status', 
                    name: 'status',
                    orderable: true,
                    searchable: true,
                    width: '10%'
                },
                { 
                    data: 'category', 
                    name: 'category',
                    orderable: true,
                    searchable: true,
                    width: '10%'
                },
                { 
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false,
                    width: '10%'
                }
            ]
        }); 
    });
</script>
@endsection
