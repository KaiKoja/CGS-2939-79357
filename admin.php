<?php include('inc/session.php'); ?>

<?php 
   // Build query
   $query = 'SELECT * FROM gear';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<?php include('inc/adminheader.php'); ?>

<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">SerialNumber</th>
         <th scope="col">Vendor</th>
         <th scope="col">Year</th>
         <th scope="col">Model</th>
         <th scope="col">Price</th>
         <th scope="col">Image File</th>
      </tr>
   </thead>

   <!-- Loop each SQL entry and create entry -->
      <tbody>
         <?php foreach($posts as $post) : ?>
            <tr>
            <th scope="row"><?php echo $post['serialnumber']; ?></th>
            <td><?php echo $post['vendor']; ?></td>
            <td><?php echo $post['year']; ?></td>
            <td><?php echo $post['model']; ?></td>
            <td><?php echo $post['price']; ?></td>
            <td><?php echo $post['image']; ?></td>
            </tr>
         <?php endforeach; ?>
   </tbody>
</table>

<?php include('inc/adminfooter.php'); ?>