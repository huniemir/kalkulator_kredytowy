{if $msgs->isError()}
<h4>Wystąpiły błędy: </h4>
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
		{foreach $msgs->getErrors() as $err}
			{strip}
				<li>{$err}</li>
			{/strip}
		{/foreach}
		</ol>
{/if}
