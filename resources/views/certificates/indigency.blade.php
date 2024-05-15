    
@extends('layouts.app')
@section('title','Barangay Clearance')

@section('content')

<div class="container">
@foreach ($cert as $data)


    <!-- Page Wrapper -->
    <div class="">
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid" id="app">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col" style="margin-left: -222px;">
                        <h3 class="page-title">Certificate</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a> Home </a></li></li>
                            <li class="breadcrumb-item active">Barangay Indigency</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white" style="color: red"><i>PDF</a></button>
                            <button class="btn btn-white" style="color: blue"><i> Print</a></button>
                        </div>
                    </div>
                </div>
           
            <div class="row" style="margin-left: -240px;">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="payslip-title" style="font-weight:bolder; font-family: 'Time New Roman', Times, serif">
                                <br>
                                <h6>Republic of the Philippines </h6>
                                <h6>Province of Camarines Sur </h6>
                                <h6>Municipality of Magarao</h6>
                                <h4>BARANGAY SAN FRANCISCO</h4>
                                <h5>OFFICE OF THE PUNONG BARANGAY</h4>
                            </div>
                            
                            <hr style="position:absolute; top:185px; right:50px; left:50px; width:60%; height:1px; border: 1px solid black; background-color:black;">

                            <img src="{{ URL::to('assets/images/Logo1.jpg') }}" height="150px" style="margin-top:-175px; margin-left:150px; float:left; ">
                            <img src="{{ URL::to('assets/images/Logo2.png') }}" height="150px" style="margin-top:-175px; margin-right:150px; float:right;">
                            
                           
                            <br>
                            <br>
                            <br>
                            
                            <div class="payslip-title" style="font-weight:bolder; font-family: 'Arial', Times, serif" >

                                <h3>Certificate of Indigency</h3>
                            </div>

                            <div class="body" style="z-index:999;">
                                <div class="" style="left:50px; margin-left:160px; margin-right:150px;">
                                    <br>
                                    <br>
                                    <p>To whom it may concern:</p></br>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that Mr/Ms. or Mrs. <b>{{ $data->resident->firstname}} {{ $data->resident->middlename}} {{ $data->resident->lastname}}</b> of legal age presently residing at 
                                        <b>{{ $data->resident->barangay->barangay }} Barangay San Francisco</b>, is a bonafide resident of Barangay San Francisco, Magarao Camarines Sur </p>
                                    
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            @if($data->resident->gender == 1) He @else She @endif is know to be a person of good moral charac                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   