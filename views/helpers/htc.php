<?php
/*
 * This file is part of CakePHP Htc Plugin.
 *
 * CakePHP Htc Plugin
 * Copyright (c) 2010, Miljenko Barbir (http://miljenkobarbir.com)
 * 
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
*/
class HtcHelper extends AppHelper
{
	/*
	 * Returns a script which contains the style block which includes the provided htc file.
	 * For now, it expect the htc files to be located in the css folder in the webroot.
	 */
	function add($htmlElement, $htcName)
	{
		// calculate the path to the htc file
		$url = $this->webroot(CSS_URL . $htcName);
		return "<style type=\"text/css\">$htmlElement { behavior: url(\"$url\") }</style>\n";
	}
}

?>