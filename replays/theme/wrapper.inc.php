<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?932f42c7" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8842417090595995" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6307165255195384" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?93ec63dc" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?cfa51183" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?e39c48cf" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7595794827524673"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.33330370709232016" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6972412044970364">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.698814074407061">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.1473291093357203">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.17642387490275402">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?8fc25e27"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?e9be4c2d"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?8a8d8296"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6526015939546441"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?38477214"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?949c4200"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?16512e2e"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?73c487dd"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?7839f9fa"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?c6aedfb3"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?09270150"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?78f4c054"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?a0e23778"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?1cf22350"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?22d10d04"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?b7d53acb"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?05bb635b"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?817504c5"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?30e74b2e"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
