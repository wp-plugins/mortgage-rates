<!-- Dec 2012 --> <div id="MLCalcRatesForm<?php echo $SECTION["alias"]; ?>" class="MLCalcRatesForm"> <!--[if lte IE 6]> <script type="text/javascript" src="<?php echo plugins_url("jquery.pngFix.js", __FILE__); ?>"></script> <![endif]--> <table cellpadding="0" cellspacing="0" width="300"> <tr> <td colspan="3" class="zeroHeight"><img src="<?php echo plugins_url("images/top.png", __FILE__); ?>" width="300" height="13" alt="" /></td> </tr> <tr> <td style="background: url(<?php echo plugins_url("images/left-bg.png", __FILE__); ?>) repeat-y" width="7"></td> <td class="formPlaceHolder" width="286"> <form action="<?php echo $SECTION["url"]; ?>" method="post" id="MLCalcRatesFormTrend<?php echo $SECTION["alias"]; ?>" target="MLCalcRatesFrame"> <input type="hidden" name="state" value="<?php echo $SECTION["alias"]; ?>" /> <input type="hidden" name="wg" value="widget" /> </form> <table cellpadding="0" cellspacing="0" width="286"> <tr><td width="14"></td><td colspan="4" width="272"><?php if ($SECTION['alias'] == "XX") { echo '<div class="name">US Average<a href="' . $SECTION['url'] . '" class="nameB">Mortgage Rates</a></div>'; } else { echo '<a href="'. $SECTION['url'] . '" class="name">' . $SECTION['name'] . ' <b>Mortgage Rates</b></a>'; } ?></td></tr> <tr><td width="14" height="5"></td></tr> <tr class="odd" id="type30yf"> <td width="14"></td> <td width="157">30 Year Fixed</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr class="even" id="type15yf"> <td width="14"></td> <td width="157">15 Year Fixed</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr class="odd" id="type51arm"> <td width="14"></td> <td width="157">5/1 ARM</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr><td width="14" height="7" colspan="5"></td></tr> <tr><td colspan="6"> <center><table cellpadding="0" cellspacing="0"><tr> <td valign="bottom"><img src="<?php echo plugins_url("images/icon-trend.gif", __FILE__); ?>" width="18" height="15" alt="" /></td> <td width="6"></td> <td id="trendLink">View Trend</td> </tr></table></center> </td></tr> <tr><td width="14" height="3" colspan="5"></td></tr> </table> </td> <td style="background: url(<?php echo plugins_url("images/right-bg.png", __FILE__); ?>) repeat-y" width="7"></td> </tr> <tr> <td colspan="3" class="zeroHeight"><img src="<?php echo plugins_url("images/bottom.png", __FILE__); ?>" width="300" height="13" alt="" /></td> </tr> </table> </div>