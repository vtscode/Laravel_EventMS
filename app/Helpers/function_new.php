<?php

if ( !function_exists('imgPath') )
{
	function imgPath($path){
		return route('home.index') . substr($path,16);
	}
}