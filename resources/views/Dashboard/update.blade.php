@extends('Dashboard.layout')
@section('update')


<form action="{{ route('update',$project->id) }}" method="post">

    @csrf
    {{-- @method('PATCH') --}}
    
    {{-- project name --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Project Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->projectname}}" >
        @error('name')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- building number --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> building number </label>
        <input type="number" class="form-control" name="buildingnumber" id="exampleInputEmail1"
            aria-describedby="emailHelp" value="{{$project->buildingnumber}}">
        @error('buildingnumber')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- coordinates --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> coordinates </label>
        <input type="text" class="form-control" name="coordinate" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$project->coordinates}}">
        @error('coordinate')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- the owner --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> the owner </label>
        <input type="text" value="{{$project->theowner}}" class="form-control" name="theowner" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('theowner')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Commissioner --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Commissioner </label>
        <input type="number" value="{{$project->Commissioner}}" class="form-control" name="commissioner" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('commissioner')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Commissioner ID number --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Commissioner ID number </label>
        <input type="number" value="{{$project->CommissionerID}}" class="form-control" name="commissioneridnum" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('commissioneridnum')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Commissioner's address --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Commissioner address </label>
        <input type="text" value="{{$project->CommissionerAddress}}" class="form-control" name="commissioneraddress" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('commissioneraddress')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Part number and voucher --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Part number and voucher </label>
        <input type="number" value="{{$project->PartNumber}}" class="form-control" name="partnumber" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('partnumber')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Land area --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Land area </label>
        <input type="number" value="{{$project->LandArea}}" class="form-control" name="landarea" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('landarea')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Supervising engineer --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Supervising engineer </label>
        <input type="text" value="{{$project->SupervisingEngineer}}" class="form-control" name="supervisingengineer" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        @error('supervisingengineer')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Project type --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Project type </label>
        <select name="projecttype"  value="{{$project->ProjectType}}" class="form-control form-control-lg">
            <option>investment</option>
            <option>contracting</option>
        </select>
        @error('projecttype')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- starting date --}}
    <div class="input-group date" data-provide="datepicker">
        <label for="exampleInputEmail1"> starting date </label>
        <input type="text" value="{{$project->startingDate}}" name="startingdate" class="form-control">
        @error('startingdate')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div><br>

    {{-- Expiry date --}}
    <div class="input-group date" data-provide="datepicker">
        <label for="exampleInputEmail1"> Expiry date </label>

        <input type="text" value="{{$project->ExpiryDate}}" name="expirydate" class="form-control">
        @error('expirydate')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div><br>


    {{-- Project status --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Project status </label>
        <select name="projectstatus" value="{{$project->ProjectStatus}}" class="form-control form-control-lg">
            <option>planning</option>
            <option>implementation</option>
            <option>completed</option>
        </select>
        @error('projectstatus')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Budget by days --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> Budget by days </label>
        <input type="number" value="{{$project->BudgetBydays}}" name="budget" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('budget')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- the currency --}}
    <div class="form-group">
        <label for="exampleInputEmail1"> the currency </label>
        <select name="currency" value="{{$project->theCurrency}}" class="form-control form-control-lg">
            <option>NIS</option>
            <option>USD </option>
        </select>
        @error('currency')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{-- Notes --}}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Notes</label>
        <textarea class="form-control" value="{{$project->Notes}}" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('notes')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
    
@endsection