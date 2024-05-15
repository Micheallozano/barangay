    
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
                    
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group btn-group-sm"> 
                            <button class="btn btn-white" style="color: blue"><a target="_blank"><i> Print</a></button>
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

                                <h3>Barangay Clearance</h3>
                            </div>

                            <div class="body" style="z-index:999;">
                                <div class="" style="left:50px; margin-left:160px; margin-right:150px;">
                                    <br>
                                    <br>
                                    <p>To whom it may concern:</p></br>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to certify that Mr/Ms. or Mrs. <b>{{ $data->resident->firstname}} {{ $data->resident->middlename}} {{ $data->resident->lastname}}</b> of Legal age, is a bonafide resident of this barangay, with postal address at
                                        <b>{{ $data->resident->barangay->barangay }}</b>, Barangay San Francisco, Magarao Camarines Sur and known to me of good moral character.</p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have known him/her to be a law abiding citizen, honest, diligent, and trustworthy. According to records kept in this office
                                        he/she has not been involved  in any illegal activities which tend to overthrow the government nor he/she join any subversive organization.
                                    </p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This certification is hereby issued upon the request of the above subject person in connection to his/her application for:<p>
                                        
                                        </div><br>
                                    <p align="center">
                                        Given this <b>{{ Carbon\Carbon::now()->toFormattedDateString()  }}</b> at Barangay San Francisco, Municipality of Magarao, Camarines Sur</p>
                                    <p align="center"><b>NOT VALID WITHOUT THE BARANGAY DRY SEAL</b></p>
                                        
                                        <br>
                                            <div class="" style="margin-left:155px; margin-right:200px; margin-top:10px; ">
                                                <p>Prepared by:</p>

                                                
                                            </div> 
                                            <br>
                                            <div style="margin-left:155px;">
                                                <h6><b> __________________________</b></h6>
                                                <h6><b>Vivian Mae Cea</b></h6>
                                                <h6>Barangay Secretary</h6>
                                            </div>

                                            <div class="" style="margin-top:-150px; margin-right:210px; float:right;">
                                                <p>Attested:</p>

                                                
                                            </div> 
                                            <br>
                                            <div style="margin-top:-105px; margin-right:160px; float:right; ">
                                                <h6><b> __________________________</b></h6>
                                                <h6><b>Baltazar Crescini</b></h6>
                                                <h6>Punong Barangay</h6>
                                            </div>
                                            <br>
                                            <br>
                                            <div style="margin-left:155px;">
                                                <h6><b>Comm. Tax Cert. No.: __________________________</b></h6>
                                                <h6><b>Date Issued: <b style="text-decoration: underline;">{{ Carbon\Carbon::now()->toFormattedDateString()  }}</b></h6>
                                                <h6><b>Paid under OR No.: __________________________</b></h6>
                                            </div>
                                            

                                            
                                    </div>
                              
                            </div>
                               
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
    @endforeach
    </div>
   
    
@endsection
