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
                   <li><a href="index.php"  class="fas fa-home active"></a> </li>
                   <li><a href="search.php" class="fas fa-user"></a> </li>
                   <li><a href="addaccount.php" class="fas fa-user-plus"></a> </li>

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
    
      <div class="scroll bashboard-i">
        <h3 class="bashboard"> Dashboard</h3>
          <div class="wra">
            <div> <?php 
          $sql ="SELECT name from patient ";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
            <P>Total Registered Patients</P>
          <div class="bottom"> Full Details </div> 
        
          </div>

           <div> <?php 
          $sql ="SELECT * from patient where gender='M'";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
             <P>Male Patients</P>
          <div class="bottom"> Full Details </div>
          </div>

           <div> <?php 
          $sql ="SELECT * from patient where gender='F'";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
           <P>Female Patients</P>
          <div class="bottom"> Full Details </div>
          </div>
          <div> <?php 
          $sql ="SELECT name from patient ";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
             <P>Total Registered Patients</P>
          <div class="bottom " > Full Details </div>
          </div>
          
          <div> <?php 
          $sql ="SELECT name from patient ";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
             <P>Total Registered Patients</P>
          <div class="bottom"> Full Details </div>
          </div>

           <div> <?php 
          $sql ="SELECT name from patient ";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $regusers=$query->rowCount();
          ?>   <h1 class="count"> <?php echo htmlentities($regusers);?> </h1>
             <P>Total Registered Patients</P>
          <div class="bottom"> Full Details </div>
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