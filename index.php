<?php 
include("includes/header.php"); 
include("classes/class_ticket.php");

$obj_tic = new Ticket();
$res=$obj_tic->getAllTickets();
?>
	
	<section class="rental-info">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="rental-header d-flex justify-content-between align-items-baseline">
						<h2>Tickets</h2>
						<a href="ticket-form.php" class="btn btn-primary">Create Ticket</a>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="upcoming-rental">
						<table id="ListCE" class="table table-responsive">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Ticket ID</th>
									<th>Name</th>
									<th>Ticket Number</th>
									<th>Subject</th>
									<th>Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							<?php for($i=0; $i<count($res['data']); $i++){ ?>
								<tr>
									<td><span class="shop-no bg1"><?php echo $i+1; ?></span></td>
									<td><?php echo $res['data'][$i]['id']; ?></td>
									<td><?php echo $res['data'][$i]['contact']['firstName'].' '.$res['data'][$i]['contact']['lastName']; ?></td>
									<td><?php echo $res['data'][$i]['ticketNumber']; ?></td>
									<td><?php echo $res['data'][$i]['subject']; ?></td>
									<td><?php echo date("d-m-Y", strtotime($res['data'][$i]['createdTime'])); ?></td>
									<td><span class="status pending"><?php echo $res['data'][$i]['status']; ?></span></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include("includes/footer.php"); ?>
<script>
 $('#ListCE').DataTable( {
   "lengthChange": false
  
} );
</script>