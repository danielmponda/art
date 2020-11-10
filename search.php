<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/node_modules/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
</head>

<body>
    <!-----------------------------------  Header --------------------------------------------------->
    

    <header>
        <div class="swiper-container">
          
           <!----------- nav ----------->
           <nav class="sticky">
                <ul>
                   <li><a href="index.php"  class="fas fa-home"><b></b></a> </li>
                   <li><a href="search.php" class="fas fa-user active"><b></b></a> </li>
                   <li><a href="addaccount.php" class="fas fa-user-plus"><b></b></a> </li>

                   <li>
                      <div class="search-container">
                          <form action="search.php" method="POST">
                            <input type="text" placeholder="Search.." name="search" class="searchbar">
                            <button type="submit" name="submit" class="fa fa-search"></button>
                          </form>
                  </div>
                   </li>
                  

                   <li class="res"><a href="#contact">ART PATIENT CARD</a></li>
                 </ul>
            </nav>
          <!----------- Sidebar Nav----------->
         
                  
      <div class="scroll">

<?php

if(isset($_POST['submit'])) {
 $search=$_POST['search']; 
}
 ?>
 <div id="sort">
  <table id="zctb"  cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th> Patient's Name </th>
											<th>Gender </th>
											<th>DateofBirth</th>
										
										<th>Address</th>
										<th>Phone</th>
										<th>Guardian Name</th>
										<th>Guardian Phone </th>
										
										</tr>
									</thead>
									<tbody>

                                    <?php 
                                    
                                    if ($search==="all"){
                                        $sql = "SELECT * from patient";
                                    } else {
                                        $sql = "SELECT * from patient WHERE Name like '%$search%' ";
                                    } 
                                    
                     $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;    
                      if($query->rowCount() > 0)
                      {
                      foreach($results as $result)
                      {				?>	
                                                <?php  $id=($result->ArtRegNo);?>
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><a href="profile.php?pid=<?php echo $id;?>"> <?php echo htmlentities($result->Name);?> </a></td>
											<td><?php echo htmlentities($result->Gender);?></td>
											<td><?php echo htmlentities($result->DoB);?></td>
											<td><?php echo htmlentities($result->Address);?></td>
											<td><?php echo htmlentities($result->PatientNo);?></td>
											<td><?php echo htmlentities($result->GuardianName);?></td>
											<td><?php echo htmlentities($result->GuardianNo);?></td>
										</tr>
										
										<?php $cnt=$cnt+1; }} ?>
                   
										
									</tbody>
								</table>
                </div>
<div class="space"> </div>
</div>
</div> 
</header>

    <!-----------------------------------  Main --------------------------------------------------->


    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
            window.sr = ScrollReveal();
    
            sr.reveal('.res', {
              duration: 2000,
              delay: 2000,
              origin:'right',
              distance:'300px'
            });

      
            sr.reveal('.wrapperr', {
              duration: 2000,
              delay: 600,
              origin:'right',
              distance:'100px'
            });

            sr.reveal('.wra', {
              duration: 2000,
              delay: 600,
              origin:'bottom',
              distance:'100px'
            });  

           sr.reveal('.bashboard', {
              duration: 2000,
              delay: 400,
              origin:'top',
              distance:'100px'
            }); 
         

   
      
        </script>
    <script>
            var swiper = new Swiper('.swiper-container', {
              spaceBetween: 0,
              centeredSlides: true,
              keyboard: {
                enabled: true,
              },
              autoplay: {
                delay: 9000,
                disableOnInteraction: false,
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          </script>

        <script>

          $(function() {
            // Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function() {
              if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                  $('html, body').animate({
                    scrollTop: target.offset().top
                  }, 1000);
                  return false;
                }
              }
            });
          });
          </script>
</body>
</html>

















