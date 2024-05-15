@extends('layouts.app')
@section('title','Add Certificate | B.D.P.I.S.')

@section('content')

<section class="content-header">
    <h1 class="page-title">Certificate Request</h1>
</section>
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a href={!! route('home') !!}> Home </a></li>
    <li class="breadcrumb-item"><a href={!! route('residents.index') !!}> Residents </a></li>
    <li class="breadcrumb-item active">Certificate</li>
</ul>

<form action="{{ route('certificates.store') }}" method="POST">                       
    @csrf
  <input type="text" name="resident_id" value="{{ $resident->id }}" style="display: none;">
   <div class="row">
       <div class="col-md-4">
           <input id="name1" type="text" class="form-control" name="name1" value="{{ $resident->firstname }} {{ $resident->lastname }} {{ $resident->middlename }}" required placeholder="Lastname, Firstname, Middlename, Suffix">

       </div>
   
       <div class="col-md-4">
           <input id="birth_date2" type="date" class="form-control" name="birth_date2" value="{{ $resident->birth_date}}" 
           max="@php $today= date('Y-m-d');echo $today; @endphp" required placeholder="Birth Date">

       </div>
   
        <div class="col-md-4">
            <input type="text" name="age" class="form-control" value="{{ \Carbon\Carbon::parse($resident->birth_date)->age }}" >
        </div>
   </div>

   <br>

   <div class="row">

       <div class="col-md-4">
           <select  id="gender2" name="gender2" class="form-control" required>
               <option value="" disabled selected>Select Gender</option>
               <option value="M" {{ $resident->gender == 'M' ? "selected" : '' }}>Male</option>
               <option value="F" {{ $resident->gender == 'F' ? "selected" : '' }}>Female</option>
           </select>

       </div>
       <div class="col-md-4">
           <input id="phone_number2" type="text" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" 
           name="phone_number2" value="{{ old('phone_number2') }}" placeholder="(09xxxxxxxxx)">

           @if ($errors->has('phone_number2'))
               <span class="help-block">
                   <strong>{{ $errors->first('phone_number2') }}</strong>
               </span>
           @endif
       </div>
      
        <div class="col-md-4">

           
                 <input type="text" id="barangay" name="barangay"  class="form-control" value="{{$resident->barangay->barangay}}" required placeholder="Zone" >
          
           
        </div>
 
   </div>
   <br>
   <div class="row">
       <div class="col-md-4">
           <input id="purpose" type="text" class="form-control" 
           onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 45))' 
           name="purpose" value="{{ old('purpose') }}" required placeholder="Purpose">

           @if ($errors->has('purpose'))
               <span class="help-block">
                   <strong>{{ $errors->first('purpose') }}</strong>
               </span>
           @endif
       </div>
       <div class="col-md-4">
           <input id="quantity" type="text" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" 
           name="quantity" value="{{ old('quantity') }}" placeholder="Quantity">

           @if ($errors->has('quantity'))
               <span class="help-block">
                   <strong>{{ $errors->first('quantity') }}</strong>
               </span>
           @endif
       </div>
       <div class="col-md-4">
           <select  id="type" name="type" class="form-control" required>
               <option value="" disabled selected>Type of Certificates</option>
               <option value="Business Permit">Business Permit</option>
               <option value="Barangay Clearance">Barangay Clearance</option>
               <option value="Certificate Indigency">Certificate Indigency</option>
           </select>

           @if ($errors->has('type'))
               <span class="help-block">
                   <strong>{{ $errors->first('type') }}</strong>
               </span>
           @endif
       </div>

</div>
<br>
<div class="modal-footer">
<a href="{{ route('residents.index', $resident->id) }}"class="btn btn-warning btn-m"><i class='bx bx-arrow-back'></i>Back</a>
<button type="sumbit" class="btn btn-primary">Submit</button>
</div>
</form>
@endsection