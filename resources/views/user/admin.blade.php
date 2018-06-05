@extends('layouts.admin')
@section('title', 'County Government of Kisumu')
@section('content')

<div class=" left_margin clearfix">
    <div class="breadcrumb_wrap">
      <div class="breadcrumb clearfix">
        <div class="column crumb large-7">
          <span class="static"><i class="fa fa-home" aria-hidden="true"></i></span>
          <span>Dashboard</span>
          <span class="active">Services</span>
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
										<div class="column large-12">
											<table>
											  <caption>Administrator users</caption>
                        <h3>{{ $result->total() }} {{ str_plural('User', $result->count()) }} </h3>

											  <thead>
                          <tr>
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role</th>
                              <th>Created At</th>
                              @can('edit_users', 'delete_users')
                              <th class="text-center">Actions</th>
                              @endcan
                          </tr>
											  </thead>
											  <tbody>
                          @foreach($result as $item)
                              <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->email }}</td>
                                  <td>{{ $item->roles->implode('name', ', ') }}</td>
                                  <td>{{ $item->created_at->toFormattedDateString() }}</td>

                                  @can('edit_users')
                                  <td class="text-center">
                                      @include('shared._actions', [
                                          'entity' => 'users',
                                          'id' => $item->id
                                      ])
                                  </td>
                                  @endcan
                              </tr>
                          @endforeach

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
