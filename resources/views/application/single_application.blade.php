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
  										<div class="large-12 grid column">
  											<div class="grid_wrap">
  												<h3>Petroleum Business Retail Licence</h3>
  												  <table>
                              <thead>
                                <tr>
                                  <th scope="col">Account</th>
                                  <th scope="col">Due Date</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Period</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td data-label="Account">Visa - 3412</td>
                                  <td data-label="Due Date">04/01/2016</td>
                                  <td data-label="Amount">$1,190</td>
                                  <td data-label="Period">03/01/2016 - 03/31/2016</td>
                                </tr>
                                <tr>
                                  <td scope="row" data-label="Account">Visa - 6076</td>
                                  <td data-label="Due Date">03/01/2016</td>
                                  <td data-label="Amount">$2,443</td>
                                  <td data-label="Period">02/01/2016 - 02/29/2016</td>
                                </tr>
                                <tr>
                                  <td scope="row" data-label="Account">Corporate AMEX</td>
                                  <td data-label="Due Date">03/01/2016</td>
                                  <td data-label="Amount">$1,181</td>
                                  <td data-label="Period">02/01/2016 - 02/29/2016</td>
                                </tr>
                                <tr>
                                  <td scope="row" data-label="Acount">Visa - 3412</td>
                                  <td data-label="Due Date">02/01/2016</td>
                                  <td data-label="Amount">$842</td>
                                  <td data-label="Period">01/01/2016 - 01/31/2016</td>
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
  </div>


@endsection
