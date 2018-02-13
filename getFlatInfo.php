<?php
session_start();
$arr=$_GET;
 $ele=count($arr, COUNT_RECURSIVE); 
 $count=$ele-3;
  function insertDb($sql){
	$conn = mysqli_connect("localhost", "root", "","homemanagement");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	return $result;
}
 $firstvalue;
 $secondvalue;
 $thirdvalue;
      $check=0;
	  $calc=0;
	  $i=0;
	 		while($i< ($count+1)/3)
	{
		$j=0;
		while($j<=$count)
	{
		
		if($check==0)
		{
    $firstvalue = $_GET['myValue'][$j];
	
	$check=1;
	$j++;
	
	
		}
		
	if($check==1)
		{
			 $secondvalue = $_GET['myValue'][$j];
			 $check=2;
	
			 $j++;
			
			
				
		}
		
	if($check==2)
		{
			$thirdvalue = $_GET['myValue'][$j];
			 $check=0;
			 $j++;		 
	
		}
		if((strlen($firstvalue)==0)||(strlen($secondvalue)==0)||(strlen($thirdvalue)==0))
			
			{
				if($calc==0)
				{
					echo "<script type='text/javascript'>alert('not inserted');</script>";
					
				
				}
				else
				{
					echo "<script type='text/javascript'>alert('not inserted');</script>";
					
				
				}
				
			}
		else
		{
		$s="INSERT INTO ftatinformation (uniqueFlat,flatId,buildingOwnerId,buildingName,buildingId,rentCost,otherInfo,address,leaveDate)
	VALUES ('$firstvalue".$_SESSION['newBuildingId']."','$firstvalue','".$_SESSION['userId']."','".$_SESSION['newBuildingName']."','".$_SESSION['newBuildingId']."','$secondvalue','$thirdvalue','".$_SESSION['newBuildingAddress']."','0000-00-00')";
       $calc=$calc + insertDb($s);
	   echo "<script type='text/javascript'>alert('$calc row(rows)inserted');</script>";
	  
	$check=0;
		}
    }  
$i++;

break;
}
header("Location:LoadPage.php");
?>