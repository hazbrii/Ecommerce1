@extends('admin.layouts.app')
@section('title')Orders @endsection
@section('content')

      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Customers</h3>
          <h6 class="op-7 mb-2">You can manage your Customers here </h6>
        </div>
        <!-- <div class="ms-md-auto py-2 py-md-0">
          <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
          <a href="#" class="btn btn-primary btn-round">Add Customer</a>
        </div> -->
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
                    <p class="card-category">Customers</p>
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
                    <p class="card-category">Active Customers</p>
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
                <div class="card-title">Clients Statistics</div>
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
              <div class="chart-container">
                  <canvas id="barChart"></canvas>
              </div>
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
                @foreach($clients->take(5) as $client)
                <div class="item-list">
                  <div class="avatar">
                    <a href="{{route('clients.show',$client)}}">
                    <img
                      src="{{asset('assets/images/icons/profile.webp')}}"
                      alt="..."
                      class="avatar-img rounded-circle"
                    />
                    </a>
                  </div>
                  <div class="info-user ms-3">
                    <div class="username">{{$client->fullname}}</div>
                    <div class="status">{{$client->phone_number}}</div>
                    <div class="status">{{$client->email}}</div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Customers informations</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="basic-datatables"
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
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($clients->whereNotNull('email_verified_at') as $client )
                      <tr>
                        <td><a href="{{route('clients.show',$client)}}">#{{$client->id}}</a></td>
                        <td>{{$client->fullname}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->phone_number}}</td>
                        <td>{{$client->gouvernorat}}, {{$client->address}}</td>
                        <td>{{$client->created_at}}</td>
                        <td>
                          @if($client->email_verified_at!=NULL) 
                            <span class="badge badge-success">verified</span>
                          @else
                            <span class="badge badge-danger">unverified</span>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
   <script>
      var barChart = document.getElementById("barChart").getContext("2d");
      var myBarChart = new Chart(barChart, {
        type: "bar",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Orders",
              backgroundColor: "rgb(23, 125, 255)",
              borderColor: "rgb(23, 125, 255)",
              data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y:{
                beginAtZero:true
            }
          },
        },
      });


   </script>
  @endsection