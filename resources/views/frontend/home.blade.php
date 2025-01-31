
      <!-- Sidebar -->
     @include('frontend.common.sidebar')
      <!-- End Sidebar -->
        
        @include('frontend.common.navbar')

        <div class="container">
          <div class="page-inner">
            <div
              class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
            >
              <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">HR Admin Panel</h6>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="/project-form" class="btn btn-primary btn-round">Add Projects</a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-primary bubble-shadow-small"
                        >
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Projects</p>
                          <h4 class="card-title">18</h4>
                          <p class="card-category">2 Completed</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-info bubble-shadow-small"
                        >
                          <i class="fas fa-list"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Active Task</p>
                          <h4 class="card-title">132</h4>
                          <p class="card-category">12 Completed</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-user-friends"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Teams</p>
                          <h4 class="card-title">10</h4>
                          <p class="card-category">1 Completed</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div
                          class="icon-big text-center icon-success bubble-shadow-small"
                        >
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Member</p>
                          <h4 class="card-title">50</h4>
                          <p class="card-category">45 Present</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Active Projects</div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Project Name</th>
                            <th scope="col" class="text-end">Hours</th>
                            <th scope="col" class="text-end">Priority</th>
                            <th scope="col" class="text-end">Assing To</th>
                            <th scope="col" class="text-end">Manager Name</th>
                            <th scope="col" class="text-end">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                          <tr>
                            <th scope="row">
                            {{$item->pname}}
                            </th>
                            <td class="text-end">{{$item->hours}}</td>
                            <td class="text-end">
                              <span class="badge badge-danger">{{$item->priority}}</span>
                            </td>
                            <td class="text-end">{{$item->assign}}</td>
                            <td class="text-end">{{$item->mangername}}</td>
                            <td class="text-end">
                              <span class="badge badge-success">{{$item->status}}</span>
                            </td>
                          </tr>
                          @empty
                          <tr><td colspan="5">No data available</td></tr>
                          @endforelse                      
                        </tbody>
                      </table>
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
                      <div class="card-title">Project Chart</div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                      <canvas id="pieChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-md-4">
                <div class="card card-round">
                  <div class="card-body">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Present Members</div>
                    </div>
                    <div class="card-list py-4">
                      <div class="item-list">
                       
                        <div class="info-user ms-3">
                          <div class="username">Jimmy Denis</div>
                          <div class="status">Graphic Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="fas fa-check-square"></i>
                        </button>
                      </div>
                      <div class="item-list">
                        <div class="info-user ms-3">
                          <div class="username">Chandra Felix</div>
                          <div class="status">Sales Promotion</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="fas fa-check-square"></i>
                        </button>
                       
                      </div>
                      <div class="item-list">
                     
                        <div class="info-user ms-3">
                          <div class="username">Talha</div>
                          <div class="status">Front End Designer</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="fas fa-check-square"></i>
                        </button>
                                            </div>
                      <div class="item-list">
                                                <div class="info-user ms-3">
                          <div class="username">Chad</div>
                          <div class="status">CEO Zeleaf</div>
                        </div>
                        <button class="btn btn-icon btn-link op-8 me-1">
                          <i class="fas fa-check-square"></i>
                        </button>
                                            </div>
                    </div>
                  </div>
                </div>
              </div>            
            </div>
          </div>
        </div>

       @include('frontend.common.footer')
      