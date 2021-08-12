@extends('Dashboard.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">


@endsection

@section('show')

    <table class="table table-striped" id="tabel1">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>building number</th>
                <th>coordinates</th>
                <th>action</th>

            </tr>
        </thead>
        {{-- @foreach ($project as $project) --}}
        <tbody>
            <tr>
                {{-- <td>{{ $project->projectname }}</td>
                    <td>{{ $project->buildingnumber }}</td>
                    <td>{{ $project->coordinates }}</td>
                    <td> --}}


                {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div> --}}


                </td>

            </tr>
        </tbody>
        {{-- @endforeach --}}

    </table>
@endsection

@push('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            isi()
        })

        function isi() {
            $('#tabel1').DataTable({
                serverside: true,
                responseive: true,
                ajax: {
                    url: "{{ route('data') }}"
                },
                columns: [{
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1
                        }
                    },
                    {
                        data: 'projectname',
                        name: 'projectname'
                    },
                    {
                        data: 'buildingnumber',
                        name: 'buildingnumber'
                    },
                    {
                        data: 'coordinates',
                        name: 'coordinates'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
        }
    </script>

@endpush
