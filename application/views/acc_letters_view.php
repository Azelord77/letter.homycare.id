<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><b>Acc Letters</b> <small>Homycare Letter</small> </h1>
 </div>
 </div>
 </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12 connectedSortable">
 <a href="<?php echo site_url('letters/detail'); ?>">
 <button class="btn btn-sm btn-success">Back</button>
 </a>
 <br><br>
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title">
 <i class="fas fa-letter"></i> Letters <small> Acc Letters</small>
 </h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <form action="<?php echo site_url('letters/update_acc');?>" method="post">

 <div class="form-group">
   <label>ID Letters</label>
   <input type="text" name="id_letters" class="form-control" readonly="readonly" value="<?php echo $id_letters;?>">
   </div>

 <div class="form-group">
  <label for="status">Status (can be empty)</label>
  <select name="status" class="form-control" value="<?php echo $status;?>">
  <option></option>
  <option>Approved</option>
  <option>Rejected</option>
  </select>
</div>

<div class="form-group">
<label>Approved at <?php echo $approved_at;?></label>
<input type="datetime-local" name="approved_at" class="form-control" value="<?php echo $approved_at;?>">
</div>

<div class="form-group">
<label>Rejected at <?php echo $rejected_at;?></label>
<input type="datetime-local" name="rejected_at" class="form-control" value="<?php echo $rejected_at;?>">
</div>



<br>

 <button type="submit" class="btn btn-primary">Acc</button>
 </form>
 </div><!-- /.card-body -->
 </div> <!-- /.card -->
 </div>
 </div>
 </div>
 </section><!-- /.content -->
</div>
