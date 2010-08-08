<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--All rights Reserved Created by James Johnson of Custom To Customer.com / WebFace and Digital Builders Divisions 2008-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Log Test</title>
</head>
<body>
<?php
/*
 * Created on Sep 25, 2008
 *
 * Tests the Log object and its functions
 */
 require_once('Log.php');
 require_once('XML_Log.php');
 
 $Doc_Root = getcwd();
 $Log_File = new Log_File ($Doc_Root, "Log_Test"); //call the log object for a flat file log
 $Log_File->Su_Write("It Worked");
 
 $Log_Xml = new Log_XML($Doc_Root, "Log_TestXML");
 $Log_Xml->Su_Write("100","It Worked")
 
?>
</body>
</html>