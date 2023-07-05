<?php include('inc/header.php'); ?>

<section>
  <h2 class="noDisplay">Main Content</h2>
  <article class="left_article">
    <h3>Contact</h3>
    <p>At Bass Odyssey, we value open communication with our customers. If you have any questions, feedback, or inquiries, we encourage you to reach out to us. Our dedicated team is ready to assist you with any concerns you may have. Whether you're looking for product information, assistance with an order, or simply want to share your thoughts, we are here to listen and provide the support you need. Please feel free to contact us using the form below, and we will respond to your message as soon as possible. We appreciate your interest in Bass Odyssey and look forward to hearing from you!</p>
    <p>Required information is marked with an asterisk (*).</p>
 
    <form id="frm">
      <div class="grid-container">
        <div class="rightJustify">
          <label for="myFName"> First Name: </label>
        </div>
        <div class="leftJustify">
          <input type="text" id="myFName" name="myFName" >
      </div>

      <div class="rightJustify">
        <label for="myLName"> Last Name: </label>
      </div>
      <div class="leftJustify">
        <input type="text" id="myLName" name="myLName" >
      </div>

      <div class="rightJustify">
        <label for="myEmail">* E-mail: </label>
      </div>
      <div class="leftJustify">
        <input type="email" id="myEmail" name="myEmail" required>
      </div>

      <div class="rightJustify">
        <label for="Topic"> Topic: </label>
      </div>
      <div class="leftJustify">
        <select id="Topic" name="Topic">
          <option>Bass Guitar</option>
          <option>Lessons</option>
          <option>Artists</option>
          <option>Returns</option>
          <option>Other</option>
        </select>
      </div>

      <div class="rightJustify">
        <label for="myDate">Birthday: </label>
      </div>
      <div class="leftJustify">
        <input type="date" id="myDate" name="myDate">
      </div>

      <div class="rightJustify">
        <label for="myComments"> Comments: </label>
      </div>
      <div class="leftJustify">
        <textarea id="myComments" name="myComments" rows="3" cols="50" ></textarea>
      </div>

      <div class="rightJustify">
        &nbsp;
      </div>
      <div class="leftJustify">
        <input type="submit" id="mySubmit" value="Submit">
      </div>
    </form>
  </article>
  <aside class="right_article"><img src="Images/contactpng.png" alt="" width="1024" height="1024" class="placeholder"/> </aside>
</section>


<script>
$("#frm").validate();  // validate frm form elements
$(function () {
  $('#frm').submit(function () {  // redefine submit for frm
    if($(this).valid()) {  // if this form is valid
    captureFormData(this);  // send it to captureFormData
    }
  });
});
</script>


</div>
<?php include('inc/footer.php'); ?>
</body>
</html>