
<?php
include("includes/header.php");
?>


<header class="masthead text-center">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="brand-heading">I . T . S . U</h1>
                    <p class="intro-text">Information Technology Student Union</p>
                </div>
            </div>
        </div>
    </div>
</header>
<hr>


         <section class=" pastQuestionBck">
         <div class="col-sm-12 text-center">

                 <div id="level_accordion" class="text-dark">

                     <?php
                     include ('pastQuestionPages/HND/level_100/hnd_level_100.php');
                     include ('pastQuestionPages/HND/level_200/hnd_level_200.php');
                     include ('pastQuestionPages/HND/level_300/hnd_level_300.php');
                     ?>
                 </div>

         </div>
         </section>

<hr>
<?php
include("includes/footer.php");
?>
