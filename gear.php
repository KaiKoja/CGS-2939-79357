<?php 
	require('config/config.php');
	require('config/db.php');

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

<?php include('inc/header.php'); ?>

<h2 class="noDisplay">Main Content</h2>

<h1>Bass Guitar Shop</h1>
  
<div id="product-list">
  <?php foreach($posts as $post) : ?>
    <div class="product">
      <img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['model']; ?>">
      <h2><br><?php echo $post['year']; ?> <?php echo $post['vendor']; ?> <?php echo $post['model']; ?></h2>
      <p>Price: $<?php echo $post['price']; ?></p>
      <button>Add to Cart</button>
    </div>
  <?php endforeach; ?>
</div>

</div>
<?php include('inc/footer.php'); ?>
</body>
</html>