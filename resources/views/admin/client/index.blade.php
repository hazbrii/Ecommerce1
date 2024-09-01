@extends('admin.layouts.app')
@section('title')Orders @endsection
@section('content')
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Clients</h3>
                <h6 class="op-7 mb-2">You can manage your clients here </h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Visitors</p>
                          <h4 class="card-title">1,294</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-user-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Clients</p>
                          <h4 class="card-title">1303</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Active Clients</p>
                          <h4 class="card-title">7</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">User Statistics</div>
                      <div class="card-tools">
                        <a
                          href="#"
                          class="btn btn-label-success btn-round btn-sm me-2"
                        >
                          <span class="btn-label">
                            <i class="fa fa-pencil"></i>
                          </span>
                          Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                          <span class="btn-label">
                            <i class="fa fa-print"></i>
                          </span>
                          Print
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">New Customers</div>
                      <div class="card-tools">
                        <div class="dropdown">
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-list py-4">
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="assets/img/jm_denis.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Jimmy Denis</div>
                          <div class="status">Graphic Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <span
                            class="avatar-title rounded-circle border border-white"
                            >CF</span
                          >
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Chandra Felix</div>
                          <div class="status">Sales Promotion</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="avatar">
                          <img
                            src="assets/img/talha.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-user ms-3">
                          <div class="username">Talha</div>
                          <div class="status">Front End Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="far fa-envelope"></i>
                        </button>
                        <button class="btn btn-icon btn-link btn-danger op-8">
                          <i class="fas fa-ban"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><i class='fa fa-check-circle text-success'></i> Verified clients informations</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                          id="verified-clients-filter"
                          class="display table table-striped table-hover"
                        >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Fullname</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Joined</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Fullname</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Joined</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach($clients->whereNotNull('email_verified_at') as $client )
                            <tr>
                              <td><a href="{{route('clients.show',$client)}}">#{{$client->id}}</a></td>
                              <td>{{$client->fullname}}</td>
                              <td>{{$client->email}}</td>
                              <td>{{$client->phone_number}}</td>
                              <td>{{$client->gouvernorat}}, {{$client->address}}</td>
                              <td>{{$client->created_at}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"><i class='fa fa-exclamation-triangle text-danger' ></i>Unverified clients informations </h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                          id="unverified-clients-filter"
                          class="display table table-striped table-hover"
                        >
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Fullname</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Joined</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>#</th>
                              <th>Fullname</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Joined</th>
                            </tr>
                          </tfoot>
                          <tbody>
                            @foreach($clients->whereNull('email_verified_at') as $client )
                            <tr>
                              <td><a href="{{route('clients.show',$client)}}">#{{$client->id}}</a></td>
                              <td>{{$client->fullname}}</td>
                              <td>{{$client->email}}</td>
                              <td>{{$client->phone_number}}</td>
                              <td>{{$client->gouvernorat}}, {{$client->address}}</td>
                              <td>{{$client->created_at}}</td>
                              <td class='text-center'><button class='btn'><i class='fa fa-trash text-danger'></i></button></td>
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