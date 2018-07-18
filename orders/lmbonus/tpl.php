<?=Template::insert('bloks/spacer')?>

<?Params::$valign='middle'?>

<?=Template::insert('bloks/1c', 
	'<p style="text-align:center">'.Params::img('bonus/bonus.jpg','Программа лояльности ЛОНМАДИ Бонус',false).'</p>'
	
)?>


<?Params::$valign='top'?>

<?=Template::insert('bloks/1c', 
	'<h3 style="text-align:center">Программа лояльности ЛОНМАДИ Бонус</h3>
	'.Template::insert('bloks/callout-warn','<p style="text-align:center;color:#000;">Доступно баллов</p><center><span style="font-size:35px;color:#000;">Поле8ДоступныеБаллыСегодня</span></center>').'
	'.Template::insert('bloks/spacer').'
	<p>На Вашей карте ЛОНМАДИ Бонус есть неиспользованные баллы! <strong>Поле7ДатаСгорания</strong> у Вас может сгореть <strong>Поле10ДоступныеСгорит</strong> баллов. Успейте потратить баллы, пока они не сгорели!</p>'
	
)?>

<?=Template::insert('bloks/h1','Самые интересные предложения недели')?>

<?=Template::insert('bloks/spacer')?>

<?=Template::insert('bloks/2c', [
	1=> '<p style="text-align:center">'.Params::img('bonus/b1.jpg','Скидка до 10% на гусеничные экскаваторы').'</p>',
	2=>'<h5>Главное событие июня. Скидка до 10% на гусеничные экскаваторы.</h5><p>Только до конца июня | Количество ограничено</p>'.Template::insert('bloks/button',['title'=>'Подробнее','link'=>'http://lonmadi.ru/promo/the-main-event-in-may-up-to-10-discount-on-caterpillar-excavators.html'])
])?>

<?=Template::insert('bloks/2c', [
	1=> '<p style="text-align:center">'.Params::img('bonus/b2.jpg','Ходовая для экскаваторов').'</p>',
	2=>'<h5>Программа ЛОНМАДИ Parts</h5><p>Ходовая для экскаваторов</p>'.Template::insert('bloks/button',['title'=>'Подробнее','link'=>'http://lonmadi.ru/promo/program-lonmadi-parts.html'])
])?>

<?=Template::insert('bloks/2c', [
	1=> '<p style="text-align:center">'.Params::img('bonus/b3.jpg','Акция к чемпионату мира по футболу FIFA 2018').'</p>',
	2=>'<h5>Акция к чемпионату мира по футболу FIFA 2018</h5>'.Template::insert('bloks/button',['title'=>'Подробнее','link'=>'http://lonmadi.ru/promo/the-world-cup.html'])
])?>








