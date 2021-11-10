<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><b>Add Operator</b> <small>Homycare Letter</small> </h1>
 </div>
 </div>
 </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12 connectedSortable">
 <a href="<?php echo site_url('operator/index'); ?>">
 <button class="btn btn-sm btn-success">Back</button>
 </a>
 <br><br>
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">
 <i class="fas fa-users"></i> Operator <small> Add Operator</small>
 </h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <form action="<?php echo site_url('operator/save');?>" method="post">

<div class="form-group">
<label>ID operator</label>
<input type="text" name="id_operator" class="form-control" placeholder="ID operator" required>
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
<option>operator</option>
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

<br>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div><!-- /.card-body -->
 </div> <!-- /.card -->
 </div>
 </div>
 </div>
 </section><!-- /.content -->
</div>
