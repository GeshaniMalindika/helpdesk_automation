<?php
        include('config/db.php');

        if (isset($_POST['update'])) {
            $complain_id= $_GET['ID'];
          $pdf1=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $extensions=array("pdf");
          $file_ext= $_FILES['pdf']['name'];
          $pdf_store="./uploads/".$pdf;
          move_uploaded_file($pdf_tem_loc,$pdf_store);
         
          if(in_array($file_ext,$extensions)==false){

            if(empty($error)==true){
                move_uploaded_file($pdf_tem_loc,$pdf_store);

                $pdf_store="./upload/".$pdf;
                $query = " update invoice set pdf1='".$pdf1."' where complain_id='".$complain_id."'";
                //$sql="INSERT INTO invoice(complain_id,pdf,pdf1) values('$complain_id','','$pdf1')";
                $query=mysqli_query($conn,$sql);

            
            }
            
            }
        
          /*move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO invo(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);*/



        }
