<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>
<?php
//error_reporting(0);
if(isset($_POST['submit'])) {
  header('Location:search.php');

 $TransferDate=$_POST['TransferDate'];
 $ArtRegNo=$_POST['ArtRegNo'];
 $ChildNo=$_POST['ChildNo'];
 $Year=$_POST['Year'];
 $Name=$_POST['Name'];
 $Gender=$_POST['Gender'];
 $DoB=$_POST['DoB'];
 $Address=$_POST['Address'];
 $GuardianName=$_POST['GuardianName'];
 $PatientNo=$_POST['PatientNo'];
 $GuardianNo=$_POST['GuardianNo'];
 $FUB=$_POST['FUB'];
 $GRelation=$_POST['GRelation'];
 $RelatedDis=$_POST['RelatedDis'];
 $CD4=$_POST['CD4'];
 $CD4Date=$_POST['CD4Date'];
 $Height=$_POST['Height'];
 $Weight=$_POST['Weight'];
 $AgeInit=$_POST['AgeInit'];
 $TBStatus=$_POST['TBStatus'];
 $KS=$_POST['KS'];
 $PregBf=$_POST['PregBf'];
 $Arvs=$_POST['Arvs'];
 $LastArvsDate=$_POST['LastArvsDate'];
 $SerialNo=$_POST['SerialNo'];
 $TestDate=$_POST['TestDate'];
 $TestResult=$_POST['TestResult'];
 $ARTeduct=$_POST['ARTeduct'];
 $ARTeductDate=$_POST['ARTeductDate'];
 $TBtreatm=$_POST['TBtreatm'];
 $TBtreatmDate=$_POST['TBtreatmDate'];
 $ARTreg=$_POST['ARTreg'];
 $ARTregDate=$_POST['ARTregDate'];

try {
$sql="INSERT INTO  patient(TransferDate,ArtRegNo,ChildNo,Year,Name,Gender,DoB,Address,GuardianName,PatientNo,GuardianNo,FUB,GRelation,RelatedDis,CD4,CD4Date,Height,Weight,AgeInit,TBStatus,KS,PregBf,Arvs,LastArvsDate,SerialNo,TestDate,TestResult,ARTeduct,ARTeductDate,TBtreatm,TBtreatmDate,ARTreg,ARTregDate) VALUES(:TransferDate,:ArtRegNo,:ChildNo,:Year,:Name,:Gender,:DoB,:Address,:GuardianName,:PatientNo,:GuardianNo,:FUB,:GRelation,:RelatedDis,:CD4,:CD4Date,:Height,:Weight,:AgeInit,:TBStatus,:KS,:PregBf,:Arvs,:LastArvsDate,:SerialNo,:TestDate,:TestResult,:ARTeduct,:ARTeductDate,:TBtreatm,:TBtreatmDate,:ARTreg,:ARTregDate)";
$query = $dbh->prepare($sql);
$query->bindParam(':TransferDate',$TransferDate,PDO::PARAM_STR);
$query->bindParam(':ArtRegNo',$ArtRegNo,PDO::PARAM_STR);
$query->bindParam(':ChildNo',$ChildNo,PDO::PARAM_STR);
$query->bindParam(':Year',$Year,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
$query->bindParam(':DoB',$DoB,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':GuardianName',$GuardianName,PDO::PARAM_STR);
$query->bindParam(':PatientNo',$PatientNo,PDO::PARAM_STR);
$query->bindParam(':GuardianNo',$GuardianNo,PDO::PARAM_STR);
$query->bindParam(':FUB',$FUB,PDO::PARAM_STR);
$query->bindParam(':GRelation',$GRelation,PDO::PARAM_STR);
$query->bindParam(':RelatedDis',$RelatedDis,PDO::PARAM_STR);
$query->bindParam(':CD4',$CD4,PDO::PARAM_STR);
$query->bindParam(':CD4Date',$CD4Date,PDO::PARAM_STR);
$query->bindParam(':Height',$Height,PDO::PARAM_STR);
$query->bindParam(':Weight',$Weight,PDO::PARAM_STR);
$query->bindParam(':AgeInit',$AgeInit,PDO::PARAM_STR);
$query->bindParam(':TBStatus',$TBStatus,PDO::PARAM_STR);
$query->bindParam(':KS',$KS,PDO::PARAM_STR);
$query->bindParam(':PregBf',$PregBf,PDO::PARAM_STR);
$query->bindParam(':Arvs',$Arvs,PDO::PARAM_STR);
$query->bindParam(':LastArvsDate',$LastArvsDate,PDO::PARAM_STR);
$query->bindParam(':SerialNo',$SerialNo,PDO::PARAM_STR);
$query->bindParam(':TestDate',$TestDate,PDO::PARAM_STR);
$query->bindParam(':TestResult',$TestResult,PDO::PARAM_STR);
$query->bindParam(':ARTeduct',$ARTeduct,PDO::PARAM_STR);
$query->bindParam(':ARTeductDate',$ARTeductDate,PDO::PARAM_STR);
$query->bindParam(':TBtreatm',$TBtreatm,PDO::PARAM_STR);
$query->bindParam(':TBtreatmDate',$TBtreatmDate,PDO::PARAM_STR);
$query->bindParam(':ARTreg',$ARTreg,PDO::PARAM_STR);
$query->bindParam(':ARTregDate',$ARTregDate,PDO::PARAM_STR);
$query->execute();
} catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
}

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
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!---------------------------------  Header -------------------------------->
    <header>
        <!--------------- swiper-containerer ------------------------>
        <div class="swiper-container">


          <!----------- nav ----------->
          <nav class="sticky">
                <ul>
                   <li><a href="index.php"  class="fas fa-home"></a> </li>
                   <li><a href="search.php" class="fas fa-user"></a> </li>
                   <li><a href="addaccount.php" class="fas fa-user-plus active"></a> </li>

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
         


  <!----------- Main Article ----------->

    <div class="scroll">
    <form  method="post" name="submit">
      
            <div class="wrapperr">
                  <div> 
                  <div id="field"> 
                  <i class="fas fa-id-badge"></i> 
                    <input type="text" name="TransferDate" class="small mss" placeholder="Master Card"> <br><br>
                   </div>
                   <h5>Patient / Guardian Details</h5>  <br>

                    <div id="field"> 
                      <i class="fas fa-user"></i> 
                      <input type="text" name="Name" placeholder="Patient Name" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                     
                    </div>

                    <div class="sub">
                        <b class="inner">Gender</b>  
                         <label class="contain"> Male

                             <input type="radio" checked="checked" name="Gender" value="M">
                             <span class="checkmark"></span>
                           </label>
     
                           <label class="contain"> Female
                             <input type="radio" name="Gender" value="F">
                             <span class="checkmark"></span>
                           </label>
                         </div>

                    Date of Birth 
                    <div id="field"> 
                        <i class="fas fa-calendar-alt"></i> 
                        <input type="date" name="DoB" placeholder="DOB" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                      
                    </div>
                    <div id="field"> 
                    <i class="fas fa-map-marked-alt"></i> 
                    <input type="textarea"  name="Address" placeholder="Physical Address" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                    </div>

                    Guardain
                    <div id="field"> 
                    <i class="fas fa-user-tag"></i> 
                    <input type="text" name="GuardianName" placeholder="Guardain Name" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                    </div>
                    <div id="field"> 
                    <i class="fas fa-user-friends"></i> 
                    <input type="text" name="GRelation" placeholder="Guardain Relation" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                    </div>

                  
                    <div class="half">  Patient's Phone Number
                    <div id="field"> 
                        <i class="fas fa-mobile-alt"></i> 
                    <input type="text" name="PatientNo" class="small" placeholder="Patient Phone" onchange="this.className=(this.value=='')?'':'visted'"; required>
                    </div>
                    </div>

                   <div class="half">  Guardian's Phone Number
                    <div id="field" >  
                        <i class="fas fa-mobile-alt"></i> 
                    <input type="text" name="GuardianNo" class="small right-small" placeholder="Guardain Phone" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                    </div>
                    </div>



                    <div class="sub">
                   <b class="inner">Agree to FUB</b>  
                    <label class="contain"> Yes
                        <input type="radio" checked="checked" name="FUB" value="Y">
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> No
                        <input type="radio" name="FUB" value="N">
                        <span class="checkmark"></span>
                      </label>
                    </div>

                  </div>



                 
                  <div class="con"> 

                    <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i> 
                  <input type="date" name="TransferDate" class="small up" placeholder="Transfer-In Date" required>  
                  </div>

                    <div id="field" class="half"> 
                        <i class="fas fa-id-badge"></i> 
                    <input type="text" name="ArtRegNo" class="small up" placeholder="ART Reg No." required>  <br>   <br>  
                    </div>
                    <h5>Status at ART Initiation</h5> 

                    <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="RelatedDis" placeholder="HIV-related Diseases" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>        
                    </div>

                    <div id="field" class="half"> 
                        <i class="fas fa-list-ul"></i>
                    <input type="text" name="CD4" class="small" placeholder="CD4" onchange="this.className=(this.value=='')?'':'visted'"; required>
                    </div>

                    <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="CD4Date" class="small right-small" placeholder="CD4 Date" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                   </div>

                    <div class="half"> Height
                      <div id="field" > 
                          <i class="fas fa-male"></i>
                      <input type="text" name="Height" class="small" placeholder="    cm" onchange="this.className=(this.value=='')?'':'visted'"; required> 
                      </div>
                    </div>

                    <div class="half"> Weight
                      <div id="field" > 
                          <i class="fas fa-weight"></i>
                      <input type="text" name="Weight" class="small right-small" placeholder="    kg" onchange="this.className=(this.value=='')?'':'visted'"; required> 
                      </div>
                    </div>
        


                      <div class="sub">
                          <b class="inner">Ever taken ARVs</b>  
                           <label class="contain"> Yes
                               <input type="radio" checked="checked" name="Arvs" value="Y">
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" name="Arvs" value="N">
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>

                   Last ARVs (Drug date)  <br>
                     
                   <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="LastArvsDate" placeholder="DOB" onchange="this.className=(this.value=='')?'':'visted'"; required> <br>
                    </div>

                <div class="sub">
                  <b class="inner">TB Status</b>   
                    <label class="contain"> N/>2yrs
                        <input type="radio" checked="checked" value="N/>2yrs" name="TBStatus" onchange="this.className=(this.value=='')?'':'visted'"; required>
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> Last2yrs
                        <input type="radio" name="TBStatus" value="Last2yrs">
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> Curr
                          <input type="radio" name="TBStatus" value="Curr">
                          <span class="checkmark"></span>
                        </label>  <br>
                        </div>

                      <div class="sub">
                          <b class="inner">KS</b>  
                           <label class="contain"> Yes
                               <input type="radio" checked="checked" value="Y" name="KS">
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" name="KS" value="N" >
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>

                      <div id="field"> 
                        <i class="fas fa-calendar-times"></i>
                      <input type="text" name="AgeInit" placeholder="Age at Init." required onchange="this.className=(this.value=='')?'':'visted'";> <br>  
                      </div>
           
                        <div class="sub">
                            <b class="inner">Preg/BreastF</b>  
                             <label class="contain"> No
                                 <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="checkmark"></span>
                               </label>
         
                               <label class="contain"> Preg
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="checkmark"></span>
                               </label> 

                               <label class="contain"> Bf
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="checkmark"></span>
                                </label> <br>
                             </div>
            
                  
                  </div>

                  

                  <div> 
                  <div id="field" class="half"> 
                        <i class="fas fa-child"></i>
                      <input type="text" class="small up" name="ChildNo" placeholder=" Child HCC No." onchange="this.className=(this.value=='')?'':'visted'"; required>
                  </div>
                  <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i>
                      <input type="date" class="small up" name="Year" placeholder="" onchange="this.className=(this.value=='')?'':'visted'"; required><br><br>
                  </div>

                     <h5> Confirmatory HIV Test before ART Start</h5>  

                    <div id="field"> 
                        <i class="fas fa-user-circle"></i>
                    <input type="text" name="SerialNo" placeholder="Site, HTC Serial No." onchange="this.className=(this.value=='')?'':'visted'"; required> 
                    </div>
                    Test Date
                    <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="TestDate" placeholder="TEST Date" onchange="this.className=(this.value=='')?'':'visted'"; required>
                    </div> 

                    <div class="sub">
                        <b class="inner">Test</b>  
                         <label class="contain"> Rapid
                             <input type="radio" checked="checked" value="Rapid" name="TestResult">
                             <span class="checkmark"></span>
                           </label>
     
                           <label class="contain"> PCR
                             <input type="radio" value="PCR" name="TestResult">
                             <span class="checkmark"></span>
                           </label> <br>
                         </div>
             
                      <div class="sub">
                          <b class="inner">ART educat done</b>  
                           <label class="contain"> Yes
                               <input type="radio" checked="checked" value="Y" name="ARTeduct">
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" value="N" name="ARTeduct">
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>
          
                  <div id="field"> 
                        <i class="fas fa-calendar-week"></i>
                   <input type="date" name="ARTeductDate" required> <br>
                   </div>

                 
                 <div class="half">TB treatm
                 <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="TBtreatm" class="small" placeholder="Reg No." required onchange="this.className=(this.value=='')?'':'visted'"; >
                  </div>
                  </div>

               <div class="half"> Date
                  <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="TBtreatmDate" class="small right-small" required onchange="this.className=(this.value=='')?'':'visted';" /> <br>
                    </div>
                </div>

                 <div class="half">ART Regimens
                  <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="ARTreg" class="small" placeholder="Regimen" required onchange="this.className=(this.value=='')?'':'visted'";>
                    </div>
                 </div>

                 <div class="half"> Date
                    <div id="field" > 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="ARTregDate"class="small right-small" required onchange="this.className=(this.value=='')?'':'visted'";> <br>
                    </div>
                </div>
                    <input type="submit" name="submit" value="SUBMIT"> <br>

            </div>
        </form>
        </div>
      </div>
    </header>

    <!-----------------------------------  End --------------------------------------------------->


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
              duration: 1000,
              delay: 1,
              origin:'right',
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