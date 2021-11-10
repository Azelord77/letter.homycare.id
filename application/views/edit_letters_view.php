<div class="content-wrapper">
 <section class="content-header">
 <div class="container-fluid">
 <div class="row mb-2">
 <div class="col-sm-6">
 <h1><b>Edit Letters</b> <small>Homycare Letter</small> </h1>
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
 <i class="fas fa-letter"></i> Letters <small> Edit Letters</small>
 </h3>
 </div><!-- /.card-header -->
 <div class="card-body">
 <form action="<?php echo site_url('letters/update');?>" method="post">

 <div class="form-group">
   <label>ID Letters</label>
   <input type="text" name="id_letters" class="form-control" value="<?php echo $id_letters;?>">
   </div>



	 <div class="form-group">
   <label>Operator ID</label>
   <input type="text" name="operator_id" class="form-control" readonly="readonly" value="<?php echo $operator_id;?>">
   </div>

	 <div class="form-group">
   <label>Letters Number (xxx/PTHI-xxx/mm/yyyy)</label>
   <input type="text" name="number" class="form-control" value="<?php echo $number;?>">
   </div>

	 <div class="form-group">
   <label>Title</label>
   <input type="text" name="title" class="form-control" value="<?php echo $title;?>">
   </div>

	 <div class="form-group">
     <label for="type">Type (PE=personal,TI=Team)</label>
     <input name="type" class="form-control" value="<?php echo $type;?>"required>
   </div>

	 <div class="form-group">
   <label>Date of Letter <?php echo $date;?></label>
   <input type="datetime"  name="date" class="form-control" value="<?php echo $date;?>"required>
   </div>

	 <div class="form-group">
   <label>Assignor</label>
   <input type="text" name="assignor" class="form-control" value="<?php echo $assignor;?>">
   </div>

	 <div class="form-group">
   <label>Assignee</label>
   <input type="text" name="assignee" class="form-control" value="<?php echo $assignee;?>">
   </div>

	 <div class="form-group">
   <label>Position</label>
   <input type="text" name="position" class="form-control" value="<?php echo $position;?>">
   </div>

	 <div class="form-group">
   <label>Purpose</label>
   <input type="text" name="purpose" class="form-control" value="<?php echo $purpose;?>">
   </div>

	 <div class="form-group">
   <label>Transportation</label>
   <input type="text" name="transportation" class="form-control" value="<?php echo $transportation;?>">
   </div>

	 <div class="form-group">
   <label>From</label>
   <input type="text" name="from" class="form-control" value="<?php echo $from;?>">
   </div>

	 <div class="form-group">
   <label>To</label>
   <input type="text" name="to" class="form-control" value="<?php echo $to;?>">
   </div>

	 <div class="form-group">
   <label>Length Of Business Trip</label>
   <input type="text" name="length_of_business_trip" class="form-control" value="<?php echo $length_of_business_trip;?>">
   </div>

	 <div class="form-group">
   <label>Departure</label>
   <input type="date" name="departure" class="form-control" value="<?php echo $departure;?>">
   </div>

	 <div class="form-group">
   <label>Return</label>
   <input type="date" name="return" class="form-control" value="<?php echo $return;?>">
   </div>

	 <div class="form-group">
   <label>Budget Assignment (Rp. x.xxx.xxx)</label>
   <input type="text" name="budget_assignment" class="form-control" value="<?php echo $budget_assignment;?>">
   </div>

 <div class="form-group">
 <label>etc</label>
 <input type="text" name="etc" class="form-control" value="<?php echo $etc;?>">
 </div>


 <div class="form-group">
 <label>Created at <?php echo $created_at;?></label>
 <input type="datetime" name="created_at" class="form-control" value="<?php echo $created_at;?>"required>
 </div>

 <div class="form-group">
 <label>Updated at <?php echo $updated_at;?></label>
 <input type="datetime-local" name="updated_at" class="form-control" value="<?php echo $updated_at;?>">
 </div>

<br>

 <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div><!-- /.card-body -->
 </div> <!-- /.card -->
 </div>
 </div>
 </div>
 </section><!-- /.content -->
</div>
