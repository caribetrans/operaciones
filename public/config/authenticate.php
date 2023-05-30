<header>

<link rel="icon" type="image/png" href="../img/favicon.ico" />
<script src="../assets/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="../assets/sweetalert/dist/sweetalert2.all.js"></script>
<script src="../assets/sweetalert/dist/sweetalert2.js"></script>
<link rel="stylesheet" href="../assets/ssweetalert/dist/sweetalert.min.css" />
<script src="../assets/sweetalert/dist/sweetalert2.min.js  "></script>
</header>
<?php

//initialize session
session_start();
$url=$_POST['url'];
 
//include("config/authenticate.php");
 
//check to see if user is logging out
if(isset($_GET['out'])) {
	// destroy session
	session_unset();
	$_SESSION = array();
	unset($_SESSION['user'],$_SESSION['access']);
	session_destroy();
}
 
//check to see if login form has been submitted
if(isset($_POST['UserName'])){
	
	//run information through authenticator
	if(authenticate($_POST['UserName'],$_POST['userPassword']))
	{

		//authentication passed
		header("Location:../config/protected.php?&url=$url");
		die();
	} else {
		//authentication failed
		$error = 1;
	}
}
 
//output error to user
if(isset($error)) echo '<script>
swal({
	title: "¡Acceso denegado!",
	text: "El nombre de usuario y la contraseña no son validos." ,
	icon: "info",
	type: "info"
}).then(function() {
	window.history.go(-1)
});
</script>';
return false;
 
//output logout success
if(isset($_GET['out'])) echo '<script>
swal({
	title: "¡Bienvenido!",
	text: "'.$_SESSION['user'].'" ,
	icon: "info",
	type: "info"
}).then(function() { 
	window.history.go(-1)
});
</script>';
return false;

function authenticate($user, $password) {
	if(empty($user) || empty($password)) return false;
 
	include 'credencials_ad2.php';
	//active directory server
	//$ldap_host = "192.168.3.18";
	
	//connect to active directory
	$ldap = ldap_connect($ldap_host);  
 
	//configure ldap params
	ldap_set_option($ldap,LDAP_OPT_PROTOCOL_VERSION,3);
	ldap_set_option($ldap,LDAP_OPT_REFERRALS,0);
 
	//verify user and password
	if($bind = @ldap_bind($ldap, $user.$ldap_usr_dom, $password)) {
		//valid
		//check presence in groups
		$filter = "(sAMAccountName=".$user.")";
		$attr = array("memberof","displayname","samaccountname","givenname","sn","mail","department");
		$result = ldap_search($ldap, $ldap_dn, $filter, $attr) or exit("Unable to search LDAP server");
		$entries = ldap_get_entries($ldap, $result);
		$givenname = $entries[0]['givenname'][0];
    	$surname = $entries[0]['sn'][0];
		$displayname = $entries[0]['displayname'][0];
		$mail = $entries[0]['mail'][0];
		$department = $entries[0]['department'][0];
		ldap_unbind($ldap);
 
	//check groups
$access = 0;
foreach($entries[0]['memberof'] as $grps) {
	if(strpos($grps, "IT Soporte")) { $access = 1; break; } //***///
	if(strpos($grps, "IT Programacion")) { $access = 2; break; } //***///
	if(strpos($grps, "Mantenimiento")) { $access = 3; break; }
	if(strpos($grps, "Gestion Humana")) { $access = 4; break; }
	if(strpos($grps, "Sistema de Tickets")) { $access = 5; break; }
	if(strpos($grps, "portalcaribetrans")) { $access = 6; break; }


    }

	 	//$givenname=$entries[0]["givenName"][0];
		//return $givenname;
		if($access != 0) {
			// establish session variables
			$_SESSION['user'] = $user;
			$_SESSION['access'] = $access;
			$_SESSION['givenname'] = $givenname;
			$_SESSION['sn'] = $surname;
			$_SESSION['displayname'] = $displayname;
			$_SESSION['mail'] = $mail;
			$_SESSION['fullname'] = $givenname.' '.$surname;
			$_SESSION['url']=$link;
			$_SESSION['department']=$department;

			if ($department=='Tecnologia'){
				$department='IT Soporte';
			}
		

		
			
			return true;
		} else {
			//user has no rights
			return false;
		}
 
	} else {
		//invalid name or password
		return false;
	}
}

?>

