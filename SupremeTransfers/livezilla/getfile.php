<?php
/****************************************************************************************
* LiveZilla getfile.php
* 
* Copyright 2018 LiveZilla GmbH
* All rights reserved.
* LiveZilla is a registered trademark.
* 
* Improper changes to this file may cause critical errors.
***************************************************************************************/ 

define("IN_LIVEZILLA",true);

if(!defined("LIVEZILLA_PATH"))
	define("LIVEZILLA_PATH","./");

require(LIVEZILLA_PATH . "_definitions/definitions.inc.php");
require(LIVEZILLA_PATH . "_definitions/definitions.protocol.inc.php");
require(LIVEZILLA_PATH . "_lib/functions.global.inc.php");
require(LIVEZILLA_PATH . "_definitions/definitions.dynamic.inc.php");

if(isset($_GET["id"]) && Server::InitDataProvider())
{
	$id = $_GET["id"];
	if(strpos($id,".") === false && !Is::Null($res = KnowledgeBaseEntry::GetById($id)))
	{
		if(file_exists("./uploads/" . $res["value"]) && strpos($res["value"],"..") === false)
		{
            $mime = mime_content_type("./uploads/" . $res["value"]);

            if(empty($mime))
                $mime = "application/octet-stream";

			header('Content-Description: File Transfer');
            header('Content-Type: ' . $mime);
            header('Content-Length: ' . filesize("./uploads/" . $res["value"]));
			header('Content-Disposition: attachment; filename=' . urlencode($res["title"]));
			exit(file_get_contents("./uploads/" . $res["value"]));
		}
	}
}
header("HTTP/1.0 404 Not Found");
?>