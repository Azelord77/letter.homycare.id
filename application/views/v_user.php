<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
   <h1><b>User</b> <small>Homycare Letter</small> </h1>
 </div>
</div>
 </div><!-- /.container-fluid -->
 </section>
 <section class="content">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-13">
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title"><i class="fas fa-user"></i>&nbsp;&nbsp;Data User : <?php echo $total_user; ?></h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <a href="<?php echo site_url('user/add_user/'); ?>">
<tr><button class="btn btn-sm btn-success">add User&nbsp;&nbsp;<i class="fas fa-plus"></i></button></a>
 <hr>
 <table class="table table-bordered table-hover">
 <thead>
 <tr>
 <th scope="col">No</th>
					<th scope="col">ID User</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
					<th scope="col">Created at</th>
					<th scope="col">Updated at</th>
					<th width="200">Action</th>
 </tr>
 </thead>
<tbody>
	<?php
	$no = $this->uri->segment('3')+1;
	foreach ($user as $usr) {
	?>
<tr>

						<td><?php echo $no++; ?></td>
                        <td><?php echo $usr->id_user?></td>
                        <td><?php echo $usr->name?></td>
                        <td><?php echo $usr->email?></td>
                        <td><?php echo $usr->username?></td>
                        <td><?php echo $usr->passwords?></td>
                        <td><?php echo $usr->role?></td>
                        <td><?php echo $usr->status?></td>
						<td><?php echo $usr->created_at?></td>
						<td><?php echo $usr->updated_at?></td>
                        <td>
                        <a href="<?php echo site_url('user/get_edit/' . $usr->id_user); ?>">
                        <button class="btn btn-sm btn-primary">Edit&nbsp;&nbsp;<i class="fas fa-edit"></i></button>
                        </a>
                        <a href="<?php echo site_url('user/delete/' . $usr->id_user); ?>">
                        <button class="btn btn-sm btn-danger">Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></button>
                        </a>
                        </td>

                        </td>
 </tr>
 <?php
}
?>

 </tbody>
 </table>
 </div>
 </div>
 <div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
    </div>
 </div>
 </div>
 </div>
 </section>
</div>
