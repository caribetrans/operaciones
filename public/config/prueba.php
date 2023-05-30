<?php

// initialize session
session_start();
 
include("config/authenticate.php");
 
// check to see if user is logging out
if(isset($_GET['out'])) {
	// destroy session
	session_unset();
	$_SESSION = array();
	unset($_SESSION['user'],$_SESSION['access']);
	session_destroy();
}
 

// check to see if login form has been submitted
if(isset($_POST['userLogin'])){
	// run information through authenticator
	if(authenticate($_POST['userLogin'],$_POST['userPassword']))
	{
		// authentication passed
		header("Location:../config/protected.php");
		die();
	} else {
		// authentication failed
		$error = 1;
	}
}
 
// output error to user
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
 
// output logout success
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
 
	// active directory server
	$ldap_host = "192.168.3.18";
 
	// active directory DN (base location of ldap search)
	$ldap_dn = "DC=company,DC=caribetrans,DC=local";
 
	// active directory user group name
	$ldap_user_group = "WebUsers";
 
	// active directory manager group name
	$ldap_manager_group = "Aila Web";

	// domain, for purposes of constructing $user
	$ldap_usr_dom = '@company.caribetrans.local';
 
	// connect to active directory
	$ldap = ldap_connect($ldap_host);
 
	// configure ldap params
	ldap_set_option($ldap,LDAP_OPT_PROTOCOL_VERSION,3);
	ldap_set_option($ldap,LDAP_OPT_REFERRALS,0);
 
	// verify user and password
	if($bind = @ldap_bind($ldap, $user.$ldap_usr_dom, $password)) {
		// valid
		// check presence in groups
		$filter = "(sAMAccountName=".$user.")";
		$attr = array("memberof","displayname","samaccountname","givenname");
		$result = ldap_search($ldap, $ldap_dn, $filter, $attr) or exit("Unable to search LDAP server");
		$entries = ldap_get_entries($ldap, $result);
		ldap_unbind($ldap);
 
	// check groups
$access = 0;
foreach($entries[0]['memberof'] as $grps) {
	if(strpos($grps, "STI")) { $access = 7; break; } //***///
	if(strpos($grps, "PUJ")) { $access = 6; break; }
	if(strpos($grps, "Air France")) { $access = 5; break; }
	if(strpos($grps, "Administradores Aila")) { $access = 4; break; }
	if(strpos($grps, "Operaciones Aila")) { $access = 3; break; }
	if(strpos($grps, "Seguridad Aila")) { $access = 2; break; }
	if(strpos($grps, "Trafico Aila")) { $access = 1; break; }

     }

     if ($entries["count"] > 0)
     {
     for ($i=0; $i<$entries["count"]; $i++)
             {
         echo "<p>Nombre: ".$entries[$i]["displayname"][0]."<br />";
         echo "Email: <a href=mailto:".$entries[$i]["mail"][0].">".$entries[$i]["mail"][0]."</a><br />";
         echo "Nombre de Usuario: ".$entries[$i]["samaccountname"][0]."<br />";
         echo "Telefono: ".$entries[$i]["telephonenumber"][0]."</p>";
         }
 } else {
     echo "<p>No se ha encontrado ningun resultado</p>";
 }
 ldap_unbind($ad);
	

 
		if($access != 0) {
			// establish session variables
			$_SESSION['user'] = $user;
			$_SESSION['access'] = $access;
			return true;
		} else {
			// user has no rights
			return false;
		}
 
	} else {
		// invalid name or password
		return false;
	}
}

?>

