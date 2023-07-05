<?php include('inc/session.php'); ?>

<?php 
    // Error or Success Message Variables
    $msg = '';
    $msgClass = '';

    // After submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        // Get form data
        $serialNumber = mysqli_real_escape_string($conn, $_POST['serialnumber']);
        $vendor = mysqli_real_escape_string($conn, $_POST['vendor']);
        $year = mysqli_real_escape_string($conn, $_POST['year']);
        $model = mysqli_real_escape_string($conn, $_POST['model']);
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);

        // Check if all fields are filled
        if(!empty($serialNumber) && !empty($vendor) && !empty($year) && !empty($model) && !empty($image) && !empty($price)) {
            // All fields are filled, double check if we are submitting
            if(isset($_POST['submit'])){
                // Create query
                $query = "INSERT INTO gear(serialnumber, vendor, year, model, image, price) VALUES ('$serialNumber', '$vendor', '$year', '$model', '$image', '$price')";
    
                // If successfully ran query, set success message with insert id
                if(mysqli_query($conn, $query)) {
                    $msg = 'Succesfully added record';
                    $msgClass = 'alert-success';
                // If SQL error show error
                } else {
                    echo 'ERROR: ' . mysqli_error($conn);
                }
            }
        // If not all fields are filled set fail message
        } else {
            $msg = 'Please fill in all fields.';
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

        <h2>Add Record</h2><br>
        

        <!-- Create form -->
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Serial Number</label>
                <input type="text" name="serialnumber" class="form-control">
            </div>
            <div class="form-group">
                <label>Vendor</label>
                <input type="text" name="vendor" class="form-control">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" name="year" class="form-control">
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>

    </div>

<?php include('inc/adminfooter.php'); ?>