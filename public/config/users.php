<?php
//initialize session
session_start();
include 'credencials_ad.php';
 	//connect to active directory
	$ldap = ldap_connect($ldap_host);  
 
	//configure ldap params
	ldap_set_option($ldap,LDAP_OPT_PROTOCOL_VERSION,3);
	ldap_set_option($ldap,LDAP_OPT_REFERRALS,0);
 
	//verify user and password
	if($bind = @ldap_bind($ldap, $user.$ldap_usr_dom, $password)) {
		//valid
		if ($_GET['assigned_to']==''){
			$user2=$assigned_to;
		}else{
	$user2=$_GET['assigned_to'];
		}
		//$user2=$assigned_to;
		//check presence in groups
		$filter = "(Name=".$user2.")";
		$attr = array("memberof","displayname","samaccountname","givenname","sn","mail","department","description");
		$result = ldap_search($ldap, $ldap_dn, $filter, $attr) or exit("Unable to search LDAP server");
		$entries = ldap_get_entries($ldap, $result);
		$givenname = $entries[0]['givenname'][0];
    	$surname = $entries[0]['sn'][0];
		$displayname = $entries[0]['displayname'][0];
		$mail = $entries[0]['mail'][0];
		$department = $entries[0]['department'][0];
        $description= $entries[0]['description'][0];
		ldap_unbind($ldap);
 
	//check groups
$access = 0;
foreach($entries[0]['memberof'] as $grps) {
	if(strpos($grps, "IT Soporte")) { $access = 8; break; } //***///
	if(strpos($grps, "IT Programacion")) { $access = 7; break; } //***///
	if(strpos($grps, "Mantenimiento")) { $access = 6; break; }
	if(strpos($grps, "Recursos humanos")) { $access = 5; break; }
	if(strpos($grps, "Administradores Aila")) { $access = 4; break; }
	if(strpos($grps, "Operaciones Aila")) { $access = 3; break; }
	if(strpos($grps, "Seguridad Aila")) { $access = 2; break; }
	if(strpos($grps, "Trafico Aila")) { $access = 1; break; }

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
            $_SESSION['description']=$description;

            $employee_name=$_SESSION['fullname'] = $givenname.' '.$surname;
            $position=$_SESSION['description']=$description;
			$email_ad=$_SESSION['mail'] = $mail;
			
		
			
			return true;
		} else {
			//user has no rights
			return false;
		}
 
	} else {
		//invalid name or password
		return false;
	}


?>

