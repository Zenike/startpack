<?php 
$pathLinkFile="./assets/";
?>
<?php
function generateRandomString() {
	$length = rand(5, 20);
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>
<!doctype html>
<html lang="fr">
<head>
	<title>startpack</title>
	<meta name="description" content="Description courte de la page" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<link href="<?php echo $pathLinkFile; ?>css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href="<?php echo $pathLinkFile; ?>img/favicon.png" rel="shortcut icon" type="image/png" />
</head>
<body>
</form>

<div id="wrapper">

<form action="">

<ul id="buttons_dl">
	<li>
		<a href="./assets/js/formflex.js" target="_blank" download="formflex.js">
		télécharger le <strong>js</strong>
		</a>
	</li>
	<li>
		<a href="./assets/less/formflex.less" target="_blank" download="formflex.less">
		télécharger le <strong>less</strong>
		</a>
	</li>
</ul>

<h1><i class="fa fa-shopping-basket"></i> Startpack</h1>

<!-- /FIN DU HEADER ------------------------------------------------------------------------------->
<!-- /FIN DU HEADER ------------------------------------------------------------------------------->




<div class="formflex_title">
	Champs texts simples
</div>

<div class="form">

<label>
	<span class="name">horizontal simple</span>
	<input type="text" size="30">
	
	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label class="to_the_right">
	<span class="name">horizontal extensible (script)</span>
	<input type="text" size="30">
	
	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">à la ligne simple</span>
	<span class="clear"></span>
	<input type="text" size="30">
	
	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

<label>
	<span class="name">à la ligne extensible (css uniquement)</span>
	<span class="clear"></span>
	<span class="full"><input type="text" size="30"></span>
	
	<span class="customErrorValidation"></span>
	<span class="clear"></span>
</label>

</div><!-- /form -->
<pre>
&ltlabel>
	&ltspan class="name">horizontal simple&lt/span>
	&ltinput type="text" size="30">
	
	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>

&ltlabel class="to_the_right">
	&ltspan class="name">horizontal extensible (script)&lt/span>
	&ltinput type="text" size="30">
	
	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>

&ltlabel>
	&ltspan class="name">à la ligne simple&lt/span>
	&ltspan class="clear">&lt/span>
	&ltinput type="text" size="30">
	
	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>

&ltlabel>
	&ltspan class="name">à la ligne extensible (css uniquement)&lt/span>
	&ltspan class="clear">&lt/span>
	&ltspan class="full">&ltinput type="text" size="30">&lt/span>
	
	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>
</pre>





























<div class="formflex_title">
	Exclusion de l'alignement automatique
</div>

<div class="form">

<div class="bloc_intermediaire_embetant relay">
<?php for($i=1;$i<=3;$i++){ ?>
	<label>
		<span class="name"><?php echo generateRandomString(); ?></span>
		<input type="text" size="30">
		
		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
<?php } ?>
	<label>
		<span class="name no_size">label non aligné aux autres grace à la class no_size (voir infos)</span>
		<input type="text" size="30">
		
		<span class="customErrorValidation"></span>
		<span class="clear"></span>
	</label>
</div>

</div><!-- /form -->
<pre>
&ltlabel>
	&ltspan class="name no_size">label non aligné aux autres grace à la class no_size (voir infos)&lt/span>
	&ltinput type="text" size="30">
	
	&ltspan class="customErrorValidation">&lt/span>
	&ltspan class="clear">&lt/span>
&lt/label>
</pre>
<blockquote>
- les blocs alignent la taille de leurs intitulés automatiquement grace à la fonction align_name (rien à ajouter).<br />
<br />
- par defaut, les names dans les fieldsets ne sont pas formatés. Il est possible de forcer le formatage (de n'importe quel name) en ajoutant la class "forced_align" sur le name en question.<br />
<br />
- il est possible d'exclure un name de ce systeme en lui mettant la class "no_size".<br />
<br />
- les labels à la racine du formulaire recoivent du css particulier en tant qu'élément racine (marge, alignement etc).<br />
Si un bloc décoratif se trouve en parent de ces éléments, il peut casser le css par defaut.<br />
Placer la classe "relay" sur ce div (ou autre balise) dit au css et au script de ne pas en tenir compte.
</blockquote>


















</form>

</div><!-- \wrapper -->

<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/jquery.actual.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../startpack.js"></script>
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>js/monjquery.js"></script>
</body>
</html>