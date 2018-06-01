@extends('layouts.admin')
@section('title', 'County Government of Kisumu')
@section('content')

<div class=" left_margin clearfix">
<div class="breadcrumb_wrap">
  <div class="breadcrumb clearfix">
    <div class="column crumb large-7">
      <span class="static"><i class="fa fa-home" aria-hidden="true"></i></span>
      <span>Dashboard</span>
      <span class="active">My Application</span>
    </div>
  </div>
</div>
<div class="column large-12 content_wrap clearfix">
  <div class="column large-12">
    <div class="report_analysis clearfix">
      <div class="row clearfix">
        <div class="partners clearfix">

          <div class="column large-4">
            <img src="images/logo.png" class="expand" />
          </div>
          <div class="column title_county large-4">
            <h2>county government of kisumu</h2>
            <h3>E-Licensing</h3>
          </div>
          <div class="columns_right">
            <img src="images/erc.png" class="expand" />
          </div>
        </div>
        <div class="licence clearfix">
          <div class="column large-12">
            <table>
              <caption>manage payments</caption>

              <thead>
                <tr>
                  <th scope="col">receipt no.</th>
                  <th scope="col">amount</th>
                  <th scope="col">transaction status</th>
                  <th scope="col">Phone Number</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td data-label="Account">LITOGEYARY</td>
                  <td data-label="Amount">Kes. 1,190</td>
                  <td data-label="Due Date">Completed</td>
                  <td data-label="Period">0722 66 77 88</td>
                </tr>
                <tr>
                 <td data-label="Account">LITOGEYARY</td>
                 <td data-label="Amount">Kes. 1,190</td>
                 <td data-label="Due Date">Completed</td>
                 <td data-label="Period">0722 66 77 88</td>
               </tr>
               <tr>
                 <td data-label="Account">LITOGEYARY</td>
                 <td data-label="Amount">Kes. 1,190</td>
                 <td data-label="Due Date">Completed</td>
                 <td data-label="Period">0722 66 77 88</td>
               </tr>
               <tr>
                <td data-label="Account">LITOGEYARY</td>
                <td data-label="Amount">Kes. 1,190</td>
                <td data-label="Due Date">Completed</td>
                <td data-label="Period">0722 66 77 88</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
