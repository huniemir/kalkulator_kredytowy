{extends file="view.tpl"}
{block name=title}Kalkulator kredytowy{/block}
{block name=body}Zmieni twoje życie na zawsze{/block}
{block name=content}
<div style="width:90%; margin: 2em auto;">
	<form action="{$conf->action_root}calculate" method="post" class="pure-form pure-form-stacked">
		<label for="id_kredyt">Kredyt: </label>
		<input id="id_kredyt" type="text" name="kredyt" /><br  />
		<label for="id_oprocentowanie">Oprocentowanie: </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" /> <br />
		<label for="id_lata">Długość kredytu: (lata) </label>
		<input id="id_lata" type="text" name="lata" /><br />
		
		<label for="id_rodzaj_raty">Rodzaj raty: </label>
		<select name="rodzaj_raty">
			<option value="tygodniowa">tygodniowa</option>
			<option value="miesięczna">miesięczna</option>
			<option value="kwartalna">kwartalna</option>
			<option value="półroczna">półroczna</option>
			<option value="roczna">roczna</option>
		
		</select><br />
		<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
		<input type="submit" value="Wyloguj" name="wyloguj" class="button-secondary pure-button" />

	</form>	
</div>

{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;  color: black;">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($rata)}
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #faa; width:300px; color: black;">
            Wysokość raty: {$rata}
        </div>
{/if}

{if isset($suma)}
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #fda; width:300px; color: black;">
            W sumie do spłaty: {$suma}
        </div>
{/if}

{if isset($odsetki)}
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #abc; width:300px; color: black;">
            Odsetki: {$odsetki}
        </div>
{/if}

{/block}
