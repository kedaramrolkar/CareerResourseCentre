<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['user_username'];
    if(isset($_POST)){
        require '../_database/database.php';
        
        /*$Destination = '../userfiles/avatars';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.png';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum   = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        $sql5="UPDATE user SET user_avatar='$NewImageName' WHERE user_username = '$temp'";
        $sql6="INSERT INTO user (user_avatar) VALUES ('$NewImageName') WHERE user_username = '$temp'";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$temp'");
        if( mysqli_num_rows($result) > 0) {
            if(!empty($_FILES['ImageFile']['name'])){
                mysqli_query($database,$sql5)or die(mysqli_error($database));
                header("location:../edit-profile.php?user_username=$temp");
            }
        } 
        else {
            mysqli_query($database,$sql6)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$temp");
        } 
		*/
		$submit=$_REQUEST['submit'];
		
        $user_name=$_REQUEST['user_name'];
        $user_email=$_REQUEST['user_email'];
		$user_currentaddress=$_REQUEST['user_currentaddress'];
        $user_currentcountry=$_REQUEST['user_currentcountry'];
		$user_gender=$_REQUEST['user_gender'];
		$user_veteran=$_REQUEST['user_veteran'];
		$user_ufid=$_REQUEST['user_ufid'];
		$user_phno=$_REQUEST['user_phno'];
		$user_permanentaddress=$_REQUEST['user_permanentaddress'];
		$user_permanentcountry=$_REQUEST['user_permanentcountry'];
		$user_disability=$_REQUEST['user_disability'];
		$user_visa=$_REQUEST['user_visa'];
		
        $sql3="UPDATE user SET user_name='$user_name',user_currentaddress='$user_currentaddress',user_currentcountry='$user_currentcountry',
		user_gender='$user_gender',user_veteran='$user_veteran',user_ufid='$user_ufid',user_phno='$user_phno',user_permanentaddress='$user_permanentaddress',
		user_permanentcountry='$user_permanentcountry',user_disability='$user_disability',user_visa='$user_visa'";
            mysqli_query($database,$sql3)or die(mysqli_error($database));
			if($submit=='SAVE CHANGES')
				header("location:../edit-profile.php?user_username=$temp&request=profile-update&status=success");
			else
				header("location:../edit-profile.php?user_username=$temp&request=profile-update&status=success");
    }    
?>