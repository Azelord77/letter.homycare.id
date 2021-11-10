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
 <div class="col-lg-12">
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title"><i class="fas fa-home"></i> Data Letter : <?php echo $total_letters; ?></h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <a href="<?php echo site_url('letters/detail/');?>">
 <th><button class="btn btn-sm btn-primary">Detail &nbsp;&nbsp;<i class="fas fa-info"></i></button>
 </a>
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
