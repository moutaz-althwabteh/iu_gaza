@extends('Dashboard.layout');
@section('create')
    {{-- content --}}
    {{-- @include('create') --}}
    <form action="{{ route('store') }}" method="post">

        @csrf

        {{-- project name --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Project Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        {{-- building number --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> building number </label>
            <input type="number" class="form-control" name="buildingnumber" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- coordinates --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> coordinates </label>
            <input type="text" class="form-control" name="coordinate" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        {{-- the owner --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> the owner </label>
            <input type="text" class="form-control" name="theowner" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        {{-- Commissioner --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Commissioner </label>
            <input type="number" class="form-control" name="commissioner" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- Commissioner ID number --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Commissioner ID number </label>
            <input type="number" class="form-control" name="commissioneridnum" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- Commissioner's address --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Commissioner address </label>
            <input type="text" class="form-control" name="commissioneraddress" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- Part number and voucher --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Part number and voucher </label>
            <input type="number" class="form-control" name="partnumber" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- Land area --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Land area </label>
            <input type="number" class="form-control" name="land area" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        {{-- Supervising engineer --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Supervising engineer </label>
            <input type="text" class="form-control" name="supervising engineer" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        {{-- Project type --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Project type </label>
            <select name="projecttype" class="form-control form-control-lg">
                <option>investment</option>
                <option>contracting</option>
            </select>
        </div>

        {{-- starting date --}}
        <div class="input-group date" data-provide="datepicker">
            <label for="exampleInputEmail1"> starting date </label>
            <input type="text" name="startingdate" class="form-control">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div><br>

        {{-- Expiry date --}}
        <div class="input-group date" data-provide="datepicker">
            <label for="exampleInputEmail1"> Expiry date </label>
            <input type="text" name="expirydate" class="form-control">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div><br>


        {{-- Project status --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Project status </label>
            <select name="projectstatus" class="form-control form-control-lg">
                <option>planning</option>
                <option>implementation</option>
                <option>completed</option>
            </select>
        </div>

        {{-- Budget by days --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> Budget by days </label>
            <input type="number" name="budget" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        {{-- the currency --}}
        <div class="form-group">
            <label for="exampleInputEmail1"> the currency </label>
            <select name="currency" class="form-control form-control-lg">
                <option>NIS</option>
                <option>USD </option>
            </select>
        </div>

        {{-- Notes --}}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Notes</label>
            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
