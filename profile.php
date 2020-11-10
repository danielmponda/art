<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<?php

if(isset($_GET['pid'])) {
 $pid=$_GET['pid'];
}
?>
                  
                    <?php         
                      $sql = "SELECT * from patient WHERE ArtRegNo = $pid ";           
                      $query = $dbh -> prepare($sql);
                      $query->execute();
                      $results=$query->fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;    
                      if($query->rowCount() > 0)
                      {
                      foreach($results as $result)
                      {				?>


<?php
//error_reporting(0);
if(isset($_POST['submit'])) {
  header('Location: '.$_SERVER['REQUEST_URI']);
 
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

  $TransferDate= date("y-m-d", strtotime($TransferDate));
  $Year = date('y-m-d', strtotime($Year));
  $DoB = date('y-m-d', strtotime($DoB));
  $CD4Date = date('y-m-d', strtotime($CD4Date));
  $TestDate = date('y-m-d', strtotime($TestDate));
  $ARTeductDate = date('y-m-d', strtotime($ARTeductDate));
  $ARTregDate = date('y-m-d', strtotime($ARTregDate));
  $TBtreatmDate = date('y-m-d', strtotime($TBtreatmDate));

try {
$sql=" UPDATE patient SET TransferDate=:TransferDate, ArtRegNo=:ArtRegNo, ChildNo=:ChildNo,Year=:Year,Name=:Name,Gender=:Gender,DoB=:DoB,Address=:Address,GuardianName=:GuardianName,PatientNo=:PatientNo,GuardianNo=:GuardianNo,FUB=:FUB,GRelation=:GRelation,RelatedDis=:RelatedDis,CD4=:CD4,CD4Date=:CD4Date,Height=:Height,Weight=:Weight,AgeInit=:AgeInit,TBStatus=:TBStatus,KS=:KS,PregBf=:PregBf,Arvs=:Arvs,LastArvsDate=:LastArvsDate,SerialNo=:SerialNo,TestDate=:TestDate,TestResult=:TestResult,ARTeduct=:ARTeduct,ARTeductDate=:ARTeductDate,TBtreatm=:TBtreatm,TBtreatmDate=:TBtreatmDate,ARTreg=:ARTreg,ARTregDate=:ARTregDate 
WHERE ArtRegNo='$pid' ";


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
  }
  catch (PDOException $e)
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
                    $fulname=($result->Name);
                    $gender=($result->Gender);
                    $FUB=($result->FUB);
                    $TBStatus=($result->TBStatus);
                    $KS=($result->KS);
                    $PregBf=($result->PregBf);
                    $Arvs=($result->Arvs);
                    $TestResult=($result->TestResult);
                    $ARTeduct=($result->ARTeduct);
            ?>
            
<form  method="post" name="submit">
            <div class="wrapperr profile">
               
                  <div> 
                  <div id="field"> 
                  <i class="fas fa-id-badge"></i> 
                  <input type="text" name="TransferDate" class="small mss" placeholder="Master Card"> <br><br>
                  </div>   

                  <h5>Patient / Guardian Detials</h5>  
                    
                  <div id="field"> 
                  <i class="fas fa-user"></i> 
                  <input type="text" name="Name" placeholder="" value="<?php echo htmlentities($result->Name);?>"> <br>
                  </div>
                  

                  <div class="sub">
                        <b class="inner">Gender</b>  
                         <label class="contain"> Male
                             <input type="radio" value="M" name="Gender" <?php  
                            if($gender=='M'){echo "checked='checked'";} else {echo "";}?>name="radio">
                             <span class="checkmark"></span>
                           </label>
                        
                           <label class="contain"> Female
                             <input type="radio" value="F" name="Gender" <?php  
                            if($gender=='F'){echo "checked='checked'";} else {echo "";}?>> 
                             <span class="checkmark"></span>
                           </label>
                         </div>

                               

                    Date of Birth 
                    <div id="field"> 
                        <i class="fas fa-calendar-alt"></i> 
                    <input type="date" name="DoB" value="<?php echo htmlentities($result->DoB);?>"> <br>
                    </div>

                     <div id="field"> 
                    <i class="fas fa-map-marked-alt"></i>
                    <input type="textarea" value="<?php echo htmlentities($result->Address);?>" name="Address" placeholder="Physical Address" > <br>
                    </div>

                    Guardain
                    <div id="field"> 
                    <i class="fas fa-user-tag"></i> 
                    <input type="text" name="GuardianName" placeholder="Guardain Name" value="<?php echo htmlentities($result->GuardianName);?>"> <br>
                    </div>

                    <div id="field"> 
                    <i class="fas fa-user-friends"></i> 
                    <input type="text" name="GRelation" placeholder="Guardain Relation" value="<?php echo htmlentities($result->GRelation);?>"> <br>
                    </div>
                    
                    <div class="half">  Patient's Phone Number
                    <div id="field"> 
                    <i class="fas fa-mobile-alt"></i> 
                    <input type="text" name="PatientNo" class="small" placeholder="Patient Phone" value="<?php echo htmlentities($result->PatientNo);?>">
                    </div>
                    </div>
                    <div class="half">  Guardian's Phone Number
                    <div id="field" >  
                    <i class="fas fa-mobile-alt"></i>
                    <input type="text" name="GuardianNo" class="small" placeholder="Guardain Cell" value="<?php echo htmlentities($result->GuardianNo);?>"> <br>
                    </div>
                    </div>

                    <div class="sub">
                   <b class="inner">Agree to FUB</b>  
                    <label class="contain"> Yes
                        <input type="radio" value="Y" name="FUB"  <?php  
                            if($FUB=='Y'){echo "checked='checked'";} else {echo "";}?>>
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> No
                        <input type="radio" value="N" name="FUB"  <?php  
                            if($FUB=='N'){echo "checked='checked'";} else {echo "";}?>>
                        <span class="checkmark"></span>
                      </label>
                    </div>

                  </div>



                 
                  <div class="con"> 

                  <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i> 
                  <input type="date" name="TransferDate" class="small up" value="<?php echo htmlentities($result->TransferDate);?>">
                  </div>
                    
                  <div id="field" class="half"> 
                        <i class="fas fa-id-badge"></i> 
                    <input type="text" name="ArtRegNo" class="small up" placeholder="ART Reg No." value="<?php echo htmlentities($result->ArtRegNo);?>">  <br>   <br>  
                    </div>

                    <h5> Status at ART Initioation </h5> 

                    <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="RelatedDis" placeholder="HIV-related Diseases" value="<?php echo htmlentities($result->RelatedDis);?>"> <br>        
                    </div>

                     <div id="field" class="half"> 
                        <i class="fas fa-list-ul"></i>
                    <input type="text" name="CD4" class="small" placeholder="CD4" value="<?php echo htmlentities($result->CD4);?>">
                    </div>

                    <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="CD4Date"  class="small"  value="<?php echo htmlentities($result->CD4Date);?>">      
                    </div>
                    
                 
                    <div class="half"> Height: Cm
                      <div id="field" > 
                          <i class="fas fa-male"></i> 
                        <input type="text" name="Height" class="small" placeholder="Height    cm" value="<?php echo htmlentities($result->Height);?>">
                        </div>
                    </div>

                    <div class="half"> Weight: Kg
                      <div id="field" > 
                      <i class="fas fa-weight"></i>
                        <input type="text" name="Weight" class="small" placeholder="Weight    kg" value="<?php echo htmlentities($result->Weight);?>"> <br>
                        </div>
                    </div>
        


                      <div class="sub">
                          <b class="inner">Ever taken ARVs</b>  
                           <label class="contain"> Yes
                               <input type="radio" value="Y" name="Arvs" <?php  
                            if($Arvs=='Y'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" value="N" name="Arvs" <?php  
                            if($Arvs=='N'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>

                   Last ARVs (Drug date)  <br>

                   <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="LastArvsDate" value="<?php echo htmlentities($result->LastArvsDate);?>"> <br>
                    </div>


                 <div class="sub">
                  <b class="inner">TB Status</b>   
                    <label class="contain"> N/>2yrs
                        <input type="radio" value="N/>2yrs" name="TBStatus" <?php  
                            if($TBStatus=='N/>2yrs'){echo "checked='checked'";} else {echo "";}?>>
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> Last2yrs
                        <input type="radio" value="Last2yrs" name="TBStatus" <?php  
                            if($TBStatus=='Last2yrs'){echo "checked='checked'";} else {echo "";}?>>
                        <span class="checkmark"></span>
                      </label>

                      <label class="contain"> Curr
                          <input type="radio" value="Curr" name="TBStatus" <?php  
                            if($TBStatus=='Curr'){echo "checked='checked'";} else {echo "";}?>>
                          <span class="checkmark"></span>
                        </label>  <br>

                      </div>
                    
                      <div class="sub">
                          <b class="inner">KS</b>  
                           <label class="contain"> Yes
                               <input type="radio" value="Y" name="KS" <?php  
                            if($KS=='Y'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" value="N" name="KS" <?php  
                            if($KS=='N'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>

                    <div id="field"> 
                        <i class="fas fa-calendar-times"></i>
                      <input type="text" name="AgeInit" placeholder="Age at Init" value="<?php echo htmlentities($result->AgeInit);?>"> <br>  
                      </div>

                        <div class="sub">
                            <b class="inner">Preg/BreastF</b>  
                             <label class="contain"> No
                                 <input type="radio" value="N" name="PregBf" <?php  
                            if($PregBf=='N'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="checkmark"></span>
                               </label>
         
                               <label class="contain"> Preg
                                 <input type="radio" value="Preg" name="PregBf" <?php  
                            if($PregBf=='Preg'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="checkmark"></span>
                               </label> 

                               <label class="contain"> Bf
                                  <input type="radio" value="Bf" name="PregBf" <?php  
                            if($PregBf=='Bf'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="checkmark"></span>
                                </label> <br>
                             </div>
                  </div>

                  

                  <div> 

                  <div id="field" class="half"> 
                        <i class="fas fa-child"></i>
                      <input type="text" name="ChildNo" class="small up" placeholder=" Chils HCC No." value="<?php echo htmlentities($result->ChildNo);?>">
                    </div>

                      <div id="field" class="half"> 
                        <i class="fas fa-calendar-alt"></i>
                      <input type="date" name="Year" class="small up"  value="<?php echo htmlentities($result->Year);?>">  <br> <br>
                      </div>

                    
                    <h5> Confirmatory HIV Test before ART Start</h5>  
                  
                    <div id="field"> 
                        <i class="fas fa-user-circle"></i>
                    <input type="text" name="SerialNo" placeholder="Site, HTC Serial No" value="<?php echo htmlentities($result->SerialNo);?>"> 
                    </div>
                    Test Date
                    <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date"  name="TestDate"  value="<?php echo htmlentities($result->TestDate);?>"> 
                    </div> 

                    <div class="sub">
                        <b class="inner">Test</b>  
                         <label class="contain"> Rapid
                             <input type="radio" value="Rapid" name="TestResult" <?php  
                            if($TestResult=='Rapid'){echo "checked='checked'";} else {echo "";}?>>
                             <span class="checkmark"></span>
                           </label>
     
                           <label class="contain"> PCR
                             <input type="radio" value="PCR" name="TestResult" <?php  
                            if($TestResult=='PCR'){echo "checked='checked'";} else {echo "";}?>>
                             <span class="checkmark"></span>
                           </label> <br>
                         </div>
             
                      <div class="sub">
                          <b class="inner">ART educat done</b>  
                           <label class="contain"> Yes
                               <input type="radio" value="Y" name="ARTeduct" <?php  
                            if($ARTeduct=='Y'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label>
       
                             <label class="contain"> No
                               <input type="radio" value="N" name="ARTeduct" <?php  
                            if($ARTeduct=='N'){echo "checked='checked'";} else {echo "";}?>>
                               <span class="checkmark"></span>
                             </label> <br>
                           </div>
          
                  <div id="field"> 
                        <i class="fas fa-calendar-week"></i>
                   <input type="date" name="ARTeductDate" value="<?php echo htmlentities($result->ARTeductDate);?>"> <br>
                   </div>

                  <div class="half">TB treatm
                 <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="TBtreatm" class="small" placeholder="Reg No." value="<?php echo htmlentities($result->TBtreatm);?>">
                    </div>
                  </div> 

                <div class="half"> Date
                  <div id="field"> 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date"  name="TBtreatmDate" class="small"  value="<?php echo htmlentities($result->TBtreatmDate);?>"> <br>
                     </div>
                  </div>

                 <div class="half">ART Regimens
                  <div id="field"> 
                        <i class="fas fa-clipboard-list"></i>
                    <input type="text" name="ARTreg" class="small" value="<?php echo htmlentities($result->ARTreg);?>">
                    </div>
                 </div>

                <div class="half"> Date
                    <div id="field" > 
                        <i class="fas fa-calendar-alt"></i>
                    <input type="date" name="ARTregDate" class="small"  value="<?php echo htmlentities($result->ARTregDate);?>"> <br>
                    </div>
                  </div>

                    <input type="submit" name="submit" value="UPDATE">
            </div>
            </form>
        </div>
        <?php $cnt=$cnt+1; }} ?>

































<?php
//error_reporting(0);
if(isset($_POST['submitvis'])) {
  header('Location: '.$_SERVER['REQUEST_URI']);

  $VisitDate=$_POST['VisitDate'];
  $PregBf=$_POST['PregBf'];
  $TBStatus=$_POST['TBStatus'];
  $SideEffects=$_POST['SideEffects'];
  $PillCount=$_POST['PillCount'];
  $DosesMis=$_POST['DosesMis'];
  $ARTReg=$_POST['ARTReg'];
  $NoARVsGiven=$_POST['NoARVsGiven'];
  $Givento=$_POST['Givento'];
  $CptIptGiven=$_POST['CptIptGiven'];
  $NoTabs=$_POST['NoTabs'];
  $DepoGiven=$_POST['DepoGiven'];
  $NoCons=$_POST['NoCons'];
  $Months=$_POST['Months'];
  $VLTaken=$_POST['VLTaken'];
  $Results=$_POST['Results'];
  $NextAppDate=$_POST['NextAppDate'];
  $AdOutcome=$_POST['AdOutcome'];  
  $Weight=$_POST['Weight'];
  $Notes=$_POST['Notes'];

  $VisitDate= date("y-m-d", strtotime($VisitDate));
  $NextAppDate = date('y-m-d', strtotime($NextAppDate));
  $ArtRegNo = $pid;

try {
$sql=" INSERT INTO  visitation(ArtRegNo,VisitDate,PregBf,TBStatus,SideEffects,PillCount,DosesMis,ARTReg,NoARVsGiven,Givento,CptIptGiven,NoTabs,DepoGiven,NoCons,Months,VLTaken,Results,NextAppDate,AdOutcome,Weight,Notes) VALUES (:ArtRegNo,:VisitDate,:PregBf,:TBStatus,:SideEffects,:PillCount,:DosesMis,:ARTReg,:NoARVsGiven,:Givento,:CptIptGiven,:NoTabs,:DepoGiven,:NoCons,:Months,:VLTaken,:Results,:NextAppDate,:AdOutcome,:Weight,:Notes)";
$query = $dbh->prepare($sql);
$query->bindParam(':ArtRegNo',$ArtRegNo,PDO::PARAM_STR);
$query->bindParam(':VisitDate',$VisitDate,PDO::PARAM_STR);
$query->bindParam(':Weight',$Weight,PDO::PARAM_STR);
$query->bindParam(':PregBf',$PregBf,PDO::PARAM_STR);
$query->bindParam(':TBStatus',$TBStatus,PDO::PARAM_STR);
$query->bindParam(':SideEffects',$SideEffects,PDO::PARAM_STR);
$query->bindParam(':PillCount',$PillCount,PDO::PARAM_STR);
$query->bindParam(':DosesMis',$DosesMis,PDO::PARAM_STR);
$query->bindParam(':ARTReg',$ARTReg,PDO::PARAM_STR);
$query->bindParam(':NoARVsGiven',$NoARVsGiven,PDO::PARAM_STR);
$query->bindParam(':Givento',$Givento,PDO::PARAM_STR);
$query->bindParam(':CptIptGiven',$CptIptGiven,PDO::PARAM_STR);
$query->bindParam(':NoTabs',$NoTabs,PDO::PARAM_STR);
$query->bindParam(':DepoGiven',$DepoGiven,PDO::PARAM_STR);
$query->bindParam(':NoCons',$NoCons,PDO::PARAM_STR);
$query->bindParam(':Months',$Months,PDO::PARAM_STR);
$query->bindParam(':VLTaken',$VLTaken,PDO::PARAM_STR);
$query->bindParam(':Results',$Results,PDO::PARAM_STR);
$query->bindParam(':NextAppDate',$NextAppDate,PDO::PARAM_STR);
$query->bindParam(':AdOutcome',$AdOutcome,PDO::PARAM_STR);
$query->bindParam(':Notes',$Notes,PDO::PARAM_STR);

$query->execute();
} catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
}

?>






  <div id="visitations">

            <h1>Visitations</h1>

         <!-- <div class="vis"> 
              <div> Visit Date <br> DD/MM/YY </div>
              <div class="little"> Weight  <br>Kg</div>
              <div class="larger"> Preg / <br>BreastF</div>
              <div> TB   <br>Status</div>
              <div class="little"> Side  <br>Effects</div>
              <div > Pill  <br>Count</div>
              <div  class="little"> Doses  <br>Missed</div>
              <div> ART  <br>Regimen</div>
              <div class="little"> ARVs  <br>No.table</div>
              <div >  <br> to</div>
              <div> CPT/IPT  <br>Given</div>
              <div> No. <br>table </div>
              <div class="little"> Family  <br>Plan<br>ning</div>
              <div class="little"> No.<br>Con</div>
              <div> Month  <br>ART</div>
              <div> Viral  <br>Load</div>
              <div class="little"> Results</div>
              <div> Next  <br>Appointmnet<br>Outcome Date</div>
              <div> Adverse  <br>Outcome</div>
              <div>  </div>
              

              <div> <input type="date"></div>
              <div><input type="text"></div>
              <div class="larger">
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>No</b> 
                               </label>
         
                               <label class="viscontain">  <b>Pr</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>Bf</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> <br>
                             </div>
              </div>
              <div>
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>C</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 

                                <label class="viscontain">  <b>R</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
              </div>
              <div class="larger2">
              <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>NO</b> 
                               </label>
         
                               <label class="viscontain">  <b>YES</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                             </div>
              </div>
              <div  class="larger2"><input type="text" ></div>
              <div  class="larger2"><input type="text" ></div>

              <div  class="larger2">          
                <select name="TB">
                  <option value="0">0</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="0th">0th</option>
                </select>
              </div>

              <div  class="larger2"> <input type="text">
           
            </div>
            
            <div class="larger2">   
            <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>No</b> 
                               </label>
         
                               <label class="viscontain">  <b>Preg</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               
                             </div>
              </div>


              <div>  
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>C</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 

                                <label class="viscontain">  <b>R</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
                
              </div>
              <div  class="larger2"><input type="text"></div>
              <div  class="larger2"><input type="text"></div>
              <div  class="larger2"><input type="text"></div>
              <div  class="larger2"><input type="text"></div>
              <div><input type="text" value="Bled"></div>
              <div  class="larger2"><input type="text"></div>
              <div><input type="date"></div>

              <div> 
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="PregBf">
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>C</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 

                                <label class="viscontain">  <b>R</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
              </div>
            
             
             -->

            <div class="newtable">

           <table >
           <tr>
           <th> Visit Date </th>
           <th> Weight  </th>
           <th> <div class="larger"> Pregnant/<br>BreastFeed</div></th>
           <th><div> TB   <br>Status</div></th>
           <th><div> Side  <br>Effects</div></th>
           <th> <div > Pill  <br>Count</div></th>
           <th><div  class="little"> Doses  <br>Missed</div></th>
           <th> <div> ART Regimen</div></th>
           <th colspan="2"> <div class="little" > ARVs Given</div></th>
          
           <th  colspan="2">  <div> CPT/IPT <br> Given</div></th>
           
           <th colspan="2"> <div class="little"> Family  <br>Planning</div></th>
           
           <th>   <div> Month  <br>ART</div></th>
           <th colspan="2">  <div> Viral  <br>Load</div></th>
          
           <th><div class="larger"> Next  <br>Appointmnet<br>Outcome Date</div></th>
           <th><div> Adverse  <br>Outcome</div></th>
        
           </tr>
           <tr>
           <td> DD/MM/YY </td>
           <td>   Kg</td>
           <td> <div > Write Child <br> HCC no if Bf</div></td>
           <td><div> Suspected/<br>Confirmed</div></td>
           <td><div> Specity in notes</div></td>
           <td> <div ></div></td>
           <td><div  class="little"> </div></td>
           <td> <div> Adult  <br>Fomulations</div></td>
           <td> <div class="little "> No.of<br>tables</div></td>

           <td> <div class="little ">  <br> to</div></td>
           <td>  <div class="move"> <span class="one">CPT Only</span> <span class="two">IPT Only</span><span class="three">CPT+IPT</span></div></td>
           <td>  <div div class="little"> No.of<br>tables  </div></td>

           <td> <div class="little"> Depo  <br>Given</div></td>
           <td> <div class="little"> No.of <br>Condom</div></td>
           <td>   <div> </div></td>
           <td>  <div> Sample  <br>taken</div></td>
           <td><div class="little"> <br>Results</div></td>
           <td> <div class="larger">DD/MM/YY</div> </td>
           <td></td>
        
           </tr>
           <form  method="post" name="submitvis">
           <tr>
           <td><div class="larger"> <input type="date" name="VisitDate"></div></td>
           <td>  <div  class="little"><input type="text" name="Weight"></div></td>

           <td >
                          <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" name="PregBf" value="N" >
                                 <span class="vischeckmark">   </span>
                               <b>No</b> 
                               </label>

                               <label class="viscontain">  <b>Preg</b>
                                 <input type="radio" name="PregBf" value="Preg" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>Bf</b>
                                  <input type="radio" name="PregBf" value="Bf" >
                                  <span class="vischeckmark"></span>
                                </label> <br>
                             </div>            
           </td>



           <td>

           <div>
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="TBStatus">
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="TBStatus" value="Y" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>C</b>
                                  <input type="radio" name="TBStatus" value="C" >
                                  <span class="vischeckmark"></span>
                                </label> 

                                <label class="viscontain">  <b>Rx</b>
                                  <input type="radio" name="TBStatus" value="Rx" >
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
              </div>

           </td>
           <td>
           <div class="little">
              <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="SideEffects">
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="SideEffects" value="Y" >
                                 <span class="vischeckmark"></span>
                               </label> 

                             </div>
              </div>

           </td>
           <td> <div  class="little"><input type="text" name="PillCount"></div></td>
           <td> <div   class="little"><input type="text" name="DosesMis"></div></td>
           <td> 
           <div>          
                <select name="ARTReg">
                  <option value="0">0</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="0th">0th</option>
                </select>
              </div>
           </td>
           <td> <div  class="little"> <input type="text" name="NoARVsGiven"></td>
           <td>
 
            <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="P" name="Givento">
                                 <span class="vischeckmark"> </span>
                                 <b>P</b> 
                               </label>
         
                               <label class="viscontain">  <b>G</b>
                                 <input type="radio" name="Givento" value="G" >
                                 <span class="vischeckmark"></span>
                               </label> 
                             </div>
             
           </td>

           <td>
             <div>
              <div class="vissub vissubci">
                             <label class="viscontain"> <b>C</b> 
                                <input type="radio" checked="checked" value="C" name="CptIptGiven">
                                 <span class="vischeckmark"> </span>
                               </label>
         
                               <label class="viscontain">  <b>I</b>
                                 <input type="radio" name="CptIptGiven" value="I" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>CI</b>
                                  <input type="radio" name="CptIptGiven" value="CI" >
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
          </div>
           </td>


           <td><div  class="little"> <input type="text" name="NoTabs"> </div></td>
           <td><div  class="little"> <input type="text" name="DepoGiven"> </div></td>
           <td><div  class="little"> <input type="text" name="NoCons"> </div></td>
           <td><div  class="little"> <input type="text" name="Months"> </div></td>
           <td><div class="little"> <input type="text" name="VLTaken"value="Bled"></div></td>
           <td><div  class="little"> <input type="text" name="Results"> </div></td>
           <td><div class="larger"> <input type="date" name="NextAppDate"> </div></td>
           <td>
           <div > 
              <div class="vissub3">
                             <label class="viscontain "> 
                                  <input type="radio" checked="checked" value="D" name="AdOutcome">
                                 <span class="vischeckmark"> </span>
                                 <b>D</b> 
                               </label>
         
                               <label class="viscontain">  <b>Def</b>
                                 <input type="radio" name="AdOutcome" value="Def" >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain movelit">  <b>Stop</b>
                                  <input type="radio" name="AdOutcome" value="Stop" >
                                  <span class="vischeckmark"></span>
                                </label> 
                                <label class="viscontain movelit to">  <b>To</b>
                                  <input type="radio" name="AdOutcome" value="To" >
                                  <span class="vischeckmark"></span>
                                </label> 
                                
                             </div>
              </div>
            </td>
            <tr>
          
            </tr>
           </tr>
           </table>

            <div class="notes">
        <h4>Notes</h4>
      <div><input type="textarea" name="Notes"></div>
      <h4></h4>
      <div> <input type="submit" name="submitvis" value="SUBMIT"></div>
      </div>
</form>
        </div>
        </div>

<!-- ////////////////////////////////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////////////////////////////// -->


  
         <?php

          $sql = "SELECT * from visitation WHERE ArtRegNo='$pid' ORDER BY VisitDate ASC";

          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1; 
          
          if($query->rowCount() > 0) {
            
            echo '<div id="visitations">


            <h1 class="Formulations">Adult ARV Formulations</h1>
                    <div class="newtable Formul">
                   
                    <table >
                       <tr>
                       <th> Visit Date </th>
                       <th> Weight  </th>
                       <th> <div class="larger"> Pregnant/<br>BreastFeed</div></th>
                       <th><div> TB   <br>Status</div></th>
                       <th><div> Side  <br>Effects</div></th>
                       <th> <div > Pill  <br>Count</div></th>
                       <th><div  class="little"> Doses  <br>Missed</div></th>
                       <th> <div> ART Regimen</div></th>
                       <th colspan="2"> <div class="little" > ARVs Given</div></th>
                      
                       <th  colspan="2">  <div> CPT/IPT <br> Given</div></th>
                       
                       <th colspan="2"> <div class="little"> Family  <br>Planning</div></th>
                       
                       <th>   <div> Month  <br>ART</div></th>
                       <th colspan="2">  <div> Viral  <br>Load</div></th>
                      
                       <th><div class="larger"> Next  <br>Appointmnet<br>Outcome Date</div></th>
                       <th><div> Adverse  <br>Outcome</div></th>
                    
                       </tr>
                       <tr>
                       <td> DD/MM/YY </td>
                       <td>   Kg</td>
                       <td> <div > Write Child <br> HCC no if Bf</div></td>
                       <td><div> Suspected/<br>Confirmed</div></td>
                       <td><div> Specity in notes</div></td>
                       <td> <div ></div></td>
                       <td><div  class="little"> </div></td>
                       <td> <div> Adult  <br>Fomulations</div></td>
                       <td> <div class="little "> No.of<br>tables</div></td>
            
                       <td> <div class="little ">  <br> to</div></td>
                       <td>  <div class="move"> <span class="one">CPT Only</span> <span class="two">IPT Only</span><span class="three">CPT+IPT</span></div></td>
                       <td>  <div div class="little"> No.of<br>tables  </div></td>
            
                       <td> <div class="little"> Depo  <br>Given</div></td>
                       <td> <div class="little"> No.of <br>Condom</div></td>
                       <td>   <div> </div></td>
                       <td>  <div> Sample  <br>taken</div></td>
                       <td><div class="little"> <br>Results</div></td>
                       <td> <div class="larger">DD/MM/YY</div> </td>
                       <td></td>
                    
                       </tr>';



              foreach($results as $result)
             
              {		

                $cnt=$cnt+1;
                $PregBf=($result->PregBf);
                $TBStatus=($result->TBStatus);
                $SideEffects=($result->SideEffects);
                $NoARVsGiven=($result->NoARVsGiven);
                $CptIptGiven=($result->CptIptGiven);
                $AdOutcome=($result->AdOutcome);
                $VisitDate=($result->VisitDate);
                
                $VisitDate= date("y-m-d", strtotime($VisitDate));

             

                      

            ?>

        
           <form  method="post" name="submitvis">
           <tr class="classtray"> <td><h4> <?php echo date("F", strtotime($VisitDate))  ?></h4></td> </tr>
           <tr>
           <td><div class="larger"> <input type="date" name="VisitDate<?php echo $cnt?>" value="<?php echo htmlentities($result->VisitDate);?>"></div></td>
           <td>  <div  class="little"><input type="text" name="Weight<?php echo $cnt?>" value="<?php echo htmlentities($result->Weight);?>"></div></td>
           <td>
           <div class="larger">
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" name="PregBf<?php echo $cnt?>" value="N" <?php  
                            if($PregBf=='N'){echo "checked='checked'";} else {echo "";}?> >
                                 <span class="vischeckmark">   </span>
                               <b>No</b> 
                               </label>

                               <label class="viscontain">  <b>Preg</b>
                                 <input type="radio" name="PregBf<?php echo $cnt?>" value="Preg" <?php  
                            if($PregBf=='Preg'){echo "checked='checked'";} else {echo "";}?> >
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>Bf</b>
                                  <input type="radio" name="PregBf<?php echo $cnt?>" value="Bf"  <?php  
                            if($PregBf=='Bf'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> <br>
                             </div>
              </div>

           </td>
           <td>
           <div>
              <div class="vissub">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="TBStatus<?php echo $cnt?>" <?php  
                            if($TBStatus=='N'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="TBStatus<?php echo $cnt?>" value="Y" <?php  
                            if($TBStatus=='Y'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>C</b>
                                  <input type="radio" name="TBStatus<?php echo $cnt?>" value="C" <?php  
                            if($TBStatus=='C'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> 

                                <label class="viscontain">  <b>Rx</b>
                                  <input type="radio" name="TBStatus<?php echo $cnt?>" value="Rx" <?php  
                            if($gender=='Rx'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> 
                             </div>
              </div>

           </td>
           <td>
           <div class="little">
              <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="N" name="SideEffects<?php echo $cnt?>" <?php  
                            if($SideEffects=='N'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"> </span>
                                 <b>N</b> 
                               </label>
         
                               <label class="viscontain">  <b>Y</b>
                                 <input type="radio" name="SideEffects<?php echo $cnt?>" value="Y" <?php  
                            if($SideEffects=='Y'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"></span>
                               </label> 

                             </div>
              </div>

           </td>
           <td> <div  class="little"><input type="text" name="PillCount<?php echo $cnt?>" value="<?php echo htmlentities($result->PillCount);?>"></div></td>
           <td> <div   class="little"><input type="text" name="DosesMis<?php echo $cnt?>" value="<?php echo htmlentities($result->DosesMis);?>"></div></td>
           <td> 
           <div>          
                <select name="ARTReg">
                <option value="0"><?php echo htmlentities($result->ARTReg);?></option>
                  <option value="0">0</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="0th">0th</option>
                </select>
              </div>
           </td>
           <td> <div  class="little"> <input type="text" name="NoARVsGiven<?php echo $cnt?>" value="<?php echo htmlentities($result->NoARVsGiven);?>"></td>
           <td>
           <div class="little">   
            <div class="vissub2">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="P" name="Givento<?php echo $cnt?>" <?php  
                            if($Givento=='P'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"> </span>
                                 <b>P</b> 
                               </label>
         
                               <label class="viscontain">  <b>G</b>
                                 <input type="radio" name="Givento<?php echo $cnt?>" value="G" <?php  
                            if($Givento=='G'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"></span>
                               </label> 

                               
                             </div>
              </div>
           </td>
           <td>
           <div>  






              <div class="vissub vissubci">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="C" name="CptIptGiven<?php echo $cnt?>" <?php  
                            if($CptIptGiven=='C'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"> </span>
                                 <b>C</b> 
                               </label>
         
                               <label class="viscontain">  <b>I</b>
                                 <input type="radio" name="CptIptGiven<?php echo $cnt?>" value="I" <?php  
                            if($CptIptGiven=='I'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>CI</b>
                                  <input type="radio" name="CptIptGiven<?php echo $cnt?>" value="CI" <?php  
                            if($CptIptGiven=='CI'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> 

                              
                             </div>
                
              </div>
           </td>
           <td><div  class="little"> <input type="text" name="NoTabs<?php echo $cnt?>" value="<?php echo htmlentities($result->NoTabs);?>"> </div></td>
           <td><div  class="little"> <input type="text" name="DepoGiven<?php echo $cnt?>" value="<?php echo htmlentities($result->DepoGiven);?>"> </div></td>
           <td><div  class="little"> <input type="text" name="NoCons<?php echo $cnt?>" value="<?php echo htmlentities($result->NoCons);?>"> </div></td>
           <td><div  class="little"> <input type="text" name="Months<?php echo $cnt?>" value="<?php echo htmlentities($result->Months);?>"> </div></td>
           <td><div class="little"> <input type="text" name="VLTaken<?php echo $cnt?>" value="<?php echo htmlentities($result->VLTaken);?>"></div></td>
           <td><div  class="little"> <input type="text" name="Results<?php echo $cnt?>" value="<?php echo htmlentities($result->Results);?>"> </div></td>
           <td><div class="larger"> <input type="date" name="NextAppDate<?php echo $cnt?>" value="<?php echo htmlentities($result->NextAppDate);?>"> </div></td>
           <td>
           <div > 
              <div class="vissub3">
                             <label class="viscontain"> 
                                  <input type="radio" checked="checked" value="D" name="AdOutcome<?php echo $cnt?>" <?php  
                            if($AdOutcome=='D'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"> </span>
                                 <b>D</b> 
                               </label>
         
                               <label class="viscontain">  <b>Def</b>
                                 <input type="radio" name="AdOutcome<?php echo $cnt?>" value="Def" <?php  
                            if($AdOutcome=='Def'){echo "checked='checked'";} else {echo "";}?>>
                                 <span class="vischeckmark"></span>
                               </label> 

                               <label class="viscontain">  <b>Stop</b>
                                  <input type="radio" name="AdOutcome<?php echo $cnt?>" value="Stop" <?php  
                            if($AdOutcome=='Stop'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> 
                                <label class="viscontain movelit">  <b>To</b>
                                  <input type="radio" name="AdOutcome<?php echo $cnt?>" value="To" <?php  
                            if($AdOutcome=='To'){echo "checked='checked'";} else {echo "";}?>>
                                  <span class="vischeckmark"></span>
                                </label> 
                                
                             </div>
              </div>
            </td>
            <tr>

            <?php }
            }else{
              echo ' <div id="visitations">


              <h1 class="Formulations">Adult ARV Formulations</h1>
                      <div class="newtable Formul">
                     
                      <table >
              
              <tr> <td colspan="2"><h4 style="color:red;">Sorry, there are No Records for '.$fulname. '!</h4></td> </tr>
              </table >
              ';
            }?>
          
            </tr>
           </tr>
           </table>

           </div>
           </div>























































  

     

     <div class="info">
        <h4>information</h4>
      <table>
        <tr> <td colspan="4"> <b>Ever taken ARVs</b>  Has the patient taken any ARVs? (e.g single dose nevirapine for PMTCT, PEP or triple therapy) if yes, specify drug and approximate date when last taken</td></tr>
        <tr><td> <b>Routine TB Screening </b></td><td><b>TB Status Current (any TB form, smear pos / neg )</b></td>  <td><b>ARVs Given</b></td>  <td><b>Adverse Outcome</b></td> </tr>
        <tr><td>
            <ul>
              <li>1) Cough of any duration</li>
              <li>2) Fever </li>
              <li>3) Night Sweats</li>
              <li>4) Weight loss / failure of thrive</li>
            </ul>

        </td>
        <td>
        <ul>
              <li> <b>N</b> TB Not suspected</li>
              <li> <b>Y</b> TB Suspected </li>
              <li> <b>C</b> TB Confirmed not (yet) on TB treament</li>
              <li>  <b>Rx</b>  TB Confirmed & currently taking TB treatment</li>
            </ul>

        </td>
        <td>
        <ul>
              <li> <b>P</b>  to patient</li>
              <li> <b>G</b>  to guardain </li>
            </ul>

        </td>
        <td colspan="2">
        <ul>  
              <li>  <b>D </b> Died </li>
              <li><b>Def</b> Defaulted More then 2 overdue after expected to have run out of tables, unknown survival and ART status </li>
              <li><b>Stop</b> Patient stopped taking ARVs (Clinician's or patient own decision) </li>
              <li><b>To</b> Transferred to other ART clinic (includes unofficail transfers) </li>
              <ul>
        </td></tr>
      </table>
      </div>


        <div class="footer">
    
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


