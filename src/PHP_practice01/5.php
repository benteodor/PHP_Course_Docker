<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo "<p>".atanh(4.8888)."<p/>";
echo "<p>".strtoupper("this is not a number")."</p>";
	echo "<p>".var_dump(array_reverse([1,3,3,4,5])). "</p>";
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>