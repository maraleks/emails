<?php
ini_set('max_execution_time', 2000);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "phpmailer/sendmail.php";
include "Template.php";

$title = 'Снижение цены на выездную диагностику!';

$tpl = 'piter';

$s = 'test2';

$settings = [
	'preheader' => 'Официальный дилер ведущих мировых машиностроительных заводов. '.$title,
	'phone' => '8-800-333-56-63',
	'email' => 'info@lonmadi.ru',
	'menu' => [
		'0' => [
			'title' => 'Каталог техники',
			'link'=> 'https://goo.gl/bUppGQ' //'http://lonmadi.ru/catalog/' //
			],
		'1' => [
			'title' => 'Акции',
			'link'=> 'https://goo.gl/wD6Ydb' // 'http://lonmadi.ru/promo/'
			],
		'2' => [
			'title' => 'Сервис и запчасти',
			'link'=> 'https://goo.gl/eCXRcU' // 'http://lonmadi.ru/services/'
			],
		'3' => [
			'title' => 'Контакты',
			'link'=> 'https://goo.gl/yp8hWA' //'http://lonmadi.ru/contacts/'
			]

	]
];




Params::$imgPlace = false;

if(!isset($_GET['view'])) {

	ob_start();
		echo Template::insert("layout/white/header", $settings);
		echo Template::insert("orders/$tpl/tpl");
		echo Template::insert("layout/white/footer", $settings);
	$content = ob_get_clean();

	echo $content;

} else {

	$tplt = Template::insert("orders/$tpl/ready",false,true);

	$fp = fopen("orders/$tpl/tpl.htm", "w");
	fwrite($fp, $tplt);
	fclose($fp);

	echo $tplt;

	if(isset($_GET['mail'])) { echo SendMessage('a.martynov@lonmadi.ru', $cc='', $bcc='', $title, $tplt); }

}


class Params {

	public static $valign = 'top';
	public static $imgPlace = false;

	static function img($path,$title='',$size=true) {

		if(self::$imgPlace==true) {
			$path = 'img/'.$path;
		} else {
			$path = 'http://feedback.jvmgroup.ru/mail/'.$path;
		}

		if($size) { $size = getimagesize($path); $size = $size['3']; }

		return '<img style="margin:0 auto;" alt="'.$title.'" title="'.$title.'" '.$size.' src="'.$path.'"/>';

	}



}
?>
