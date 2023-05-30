<?php
	//active directory server
	//$ldap_host = "10.1.70.18";
	$ldap_host = "10.2.20.6";
 
	//active directory DN (base location of ldap search)
	$ldap_dn = "DC=company,DC=caribetrans,DC=local";
 
	//active directory user group name
	$ldap_user_group = "WebUsers";
 
	//active directory manager group name
	$ldap_manager_group = "Aila Web";

	// domain, for purposes of constructing $user
	$ldap_usr_dom = '@company.caribetrans.local';
    