<?php 
function menuRender($menuArr){
	$result = "";
	
	foreach($menuArr as $item){
		$result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";
		
		if(isset($item["subitems"])){
			$result .= "<ul>";
			$result .= menuRender($item["subitems"]);
			$result .= "</ul>";
		}
		
		$result .= "</li>";
	}
	
	return $result;
}