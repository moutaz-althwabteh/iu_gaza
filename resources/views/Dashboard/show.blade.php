@extends('Dashboard.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">


@endsection

@section('show') 

@if (session()->has('success'))
<div class="alert alert-success">{{session()->get('success')}}</div>
@endif

<div class="card">
    <div class="card-header ui-sortable-handle" style="cursor: move;">
      <h3 class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
        Projects
      </h3>
      <div class="card-tools" style="float: right ; margin-right: -.625rem;margin-top: -5%">
        <ul class="nav nav-pills ml-auto" >
          <li class="nav-item">
            <a class="btn btn-light-primary font-weight-bold" href="{{ url('project/create') }}"  >
                <i class="ki ki-plus icon-md mr-2"></i>Add </a>
          </li>
        </ul>
      </div>
    </div><!-- /.card-header -->
    <div class="card-body">
        
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
    </div><!-- /.card-body -->
  </div>

    
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
