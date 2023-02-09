# Exercice 1
**SELECT** *<br>
**FROM** Professeur P<br>
**JOIN** titulariat t<br>
**ON** P.num_prof = T.num_prof<br>
**WHERE** cours in
(**SELECT** U.cours  <br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**FROM** universite u<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**JOIN** etudiant e<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**ON** u.num_etudiant = E.num_etudiant<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**WHERE** nom_etudiant = 'Doe'<br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**AND** prenom_etudiant = 'John'<br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**AND** resultat is null)
# Exercice 2
**SELECT** *<br>
**FROM** Professeur P<br>
**JOIN** titulariat t<br>
**ON** P.num_prof = T.num_prof<br>
**WHERE** cours in
(**SELECT** U.cours <br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**FROM** universite u<br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;**WHERE** resultat is null)