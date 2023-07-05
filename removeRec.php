<?php include('inc/session.php'); ?>

<?php 

    // Error or Success Message Variables
    $msg = '';
    $msgClass = '';

    // After submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        // Get form data
        $serialNumber = mysqli_real_escape_string($conn, $_POST['serialnumber']);
        // Check if all fields are filled
        if(!empty($serialNumber)) {
			// Make sure serialNumber is an actual number
			if(is_numeric($serialNumber)){
				// Double check if we are submitting
				if(isset($_POST['submit'])){
					// Create query
					$query = "DELETE FROM `gear` WHERE `serialnumber` = {$serialNumber}";		
					// Check if query ran successfully
					if(mysqli_query($conn, $query)) {
						// Check if record was found and deleted, then set success message
						if($conn->affected_rows) {
							$msg = 'Succesfully deleted record "' . $serialNumber . '".';
							$msgClass = 'alert-success';
						}
						// Check if record was not found, then set error message
						elseif(!$conn->affected_rows){
							$msg = 'Record number "' . $serialNumber . '" does not exist.';
							$msgClass = 'alert-danger';
						}
					// If SQL error, show error
					} else {
						echo 'ERROR: ' . mysqli_error($conn);
					}
				}
			}
			// If serialnumber is not a valid number but any other string, display error
			else{
				$msg = 'Please provide a valid serialnumber.';
				$msgClass = 'alert-danger';
			}
        // If any other error, display error message
        } else {
            $msg = 'Please provide a valid serialnumber.';
            $msgClass = 'alert-danger';
        }
    }
?>

<?php include('inc/adminheader.php'); ?>

    <div class="container">
    <br>
        <!-- Error or success message during form submit -->
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>

        <h2>Remove Record</h2><br>
        

        <!-- Create form -->
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Serial Number</label>
                <input type="text" name="serialnumber" class="form-control">
            </div>
            <br>
            <input type="submit" name="submit" value="Delete" class="btn btn-danger">
        </form>

    </div>

<?php include('inc/adminfooter.php'); ?>