<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
<style type="text/css">
	button{

  }
  a:link {
		color: white;
		background-color: transparent;
		text-decoration: none;
		}
		@media print{
			a:link, .pagination, .link, .pagination a, strong, button{
				display:none;
			}
		}
		.pagination {
		background-color: transparent;
  	display: inline-block;
		}
		.pagination a {
  	color: black;
  	float: center;
  	padding: 0px 10px;
  	text-decoration: none;
		border-radius: 5px;
		}
		.pagination a:hover:not(.active) {background-color: #72bfd6;}
/* html,body{
    height: 297mm;
    width: 210mm;
}

html,body{
    height: 29.7cm;
    width: 21cm;
}

html,body{
    height: 842px;
    width: 595px;
} */
.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:12px;overflow:hidden;padding:12px 20px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:12px;font-weight:normal;overflow:hidden;padding:12px 20px;word-break:normal;}
.tg .tg-zv4m{border-color:#ffffff;text-align:left;vertical-align:top}
.tg .tg-8jgo{border-color:#ffffff;text-align:center;vertical-align:top;padding:2px 12px;}
.tg .tg-ior2{border-color:#ffffff;font-size:12px;text-align:left;}
.tg .tg-ofj5{border-color:#ffffff;text-align:right;vertical-align:top;font-size:12px;padding:2px 12px;}
.tg .tg-de2y{border-color:#ffffff;text-align:left;vertical-align:top;font-size:12px;padding:8px 35px;}
</style>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/script.js"></script>
</head>
<table class="tg" style="page-break-after: always;undefined;table-layout: fixed; width: 595x">
<colgroup>
<col style="width: 295px">
<col style="width: 300px">
</colgroup>
<thead>

</thead>
<tbody>

<?php
	$no = $this->uri->segment('3')+1;
	foreach ($letters as $ltrs) {
	?>


<tr>
	<th class="tg-ior2" colspan="2">
	<img src="https://hayuningindotech.id/static/img/hayuning.png" style="object-fit:fill;object-position: top;width:111.9px;height:40.5px;">
	&emsp;<span style="font-family:'Times New Roman',serif;font-size: 30px; font-weight:bold;vertical-align:center">PT Hayuning Indo Tech</span>
	<br>
	&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="font-size: 12px; font-weight:bold">Jurangombo Utara, Magelang Selatan, Kota Magelang, Jawa Tengah 56123</span>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="font-size: 10px;font-weight:bold;vertical-align:top">Email : hayuningindotech@gmail.com, Phone : +62293-319-6862</span>
	<hr style="width:100%">
</th>
</tr>
	<tr>
    <td class="tg-8jgo" colspan="2"><span style="font-size: 23px;font-weight:bold;text-decoration:underline"><?php echo $ltrs->title; ?></span></td>
  </tr>
	<tr>
  <td class="tg-8jgo" colspan="2">Nomor  Surat : <?php echo $ltrs->number; ?></td>
  </tr>
	</tr>
<tr>
	<td class="tg-de2y"></td>
	<td class="tg-de2y"></td>
</tr>
	<tr>
  <tr>
  <td class="tg-de2y">Pemberi Perintah </td>
  <td class="tg-de2y"><?php echo $ltrs->assignor; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Yang Diperintahkan</td>
    <td class="tg-de2y"><?php echo $ltrs->assignee; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Jabatan</td>
    <td class="tg-de2y"><?php echo $ltrs->position; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Maksud Perjalanan</td>
    <td class="tg-de2y"><?php echo $ltrs->purpose; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Alat Angkutan</td>
    <td class="tg-de2y"><?php echo $ltrs->transportation; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Tempat Berangkat<br><br>Tempat Tujuan</td>
    <td class="tg-de2y"><?php echo $ltrs->from; ?><br><br><?php echo $ltrs->to; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Lama Perjalanan<br><br>Berangkat<br><br>Pulang</td>
    <td class="tg-de2y"><?php echo $ltrs->length_of_business_trip; ?><br><br><?php echo $ltrs->departure; ?><br><br><?php echo $ltrs->return; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Perorang(PE)/Team(TI)</td>
    <td class="tg-de2y"><?php echo $ltrs->type; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Anggaran</td>
    <td class="tg-de2y"><?php echo $ltrs->budget_assignment; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Keterangan Lain</td>
    <td class="tg-de2y"><?php echo $ltrs->etc; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Status</td>
    <td class="tg-de2y"><?php echo $ltrs->status; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Disetujui pada</td>
    <td class="tg-de2y"><?php echo $ltrs->approved_at; ?></td>
  </tr>
  <tr>
    <td class="tg-de2y">Ditolak pada</td>
    <td class="tg-de2y"><?php echo $ltrs->rejected_at; ?></td>
  </tr>
  <tr>
    <td class="tg-zv4m"></td>
		<td class="tg-8jgo"><br>Dikeluarkan pada<br><br><?php echo $ltrs->date; ?></td>
  </tr>
	<tr>
    <td class="tg-8jgo"><span style="text-align:center;font-size: 12px;font-weight:bold">Assignee</span></td>
		<td class="tg-8jgo"><span style="text-align:center;font-size: 12px;font-weight:bold">Assignor</span></td>
	</tr>
	
	<tr>
    <td class="tg-8jgo"><span style="font-size: 12px;font-weight:bold"><br><br><br>a.n <?php echo $ltrs->assignee; ?></span></td>
		<td class="tg-8jgo"><span style="font-size: 12px;font-weight:bold"><br><br><br>a.n <?php echo $ltrs->assignor; ?></span></td>
	</tr>
  
</tr>
<tr>
    <td class="tg-zv4m">
		<div class="pagination">
	<?php echo $this->pagination->create_links(); ?>
    </div>
					<div class="button" id="download"><br>
          <button onclick="generatePDF()">print&nbsp;&nbsp;</button>
					</div>
		</td>
	</tr>
<?php
	}
        ?>
				</tbody>
</html>
