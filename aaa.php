<?php
error_reporting(0); 
session_start();
set_time_limit(1000);
include("connection/db.php");


$sql_m = "select * from tbss where id >56 limit 0,10 ";
//echo $sql_m;
   $res_m = mysql_query($sql_m);
   while($row_m = mysql_fetch_array($res_m))
   {
   echo "inside loop";
   $aa = trim($row_m["appno"]);
   echo $aa;
   echo "<br/>";
   //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% end %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
   $query = "SELECT * FROM nafa_applicant_master where application_ref_no = '$aa' and entry_type = 'primary_entry' "; 
   echo $query;
   echo "<br/>";
   $ress = mysql_query($query);
  while($row = mysql_fetch_array($ress))
  {
  
  
  echo "-----------";
  echo '---'.$row["nafa_cus_id"];
  echo "------------------";
  
  
 // $cropname = $row_de[0];
  //echo "======".$cropname;
  $cropname = "vvvvv";
  $fileContent= "P".'~'.trim($row["nafa_cus_id"]).'~'.trim($row["applicant_name"]).'~'.trim($row["applicant_name"]).'~'.trim($row["party_type"]).'~'.trim($row["classification_type"]).'~'.''.'~'.'INR'.'~'.$add1.'~'.$add2.'~'.trim($row["address_3"]).'~'.trim($row["address_4"]).'~'.trim($row["address_3"]).'~'.trim($row["address_4"]).'~'.trim($row["address_5"]).'~'.'India'.'~'.trim($row["pan_no"]).'~'.''.'~'.''.'~'.$dateofbirthh.'~'.trim($row["age_cust"]).'~'.trim($row["gender_cust"]).'~'.trim($row["id_proof"]).'~'.trim($row["id_no"]).'~'.trim($row["address_proof"]).'~'.trim($row["aadhar_no"]).'~'.trim($row["cust_caste"]).'~'.trim($row["cust_religion"]).'~'.trim($row["cust_category"]).'~'.trim($row["cust_bank_name"]).'~'.trim($row["cust_bank_ac_no"]).'~'.trim($row["cust_bank_branch"]).'~'.trim($row["cust_type_of_bankac"]).'~'.trim($row["micr_code"]).'~'.trim($row["ifsc_code"]).'~'.trim($row["name_per_bank"]).'~'.trim($row["appmiddle_name"]).'~'.trim($row["appsur_name"]).'~'.trim($row["appnew_title"]).'~'.''.'~'.'C'.'~'."-Next Data -". '~'.$row["application_date"].'~'.$row["nafa_loanamount_user"].'~'.$cropname." \n";
  
  echo $fileContent;
  
  }
   //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
   }

?>