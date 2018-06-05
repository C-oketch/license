@extends('layouts.user')
@section('title', 'County Government of Kisumu')
@section('content')

<div class=" left_margin clearfix">
    <div class="breadcrumb_wrap">
      <div class="breadcrumb clearfix">
        <div class="column crumb large-7">
          <span class="static"><i class="fa fa-home" aria-hidden="true"></i></span>
          <span>Dashboard</span>
          <span class="active">Services </span>
        </div>
      </div>
    </div>
    <div class="column large-12 content_wrap clearfix">
      <div class="column large-12">
        <div class="report_analysis clearfix">
          <div class="row clearfix">
            <div class="partners clearfix">
              <div class="partners_wrap clearfix">
                <div class="column large-4">
                  <img src="{{asset('images/logo.png')}}" class="expand" />
                </div>
                <div class="column title_county large-4">
                  <h2>county government of kisumu</h2>
                  <h3>E-Licensing</h3>
                </div>
                <div class="columns_right">
                  <img src="images/erc.png" class="expand" />
                </div>
              </div>
            </div>



            <div class="licence clearfix">
  										<div class="large-12 header_inner column">
                        <div class="success message">
  												<p>Submitted Successfully</p>
  											</div>
                        <div class="error message">
  												<p>Error submitting your application</p>
  											</div>
  											<div class="grid_wrap">
  												<h2>Petroleum Business Retail Licence Application Form (Except LPG). <span>Fill in all the fields in the form below</span></h2>
  											</div>
  										</div>
  										<div class="clearfix App_form column large-12">
  											<form action="">
  												<!-- <div class="large-12 form-group clearfix">
  													<div class="large-12 column  clearfix"><h3>Basic Details</h3></div>
  												</div> -->
  												<div class="large-12 form-group clearfix">
  													<div class="large-4 grid column">
  															<label>Business Number</label>
  															<input type="text" placeholder="Enter Business Number" />
  													</div>
  													<div class="large-4 grid column">
  															<label>Name of the Retail Outlet</label>
  															<input type="text" placeholder="Enter Name of the Retail Outlet" />
  													</div>
  													<div class="large-4 grid column">
  															<label>Name of the Operator</label>
  															<input type="text" placeholder="Enter Name of the Operator" />
  													</div>
  												</div>
  												<!-- <div class="large-12 form-group clearfix">
  													<div class="large-12 column  clearfix"><h3>Contact Details</h3></div>
  												</div> -->
  												<div class="large-12 form-group clearfix">
  													<div class="large-4 grid column">
  															<label>Postal Address</label>
  															<input type="text" placeholder="Enter Postal Address<" />
  													</div>
  													<div class="large-4 grid column">
  															<label>Telephone Number</label>
  															<input type="text" placeholder="Enter Telephone Number" />
  													</div>
  													<div class="large-4 grid column">
  															<label>Email Address</label>
  															<input type="text" placeholder="Email Address" />
  													</div>
  												</div>
  												<div class="large-12 form-group clearfix">
  													<div class="large-4 grid column">
  															<label>Location</label>
  															<input type="text" placeholder="Enter Location" />
  													</div>
  												</div>
  												<div class="large-12 form-group clearfix">
  													<div class="large-12 column  clearfix"><h3>Upload Required documents</h3></div>
  													<div class="docs large-12 column">
  														<ul>
  															<li>Copy of a Single Business Permit (for petrol stations)</li>
  															<li>Copy of a construction permit issued by the Commission (for all stations constructed after 2015)</li>
  															<li>Copy of a valid fire clearance certificate from the Chief Fire Officer (for petrol stations)</li>
  															<li>Evidence of submission of an annual self-environmental audit report to the National Environment   Management Authority (for all existing petrol stations)</li>
  															<li>Attach a copy of a valid Effluent Discharge Licence (EDL) from NEMA</li>
  															<li>Attach a copy of a valid workplace registration Certificate from the Directorate of Occupational Safety and Health Services.</li>
  															<li>Copies of valid annual calibration certificates for the petroleum dispensers issued by the Department of Weights  and Measures (for all petroleum dispensing stations)</li>
  														</ul>
  													</div>
  												</div>
  												<div class="large-12 form-group clearfix">
  													<div class="large-3 grid column final_sub">
  															<input type="submit" value="Submit Application" />
  													</div>
  													<div class="large-2 grid column final_save">
  															<input type="submit" value="Save" />
  													</div>
  												</div>
  											</form>
  										</div>
  									</div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
