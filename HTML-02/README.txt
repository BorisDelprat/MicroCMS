Page 47

Temps pass� : 8h

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
(celui du milieu sera concern�)

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
2/ Le bloc 1 a la propri�t� float:left
3/ les 2 blocs sont en float:left, sortant du flux et du conteneur
4/ les 2 blocs sont en float:right, le 1 �tant plac� avant il sera le plus � droite.
5/ Le bloc 1 n'a plus de float, il remplit le conteneur.
Le bloc 2 conserve le float:right et se place � la suite du conteneur maintenant plein.
6/ Le bloc droit a la propri�t� clear:right ou clear:both.

Quiz correction : OK

__________________________________________________________________________________

Quiz 3 :
1/ border (meme transparente)
2/ min-height permet l'�tirement, sinon le contenu d�passera
3/ en haut � droite
4/ en bas du navigateur de mani�re fixe, sur toute la largeur
5/ display:inline-block						(pas inline, pas block)
6/ display:inline-block

Quiz correction :

6/ diplay: table-cell et display: inline-block (demand� sous CSS2)