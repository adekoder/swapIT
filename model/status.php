<?php
	
	class Status
	{
		
		public static function returnMessage($status_code , $message)
		{
			return [$status_code => $message];
		}
	}


 ?>