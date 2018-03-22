@extends('adminlte::page')

@section('title', 'Landmark')

@section('content_header')
    <h1>Employee Register- Step {{$step}}</h1>
@stop

@section('content')

<div class="row">
	<!-- @if($errors->any())
	  @foreach($errors->all() as $error)
	  <div class="row">
	    <div class="col-sm-5 col-sm-offset-2 alert alert-danger">
	      {{ $error }}
	    </div>
	  </div>
	  @endforeach
	@endif -->

	<div class="col-sm-9   box box-info">
		<div class=" box-header with-border">
		  <h3 class="box-title">Personal Details</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal" method="post" action="{{url($url)}}">
			{{csrf_field()}}
		  <div class="box-body">
		    <div class="form-group has-feedback {{ $errors->has('full_name') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Full Name <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="full_name"  name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" type="text">
		        @if ($errors->has('full_name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('full_name') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
sfs
		    <div class="form-group  has-feedback {{ $errors->has('name_with_initials') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Name with initials <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="name_with_initials"  name="name_with_initials" placeholder="Name with initials"  value="{{ old('name_with_initials') }}"  type="text">
		        @if ($errors->has('name_with_initials'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name_with_initials') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>

		    
		    <div class="form-group  has-feedback {{ $errors->has('adress') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Adress <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="adress"  name="adress" placeholder="Adress" value="{{ old('adress') }}"  type="text">
		        @if ($errors->has('adress'))
		            <span class="help-block">
		                <strong>{{ $errors->first('adress') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>

		    <!-- <div class="form-group   has-feedback {{ $errors->has('') ? 'has-error' : '' }}">
            	<label>Date:</label>

	            <div class="input-group date">
	              <div class="input-group-addon">
	                <i class="fa fa-calendar"></i>
	              </div>
	              <input class="form-control pull-right" id="datepicker" type="text">
	            </div>
	            <!-- /.input group -->
          	<!-- </div> --> 


		    <div class="form-group   has-feedback {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Date of Birth <span class="required" >*</span></label>
		      <div class="col-sm-8" id="date_of_birth1" >
		        <input class="form-control" id="date_of_birth"  name="date_of_birth" placeholder="Date of Birth"  value="{{ old('date_of_birth') }}" type="text">
		        @if ($errors->has('date_of_birth'))
		            <span class="help-block">
		                <strong>{{ $errors->first('date_of_birth') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
			<div class="form-group   has-feedback {{ $errors->has('nic_no') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">NIC No <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="nic_no"  name="nic_no" placeholder="NIC No"  value="{{ old('nic_no') }}" type="text">
		        @if ($errors->has('nic_no'))
		            <span class="help-block">
		                <strong>{{ $errors->first('nic_no') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group  has-feedback {{ $errors->has('mobile_number') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Mobile Number <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="mobile_number"  name="mobile_number" placeholder="Mobile Number"  value="{{ old('mobile_number') }}" type="text">
		        @if ($errors->has('mobile_number'))
		            <span class="help-block">
		                <strong>{{ $errors->first('mobile_number') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group  has-feedback {{ $errors->has('telephone_number') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Contact No of Home <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="telephone_number"  name="telephone_number" placeholder="Contact No of Home"  value="{{ old('telephone_number') }}" type="text">
		        @if ($errors->has('telephone_number'))
		            <span class="help-block">
		                <strong>{{ $errors->first('telephone_number') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group  has-feedback {{ $errors->has('gender') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Gender <span class="required" >*</span></label>
		      <div class="col-sm-8">
	            <div class="radio">
	                <label>
	                  <input name="gender" id="optionsRadios1" value="1" type="radio">
	                  Male
	                </label>
	            </div>
		        <div class="radio">
	                <label>
	                  <input name="gender" id="optionsRadios2" value="0" type="radio">
	                  Female
	                </label>
	            </div>
	            @if ($errors->has('gender'))
	                <span class="help-block">
	                    <strong>{{ $errors->first('gender') }}</strong>
	                </span>
	            @endif
		      </div>
		    </div>
		    <!-- <div class="form-group">
		      <label  class="col-sm-2 control-label">Which Period</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="worked_period"  name="worked_period" placeholder="Which Period (if applicable)" type="text">
		      </div>
		    </div>
			
			<div class="form-group">
		      <label  class="col-sm-2 control-label">Labour Category</label>
		      <div class="col-sm-8">
                  <select name="labour_category" class="form-control">
                    <option value="1">Skilled</option>
                    <option value="0">Unskilled</option>
                  </select>
		      </div>
		    </div> -->

		    <!-- <div class="form-group">
			    <label  class="col-sm-2 control-label">If skilled mark relevant</label>
			    <div class="col-sm-8">
			    	@if(!empty($skills))
			    		@foreach($skills as $skill)
		                  	<div class="checkbox">
			                    <label>
			                      <input type="checkbox" name="skill_list[]" value="{{$skill->id}}">
			                      {{$skill->name}}
			                    </label>
		                  	</div>
                  		@endforeach
                  	@endif
			    </div>
		    </div> -->
			<!-- <div class="form-group">
		      <label  class="col-sm-2 control-label">Expected Rate Per Date</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="expected_rate_per_date"  name="expected_rate_per_date" placeholder="Expected Rate Per Date" type="text">
		      </div>
		    </div>
			 -->
		    


			<!-- <div class="box-header with-border">
			  <h3 class="box-title">Recommended Person Details</h3>
			</div>
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Name</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="contact_person_name"  name="contact_person_name" placeholder="Name" type="text">
		      </div>
		    </div>
			<div class="form-group">
		      <label  class="col-sm-2 control-label">Address</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="contact_person_address"  name="contact_person_address" placeholder="Address" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Contact No</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="contact_no"  name="contact_no" placeholder="Contact No" type="text">
		      </div>
		    </div> -->

			<div class="box-header with-border">
			  <h3 class="box-title">In case of emergency</h3>
			</div>
		    <div class="form-group  has-feedback {{ $errors->has('emergency_contact_name') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Contact Name <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="emergency_contact_name"  name="emergency_contact_name" placeholder="Contact Name"  value="{{ old('emergency_contact_name') }}" type="text">
		        @if ($errors->has('emergency_contact_name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('emergency_contact_name') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
			<div class="form-group  has-feedback {{ $errors->has('emergency_mobile_no') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Mobile <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="emergency_mobile_no"  name="emergency_mobile_no" placeholder="Mobile"  value="{{ old('emergency_mobile_no') }}" type="text">
		        @if ($errors->has('emergency_mobile_no'))
		            <span class="help-block">
		                <strong>{{ $errors->first('emergency_mobile_no') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group  has-feedback {{ $errors->has('emergency_home_tp_no') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Home <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="emergency_home_tp_no"  name="emergency_home_tp_no" placeholder="Home"  value="{{ old('emergency_home_tp_no') }}" type="text">
		        @if ($errors->has('emergency_home_tp_no'))
		            <span class="help-block">
		                <strong>{{ $errors->first('emergency_home_tp_no') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		    <div class="form-group  has-feedback {{ $errors->has('relationship') ? 'has-error' : '' }}">
		      <label  class="col-sm-2 control-label">Relationship <span class="required" >*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" id="relationship"  name="relationship" placeholder="Relationship"  value="{{ old('relationship') }}" type="text">
		        @if ($errors->has('relationship'))
		            <span class="help-block">
		                <strong>{{ $errors->first('relationship') }}</strong>
		            </span>
		        @endif
		      </div>
		    </div>
		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer col-sm-1 col-sm-offset-9">
		    <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
		    <input type="hidden" name="step" value="1" />
		    <button type="submit" align="center" class="btn btn-primary" >Next</button>
		  </div>
		  <!-- /.box-footer -->
		</form>
	</div>
	
</div>
<script type="text/javascript">
	  $(function(){
	    $("#date_of_birth").datepicker({ format: 'yyyy-mm-dd' });
	  });
</script>
@stop