@extends('admin.layouts.app')
@section('title')Orders @endsection
@section('content')
<div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Client #{{$client->id}}</h3>
                <h6 class="op-7 mb-2">You can manage your client here </h6>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-6 col-md-3 offset-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row ">
                        <div class="col-5 ">
                            <div class="icon-big text-center">
                                <i class="far fa-check-circle text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                            <p class="card-category">Total Orders</p>
                            <h4 class="card-title">$ 1,345</h4>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-wallet text-success"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category">Revenue</p>
                          <h4 class="card-title">$ 1,345</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                      <div class="card card-round">
                          <div class="card-header">
                              <div class="card-head-row card-tools-still-right">
                              <div class="card-title">Orders History</div>
                              </div>
                          </div>
                          <div class="card-body p-0">
                              <div class="table-responsive">
                              <!-- Projects table -->
                              <table class="table align-items-center mb-0">
                                  <thead class="thead-light">
                                  <tr>
                                      <th scope="col">Payment Number</th>
                                      <th scope="col" class="text-end">Date & Time</th>
                                      <th scope="col" class="text-end">Amount</th>
                                      <th scope="col" class="text-end">Status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      @foreach($orders as $order)
                                      <tr>
                                          <th scope="row">
                                          @if ($order->status == 3) 
                                          <button
                                              class="btn btn-icon btn-round btn-success btn-sm me-2"
                                          >
                                              <i class="fa fa-check" ></i>
                                          </button>
                                          @elseif ($order->status == 5) 
                                          <button
                                              class="btn btn-icon btn-round btn-danger btn-sm me-2"
                                          >
                                              <i class="fa fa-times" ></i>
                                          </button>
                                          @elseif ($order->status == 4) 
                                          <button
                                              class="btn btn-icon btn-round btn-warning btn-sm me-2"
                                          >
                                              <i class="fa fa-exclamation-circle" ></i>
                                          </button>
                                          @else
                                          <button
                                              class="btn btn-icon btn-round btn-primary btn-sm me-2"
                                          >
                                              <i class="fa fa-spinner" ></i>
                                          </button>
                                          @endif
                                          Order #{{$order->id}}
                                          </th>
                                          <td class="text-end">{{$order->created_at}}</td>
                                          <td class="text-end">{{$order->total}} DT</td>
                                          <td class="text-end">
                                          <span 
                                          @if ($order->status == 3) class="badge badge-success"
                                          @elseif ($order->status == 5) class="badge badge-danger"
                                          @elseif ($order->status == 4) class="badge badge-warning"
                                          @else class="badge badge-primary"
                                          @endif>{{$order->getStatusText()}}</span>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card card-round">
                        <div class="card-header">
                          <div class="card-head-row">
                            <div class="card-title">Client Statistics</div>
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
                </div>
                <div class="col-md-4">
                  <div class="card card-post card-round">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="avatar">
                          <img
                            src="{{asset('assets/images/icons/profile.png')}}"
                            alt="..."
                            class="avatar-img rounded-circle"
                          />
                        </div>
                        <div class="info-post ms-2">
                          <p class="card-title">{{$client->fullname}}</p>
                          <p class="date text-muted">Joined : {{$client->created_at}}</p>
                        </div>
                      </div>
                      <div class="separator-solid"></div>
                      <div class="card-list">
                          <div class="item-list d-flex align-items-center">
                              <i class="fa fa-phone text-primary me-2" aria-hidden="true"></i>
                              <span>{{$client->phone_number}}</span>
                          </div>
                          <div class="item-list d-flex align-items-center">
                              <i class="fa fa-envelope  me-2" aria-hidden="true"></i>
                              <span>{{$client->email}}</span>
                          </div>
                          <div class="item-list d-flex align-items-center">
                              <i class="fa fa-address-card me-2" aria-hidden="true"></i>
                              <span>{{$client->gouvernorat}},  {{$client->address}}</span>
                          </div>
                          <div class="item-list d-flex align-items-center">
                              <i class="fa fa-check-circle text-success me-2" aria-hidden="true"></i>
                              <span>{{$client->email_verified_at}}</span>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>    
            </div>
            
          </div>
        </div>
        @endsection