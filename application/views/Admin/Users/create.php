<div class="main-content">

<div class="container-fluid">
	<div class="row">
		<div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Create User</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <?php echo form_open('admin/UsersController/save_user'); ?>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Name</label>
                  <input type="text" name="txtName" class="form-control form-control-alternative" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Email address</label>
                  <input type="email" name="txtEmail" class="form-control form-control-alternative" placeholder="jesse@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Password</label>
                  <input type="password" name="txtPass" class="form-control form-control-alternative" placeholder="Password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Retype Password</label>
                  <input type="password" name="txtRePass" class="form-control form-control-alternative" placeholder="Retype Password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-control-label">Role</label>
                  <select name="cmbRole" class="form-control form-control-alternative">
                  	<?php foreach($roles->result() as $role) : ?>
                  		<option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
                  	<?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
              	<input type="submit" class="btn btn-primary" value="Create">
              </div>
            </div>
          </div>                
        <?php echo form_close(); ?>
      </div>
    </div>
	</div>