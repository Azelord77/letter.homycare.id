<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
   <h1><b>Operator</b> <small>Homycare Letter</small> </h1>
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
 <h3 class="card-title"><i class="fas fa-users"></i>&nbsp;&nbsp;Operator : <?php echo $total_operator; ?></h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <a href="<?php echo site_url('operator/add_operator/'); ?>">
<tr><button class="btn btn-sm btn-success">add Operator&nbsp;&nbsp;<i class="fas fa-plus"></i></button></a>
 <hr>
 <table class="table table-bordered table-hover">
 <thead>
 <tr>
 <th scope="col">No</th>
					<th scope="col">ID operator</th>
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
	foreach ($operator as $opr) {
	?>
<tr>

<td><?php echo $no++; ?></td>
                        <td><?php echo $opr->id_operator?></td>
                        <td><?php echo $opr->name?></td>
                        <td><?php echo $opr->email?></td>
                        <td><?php echo $opr->username?></td>
                        <td><?php echo $opr->passwords?></td>
                        <td><?php echo $opr->role?></td>
                        <td><?php echo $opr->status?></td>
						<td><?php echo $opr->created_at?></td>
						<td><?php echo $opr->updated_at?></td>
                        <td>
                        <a href="<?php echo site_url('operator/get_edit/' . $opr->id_operator); ?>">
                        <button class="btn btn-sm btn-primary">Edit&nbsp;&nbsp;<i class="fas fa-edit"></i></button>
                        </a>
                        <a href="<?php echo site_url('operator/delete/' . $opr->id_operator); ?>">
                        <button class="btn btn-sm btn-danger">Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></button>
                        </a>
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
