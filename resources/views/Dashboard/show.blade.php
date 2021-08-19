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
                <th>the owner of real estate</th>
                <th>action</th>
                

            </tr>
        </thead>
        <tbody>
         
        </tbody>


    </table>
@endsection

@push('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(function() {

            var table = $('#tabel1').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('data') }}",
                columns: [{
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
                        data: 'theowner',
                        name: 'theowner'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });

       
    </script>

@endpush
