<?php include("includes/header.php"); ?>
	
	
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
									<th>Name</th>
									<th>Subject</th>
									<th>Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="shop-no bg1">1</span></td>
									<td>Jack</td>
									<td>New Ticket</td>
									<td>05 Oct 2020</td>
									<td><span class="status pending">Pending</span></td>
								</tr><tr>
									<td><span class="shop-no bg1">2</span></td>
									<td>Smith</td>
									<td>Raised new Ticket</td>
									<td>05 Oct 2020</td>
									<td><span class="status pending">Closed</span></td>
								</tr><tr>
									<td><span class="shop-no bg1">3</span></td>
									<td>Harry</td>
									<td>New issues - Ticket</td>
									<td>05 Oct 2020</td>
									<td><span class="status pending">Open</span></td>
								</tr><tr>
									<td><span class="shop-no bg1">4</span></td>
									<td>John</td>
									<td>05 Oct 2020</td>
									<td>New issues - Ticket</td>
									<td><span class="status pending">Pending</span></td>
								</tr><tr>
									<td><span class="shop-no bg1">5</span></td>
									<td>Depp</td>
									<td>New Ticket</td>
									<td>05 Oct 2020</td>
									<td><span class="status pending">Closed</span></td>
								</tr>
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