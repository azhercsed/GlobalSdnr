<?php
$stsno=$_GET['stsno'];
$date=$_GET['date'];
$stamp=$_GET['stamp'];
$numofstamps=$_GET['numofstamps'];
$name=$_GET['name'];
$fname=$_GET['fname'];
$address=$_GET['address'];
$whom=$_GET['whom'];
$co=$_GET['co'];
include("header.php");
?>



    
<a href="#null" onclick="printDiv('printTable')"> <i class="fa fa-print"></i> Print Document(s) </a>


<div id="printTable">

        
<?php 
$stsno=(int)$stsno;
$end=(int)$numofstamps;
$end=$end+$stsno;



for($i=$stsno ; $i<$end; $i++){
?>
<!-- --------------------new span----------------------------- -->
<p>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <?php 
                if($stamp=="20"){
                echo nl2br("\n\n\n\n\n\n");
                }else{
                    echo nl2br("\n\n\n\n\n");
                    }?>
            <?php 
            echo '<span style="font-weight:bold;font-size:12pt;line-height:1;font-family: "Arial Narrow", Arial, sans-serif; ">'
            ."Sl.no: ".$i." Date: ".$date.", "."Rs.".$stamp."/-.".nl2br("\n")
            ."Sold to: ".$name.nl2br("\n")
            .$co.": ".$fname.nl2br("\n")
            ."R/o: ".$address.nl2br("\n")
            ."For whom: ".$whom.'</span>';
            ?>
        </p>


        <style>
           
          @media print{
               p{
                    page-break-after:always !important;
                    margin-left:20px;
                }
            }
          
        </style>
        <?php
}
?>
    </div>




 <script type="text/javascript">     
    function printDiv(id) {    

      var toPrint=document.getElementById(id).innerHTML;
 
      var restorePage=document.body.innerHTML;
     
      document.body.innerHTML=toPrint;
      window.print();
     // window.alert("hello");
      document.body.innerHTML=restorePage;
            }
 </script>

<?php
include("footer.php");