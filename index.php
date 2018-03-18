
<?php
include("includes/header.php");
include_once ("includes/dbConnection.php");

if (isset($_POST['submit'])){
    $email = !empty($_POST['stdMail']) ? trim($_POST['stdMail']) : null;
    $message = !empty($_POST['message']) ? trim($_POST['message']) : null;
    $sql = "INSERT INTO `issues`(stdMail,stdIssue) VALUES (:email, :msg)";

    $stmt= $connection -> prepare($sql);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':msg',$message);

   $result = $stmt ->execute();
   if(!$result){
       header("Location: index.php?err=".urlencode("Error Summitting Complain"));
     exit();
   }else{
       header("Location: index.php?msg=".urlencode("Complain Summited Successfully"));
    exit();
   }
}

 ?>


    <!-- Intro Header -->
    <header class="masthead text-center">
      <div class="intro-body">
<div class="container">
   <div class="row">

      <div class="col-lg-8 mx-auto">
      <h1 class="brand-heading">I . T . S . U</h1>
      <p class="intro-text">Information Technology Student Union</p>
   </div>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="img/first.jpg" alt="First slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/sec.jpg" alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/third.jpg" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>


</div>

</div>
</div>
    </header>




    <!-- Latest News Section -->
    <section id="latestNews" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto">
             <h5 style=" text-align : left; background : blue; color:white; text-transform:none; margin:1px;">Latest News</h5>
             <div class="card-group">
                 <div class="card">
                   <img class="card-img-top" src="img/fassa.jpeg" alt="Sorry No News Yet!">

                     <div class="card-body">
                         Faculty Week is Ongoing
                     </div>
           </div>
           <div class="card">
             <img class="card-img-top" src="" alt="Sorry No News Yet!">
             <div class="card-body">

             </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="" alt="Sorry No New Yet!">
    <div class="card-body">

    </div>
  </div>


</div>
<hr class="featurette-divider" />
              <hr class="featurette-divider" />
              <hr class="featurette-divider" />
<section id="upcomingEvent">
    <hr class="featurette-divider" />
    <h5 style=" text-align : left; background : blue; color:white; text-transform:none; margin:1px;">Upocoming Event(s)</h5>
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/trip.jpeg" alt="Card image cap">

        </div>

        <div class="card">
            <img class="card-img-top" src="img/fassa.jpeg" alt="Card image cap">
        </div>

        <div class="card">
            <img class="card-img-top" src="img/itsu.jpeg" alt="Card image cap">

        </div>

        <div class="card">
            <img class="card-img-top" src="img/gnut.jpeg" alt="Card image cap">

        </div>
    </div>
</section>

          </div>


          <div class="col-lg-3 mx-auto">

             <h5>Featured Links</h5>

                 <ul class="list-unstyled">
                    <div style="margin: 2px;">
                     <li>
                     <a href="https://liaison.ttu.edu.gh" target="_blank" class= " col-sm-12 btn btn-outline-primary">Liaison</a>
                   </li>
                   </div>
                  <div style="margin: 2px;">
                    <li>
                   <a type="button" href="https://ttuportal.com" target="_blank" class=" col-sm-12 btn btn-outline-primary">Student portal</a>
                 </li>
                  </div>
                  <div style="margin: 2px;">
                    <li>
                   <a type="button" href="https://qualityassurance.ttu.edu.gh" target="_blank" class="col-sm-12 btn btn-outline-primary">Lectures assessment</a>
                 </li>
                  </div>
                 <div style="margin: 2px;">
                   <li>
                   <a type="button"  target="_blank" class=" col-sm-12 btn btn-outline-primary"  href="#">Semester registration steps</button></a>
                 </li>
                 </div>
                 <div style="margin: 2px;">
                   <li>
                   <a  target="_blank" class=" col-sm-12 btn btn-outline-primary" href="#">Re-sit Examination time table</button></a>
                 </li>
                 </div>
                 </ul>

             <h5>Our Lectures</h5>
            <div id="ourlectures" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#ourlectures" data-slide-to="0" class="active"></li>
             <li data-target="#ourlectures" data-slide-to="1"></li>
             <li data-target="#ourlectures" data-slide-to="2"></li>
             <li data-target="#ourlectures" data-slide-to="3"></li>
             <li data-target="#ourlectures" data-slide-to="4"></li>
             <li data-target="#ourlectures" data-slide-to="5"></li>
             <li data-target="#ourlectures" data-slide-to="6"></li>
             <li data-target="#ourlectures" data-slide-to="7"></li>
             <li data-target="#ourlectures" data-slide-to="8"></li>
             <li data-target="#ourlectures" data-slide-to="9"></li>
             <li data-target="#ourlectures" data-slide-to="10"></li>
             <li data-target="#ourlectures" data-slide-to="11"></li>
             <li data-target="#ourlectures" data-slide-to="12"></li>
             <li data-target="#ourlectures" data-slide-to="13"></li>
             <li data-target="#ourlectures" data-slide-to="14"></li>
             <li data-target="#ourlectures" data-slide-to="15"></li>
         </ol>
         <div class="carousel-inner">
             <div class="carousel-item active">
                <img class="d-block w-100" src="img/lectures/gad.jpg" alt="Gad Ocansey">
             </div>
             <div class="carousel-item">
                <img class="d-block w-100" src="img/lectures/hod.jpg" alt="Frank Amoani">
             </div>
             <div class="carousel-item">
                <img class="d-block w-100" src="img/lectures/omane.jpg" alt="Emmanuel Agyekum Omane">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="img/lectures/angi.jpg" alt="Angela Aba Otchere">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="img/lectures/louiza.jpg" alt="Louisa S. Arthur">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="img/lectures/essien.jpg" alt="Louisa S. Arthur">
             </div>
             <div class="carousel-item">
                 <img class="d-block w-100" src="img/lectures/richie.jpg" alt="Richard">
             </div>
         </div>
         <a class="carousel-control-prev" href="#ourlectures" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#ourlectures" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
         </div>

<hr />


<h5>Our Executives</h5>
<div id="ourlectures" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#ourExecutives" data-slide-to="0" class="active"></li>
        <li data-target="#ourExecutives" data-slide-to="1"></li>
        <li data-target="#ourExecutives" data-slide-to="2"></li>
    </ol>
<div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="img/executives/oman.jpg" alt="First slide">
    </div>
<div class="carousel-item">
<img class="d-block w-100" src="img/executives/ashon.jpg" alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/executives/perry.jpeg" alt="Third slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="img/executives/emma.jpg" alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#ourExecutives" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#ourExecutives" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

<hr />

          </div>
        </div>
      </div>
    </section>
<!-- Latest News Section -->







<!-- academic_calendar -->
<section id="academic_calendar" class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mx-auto">
         <!-- TTU Academic Calendar -->
<div class="pos-f-t">

<nav class="navbar  navbar-light bg-info " data-toggle="collapse" data-target="#ttuAcademicCalendar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">

  <a ><h5 data-toggle="collapse" data-target="#ttuAcademicCalendar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" >TTU Academic Calendar for Second Semester</h5>
</a>
  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#ttuAcademicCalendar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="collapse" id="ttuAcademicCalendar">
  <div class="bg-light p-4">

     <div class="card-group">
        <div class="card">
           <div class="card-body">
              <p class="card-text" style="font-size: 15px;"><span>Re-opening</span>-  22nd January, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Registration (All Students)</span> - 22nd Jan. – 26 Jan, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Lectures Begin</span> -  29 January, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Mid-Semester Examination</span> -  2nd April – 6 April, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Lectures End</span> -  3 May, 2018</p>

  </div>

     </div>
     <div class="card">
     <div class="card-body">
        <p class="card-text" style="font-size: 15px;"><span>B-tech Programmes</span> -  4 May -- 20 May, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>HND and others</span> -  7 May -  19 May, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Students Depart </span>-  20 May 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Industrial Attachment</span> -  28 May, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Deadline for Submission of project Work </span>-  8 June, 2018</p>

     </div>
     </div>
     <div class="card">
     <div class="card-body">
     <p class="card-text" style="font-size: 15px;"><span>Examination Results</span> -  22 June 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Faculty Awards Meeting</span> -  28 June, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Uploading of Second Semester Exams Marks </span>-  16 July – 20 July 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Re-sit Examination - Mon, 13th Aug </span>–  24 Aug.2018</p>
     <p class="card-text" style="font-size: 15px;"><span>R-opening (2018/2019 Academic Year)</span> –  13 August, 2018</p>
     </div>
     </div>


     </div>

  </div>
</div>
</div>

<!-- TTU Academic Calendar -->
<hr class="featurette-divider" />

<!-- Department Academic Calendar -->
<div class="pos-f-t">

<nav class="navbar  navbar-light bg-primary " data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">

  <a><h5 data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Department Academic Calendar for Second Semester</h5></a>
  <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
     <div class="card-group">
     <div class="card">

      <div class="card-body">
          <p class="card-text" style="font-size: 15px;"><span>Re-opening</span> -  22nd January, 2018</p>
     <p class="card-text" style="font-size: 15px;"><span>Submission of 1st Sem. Results</span> - 26 Jan, 2018</p>
         <p class="card-text" style="font-size: 15px;"><span>Lecture begins</span> - 29th January, 2018</p>
         <p class="card-text" style="font-size: 15px;"><span>Vetting of Project (Chp. 1 & 2 )</span> - 30th Jan, 2018</p>
         <p class="card-text" style="font-size: 15px;"><span>Departmental Awards / General Meeting</span> - 2nd Feb. 2018</p>
         <p class="card-text" style="font-size: 15px;"><span>Faculty Award Meeting</span> - 8th Feb, 2018</p>

      </div>
     </div>




     <div class="card">

     <div class="card-body">

            <p class="card-text" style="font-size: 15px;"><span>Vetting of Project (Chp. 3 )</span> - 27th Feb, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Submission of 2nd Sem. Exam Qstn.</span> - 28th Feb, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Technology Fair</span> 9th March, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Vetting of Project (Chp. 4 )</span> - 30th March, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Mid-Sem Examination</span> - 2nd - 6th April, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Excursion(2nd & 3rd Yrs)</span> - 12 April, 2018</p>

     </div>
     </div>

     <div class="card">

     <div class="card-body">


             <p class="card-text" style="font-size: 15px;"><span>Election of ITSU Executives</span> - 16th - 20th April, 2018</p>
             <p class="card-text" style="font-size: 15px;"><span>Vetting of Project (Chp. 5 )</span> - 27th April, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Lecture Ends</span> - 3rd May, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>End of Sec. Sem. Examination</span> - 7th - 9th May, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Submission of Final Project</span> - 31st May, 2018</p>
            <p class="card-text" style="font-size: 15px;"><span>Student Depart</span> - 20th May, 2018</p>


     </div>
     </div>
     </div>


  </div>
</div>
</div>

<!-- Department Academic Calendar -->

      </div>
    </div>
  </div>
</section>
<!-- Latest News Section -->







<!-- About us-->
<section id="about" class="content-section">
  <div class="container">
      <div class="col-lg-12 mx-auto">

         <div id="myabt">

               <div class="row">
               <div class="col-md-6">
                 <div class="about-text" style="background: rgba(0,0,0,0.2); padding: 1.8759rem;">
                   <h3>About us</h3>
                   <p class="lead">
                       The Department of Information & Communication Technology,
                       as a servicing department, provides the platform for teaching
                       students to become literate in Information and Communication
                       Technology (ICT). The Department equips students of the entire
                       Polytechnic with basic skills in computing through a computer
                       literacy course.

                   </p>
                   <p>The Department is also running a non- tertiary
                       programme Diploma in Information Technology, based on the West Africa
                       Examinations Council’s (WAEC) syllabus.
                   </p>

                   <!--<h5>Follow us on the web</h5>
                   <a href="#" class="btn btn-sm btn-secondary-outline"> <img src="img/icons/twitter.png"> </a>
                   <a href="#" class="btn btn-sm btn-secondary-outline"> <img src="img/icons/instagram.png"></a>
                   <a href="#" class="btn btn-sm btn-secondary-outline"> <img src="img/icons/linkedin.png"></a>
                 --></div>
               </div>


                 <div class="col-md-5 text-center">
                 <div class="about-text" style="color: white; ">
                    <div class="text-center">
                       <h5 style="color: blue; " class="card-header">Head Of Department</h5>
                 <div class="card-body">
                     <img class="card-img-top rounded-circle" style="height: auto;max-width: 350px;" src="img/lectures/hod.jpg" alt="Card image cap">

                 </div>
                        <div class="card-footer">
                            <h5 style="color: black;">Mr. Frank Amoani Arthur</h5>
                        </div>
               </div>

                 </div>

               </div>





           </div>
         </div>


         <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h3 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          All Lectures
        </button>
        <span id="drop" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="float:right; color:blue;" class="fa fa-align-justify "></span>
      </h3>

    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body text-center">
         <div class="card-deck">
            <!-- Row 1 -->
             <div class="card">
        <a>
          <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/hod.jpg" alt="Mr Frank Amoani Arthur">
        </a>
    <div class="card-body">
      <h5 class="card-text">Mr Frank Amoani Arthur</h5>
       <div class="row">
           <div  class="col-sm-5 text-left">
               <h6 style="color: darkred;" >Specialization</h6>
           </div>
           <div class="col-sm-7 text-left">
               <h6 >Management information Systems and Computer Networking</h6>
           </div>
       </div>
        <hr>
        <div class="row">
            <div  class="col-sm-5 text-left">
                <h6 style="color: darkred;" >Subject Teaching</h6>
            </div>
            <div  class="col-sm-6 text-left">
                <h6>Networking</h6>
            </div>
        </div>
    </div>
  </div>

<!-- Next Row-->
             <div class="card">
                 <a>
                     <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/essien.jpg" alt="Mr. George Essien">
                 </a>
                 <div class="card-body">
                     <h5 class="card-text">Mr. George Essien</h5>
                     <div class="row">
                         <div  class="col-sm-5 text-left">
                             <h6 style="color: darkred;" >Specialization</h6>
                         </div>
                         <div class="col-sm-7 text-left">
                             <h6 >Information Communication Technology</h6>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div  class="col-sm-5 text-left">
                             <h6 style="color: darkred;" >Subject Teaching</h6>
                         </div>
                         <div  class="col-sm-6 text-left">
                             <h6>Computer Literacy</h6>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Next Row-->
             <div class="card">
                 <a>
                     <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. Joseph Danso">
                 </a>
                 <div class="card-body">
                     <h5 class="card-text">Mr. Joseph Danso</h5>
                     <div class="row">
                         <div  class="col-sm-5 text-left">
                             <h6 style="color: darkred;" >Specialization</h6>
                         </div>
                         <div class="col-sm-7 text-left">
                             <h6 >Information Communication Technology</h6>
                         </div>
                     </div>
                     <hr>
                     <div class="row">
                         <div  class="col-sm-5 text-left">
                             <h6 style="color: darkred;" >Subject Teaching</h6>
                         </div>
                         <div  class="col-sm-6 text-left">
                             <h6>Computer Literacy & Computer Applications</h6>
                         </div>
                     </div>
                 </div>
             </div>

</div>
</div>
<!-- Row 1 -->

<!--Row 2-->
<div class="card-body text-center">
   <div class="card-deck">
       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/omane.jpg" alt="Mr. Emmanuel A. Omane">
           </a>
           <div class="card-body">
               <h5 class="card-text">Mr. Emmanuel A. Omane</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >Information Communication Technology & Entrepreneurship</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Computer Literacy & Entrepreneurship</h6>
                   </div>
               </div>
           </div>
       </div>

       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/louiza.jpg" alt="Miss. Angela Aba Otchere">
           </a>
           <div class="card-body">
               <h5 class="card-text">Mrs. Louisa S. Arthur</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >General MBA</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Computer Literacy & Management Information Systems</h6>
                   </div>
               </div>
           </div>
       </div>

       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/angi.jpg" alt="Card image cap">
           </a>
           <div class="card-body">
               <h5 class="card-text">Miss. Angela Aba Otchere</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >Information Communication Technology</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Computer Literacy & Computer Applications</h6>
                   </div>
               </div>
           </div>
       </div>
</div>
</div>

<!--row 2-->

<!-- row 3 -->
<div class="card-body text-center">
   <div class="card-deck">
       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. Robert French-Baidoo">
           </a>
           <div class="card-body">
               <h5 class="card-text">Mr. Robert French-Baidoo</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >Software Engineering</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Computer Literacy,JAVA Programming and Visual Basic .NET</h6>
                   </div>
               </div>
           </div>
       </div>
       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. John Dakudjie">
           </a>
           <div class="card-body">
               <h5 class="card-text">Mr. John Dakudjie</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >Information Communication Technology</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Software Engineering</h6>
                   </div>
               </div>
           </div>
       </div>

       <!-- Next Row-->
       <div class="card">
           <a>
               <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. Kojo Ennin Oppan">
           </a>
           <div class="card-body">
               <h5 class="card-text">Mr. Kojo Ennin Oppan</h5>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Specialization</h6>
                   </div>
                   <div class="col-sm-7 text-left">
                       <h6 >Marketing Management, and Web Designing</h6>
                   </div>
               </div>
               <hr>
               <div class="row">
                   <div  class="col-sm-5 text-left">
                       <h6 style="color: darkred;" >Subject Teaching</h6>
                   </div>
                   <div  class="col-sm-6 text-left">
                       <h6>Computer Literacy & Web Technology</h6>
                   </div>
               </div>
           </div>
       </div>
</div>

  </div>

<!-- row3 -->


        <!-- row 4 -->
        <div class="card-body text-center">
            <div class="card-deck">
                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 200px;" src="img/lectures/gad.jpg" alt="Mr. Gad Ocansey">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mr. Gad Ocansey</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >Data Structures & Algorithms</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Literacy,Database Management System & PHP Programing</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. John Dakudjie">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mr. Ernest Dakudjie</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >Information Communication Technology</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Graphics</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. Kojo Ennin Oppan">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mr. Richard Appiah</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >Marketing Management, and Web Designing</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Literacy,Database Management System & JAVA Programming</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Row 4-->

        <!-- row 5 -->
        <div class="card-body text-center">
            <div class="card-deck">
                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mr. Timothy Simpson">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mr. Timothy Simpson</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >ICT and Industrial Mathematics</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Literacy,Discrete Mathematics</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 150px;" src="img/profiledefault.png" alt="Mrs. Abigail Dora Nyarko">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mrs. Abigail Dora Nyarko</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >Information Communication Technology</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Literacy & Information Technology</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Row-->
                <div class="card">
                    <a>
                        <img class="card-img-top rounded-circle" style="width: 150px;" src="img/lectures/richie.jpg" alt="Mr. Richard Nana Nkestiah">
                    </a>
                    <div class="card-body">
                        <h5 class="card-text">Mr. Richard Nana Nkestiah</h5>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Specialization</h6>
                            </div>
                            <div class="col-sm-7 text-left">
                                <h6 >Information Technology and Website Development</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div  class="col-sm-5 text-left">
                                <h6 style="color: darkred;" >Subject Teaching</h6>
                            </div>
                            <div  class="col-sm-6 text-left">
                                <h6>Computer Literace & Hardware Technology</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Row 5-->


    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h3 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          All Executives
        </button>

        <span id="drop" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"style="float:right; color:blue;" class="fa fa-align-justify "></span>

     </h3>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">


            <div class="card-deck">
               <!-- Row 1 -->
               <div class="card">
            <a>
         <img class="card-img-top" src="img/executives/oman.jpg" alt="Card image cap">
         </a>
         <div class="card-body">
            <h5 class="card-text">PRESIDENT</h5>
            <h6 class="card-text">Umaro Sanda Salifu</h6>
            <h6 class="card-text">Level 300</h6>

         </div>
         </div>

         <div class="card">
         <a href="#">
         <img class="card-img-top" src="img/executives/ashon.jpg" alt="Card image cap">
         </a>
         <div class="card-body">
            <h5 class="card-text">ASST. PRESIDENT</h5>
            <h6 class="card-text">Emmanuel Ashon</h6>
            <h6 class="card-text">Level 300</h6>

         </div>
         </div>


         <div class="card">
         <img class="card-img-top" src="img/executives/perry.jpeg" alt="Card image cap">
         </a>
         <div class="card-body">
            <h5 class="card-text">SECRETARY</h5>
         <h6 class="card-text">Prince Gekuma</h6>
            <h6 class="card-text">Level 300</h6>
         </div>
         </div>

         <div class="card">
         <a href="#">
         <img class="card-img-top" src="img/executives/emma.jpg" alt="Card image cap">
         </a>
         <div class="card-body">
            <h5 class="card-text">ASST. ORGANIZER</h5>
         <h6 class="card-text">Francis Emmanuel Arthur</h6>
         <h6 class="card-text">Level 200 A</h6>
         </div>
         </div>

         </div>
<!-- Row 1 -->
       </div>
    </div>
  </div>
    </div>
  </div>
  </div>
</section>
<!-- About Section -->


<!-- Contact us Modal-->

<!-- Modal -->
<div style="color: blue" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLongTitle"> <i class="fa fa-phone"></i> Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" novalidate method="post" action="index.php">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="stdMail">Email</label>
                            <input type="email" class="form-control" id="stdMail" name="stdMail" placeholder="Email" required>
                            <div class="invalid-feedback">
                                Email is required
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="4" required></textarea>
                            <div class="invalid-feedback">
                                Message is required
                            </div>
                        </div>
                        <hr>
                        <i class="fa fa-phone text-danger"> (020) 857-6440</i>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Contact us Modale-->

    <?php
    include("includes/footer.php");
     ?>
