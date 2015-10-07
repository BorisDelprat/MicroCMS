Page 47

Temps passé : 3h30 min

Quiz 1:
1/ h1, .fuit, #header
2/ body > div
3/ p +p +p
4/ Le poids de l'id est plus fort, le titre sera bleu.
5/ :before et :after servent se placent entre les marges internes et le contenu.
6/
<p> ... </p>
<h1 class="kiwi"> ... </h1>
<p> Kiwi <strong> Kiwi </strong> Kiwi </p>
(celui du milieu sera concerné)

7/
<p title="kiwi"> ... </p>
<p> <strong class='info'> Blabla </strong> </p>

8/
<form id="contact" action="destination.php">
<p> Formulaire </p>
<label for="kiwi"> Kiwi : <label>
<input type="text" id="kiwi" />
</form>

Correction :
8/
<form id="contact" action="destination.php">
<p> Formulaire
<label for="kiwi"> Kiwi : <label>
<input type="text" id="kiwi" />
</p>                                                                 <-----
</form>


__________________________________________________________________________________

Quiz 2 :
1 / Rien, ce sont 2 blocs dans le flux
2/ Le bloc 1 a la propriété float:left
3/ les 2 blocs sont en float:left, sortant du flux et du conteneur
4/ les 2 blocs sont en float:right, le 1 étant placé avant il sera le plus à droite.
5/ Le bloc 1 n'a plus de float, il remplit le conteneur.
Le bloc 2 conserve le float:right et se place à la suite du conteneur maintenant plein.
6/ Le bloc droit a la propriété clear:right ou clear:both.

Quiz correction : OK