<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link href="/emailage/foundation-emails.css" rel="stylesheet">

   
  </head>

  <body>
 
 <!--header !-->
    <table class="body" data-made-with-foundation="">
      <tr>
        <td class="float-center" align="center" valign="top">
          <center data-parsed="">
           
            <table bgcolor="#46444c" align="center" class="wrapper header float-center">
              <tr>
                <td class="wrapper-inner">
                  <table align="center" class="container">
                    <tbody>
                      <tr>
                        <td>
                          <table class="row collapse">
                            <tbody>
                              <tr>
                                <th class="small-12 large-12 columns first last" valign="middle">
                                  <table>
                                    <tr>
                                      <th align="center" style="text-align:center;">
									  
									  <span class="preheader"><?=$data['preheader']?> #space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space# #line##space##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space##line##space# #line##space##line##space##line##line##space##line##space##line##line##space##line##space##line##line##space##line##space##line##line##space##line##space##line#</span>
									  
									  <center> <?=Params::img('layout/white/logo-white.jpg','ЛОНМАДИ | КВИНТМАДИ')?>
									 
									  </center> 
									  
									  
									  </th>
                                    </tr>
                                  </table>
                                </th>
                                
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </table>  
			
          </center>
        </td>
      </tr>
    </table>
	
	<!-- menu !-->
<table class="body" style="background:#f2f2f2;" >
<tbody><tr>
<td align="center" class="center" valign="top">
<center data-parsed="">


<table align="center" class="container float-center" style="background:#f2f2f2;" >
<tbody>
<tr>
<td>
<center data-parsed="">

<div id="expandable_container1">
			<!--[if !mso 9]><!-->
			<label for="exp_checkbox1">
				<div class="nav-under" style="display:none;overflow:hidden;max-height:0px;text-align:center;color: #737274; height:35px;line-height:35px;">
					Меню &#9776;
				</div>
				<div class="nav-over" style="display:none;overflow:hidden;max-height:0px;text-align:center;position:absolute;top:0px;width:100%;opacity:0;color: #737274;">
					Меню &#9776;
				</div>
			</label>
			<!--<![endif]-->
			<div id="details_container1">
				<!--[if !mso 9]><!--><input id="exp_checkbox1" type="checkbox" style="display:none !important;"><!--<![endif]-->
				<table cellspacing="0" cellpadding="0" border="0" >
					<tr>
						<?foreach( $data['menu'] as $k=>$v ):?>
							<td height="25" align="center" valign="center"  style="padding:10px;padding-right:10px;">
								<span class="info_item"><a title="<?=$v['title']?>" style="color: #737274;" href="<?=$v['link']?>"><?=$v['title']?></a></span>
							</td>
						<?endforeach;?>
						
					</tr>
				</table>
			</div>
		</div>



</center>


</td>
</tr>
</tbody>
</table>
</center>
</td>
</tr>
</tbody></table>


<table class="body" style="background:#f9f9f9;">
<tbody><tr>
<td align="center" class="center" valign="top">
<center data-parsed="">


<table align="center" class="container float-center" style="border-left:1px solid #f4f4f4;border-right:1px solid #f4f4f4;">
<tbody>
<tr>
<td>



