{extends file="view.tpl"}
{block name=title}Historia wyników{/block}
{block name=body}Oł je{/block}
{block name=content}

<table>
		<tr>
			<td><b>ID wyniku</b></td>
			<td><b>Wysokość raty</b></td>
			<td><b>W sumie do spłaty</b></td>
			<td><b>Odsetki</b></td>
		</tr>
	{foreach  $datas as $data}
		<tr>
			<td>{$data["id_result"]}</td>
			<td>{$data["rata"]}</td>
			<td>{$data["suma"]}</td>
			<td>{$data["odsetki"]}</td>
		</tr>
	{/foreach}
	
</table>

{/block}
