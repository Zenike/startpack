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

<div id="wrapper">

<ul id="buttons_dl">
	<li>
		<a href="../startpack.js" target="_blank" download="startpack.js">
		télécharger le <strong>js</strong>
		</a>
	</li>
	<li>
		<a href="../startpack.less" target="_blank" download="startpack.less">
		télécharger le <strong>less</strong>
		</a>
	</li>
</ul>

<h1><i class="fa fa-shopping-basket"></i> Startpack</h1>

<!-- /FIN DU HEADER ------------------------------------------------------------------------------->
<!-- /FIN DU HEADER ------------------------------------------------------------------------------->




<div class="classic_title_1">
	Clear
</div>

<div id="example_clear">

	<div class="block">float</div>
	<div class="block">float</div>
	<div class="block">float</div>

	<span class="clear"></span>

	<div class="text">
		Texte avec span clear juste au dessus, juste à la suite des blocks
	</div>

	<div class="block">float</div>
	<div class="block">float</div>
	<div class="block">float</div>

	<div class="text clear">
		Mettre le clear directement sur le div de texte fonctionne également
	</div>

</div><!-- /example -->
<pre>
&lt;div class="block">float&lt;/div>
&lt;div class="block">float&lt;/div>
&lt;div class="block">float&lt;/div>

&lt;span class="clear">&lt;/span>

&lt;div class="text">
	Texte avec span clear juste au dessus, juste à la suite des blocks
&lt;/div>

&lt;div class="block">float&lt;/div>
&lt;div class="block">float&lt;/div>
&lt;div class="block">float&lt;/div>

&lt;div class="text clear">
	Mettre le clear directement sur le div de texte fonctionne également
&lt;/div>
</pre>












<div class="classic_title_1">
	Autoloader
</div>

<div id="example_autoloader">

	<div class="btn start">
		autoloader("start");
	</div>
	<div class="btn stop">
		autoloader("stop");
	</div>

</div><!-- /example -->
<pre>
$("#example_autoloader .start").on("click",function(){
	autoloader("start");
});
$("#example_autoloader .stop").on("click",function(){
	autoloader("stop");
});
</pre>
<blockquote>
fonction globale qui lance un loader qui recouvre toute la page.<br />
Pas besoin de structure html existante. Elle sera créée au click par le javascript.<br />
<br />
- est dépendant de la présence de FontAwesome dans le projet
</blockquote>












<div class="classic_title_1">
	Autopopup
</div>

<div id="example_autopopup">

	<div class="autopopup r5 w300 m15" id="popup_example">
		<div class="popup_title">
			Contenu du popup :
		</div>
		Morbi sed augue nisi. Vivamus vehicula eros in lorem auctor, adipiscing pretium urna pulvinar. Praesent vitae imperdiet ante. Mauris eu pellentesque magna. Donec consectetur mauris orci, ultricies congue mauris ultricies vel. Aliquam ac lectus massa. Ut ac est turpis.
	</div>

	<div class="btn" data-popup="popup_example">
		Lancement du popup
	</div>

</div><!-- /example -->
<pre>
&lt;div class="autopopup r5 w300 m15" id="popup_example">
	&lt;div class="popup_title">
		Contenu du popup :
	&lt;/div>
	Morbi sed augue nisi. Vivamus vehicula eros in lorem auctor, adipiscing pretium urna pulvinar. Praesent vitae imperdiet ante. Mauris eu pellentesque magna. Donec consectetur mauris orci, ultricies congue mauris ultricies vel. Aliquam ac lectus massa. Ut ac est turpis.
&lt;/div>

&lt;div class="btn" data-popup="popup_example">
	Lancement du popup
&lt;/div>
</pre>











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