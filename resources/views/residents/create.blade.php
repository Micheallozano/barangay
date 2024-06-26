
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background:#ffffff;color:rgb(0, 0, 0)">
            <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Arial', Times, serif">Brgy San Francisco Monitoring</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color:#000000">&times;</span>
            </button>
        </div> 

        <div class="modal-body">
            <div class="panel panel-default">               
                <div class="panel-body">
                    <form method="POST" action="{{ route('residents.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="" style="padding:10px; background:#252525; color:white;">
                            Residents<span style="color:red;"> *</span>
                        </div>
                       </div>
                       <br>
                        <div class="row">
                            <div class="col-md-4">
                                <h6>Lastname<span style="color:red;">*</span></h6>
                                <input id="lastname" type="text" class="form-control" 
                                onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 45))' 
                                name="lastname" value="{{ old('lastname') }}" required placeholder="Lastname">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <h6>Firstname<span style="color:red;">*</span></h6>
                                <input id="firstname" type="text" class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 45))' 
                                name="firstname" value="{{ old('firstname') }}" required placeholder="Firstname">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <h6>Middlename<span style="color:red;">*</span></h6>
                                <input id="middlename" type="text" class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32) || (event.charCode == 45))' 
                                name="middlename" value="{{ old('middlename') }}" placeholder="Middlename">

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <h6>Suffix<span style="color:red;">*</span></h6>
                                <input id="suffix" type="text" class="form-control" 
                                onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' 
                                name="suffix" value="{{ old('suffix') }}" placeholder="Suffix">

                                @if ($errors->has('suffix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suffix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-4">
                                <h6>Birth Date<span style="color:red;">*</span></h6>
                                <input id="birth_date" type="date" class="form-control" name="birth_date" value="{{ old('date') }}" 
                                max="@php $today= date('Y-m-d');echo $today; @endphp" required placeholder="Birth Date">

                                @if ($errors->has('birth_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                            <div class="col-md-4">
                                <h6>Gender<span style="color:red;">*</span></h6>
                                <select  id="gender" name="gender" class="form-control" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="MALE">Male</option>
                                    <option value="FEMALE">Female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <h6>Marital Status<span style="color:red;">*</span></h6>
                                <select  id="marital_status" name="marital_status" class="form-control" required>
                                    <option value="" disabled selected>Select Marital Status</option>
                                    <option value="SINGLE">Single</option>
                                    <option value="MARRIED">Married</option>
                                    <option value="WIDOWED">Widowed</option>
                                    <option value="DIVORCED">Divorced</option>
                                    <option value="COMMON LAW/ LIVE-IN">Common Law/ Live-in</option>
                                    <option value="UNKNOWN">Unknown</option>
                                </select>

                                @if ($errors->has('marital_status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marital_status') }}</strong>
                                    </span>
                                @endif
                            </div>
                                <div class="col-md-4">
                                    <h6>Ethnicity Bloodline<span style="color:red;">*</span></h6>
                                        <select  id="ethnicity" name="ethnicity" class="form-control" required>
                                            <option value="" disabled selected>Select Ethnicity</option>
                                            <option value="ABAKNON">Abaknon</option>
                                            <option value="AGTA">Agta</option>
                                            <option value="AGUTAYNON">Agutaynon</option>
                                            <option value="AKLANON">Aklanon</option>
                                            <option value="ALANGAN">Alangan</option>
                                            <option value="ALTA">Alta</option>
                                            <option value="AMERASIAN">Amerasian</option>
                                            <option value="ATI">Ati</option>
                                            <option value="ATTA">Atta</option>
                                            <option value="AYTA">Ayta</option>
                                            <option value="B'LAAN">B'laan</option>
                                            <option value="BADJAO">Badjao</option>
                                            <option value="BAGOBO">Bagobo</option>
                                            <option value="BALANGAO">Balangao</option>
                                            <option value="BALANGINGI">Balangingi</option>
                                            <option value="BANGON">Bangon</option>
                                            <option value="BANTOANON">Bantoanon</option>
                                            <option value="BANWAON">Banwaon</option>
                                            <option value="BATAL">Batak</option>
                                            <option value="BICOLANO">Bicolano</option>
                                            <option value="BINUKID">Binukid</option>
                                            <option value="BOHOLANO">Boholano</option>
                                            <option value="BOLINAO">Bolinao</option>
                                            <option value="BONTOC">Bontoc</option>
                                            <option value="BUHID">Buhid</option>
                                            <option value="BUTUANON">Butuanon</option>
                                            <option value="CALUYANON">Caluyanon</option>
                                            <option value="CAPIZNON">Capiznon</option>
                                            <option value="CAVITEÑO">Caviteño</option>
                                            <option value="CEBUANO">Cebuano</option>
                                            <option value="COTABATEÑO">Cotabateño</option>
                                            <option value="CUYONON">Cuyonon</option>
                                            <option value="CHINESE FILIPINOS">Chinese Filipinos</option>
                                            <option value="DAVAOEÑO">Davaoeño</option>
                                            <option value="ERMITEÑO">Ermiteño</option>
                                            <option value="GA'DANG">Ga'dang</option>
                                            <option value="GADDANG">Gaddang</option>
                                            <option value="HANUNOO">Hanunoo</option>
                                            <option value="HIGAONON">Higaonon</option>
                                            <option value="IBALOI">Ibaloi</option>
                                            <option value="IBANAG">Ibanag</option>
                                            <option value="IFUGAO">Ifugao</option>
                                            <option value="IKALAHAN">Ikalahan</option>
                                            <option value="ILLANUN">Illanun</option>
                                            <option value="ILOCANO">Ilocano</option>
                                            <option value="ILONGOT">Ilongot</option>
                                            <option value="INDIAN FILIPINOS"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              