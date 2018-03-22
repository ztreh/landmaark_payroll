@extends('adminlte::page')

@section('title', 'Landmark')

@section('content_header')
    <h1>Employee Register- Step {{$step}}</h1>
@stop

@section('content')
<div class="row">
	@if($errors->any())
	  @foreach($errors->all() as $error)
	    <div class="alert alert-danger">
	      {{ $error }}
	    </div>
	  @endforeach
	@endif

	<div class="col-sm-9   box box-info">
		<div class=" box-header with-border">
		  <h3 class="box-title">Employee Details</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form class="form-horizontal" method="post" action="{{url($url)}}">
			{{csrf_field()}}
		  <div class="box-body">
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Designation</label>
		      <div class="col-sm-8">
		      	@if(!empty($designations))
				    <select name="employee_type_id" class="form-control">
			      		@foreach($designations as $designation)
			                <option value="{{$designation->id}}">{{$designation->name}}</option>
			      		@endforeach
		            </select>
		      	@endif
		        
		      </div>
		    </div>
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Finger Print ID</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="finger_print_id"  name="finger_print_id" placeholder="Finger Print ID" type="text">
		      </div>
		    </div>
		    
		    <div class="box-header with-border">
			  <h3 class="box-title">Salary Details</h3>
			</div>
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Salary Type</label>
		      <div class="col-sm-8">
        		    <select name="salary_type" class="form-control">
        	            <option value="0">Monthly</option>
        	            <option value="1">Daily</option>
                    </select>
		      </div>
		    </div>
		   	<div class="form-group">
		      <label  class="col-sm-2 control-label">Amount</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="amounts"  name="amount" placeholder="Amount" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label  class="col-sm-2 control-label">Efective Date</label>
		      <div class="col-sm-8">
		        <input class="form-control" id="effective_date"  name="effective_date" placeholder="Efective Date" type="text">
		      </div>
		    </div>
			
			

		  </div>
		  <!-- /.box-body -->
		  <div class="box-footer col-sm-1 col-sm-offset-9">
		    <input type="hidden" name="human_id" value="{{$human_id}}" />
		    <input type="hidden" name="step" value="{{$step}}" />
		    <button type="submit" align="center" class="btn btn-primary" >Next</button>
		  </div>
		  <!-- /.box-footer -->
		</form>
	</div>
	
</div>
@stop