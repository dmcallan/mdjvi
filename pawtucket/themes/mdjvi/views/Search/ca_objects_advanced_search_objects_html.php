
<div class="row">
	<div class="col-sm-8 " style='border-right:1px solid #ddd;'>
		<h1>Busca Avançada de Objetos</h1>

<?php			
print "<p>Digite seus termos de pesquisa nos campos abaixo.</p>";
?>

{{{form}}}

<div class='advancedContainer'>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Pesquise em todos os campos no banco de dados.">Palavra Chave</span>
			{{{_fulltext%width=200px&height=1}}}
		</div>			
	</div>		
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limite a sua pesquisa apenas aos títulos de objetos.">Título</span>
			{{{ca_objects.preferred_labels.name%width=220px}}}
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-6">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Pesquisa identificadores de objetos.">Número de Inventário</span>
			{{{ca_objects.idno%width=210px}}}
		</div>
		<div class="advancedSearchField col-sm-6">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limite sua pesquisa a tipos de objetos.">Tipo</span>
			{{{ca_objects.type_id%height=30px}}}
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Pesquisar registros de uma determinada data ou intervalo de datas.">Intervalo de Datas <i>(ex. 1970-1979)</i></span>
			{{{ca_objects.objectProductionDate%width=200px&height=40px&useDatePicker=0}}}
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Pesquise registros em uma coleção específica.">Coleção </span>
			{{{ca_collections.preferred_labels%restrictToTypes=collection%width=200px&height=40px}}}
		</div>
	</div>
	<br style="clear: both;"/>
	<div class='advancedFormSubmit'>
		<span class='btn btn-default'>{{{reset%label=Resetar}}}</span>
		<span class='btn btn-default' style="margin-left: 20px;">{{{submit%label=Procurar}}}</span>
	</div>
</div>	

{{{/form}}}

	</div>
	<div class="col-sm-4" >
		<h1>Dicas</h1>
		<p>Na pesquisa por Intervalo de Datas você pode utilizar os seguintes formatos:</p>
		<br>
		<p>1920s - Pesquisa por objetos criados na década especificada.</p>
		<p>19th - Pesquisa por objetos criados no século específicado.</p>
	</div><!-- end col -->
</div><!-- end row -->

<script>
	jQuery(document).ready(function() {
		$('.advancedSearchField .formLabel').popover(); 
	});
	
</script>
