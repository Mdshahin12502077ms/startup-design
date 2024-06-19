 <!-- Spinner Start -->
 <div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner"></div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-dark px-5 d-none d-lg-block">
     <div class="row gx-0">
         <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
             <div class="d-inline-flex align-items-center" style="height: 45px;">
                 <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                 <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                 <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
             </div>
         </div>
         <div class="col-lg-4 text-center text-lg-end">
             <div class="d-inline-flex align-items-center" style="height: 45px;">
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                         class="fab fa-twitter fw-normal"></i></a>
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                         class="fab fa-facebook-f fw-normal"></i></a>
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                         class="fab fa-linkedin-in fw-normal"></i></a>
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                         class="fab fa-instagram fw-normal"></i></a>
                 <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                         class="fab fa-youtube fw-normal"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->


 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
         <a href="{{ url('/') }}" class="navbar-brand p-0">
             <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                     <div class="dropdown-menu m-0">
                         <a href="{{ url('Home/about') }}"
                             class="dropdown-item{{ Request::is('Home/about') ? 'active' : '' }}">History</a>
                         <a href="feature.html" class="dropdown-item">Mission & Vision</a>
                         <a href="team.html" class="dropdown-item">Work Process</a>

                     </div>
                 </div>
                 <a href="{{ url('Home/client') }}"
                     class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Client</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                     <div class="dropdown-menu m-0">
                         <a href="{{ url('service/soft_dev') }}"
                             class="dropdown-item{{ Request::is('service/soft_dev') ? 'active' : '' }}">Software Development</a>
                         <a href="{{ url('service/web_dev') }}" class="dropdown-item{{ Request::is('service/web_dev') ? 'active' : '' }}">Website Development</a>
                         <a href="{{ url('service/app_dev') }}" class="dropdown-item{{ Request::is('service/app_dev') ? 'active' : '' }}">Apps Development</a>
                         <a href="{{ url('service/buss_dev') }}" class="dropdown-item{{ Request::is('service/buss_dev') ? 'active' : '' }}">Business Automation</a>
                         <a href="{{ url('service/application_dev')}}" class="dropdown-item{{ Request::is('service/application_dev') ? 'active' : '' }}">Application Maintenance</a>
                         <a href="{{ url('service/consult_dev') }}" class="dropdown-item{{ Request::is('service/consult_dev') ? 'active' : '' }}">Consultancy</a>

                     </div>
                 </div>

                 <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                    <div class="dropdown-menu m-0">
                     
                        <a href="{{ url('product/ERP') }}" class="dropdown-item{{ Request::is('service/web_dev') ? 'active' : '' }}">Enterprise Resource Planning (ERP)</a>
                        <a href="{{ url('service/app_dev') }}" class="dropdown-item{{ Request::is('service/app_dev') ? 'active' : '' }}">Ecommerce Website</a>
                        <a href="{{ url('service/buss_dev') }}" class="dropdown-item{{ Request::is('service/buss_dev') ? 'active' : '' }}">Filling Station Management System</a>
                        <a href="{{ url('service/application_dev')}}" class="dropdown-item{{ Request::is('service/application_dev') ? 'active' : '' }}">School Management System</a>
                        <a href="{{ url('service/consult_dev') }}" class="dropdown-item{{ Request::is('service/consult_dev') ? 'active' : '' }}">Inventory Management System</a>

                        <a href="{{ url('service/web_dev') }}" class="dropdown-item{{ Request::is('service/web_dev') ? 'active' : '' }}">LC Management System</a>
                        <a href="{{ url('service/app_dev') }}" class="dropdown-item{{ Request::is('service/app_dev') ? 'active' : '' }}">Auto Rice Mill Management System</a>
                        <a href="{{ url('service/buss_dev') }}" class="dropdown-item{{ Request::is('service/buss_dev') ? 'active' : '' }}">HR & Payroll</a>
                        <a href="{{ url('service/application_dev')}}" class="dropdown-item{{ Request::is('service/application_dev') ? 'active' : '' }}">Hospital Management System</a>
                        <a href="{{ url('service/consult_dev') }}" class="dropdown-item{{ Request::is('service/consult_dev') ? 'active' : '' }}">Booking Mangement System</a>
                        <a href="{{ url('service/consult_dev') }}" class="dropdown-item{{ Request::is('service/consult_dev') ? 'active' : '' }}">Any type of website</a>
                    </div>
                </div>

                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                     <div class="dropdown-menu m-0">
                         <a href="{{ url('Home/blog') }}"
                             class="dropdown-item{{ Request::is('Home/blog') ? 'active' : '' }}">Blog Grid</a>
                         <a href="detail.html" class="dropdown-item">Blog Detail</a>
                     </div>
                 </div>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu m-0">
                         <a href="price.html" class="dropdown-item">Pricing Plan</a>
                         <a href="feature.html" class="dropdown-item">Our features</a>
                         <a href="team.html" class="dropdown-item">Team Members</a>
                         <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                         <a href="quote.html" class="dropdown-item">Free Quote</a>
                     </div>
                 </div>
                 <a href="{{ url('Home/contact') }}"
                     class="nav-item nav-link {{ Request::is('Home/contact') ? 'active' : '' }}">Contact</a>
             </div>
             <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                 data-bs-target="#searchModal">
                 <i class="fa fa-search"></i>
             </butaton>
             <a href="https://htmlcodex.com/startup-company-website-template"
                 class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
         </div>
     </nav>


     <!-- Navbar & Carousel End -->
