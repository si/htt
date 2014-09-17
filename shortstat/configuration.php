<?php
/******************************************************************************
 ShortStat : Short but Sweet
 Configuration
 v0.36b
 
 Created: 	04.03.04
 Updated:	05.01.20
 
 By:		Shaun Inman
 			http://www.shauninman.com/
 ******************************************************************************
 Database settings
 ******************************************************************************/
$SI_db['server']	= "localhost";	// leave as localhost unless you know otherwise
$SI_db['username']	= "bigsi";	// The username used to acces your database
$SI_db['password']	= "shamone";	// The password used to acces your database
$SI_db['database']	= "hrt";	// The database where you would like to store the stats table


/******************************************************************************
 Text display settings
 Added 04.06.19 for Andrei Herasimchuk <designbyfire.com>
 ******************************************************************************/
$SI_display['sitename']		= "Hitting the Target";	// The full name of the site
$SI_display['siteshort']	= "site";			// Used to indicate hits to the homepage
$SI_display['collapse']		= false;			// Collapse browsers by version
$SI_display['version']		= 'v0.36b';			// ShortStat version


/******************************************************************************
 Table settings
 Tables used by this stats package that will be added to your database.
 Only one at this time but there may be more in future versions
 ******************************************************************************/
$SI_tables['stats']			= "si_shortstat";				// Primary stats table
$SI_tables['searchterms']	= "si_shortstat_searchterms";	// Search Keywords table
$SI_tables['countries'] 	= "si_shortstat_iptocountry";	// IP-to-country lookup table


/******************************************************************************
 Local Timezone settings (my host is CMT but I am EST)
 ******************************************************************************/
$tz_offset = 0;				// EST
 

/******************************************************************************
 Tracking toggle
 
 The $shortstat variable turns this stats package on or off. This is used when
 updating from a previous version of ShortStat
 ******************************************************************************/
$shortstat = true;				// False is off
?>