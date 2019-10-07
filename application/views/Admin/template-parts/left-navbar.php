<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url(); ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
    </a>
    <?php $this->load->view('Admin/template-parts/user-menu.php'); ?>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="./index.html">
              <img src="<?php echo base_url(); ?>assets/img/brand/blue.png">
            </a>
          </div>
        </div>
      </div>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>        
      </ul>
      <hr class="my-3">
      <a href="<?php echo base_url(); ?>admin/rooms"><h6 class="navbar-heading text-muted"> Room Management</h6></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/rooms">
            <i class="ni ni-single-02 text-yellow"></i> Room/Accommodation Types</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/rooms/accommodation/create">
            <i class="ni ni-single-02 text-yellow"></i> Add Room Types
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/rooms/create">
            <i class="ni ni-single-02 text-yellow"></i> Add Rooms
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/rooms/all">
            <i class="ni ni-single-02 text-yellow"></i> All Rooms
          </a>
        </li>
      </ul>
      <hr class="my-3">
      <a href="<?php echo base_url(); ?>admin/bookings"><h6 class="navbar-heading text-muted"> Booking Management</h6></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/bookings/create">
            <i class="ni ni-single-02 text-yellow"></i> New Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/bookings">
            <i class="ni ni-single-02 text-yellow"></i> Booking Calendar</a>
        </li>
      </ul>
      <hr class="my-3">
      <a href="<?php echo base_url(); ?>admin/users"><h6 class="navbar-heading text-muted"> User Management</h6></a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/users/create">
            <i class="ni ni-single-02 text-yellow"></i> Create User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/users">
            <i class="ni ni-single-02 text-yellow"></i> View / Manage Users
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>