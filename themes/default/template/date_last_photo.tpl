<div id="copyright">
	{if isset($datePicture.date_available)}
		{'The date of the last photo added is'|translate} {$datePicture.date_available|date_format:"%A %e %B %Y"|utf8_encode} {'at'|translate} 	{$datePicture.date_available|date_format:"%H:%M:%S"|utf8_encode}
	{else}
		{'No photo added'|translate}
	{/if}
</div>