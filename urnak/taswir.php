<?
$data = simplexml_load_string(file_get_contents("urnak/taswir.xml"));
print '<pre>';//print_r($data);
foreach($data as $item){
	//print_r($item);
	//print($item->name);
	if($item->name==$url[1]) {
		$taswir = $item->subitem->taswir;
	}
}
?>
<div class="divar">
    <div class="aq">
		<?=$taswir?>
    </div>
</div>