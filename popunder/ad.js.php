<?php

header('content-type:application/javascript');
if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome') !== false)
{
    $event = 'mouseover';
}else
{
	$event = 'click';
}
?>
window.aPopunder =
[
	[poplink, {window: {height:popheight, width:popwidth}}]
];
document.body.addEventListener("<?php echo $event; ?>", function()
{	
	$.popunder(window.aPopunder);
}, false);
