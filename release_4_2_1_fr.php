<?php
/* if you're reading this, it isn't because you've found a security hole.
   this is an open source website. read and learn! */
header("Cache-Control: public, max-age=600");
require_once 'prepend.inc';
commonHeader("Hypertext Preprocessor");
echo "\n<!--$MYSITE-->\n";
?>
<h1>Publication de PHP 4.2.1</h1>
<p>[ <a href="/release_4_2_1.php">English Version</a> ]&nbsp;</p>
<h2>Version mineure de correction de bugs</h2>
<p>Cette version interm&eacute;diaire corrige quelques bugs trouv&eacute;s dans PHP 4.2.0.
 PHP 4.2.1 inclut les am&eacute;liorations suivantes:
<ul>
 <li>Correction de l'extension MySQL qui n'arrivait pas &agrave; se connecter au serveur MySQL.</li>
 <li>Correction de l'extension COM qui crashait lors de l'utilisation d'un serveur outproc.</li>
 <li>Correction du fonctionnement du SID des sessions.</li>
 <li>Correction de l'extension mbstring, incluant le support des noms de dossiers SJIS et mb_output_buffer().</li>
 <li>Correction d'un bug dans socket_select() qui cause un comportement inattendu lors de commandes comme $w = $e = array($sock);</li>
 <li>Compatibilit&eacute; presque totale avec l'extension domxml, et corrections de nombreuses fonctions.</li>
 <li>Le safe mode prot&egrave;ge show_source(), parse_ini_file() et rmdir().</li>
</ul>
Pour une liste compl&egrave;te des modifications de PHP 4.2.1, voyez le fichier 
<a href="/ChangeLog-4.php">NEWS</a>.
</p>
<h2>Compatibilit&eacute;</h2>
<p>PHP 4.2.1 dispose aussi d'une compatibilit&eacute; am&eacute;lior&eacute;e (mais toujours exp&eacute;rimentale) 
avec Apache 2. Nous <b>ne recommandons pas</b> son utilisation dans un environnement de
production. Testez-le intensivement, et rapportez tous les bugs dans le <a href="http://bugs.php.net">syst&egrave;me</a>.
</p>
<h2>Variables externes</h2>
<p>Nous attirons votre attention sur l'&eacute;volution majeure de PHP 4.2.0 concernant
l'utilisation des variables. <b>Les variables externes (celles d'environnement ou du serveur web,
les requ&ecirc;tes HTTP, les cookies) ne sont plus enregistr&eacute;es par d&eacute;faut comme 
variables globales</B>. La m&eacute;thode recommand&eacute;e pour acc&eacute;der &agrave; ces variables est d'utiliser
les super globales, introduits en PHP 4.1.0.
Plus d'informations sur ces modifications :
<ul>
 <li><a href="/manual/fr/language.variables.predefined.php">PHP Manuel : Variables pr&eacute;d&eacute;finies</a></li>
 <li><a href="/release_4_1_0_fr.php">L'annonce de publication de PHP 4.1.0</a></li>
 <li><a href="http://www.zend.com/zend/art/art-oertli.php">L'article de Thomas Oertli sur la programmation s&eacute;curis&eacute;e</a></li>
</ul>
</p>
<?php commonFooter(); ?>
