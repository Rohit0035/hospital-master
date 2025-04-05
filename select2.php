<!-- header start -->
<?php include 'header.php';?>
<!-- header close -->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <select class="js-example-basic-single" name="state" style="margin-top:300px;">
  <option value="AL">Alabama</option>
jhjhjhjjhj
  <option value="WY">Wyoming</option>
</select>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


 <!-- footer start -->
<?php include 'footer.php';?>
<!-- footer close -->
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>