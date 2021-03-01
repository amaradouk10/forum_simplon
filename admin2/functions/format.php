<?php
	class format{

		static function formatdate($date){
			return	date('j F Y, G:i ',strtotime($date));
		}
		static function textshorten($text,$limit=90){
			$text = $text." ";
			$text = substr($text,0,$limit);
			$text = substr($text,0,strrpos($text,' '));
			$text = $text."...";
			return $text;
		}

	}

?>