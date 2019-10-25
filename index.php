<!DOCTYPE HTML Frameset DTD>
<html>
<head>
	<title>page d'acceuille</title>
	<script type="text/javascript">
		function verifreg(){
			if (document.formulaire.prenom.value===""||document.formulaire.nom.value===""||document.formulaire.passe.value===""||document.formulaire.vpasse.value===""||document.formulaire.passe.value!=document.formulaire.vpasse.value||document.formulaire.jour.value===""||document.formulaire.mois.value===""||document.formulaire.anne.value===""||document.formulaire.mail.value==="") {
			alert("tu dois remplire tous les champs");return false;}
			else{ if(((document.formulaire.mois.value==1||document.formulaire.mois.value==3||document.formulaire.mois.value==5||document.formulaire.mois.value==7||document.formulaire.mois.value==8||document.formulaire.mois.value==10||document.formulaire.mois.value==12)&&document.formulaire.jour.value>31)||(document.formulaire.mois.value==2&&document.formulaire.jour.value>28)||((document.formulaire.mois.value==4||document.formulaire.mois.value==6||document.formulaire.mois.value==9||document.formulaire.mois.value==11)&&document.formulaire.jour.value>30))
				{alert("date incorrecte");
					return false;}
				else{if(verifemail())
					{alert("remplis");return true;}
					else{alert("adresse e-mail incorrecte");return false;}}}}
		function verifemail(){try{
			adresse=document.formulaire.mail.value;
			taille=document.formulaire.mail.value.length;
			log=false;dom=false;ext=false;
			arob = adresse.lastIndexOf("@");
			login=adresse.substring(0,arob);
			pointfinal = adresse.lastIndexOf(".");
			extention=adresse.substring(pointfinal,taille);
			domaine = adresse.substring(arob+1,pointfinal);
			if(login.length>2){log = true;}
			else{log=false;}
			if(domaine.length>1){dom=true;}
			else{dom=false;}
		if (pointfinal>-1 &&(extention.length==3||extention.length==4)) {ext=true;}
		else{ext=false;}
		if (log==true&&dom==true&&ext==true) {return(true);}
		else{return(false);}}
		catch(e){return(false);}}
	</script>
</head>
<body style="background-color: #00f;">
<table  style="height: 100%;width: 100%"><tr>
        <td style="width: 45%;background-color: #0af;" >  <table style="height: 100%;width: 100%" ><tr><td>
        	<h1 align="center" >LEARN ENGLISH</h1></td></tr>
        	<tr ><td><p >ceci est un site d'auto-evaluation en anglais il vous permet vous de determiner ton niveau en anglais suite a une serie de tests integres.les testes sont repartis sur 4 partie et 6 niveux. le passage d'un niveau a un autre n'est possible sauf si tu obtien un totale d'au moins 96/100 et 24/25 dans chaque type de test dans le niveau precedent.</p></td></tr>
        	<tr><td align="center"><a href="contact.html">Contacter nous</a></td></tr>
        </table></td>
                <td style="width: 20%;background-color: #0af;"><table style="height: 100%;width: 100%">
                	<tr><td colspan="2" align="center"><h1>LOGIN</h1></td></tr>
                <form name="formulaire2" method="post" action="profile.php">
                <tr><td>e-mail</td><td><input type="text" name ="e-mail" value=""></td> </tr></td>
            </tr><tr><td>mot de passe</td><td><input type="text" name ="login" value=""></td> </tr></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="LOG IN"></td></tr></form></table></td>
        <td style="width: 35%;background-color: #0af;">
    <table style="height: 100%;width: 100%"><form name="formulaire" method="post" action="add.php" onsubmit="return verifreg();">
    	<tr><td colspan="2" align="center"><h1>REGESTIR</h1></td> </tr>
      <tr><td>Nom  </td><td><input type="text" name ="nom" value=""></td> </tr>
      <tr><td>Prenom  </td><td><input type="text" name ="prenom" value=""></td> </tr>
      <tr><td>Sexe  </td><td><input type="radio" name ="sex" value="F" checked>F<input type="radio" name ="sex" value="M">M</td> </tr>
      <tr><td>Date de naissance  </td><td>
      	<input type="text" name ="jour" value="" placeholder="jour"><input type="text" name ="mois" value="" placeholder="mois"><input type="text" name ="anne" value="" placeholder="anne">
      </td> </tr>
      <tr><td>Pays  </td><td><select name="inpu">
      	<option>Afghanistan</option>
      	<option>Afrique du Sud</option>
      	<option>Albanie</option>
      	<option>Algerie</option>
      	<option>Allemagne</option>
      	<option>Amrouland</option>
      	<option>Andorre</option>
      	<option>Angola</option>
      	<option>Antigua-et-Barbuda</option>
      	<option>Arabie saoudite</option>
      	<option>Argentine</option>
      	<option>Armenie</option>
      	<option>Australie</option>
      	<option>Autriche</option>
      	<option>Azerbaidjan</option>
      	<option>Bahamas</option>
      	<option>Bahrein</option>
      	<option>Bangladesh</option>
      	<option>Barbade</option>
      	<option>Belgique</option>
      	<option>Belize</option>
      	<option>Benin</option><option>Bhoutan</option>
      	<option>Bielorussie</option>
      	<option>Birmanie</option>
      	<option>Bolivie</option>
      	<option>Bosnie-Herzegovine</option>
      	<option>Botswana</option>
      	<option>Bresil</option>
      	<option>Brunei</option>
      	<option>Bulgarie</option>
      	<option>Burkina Faso</option>
      	<option>Burundi</option>
      	<option>Cambodge</option>
      	<option>Cameroun</option>
      	<option>Canada</option>
      	<option>Cap-Vert</option>
      	<option>Republique centrafricaine</option>
      	<option>Chili</option>
      	<option>Chine</option>
      	<option>Chypre</option>
      	<option>Colombie</option>
      	<option>Comores</option>
      	<option>Republique du Congo</option>
      	<option>Republique democratique du Congo</option>
      	<option>îles Cook</option>
      	<option>Coree du Nord</option>
      	<option>Coree du Sud</option>
      	<option>Costa Rica</option>
      	<option>Côte d'Ivoire</option>
      	<option>Croatie</option>
      	<option>Cuba</option>
      	<option>Danemark</option>
      	<option>Djibouti</option>
      	<option>Republique dominicaine</option>
      	<option>Dominique</option>
      	<option>Egypte</option>
      	<option>Emirats arabes unis</option>
      	<option>Equateur</option>
      	<option>Erythree</option>
      	<option>Espagne</option>
      	<option>Estonie</option>
      	<option>Etats-Unis</option>
      	<option>Ethiopie</option>
      	<option>Fidji</option>
      	<option>Finlande</option>
      	<option>France</option>
      	<option>Gabon</option>
      	<option>Gambie</option>
      	<option>Georgie</option>
      	<option>Ghana</option>
      	<option>Grece</option>
      	<option>Grenade</option>
      	<option>Guatemala</option>
      	<option>Guinee</option>
      	<option>Guinee-Bissau</option>
      	<option>Guinee equatoriale</option>
      	<option>Guyana</option>
      	<option>Haiti</option>
      	<option>Honduras</option>
      	<option>Hongrie</option>
      	<option>Inde</option>
      	<option>Indonesie</option>
      	<option>Irak</option>
      	<option>Iran</option>
      	<option>Irlande</option>
      	<option>Islande</option>
      	<option>Israel</option>
      	<option>Italie</option>
      	<option>Jamaique</option>
      	<option>Japon</option>
      	<option>Jordanie</option>
      	<option>Kazakhstan</option>
      	<option>Kenya</option>
      	<option>Kirghizistan</option>
      	<option>Kiribati</option>
      	<option>Koweet</option>
      	<option>Laos</option>
      	<option>Lesotho</option>
      	<option>Lettonie</option>
      	<option>Liban</option>
      	<option>Liberia</option>
      	<option>Libye</option>
      	<option>Liechtenstein</option>
      	<option>Lituanie</option>
      	<option>Luxembourg</option>
      	<option>Macedoine du Nord</option>
      	<option>Madagascar</option>
      	<option>Malaisie</option>
      	<option>Malawi</option>
      	<option>Maldives</option>
      	<option>Mali</option>
      	<option>Malte</option>
      	<option>Maroc</option>
      	<option>îles Marshall</option>
      	<option>Maurice</option>
      	<option>Mauritanie</option>
      	<option>Mexique</option>
      	<option>Micronesie</option>
      	<option>Moldavie</option>
      	<option>Monaco</option>
      	<option>Mongolie</option>
      	<option>Montenegro</option>
      	<option>Mozambique</option>
      	<option>Namibie</option>
      	<option>Nauru</option>
      	<option>Nepal</option>
      	<option>Nicaragua</option>
      	<option>Niger</option>
      	<option>Nigeria</option>
      	<option>Niue</option>
      	<option>Norvege</option>
      	<option>Nouvelle-Zelande</option>
      	<option>Oman</option>
      	<option>Ouganda</option>
      	<option>Ouzbekistan</option>
      	<option>Pakistan</option>
      	<option>Palaos</option>
      	<option>Palestine</option>
      	<option>Panama</option>
      	<option>Papouasie-Nouvelle-Guinee</option>
      	<option>Paraguay</option>
      	<option>Pays-Bas</option>
      	<option>Perou</option>
      	<option>Philippines</option>
      	<option>Pologne</option>
      	<option>Portugal</option>
      	<option>Qatar</option>
      	<option>Roumanie</option>
      	<option>Royaume-Uni</option>
      	<option>Russie</option>
      	<option>Rwanda</option>
      	<option>Saint-Christophe-et-Nieves</option>
      	<option>Saint-Marin</option>
      	<option>Saint-Vincent-et-les Grenadines</option>
      	<option>Sainte-Lucie</option>
      	<option>îles Salomon</option>
      	<option>Salvador</option>
      	<option>Samoa</option>
      	<option>São Tome-et-Principe</option>
      	<option>Senegal</option>
      	<option>Serbie</option>
      	<option>Seychelles</option>
      	<option>Sierra Leone</option>
      	<option>Singapour</option>
      	<option>Slovaquie</option>
      	<option>Slovenie</option>
      	<option>Somalie</option>
      	<option>Soudan</option>
      	<option>Soudan du Sud</option>
      	<option>Sri Lanka</option>
      	<option>Suede</option>
      	<option>Suisse</option>
      	<option>Suriname</option>
      	<option>Swaziland</option>
      	<option>Syrie</option>
      	<option>Tadjikistan</option>
      	<option>Tanzanie</option>
      	<option>Tchad</option>
      	<option>Republique tcheque</option>
      	<option>Thailande</option>
      	<option>Timor oriental</option>
      	<option>Togo</option>
      	<option>Tonga</option>
      	<option>Trinite-et-Tobago</option>
      	<option>Turkmenistan</option>
      	<option>Tunisie</option>
      	<option>Turquie</option>
      	<option>Tuvalu</option>
      	<option>Ukraine</option>
      	<option>Uruguay</option>
      	<option>Vanuatu</option>
      	<option>Vatican</option>
      	<option>Venezuela</option>
      	<option>Viet</option>
      	<option>Yemen</option>
      	<option>Zambie</option>
      	<option>Zimbabwe</option>
      </select></td> </tr>
      <tr><td>E-mail  </td><td><input type="text" name ="mail" value="" placeholder="amrouhajji@gmail.com" id="mail"></td> </tr>
      <tr><td>Mot de passe  </td><td><input type="password" name ="passe" value="" id="passe"></td> </tr>
      <tr><td>Verifier mot de passe  </td><td><input type="password" name ="vpasse" value=""></td> </tr>
      <tr><td colspan="2" align="center"><input type="submit" value="REGESTIR"></td></tr>
    </form></table></td>
</tr>
</table>
</body>
</html>