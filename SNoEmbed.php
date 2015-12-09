<?php
class SNoEmbed extends Extension
{

  function embed(array $arguments)
	{
		$rest = new RestfulService("http://noembed.com/embed?url=".urlencode($arguments['link']));
		$request = $rest->request();
		$php = json_decode($request->getBody());
		if(class_exists(ArrayList)) 
		{
		return new ArrayList($php);
		}
		else
		{
		return new ArrayData($php);
		}
	}
	
}
?>
