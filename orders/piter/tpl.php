<?=Template::insert('bloks/spacer')?>

<?Params::$valign='middle'?>

<?=Template::insert('bloks/1c',
	'<p style="text-align:center">'.Params::img('s0506-1.jpg','Снижение цены на выездную диагностику!',false).'</p>'

)?>



<?=Template::insert('bloks/1c',
	'<h3>Акция! Снижение цены на выездную диагностику.</h3>
'.Template::insert('bloks/callout-warn','<table style="width:230px;" width="230"><tr><td style="font-size:20px;">Новая цена:</td><td align="right" style="text-align:right;font-size:20px;"><strong>5 400 руб.</strong></td></tr><tr><td colspan="2" align="right" style="text-align:right"><small style="color:#000"><s>7 200 руб.</s></small></td></tr></table>').'
'.Template::insert('bloks/spacer').'
<p>Выезд в черете города Сантк-Петербург и в пределах 60 км от КАД.</p>
<p>Предложение ограничено по времени действия акции.</p>'



)?>
