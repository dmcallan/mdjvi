<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
 	$va_access_values = caGetUserAccessValues($this->request);
?>
	<div class="row">
		<div class=" leader">
<?php
		print caGetThemeGraphic($this->request, 'frentesite.jpg');
?>
		
	</div><!-- end row leader -->
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 homeText">
			<H1>{{{homepage_leader}}}</H1>
		</div><!--end col-sm-8-->	
	</div><!-- end row text -->
	
	<div class="row cats" >
		<h2>Navegue por Categoria</h2>
		<div class="col-sm-1"></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'armaria.jpg')."<p>Acessório de Armaria</p>", '', 'Browse/objects', 'facet', 'type_facet/id/14/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'indumentaria.jpg')."<p>Acessórios de indumentária</p>", '', 'Browse/objects', 'facet', 'type_facet/id/39/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'interior.jpg')."<p>Acessórios de interiores</p>", '', 'Browse/objects', 'facet', 'type_facet/id/26/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'amostra.jpg')."<p>Amostras / Fragmentos</p>", '', 'Browse/objects', 'facet', 'type_facet/id/16/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'arma.jpg')."<p>Armas</p>", '', 'Browse/objects', 'facet', 'type_facet/id/15/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'tabagismo.jpg')."<p>Artigos de tabagismo</p>", '', 'Browse/objects', 'facet', 'type_facet/id/40/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'toalete.jpg')."<p>Artigos de toalete</p>", '', 'Browse/objects', 'facet', 'type_facet/id/41/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'bandeira.jpg')."<p>Bandeiras</p>", '', 'Browse/objects', 'facet', 'type_facet/id/24/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'artistica.jpg')."<p>Construções artísticas</p>", '', 'Browse/objects', 'facet', 'type_facet/id/7/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'desenho.jpg')."<p>Desenhos</p>", '', 'Browse/objects', 'facet', 'type_facet/id/8'); ?></div>
		<div class="col-sm-1"></div>
	</div><!-- end row cats -->
	<div class="row cats" style="margin-bottom:40px;">
		<div class="col-sm-1"></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'desarq.jpg')."<p>Desenhos arquitetônicos</p>", '', 'Browse/objects', 'facet', 'type_facet/id/9/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'diploma.jpg')."<p>Documentos diplomas</p>", '', 'Browse/objects', 'facet', 'type_facet/id/18/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'docfot.jpg')."<p>Documentos fotográficos</p>", '', 'Browse/objects', 'facet', 'type_facet/id/20/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'embalagem.jpg')."<p>Embalagens / Recipientes</p>", '', 'Browse/objects', 'facet', 'type_facet/id/30/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'eqartista.jpg')."<p>Equipamentos de artistas/artesãos</p>", '', 'Browse/objects', 'facet', 'type_facet/id/47/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'eqcomunicacao.jpg')."<p>Equipamentos de comunicação escrita</p>", '', 'Browse/objects', 'facet', 'type_facet/id/19/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'eqfiacao.jpg')."<p>Equipamentos de fiação/tecelagem</p>", '', 'Browse/objects', 'facet', 'type_facet/id/48/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'escultura.jpg')."<p>Esculturas</p>", '', 'Browse/objects', 'facet', 'type_facet/id/10/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'fragmento.jpg')."<p>Fragmentos de construção</p>", '', 'Browse/objects', 'facet', 'type_facet/id/22/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'gravura.jpg')."<p>Gravuras</p>", '', 'Browse/objects', 'facet', 'type_facet/id/11/view/list'); ?></div>
		<div class="col-sm-1"></div>
	</div>	<!-- end row cats -->
	<div class="row cats" style="margin-bottom:40px;">
		<div class="col-sm-1"></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'instprecisao.jpg')."<p>Instrumento de precisão/ótico</p>", '', 'Browse/objects', 'facet', 'type_facet/id/33/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'instmusica.jpg')."<p>Instrumentos musicais</p>", '', 'Browse/objects', 'facet', 'type_facet/id/49/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'lazer.jpg')."<p>Lazer/Desporto </p>", '', 'Browse/objects', 'facet', 'type_facet/id/31/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objcomemorativo.jpg')."<p>Objetos comemorativo</p>", '', 'Browse/objects', 'facet', 'type_facet/id/35/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objadorno.jpg')."<p>Objetos de adorno</p>", '', 'Browse/objects', 'facet', 'type_facet/id/42/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objauxilio.jpg')."<p>Objetos de auxílio/conforto pessoais</p>", '', 'Browse/objects', 'facet', 'type_facet/id/43/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objculto.jpg')."<p>Objetos de culto</p>", '', 'Browse/objects', 'facet', 'type_facet/id/36/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objdevpessoal.jpg')."<p>Objetos de devoção pessoal</p>", '', 'Browse/objects', 'facet', 'type_facet/id/44/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'objiluminacao.jpg')."<p>Objetos de iluminação</p>", '', 'Browse/objects', 'facet', 'type_facet/id/27/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'panegirico.jpg')."<p>Panegírico</p>", '', 'Browse/objects', 'facet', 'type_facet/id/37/view/list'); ?></div>	
		<div class="col-sm-1"></div>
	</div>	<!-- end row cats -->
	<div class="row cats" style="margin-bottom:40px;">
		<div class="col-sm-1"></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'indumentaria2.jpg')."<p>Peças de indumentária</p>", '', 'Browse/objects', 'facet', 'type_facet/id/45/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'pecamobiliario.jpg')."<p>Peças de mobiliário</p>", '', 'Browse/objects', 'facet', 'type_facet/id/28/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'pintura.jpg')."<p>Pinturas</p>", '', 'Browse/objects', 'facet', 'type_facet/id/12/view/list'); ?></div>
		<div class="col-sm-1"><?php print caNavLink($this->request, caGetThemeGraphic($this->request, 'utcozinha.jpg')."<p>Utensílios de cozinha/mesa</p>", '', 'Browse/objects', 'facet', 'type_facet/id/29/view/list'); ?></div>
		<div class="col-sm-1"></div>
	</div>	<!-- end row cats -->

	

	</div><!-- end row fund -->
