<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
   <h1><b>Home</b> <small>Homycare Letter</small> </h1>
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
 <h3 class="card-title"><i class="fas fa-info"></i>&nbsp;&nbsp;Detail Data Letter </h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <a href="<?php echo site_url('letters/add_letters/'); ?>">
<tr><button class="btn btn-sm btn-success">add letters&nbsp;&nbsp;<i class="fas fa-plus"></i></button></a>
 <hr>
 <table class="table table-bordered table-hover">
 <thead>
 <tr>
 <th scope="col">No</th>
					<th scope="col">ID letters</th>
                    <th scope="col">ID Operator</th>
                    <th scope="col">Number</th>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Date of Letter</th>
                    <th scope="col">Assignor</th>
					<th scope="col">Assignee</th>
					<th scope="col">Position</th>
					<th scope="col">Purpose</th>
					<th scope="col">Transportation</th>
					<th scope="col">From</th>
					<th scope="col">To</th>
					<th scope="col">Length Of Business Trip</th>
					<th scope="col">Departure</th>
					<th scope="col">Return</th>
					<th scope="col">Budget Assignment</th>
					<th scope="col">Etc</th>
					<th scope="col">Status</th>
					<th scope="col">Approved at</th>
					<th scope="col">Rejected at</th>
					<th scope="col">Created at</th>
					<th scope="col">Updated at</th>
                    <th width="200">Action</th>
 </tr>
 </thead>
<tbody>
	<?php
	$no = $this->uri->segment('3')+1;
	foreach ($letters as $ltrs) {
	?>
<tr>

<td><?php echo $no++; ?></td>
                        <td><?php echo $ltrs->id_letters?></td>
                        <td><?php echo $ltrs->operator_id?></td>
                        <td><?php echo $ltrs->number?></td>
                        <td><?php echo $ltrs->title?></td>
                        <td><?php echo $ltrs->type?></td>
                        <td><?php echo $ltrs->date?></td>
                        <td><?php echo $ltrs->assignor?></td>
						<td><?php echo $ltrs->assignee?></td>
						<td><?php echo $ltrs->position?></td>
						<td><?php echo $ltrs->purpose?></td>
						<td><?php echo $ltrs->transportation?></td>
						<td><?php echo $ltrs->from?></td>
						<td><?php echo $ltrs->to?></td>
						<td><?php echo $ltrs->length_of_business_trip?></td>
						<td><?php echo $ltrs->departure?></td>
						<td><?php echo $ltrs->return?></td>
						<td><?php echo $ltrs->budget_assignment?></td>
						<td><?php echo $ltrs->etc?></td>
						<td><?php echo $ltrs->status?></td>
						<td><?php echo $ltrs->approved_at?></td>
						<td><?php echo $ltrs->rejected_at?></td>
						<td><?php echo $ltrs->created_at?></td>
						<td><?php echo $ltrs->updated_at?></td>
                        <td>

                        <a href="<?php echo site_url('letters/get_edit/' . $ltrs->id_letters); ?>">
                        <button class="btn btn-sm btn-info">Edit&nbsp;&nbsp;<i class="fas fa-edit"></i></button>
                        </a>

                        <a href="<?php echo site_url('letters/delete/' . $ltrs->id_letters); ?>">
                        <button class="btn btn-sm btn-danger">Delete&nbsp;&nbsp;<i class="fas fa-trash"></i></button>
                        </a>

                        

                        <a href="<?php echo site_url('letters/get_acc/' . $ltrs->id_letters); ?>">
                        <button class="btn btn-sm btn-success">Acc&nbsp;&nbsp;<i class="fas fa-check-circle"></i></button>
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
