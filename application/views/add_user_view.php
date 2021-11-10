<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><b>Add User</b> <small>Homycare Letter</small> </h1>
 </div>
 </div>
 </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12 connectedSortable">
 <a href="<?php echo site_url('user/index'); ?>">
 <button class="btn btn-sm btn-success">Back</button>
 </a>
 <br><br>
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">
 <i class="fas fa-user"></i> User <small> Add User</small>
 </h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <form action="<?php echo site_url('user/save');?>" method="post">

 <div class="form-group">
   <label>ID user</label>
   <input type="text" name="id_user" class="form-control" placeholder="ID user" required>
   </div>



	 <div class="form-group">
   <label>name</label>
   <input type="text" name="name" class="form-control" placeholder="name" required>
   </div>

	 <div class="form-group">
   <label>email</label>
   <input type="email" name="email" class="form-control" placeholder="email" required>
   </div>

	 <div class="form-group">
   <label>username</label>
   <input type="text" name="username" class="form-control" placeholder="username" required>
   </div>


   <div class="form-group">
   <label>password</label>
   <input type="password" name="passwords" class="form-control" placeholder="passwords" required>
   </div>



   <div class="form-group">
     <label for="role">role</label>
     <select name="role" class="form-control" value="<?php echo $role;?>" required>
	 <option></option>
	 <option>superadmin</option>
       <option>admin</option>
       </select>
   </div>

   <div class="form-group">
     <label for="status">Status</label>
     <select name="status" class="form-control" value="<?php echo $status;?>" required>
	 <option></option>
	 <option>aktif</option>
       <option>tidak aktif</option>
       <option>pending</option>
     </select>
   </div>


 <div class="form-group">
 <label>Created at</label>
 <input type="datetime-local" name="created_at" class="form-control" required>
 </div>

 <div class="form-group">
 <label>Updated at (can be empty)</label>
 <input type="datetime-local" name="updated_at" class="form-control">
 </div>
 

 </div>
 <div class="form-group">
 <input type="submit" value="Submit" class="btn btn-block btn-primary">
 </div>
 </form>
 </div><!-- /.card-body -->
 </div> <!-- /.card -->
 </div>
 </div>
 </div>
 </section><!-- /.content -->
</div>
