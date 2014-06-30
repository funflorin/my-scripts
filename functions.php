<?php
function afisare_combinari($a, $len){
	if ($len > count($a)) return 'error';
	$out = array();
	if ($len==1) {
		foreach ($a as $v) $out[] = array($v);
		return $out;
	}
	$len--;
	while (count($a) > $len) {
		$b = array_shift($a);
		$c = afisare_combinari($a, $len);
		foreach ($c as $v){
			array_unshift($v, $b);
			$out[] = $v;
		}
	}
	return $out;
}
function test() {

}