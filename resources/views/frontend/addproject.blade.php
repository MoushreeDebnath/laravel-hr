
      <!-- Sidebar -->
      @include('frontend.common.sidebar')
      <!-- End Sidebar -->

        
        @include('frontend.common.navbar')
        <div class="container">
          <div class="page-inner">
            <div class="page-header">
               
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Basic Form</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
              @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Add Project</div>
                  </div>
                  <form action="/add-project" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                            <label for="firstName">Project Name</label>
                            <input
                                type="text"
                                name="pname"
                                class="form-control"
                                id=""
                                placeholder="Enter Project Name"
                            />
                            </div>

                            <div class="form-group">
                            <label>Assign To</label>
                            <input
                                type="text"
                                name="assign"
                                class="form-control"
                                id="email"
                                placeholder="Enter Assign To"
                            />
                            </div>
                           
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                            <label>Total Hours</label>
                            <input
                                type="text"
                                name="hours"
                                class="form-control"
                                id=""
                                placeholder="Enter Total Hours"
                            />
                            </div>
                            <div class="form-group">
                            <label>Status</label>
                            <input
                                type="text"
                                name="status"
                                class="form-control"
                                id=""
                                placeholder="Enter status"
                            />
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                            <label>Project Priority</label>
                            <input
                                type="text"
                                name="priority"
                                class="form-control"
                                id=""
                                placeholder="Enter Project Priority"
                            />
                            </div>
                            <div class="form-group">
                            <label>Manager Name</label>
                            <input
                                type="text"
                                name="mangername"
                                class="form-control"
                                id=""
                                placeholder="Enter Manger Name"
                            />
                            </div>
                          
                        </div>
                        </div>
                    </div>
                    
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                    
                 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     
<footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
             <div class="copyright">
              &2024 - 
              <a href="#">Copywrite</a>
            </div>
          </div>
        </footer>
        </div>

  
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery-3.7.1.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Bootstrap Notify -->
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Kaiadmin JS -->
<script src="assets/js/kaiadmin.min.js"></script>


</body>
</html>

      