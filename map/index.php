<?php
if(isset($_POST['submit']) && isset($_POST['depart_name']) && $_POST['your-name'] != "")
{	
		$datetime = date('Y-m-d h:i:s');
		$querySEL_Get_Data = "SELECT * FROM wp_dynamic_email";
		$get_email = mysqli_query($conn,$querySEL_Get_Data);
		while ($row = mysqli_fetch_assoc($get_email)) {
			$mypages[] = $row["email_address"];
		}
		if($_POST['depart_name'] == '01 Ain')								{ $to = $mypages[0];}

		else if($_POST['depart_name'] == '02 Aisne')						{ $to = $mypages[1];	}

		else if($_POST['depart_name'] == '03 Allier')						{ $to = $mypages[2];	}

		else if($_POST['depart_name'] == '04 Alpes de Hautes-Provence')		{ $to = $mypages[3];	}

		else if($_POST['depart_name'] == '05 Hautes-Alpes')					{ $to = $mypages[4];	}

		else if($_POST['depart_name'] == '06 Alpes-Maritimes')				{ $to = $mypages[5];	}

		else if($_POST['depart_name'] == '07 Ardèche')						{ $to = $mypages[6];	}

		else if($_POST['depart_name'] == '08 Ardennes')						{ $to = $mypages[7];	}

		else if($_POST['depart_name'] == '09 Ariège')						{ $to = $mypages[8];}

		else if($_POST['depart_name'] == '10 Aube')							{ $to = $mypages[9];}

		else if($_POST['depart_name'] == '11 Aude')							{ $to = $mypages[10];}

		else if($_POST['depart_name'] == '12 Aveyron')						{ $to = $mypages[11];}

		else if($_POST['depart_name'] == '13 Bouches-du-Rhône')				{ $to = $mypages[12];}

		else if($_POST['depart_name'] == '14 Calvados')						{ $to = $mypages[13];}

		else if($_POST['depart_name'] == '15 Cantal')						{ $to = $mypages[14];}

		else if($_POST['depart_name'] == '16 Charente')						{ $to = $mypages[15];}

		else if($_POST['depart_name'] == '17 Charente-Maritime')			{ $to = $mypages[16];}

		else if($_POST['depart_name'] == '18 Cher')							{ $to = $mypages[17];}

		else if($_POST['depart_name'] == '19 Corrèze')						{ $to = $mypages[18];}

		else if($_POST['depart_name'] == '2A Corse-du-Sud')					{ $to = $mypages[19];}

		else if($_POST['depart_name'] == '2B Haute-Corse')					{ $to = $mypages[20];}

		else if($_POST['depart_name'] == "21 Côte-d'Or")					{ $to = $mypages[21];}

		else if($_POST['depart_name'] == "22 Côtes d'Armor")				{ $to = $mypages[22];}

		else if($_POST['depart_name'] == '23 Creuse')						{ $to = $mypages[23];}

		else if($_POST['depart_name'] == '24 Dordogne')						{ $to = $mypages[24];}

		else if($_POST['depart_name'] == '25 Doubs')						{ $to = $mypages[25];}

		else if($_POST['depart_name'] == '26 Drôme')						{ $to = $mypages[26];}

		else if($_POST['depart_name'] == '27 Eure')							{ $to = $mypages[27];}

		else if($_POST['depart_name'] == '28 Eure-et-Loir')					{ $to = $mypages[28];}

		else if($_POST['depart_name'] == '29 Finistère')					{ $to = $mypages[29];}

		else if($_POST['depart_name'] == '30 Gard')							{ $to = $mypages[30];}

		else if($_POST['depart_name'] == '31 Haute-Garonne')				{ $to = $mypages[31];}

		else if($_POST['depart_name'] == '32 Gers')							{ $to = $mypages[32];}

		else if($_POST['depart_name'] == '33 Gironde')						{ $to = $mypages[33];}

		else if($_POST['depart_name'] == '34 Hérault')						{ $to = $mypages[34];}

		else if($_POST['depart_name'] == '35 Ille-et-Vilaine')				{ $to = $mypages[35];}

		else if($_POST['depart_name'] == '36 Indre')						{ $to = $mypages[36];}

		else if($_POST['depart_name'] == '37 Indre-et-Loire')				{ $to = $mypages[37];}

		else if($_POST['depart_name'] == '38 Isère')						{ $to = $mypages[38];}

		else if($_POST['depart_name'] == '39 Jura')							{ $to = $mypages[39];}

		else if($_POST['depart_name'] == '40 Landes')						{ $to = $mypages[40];}

		else if($_POST['depart_name'] == '41 Loir-et-Cher')					{ $to = $mypages[41];}

		else if($_POST['depart_name'] == '42 Loire')						{ $to = $mypages[42];}

		else if($_POST['depart_name'] == '43 Haute-Loire')					{ $to = $mypages[43];}

		else if($_POST['depart_name'] == '44 Loire-Atlantique')				{ $to = $mypages[44];}

		else if($_POST['depart_name'] == '45 Loiret')						{ $to = $mypages[45];}

		else if($_POST['depart_name'] == '46 Lot')							{ $to = $mypages[46];}

		else if($_POST['depart_name'] == '47 Lot-et-Garonne')				{ $to = $mypages[47];}

		else if($_POST['depart_name'] == '48 Lozère')						{ $to = $mypages[48];}

		else if($_POST['depart_name'] == '49 Maine-et-Loire')				{ $to = $mypages[49];}

		else if($_POST['depart_name'] == '50 Manche')						{ $to = $mypages[50];}

		else if($_POST['depart_name'] == '51 Marne')						{ $to = $mypages[51];}

		else if($_POST['depart_name'] == '52 Haute-Marne')					{ $to = $mypages[52];}

		else if($_POST['depart_name'] == '53 Mayenne Laval')				{ $to = $mypages[53];}

		else if($_POST['depart_name'] == '54 Meurthe-et-Moselle')			{ $to = $mypages[54];}

		else if($_POST['depart_name'] == '55 Meuse')						{ $to = $mypages[55];}

		else if($_POST['depart_name'] == '56 Morbihan')						{ $to = $mypages[56];}

		else if($_POST['depart_name'] == '57 Moselle')						{ $to = $mypages[57];}

		else if($_POST['depart_name'] == '58 Nièvre')						{ $to = $mypages[58];}

		else if($_POST['depart_name'] == '59 Nord')							{ $to = $mypages[59];}

		else if($_POST['depart_name'] == '60 Oise')							{ $to = $mypages[60];}

		else if($_POST['depart_name'] == '61 Orne')							{ $to = $mypages[61];}

		else if($_POST['depart_name'] == '62 Pas-de-Calais')				{ $to = $mypages[62];}

		else if($_POST['depart_name'] == '63 Puy-de-Dôme')					{ $to = $mypages[63];}

		else if($_POST['depart_name'] == '64 Pyrénées-Atlantiques')			{ $to = $mypages[64];}

		else if($_POST['depart_name'] == '65 Hautes-Pyrénées')				{ $to = $mypages[65];}

		else if($_POST['depart_name'] == '66 Pyrénées-Orientales')			{ $to = $mypages[66];}

		else if($_POST['depart_name'] == '67 Bas-Rhin')						{ $to = $mypages[67];}

		else if($_POST['depart_name'] == '68 Haut-Rhin')					{ $to = $mypages[68];}

		else if($_POST['depart_name'] == '69 Rhône')						{ $to = $mypages[69];}

		else if($_POST['depart_name'] == '70 Haute-Saône')					{ $to = $mypages[70];}

		else if($_POST['depart_name'] == '71 Saône-et-Loire')				{ $to = $mypages[71];}

		else if($_POST['depart_name'] == '72 Sarthe')						{ $to = $mypages[72];}

		else if($_POST['depart_name'] == '73 Savoie')						{ $to = $mypages[73];}

		else if($_POST['depart_name'] == '74 Haute-Savoie')					{ $to = $mypages[74];}

		else if($_POST['depart_name'] == '75 Paris')						{ $to = $mypages[75];}

		else if($_POST['depart_name'] == '76 Seine-Maritime')				{ $to = $mypages[76];}

		else if($_POST['depart_name'] == '77 Seine-et-Marne')				{ $to = $mypages[77];}

		else if($_POST['depart_name'] == '78 Yvelines')						{ $to = $mypages[78];}

		else if($_POST['depart_name'] == '79 Deux-Sèvres')					{ $to = $mypages[79];}

		else if($_POST['depart_name'] == '80 Somme')						{ $to = $mypages[80];}

		else if($_POST['depart_name'] == '81 Tarn')							{ $to = $mypages[81];}

		else if($_POST['depart_name'] == '82 Tarn-et-Garonne')				{ $to = $mypages[82];}

		else if($_POST['depart_name'] == '83 Var')							{ $to = $mypages[83];}

		else if($_POST['depart_name'] == '84 Vaucluse')						{ $to = $mypages[84];}

		else if($_POST['depart_name'] == '85 Vendée')						{ $to = $mypages[85];}

		else if($_POST['depart_name'] == '86 Vienne')						{ $to = $mypages[86];}

		else if($_POST['depart_name'] == '87 Haute-Vienne')					{ $to = $mypages[87];}

		else if($_POST['depart_name'] == '88 Vosges')						{ $to = $mypages[88];}

		else if($_POST['depart_name'] == '89 Yonne')						{ $to = $mypages[89];}

		else if($_POST['depart_name'] == '90 Territoire-de-Belfort')		{ $to = $mypages[90];}

		else if($_POST['depart_name'] == '91 Essonne')					{ $to = $mypages[91];}

		else if($_POST['depart_name'] == '92 Hauts-de-Seine')				{ $to = $mypages[92];}

		else if($_POST['depart_name'] == '93 Seine-Saint-Denis')			{ $to = $mypages[93];}

		else if($_POST['depart_name'] == '94 Val-de-Marne')					{ $to = $mypages[94];}

		else if($_POST['depart_name'] == "95 Val-d’Oise")					{ $to = $mypages[95];}

		echo $to;
} 
$drop_name = '';?>
<div class="cpte-rt">
                <h3>CONTACTEZ-NOUS</h3> 
                <form id="form" method="post" action="">
                  <div class="form-group">

                    <label for="exampleInputEmail1">Département <sup class="text-danger">*</sup></label>

                    <select name="depart_name" id="depart_name" class="form-control">

                     <option value="0">Sélectionnez un département</option>

                     <option value="01 Ain" <?php if($drop_name == "01 Ain"){ ?> selected <?php } ?>>01 Ain</option>

                     <option value="02 Aisne"  <?php if($drop_name == "02 Aisne"){ ?> selected <?php } ?>>02 Aisne</option>

                     <option value="03 Allier" <?php if($drop_name == "03 Allier"){ ?> selected <?php } ?>>03 Allier</option>

                     <option value="04 Alpes de Hautes-Provence"  <?php if($drop_name == "04 Alpes de Hautes-Provence"){ ?> selected <?php } ?>>04 Alpes de Hautes-Provence</option>

                     <option value="05 Hautes-Alpes"  <?php if($drop_name == "05 Hautes-Alpes"){ ?> selected <?php } ?>>05 Hautes-Alpes</option>

                     <option value="06 Alpes-Maritimes"  <?php if($drop_name == "06 Alpes-Maritimes"){ ?> selected <?php } ?>>06 Alpes-Maritimes</option>

                     <option value="07 Ardèche"  <?php if($drop_name == "07 Ardèche"){ ?> selected <?php } ?>>07 Ardèche</option>

                     <option value="08 Ardennes"  <?php if($drop_name == "08 Ardennes"){ ?> selected <?php } ?>>08 Ardennes</option>

                     <option value="09 Ariège"  <?php if($drop_name == "09 Ariège"){ ?> selected <?php } ?>>09 Ariège</option>

                     <option value="10 Aube"  <?php if($drop_name == "10 Aube"){ ?> selected <?php } ?>>10 Aube</option>

                     <option value="11 Aude"  <?php if($drop_name == "11 Aude"){ ?> selected <?php } ?>>11 Aude</option>

                     <option value="12 Aveyron"  <?php if($drop_name == "12 Aveyron"){ ?> selected <?php } ?>>12 Aveyron</option>

                     <option value="13 Bouches-du-Rhône"  <?php if($drop_name == "13 Bouches-du-Rhône"){ ?> selected <?php } ?>>13 Bouches-du-Rhône</option>

                     <option value="14 Calvados"  <?php if($drop_name == "14 Calvados"){ ?> selected <?php } ?>>14 Calvados</option>

                     <option value="15 Cantal"  <?php if($drop_name == "15 Cantal"){ ?> selected <?php } ?>>15 Cantal</option>

                     <option value="16 Charente"  <?php if($drop_name == "16 Charente"){ ?> selected <?php } ?>>16 Charente</option>

                     <option value="17 Charente-Maritime"  <?php if($drop_name == "17 Charente-Maritime"){ ?> selected <?php } ?>>17 Charente-Maritime</option>

                     <option value="18 Cher"  <?php if($drop_name == "18 Cher"){ ?> selected <?php } ?>>18 Cher</option>

                     <option value="19 Corrèze"  <?php if($drop_name == "19 Corrèze"){ ?> selected <?php } ?>>19 Corrèze</option>

                     <option value="2A Corse-du-Sud"  <?php if($drop_name == "2A Corse-du-Sud"){ ?> selected <?php } ?>>2A Corse-du-Sud</option>

                     <option value="2B Haute-Corse"  <?php if($drop_name == "2B Haute-Corse"){ ?> selected <?php } ?>>2B Haute-Corse</option>

                     <option value="21 Côte-d’Or"  <?php if($drop_name == "21 Côte-d’Or"){ ?> selected <?php } ?>>21 Côte-d'Or</option>

                     <option value="22 Côtes d’Armor"  <?php if($drop_name == "22 Côtes d’Armor"){ ?> selected <?php } ?>>22 Côtes d'Armor</option>

                     <option value="23 Creuse"  <?php if($drop_name == "23 Creuse"){ ?> selected <?php } ?>>23 Creuse</option>

                     <option value="24 Dordogne"  <?php if($drop_name == "24 Dordogne"){ ?> selected <?php } ?>>24 Dordogne</option>

                     <option value="25 Doubs"  <?php if($drop_name == "25 Doubs"){ ?> selected <?php } ?>>25 Doubs</option>

                     <option value="26 Drôme"  <?php if($drop_name == "26 Drôme"){ ?> selected <?php } ?>>26 Drôme</option>

                     <option value="27 Eure"  <?php if($drop_name == "27 Eure"){ ?> selected <?php } ?>>27 Eure</option>

                     <option value="28 Eure-et-Loir"  <?php if($drop_name == "28 Eure-et-Loir"){ ?> selected <?php } ?>>28 Eure-et-Loir</option>

                     <option value="29 Finistère"  <?php if($drop_name == "29 Finistère"){ ?> selected <?php } ?>>29 Finistère</option>

                     <option value="30 Gard"  <?php if($drop_name == "30 Gard"){ ?> selected <?php } ?>>30 Gard</option>

                     <option value="31 Haute-Garonne"  <?php if($drop_name == "31 Haute-Garonne"){ ?> selected <?php } ?>>31 Haute-Garonne</option>

                     <option value="32 Gers"  <?php if($drop_name == "32 Gers"){ ?> selected <?php } ?>>32 Gers</option>

                     <option value="33 Gironde"  <?php if($drop_name == "33 Gironde"){ ?> selected <?php } ?>>33 Gironde</option>

                     <option value="34 Hérault"  <?php if($drop_name == "34 Hérault"){ ?> selected <?php } ?>>34 Hérault</option>

                     <option value="35 Ille-et-Vilaine"  <?php if($drop_name == "35 Ille-et-Vilaine"){ ?> selected <?php } ?>>35 Ille-et-Vilaine</option>

                     <option value="36 Indre"  <?php if($drop_name == "36 Indre"){ ?> selected <?php } ?>>36 Indre</option>

                     <option value="37 Indre-et-Loire"  <?php if($drop_name == "37 Indre-et-Loire"){ ?> selected <?php } ?>>37 Indre-et-Loire</option>

                     <option value="38 Isère"  <?php if($drop_name == "38 Isère"){ ?> selected <?php } ?>>38 Isère</option>

                     <option value="39 Jura"  <?php if($drop_name == "39 Jura"){ ?> selected <?php } ?>>39 Jura</option>

                     <option value="40 Landes"  <?php if($drop_name == "40 Landes"){ ?> selected <?php } ?>>40 Landes</option>

                     <option value="41 Loir-et-Cher"  <?php if($drop_name == "41 Loir-et-Cher"){ ?> selected <?php } ?>>41 Loir-et-Cher</option>

                     <option value="42 Loire"  <?php if($drop_name == "42 Loire"){ ?> selected <?php } ?>>42 Loire</option>

                     <option value="43 Haute-Loire"  <?php if($drop_name == "43 Haute-Loire"){ ?> selected <?php } ?>>43 Haute-Loire</option>

                     <option value="44 Loire-Atlantique"  <?php if($drop_name == "44 Loire-Atlantique"){ ?> selected <?php } ?>>44 Loire-Atlantique</option>

                     <option value="45 Loiret"  <?php if($drop_name == "45 Loiret"){ ?> selected <?php } ?>>45 Loiret</option>

                     <option value="46 Lot"  <?php if($drop_name == "46 Lot"){ ?> selected <?php } ?>>46 Lot</option>

                     <option value="47 Lot-et-Garonne"  <?php if($drop_name == "47 Lot-et-Garonne"){ ?> selected <?php } ?>>47 Lot-et-Garonne</option>

                     <option value="48 Lozère"  <?php if($drop_name == "48 Lozère"){ ?> selected <?php } ?>>48 Lozère</option>

                     <option value="49 Maine-et-Loire"  <?php if($drop_name == "49 Maine-et-Loire"){ ?> selected <?php } ?>>49 Maine-et-Loire</option>

                     <option value="50 Manche"  <?php if($drop_name == "50 Manche"){ ?> selected <?php } ?>>50 Manche</option>

                     <option value="51 Marne"  <?php if($drop_name == "51 Marne"){ ?> selected <?php } ?>>51 Marne</option>

                     <option value="52 Haute-Marne"  <?php if($drop_name == "52 Haute-Marne"){ ?> selected <?php } ?>>52 Haute-Marne</option>

                     <option value="53 Mayenne Laval"  <?php if($drop_name == "53 Mayenne Laval"){ ?> selected <?php } ?>>53 Mayenne Laval</option>

                     <option value="54 Meurthe-et-Moselle"  <?php if($drop_name == "54 Meurthe-et-Moselle"){ ?> selected <?php } ?>>54 Meurthe-et-Moselle</option>

                     <option value="55 Meuse"  <?php if($drop_name == "55 Meuse"){ ?> selected <?php } ?>>55 Meuse</option>

                     <option value="56 Morbihan"  <?php if($drop_name == "56 Morbihan"){ ?> selected <?php } ?>>56 Morbihan</option>

                     <option value="57 Moselle" <?php if($drop_name == "57 Moselle"){ ?> selected <?php } ?>>57 Moselle</option>

                     <option value="58 Nièvre" <?php if($drop_name == "58 Nièvre"){ ?> selected <?php } ?>>58 Nièvre</option>

                     <option value="59 Nord" <?php if($drop_name == "59 Nord"){ ?> selected <?php } ?>>59 Nord</option>

                     <option value="60 Oise" <?php if($drop_name == "60 Oise"){ ?> selected <?php } ?>>60 Oise</option>

                     <option value="61 Orne" <?php if($drop_name == "61 Orne"){ ?> selected <?php } ?>>61 Orne</option>

                     <option value="62 Pas-de-Calais"  <?php if($drop_name == "62 Pas-de-Calais"){ ?> selected <?php } ?>>62 Pas-de-Calais</option>

                     <option value="63 Puy-de-Dôme" <?php if($drop_name == "63 Puy-de-Dôme"){ ?> selected <?php } ?>>63 Puy-de-Dôme</option>

                     <option value="64 Pyrénées-Atlantiques" <?php if($drop_name == "64 Pyrénées-Atlantiques"){ ?> selected <?php } ?>>64 Pyrénées-Atlantiques</option>

                     <option value="65 Hautes-Pyrénées"  <?php if($drop_name == "65 Hautes-Pyrénées"){ ?> selected <?php } ?>>65 Hautes-Pyrénées</option>

                     <option value="66 Pyrénées-Orientales" <?php if($drop_name == "66 Pyrénées-Orientales"){ ?> selected <?php } ?>>66 Pyrénées-Orientales</option>

                     <option value="67 Bas-Rhin" <?php if($drop_name == "67 Bas-Rhin"){ ?> selected <?php } ?>>67 Bas-Rhin</option>

                     <option value="68 Haut-Rhin" <?php if($drop_name == "68 Haut-Rhin"){ ?> selected <?php } ?>>68 Haut-Rhin</option>

                     <option value="69 Rhône" <?php if($drop_name == "69 Rhône"){ ?> selected <?php } ?>>69 Rhône</option>

                     <option value="70 Haute-Saône" <?php if($drop_name == "70 Haute-Saône"){ ?> selected <?php } ?>>70 Haute-Saône</option>

                     <option value="71 Saône-et-Loire" <?php if($drop_name == "71 Saône-et-Loire"){ ?> selected <?php } ?>>71 Saône-et-Loire</option>

                     <option value="72 Sarthe" <?php if($drop_name == "72 Sarthe"){ ?> selected <?php } ?>>72 Sarthe</option>

                     <option value="73 Savoie" <?php if($drop_name == "73 Savoie"){ ?> selected <?php } ?>>73 Savoie</option>

                     <option value="74 Haute-Savoie" <?php if($drop_name == "74 Haute-Savoie"){ ?> selected <?php } ?>>74 Haute-Savoie</option>

                     <option value="75 Paris" <?php if($drop_name == "75 Paris"){ ?> selected <?php } ?>>75 Paris</option>

                     <option value="76 Seine-Maritime" <?php if($drop_name == "76 Seine-Maritime"){ ?> selected <?php } ?>>76 Seine-Maritime</option>

                     <option value="77 Seine-et-Marne" <?php if($drop_name == "77 Seine-et-Marne"){ ?> selected <?php } ?>>77 Seine-et-Marne</option>

                     <option value="78 Yvelines" <?php if($drop_name == "78 Yvelines"){ ?> selected <?php } ?>>78 Yvelines</option>

                     <option value="79 Deux-Sèvres" <?php if($drop_name == "79 Deux-Sèvres"){ ?> selected <?php } ?>>79 Deux-Sèvres</option>

                     <option value="80 Somme" <?php if($drop_name == "80 Somme"){ ?> selected <?php } ?>>80 Somme</option>

                     <option value="81 Tarn" <?php if($drop_name == "81 Tarn"){ ?> selected <?php } ?>>81 Tarn</option>

                     <option value="82 Tarn-et-Garonne" <?php if($drop_name == "82 Tarn-et-Garonne"){ ?> selected <?php } ?>>82 Tarn-et-Garonne</option>

                     <option value="83 Var" <?php if($drop_name == "83 Var"){ ?> selected <?php } ?>>83 Var</option>

                     <option value="84 Vaucluse" <?php if($drop_name == "84 Vaucluse"){ ?> selected <?php } ?>>84 Vaucluse</option>

                     <option value="85 Vendée" <?php if($drop_name == "85 Vendée"){ ?> selected <?php } ?>>85 Vendée</option>

                     <option value="86 Vienne" <?php if($drop_name == "86 Vienne"){ ?> selected <?php } ?>>86 Vienne</option>

                     <option value="87 Haute-Vienne" <?php if($drop_name == "87 Haute-Vienne"){ ?> selected <?php } ?>>87 Haute-Vienne</option>

                     <option value="88 Vosges" <?php if($drop_name == "88 Vosges"){ ?> selected <?php } ?>>88 Vosges</option>

                     <option value="89 Yonne" <?php if($drop_name == "89 Yonne"){ ?> selected <?php } ?>>89 Yonne</option>

                     <option value="90 Territoire-de-Belfort" <?php if($drop_name == "90 Territoire-de-Belfort"){ ?> selected <?php } ?>>90 Territoire-de-Belfort</option>

                     <option value="91 Essonne" <?php if($drop_name == "91 Essonne"){ ?> selected <?php } ?>>91 Essonne</option>

                     <option value="92 Hauts-de-Seine" <?php if($drop_name == "92 Hauts-de-Seine"){ ?> selected <?php } ?>>92 Hauts-de-Seine</option>

                     <option value="93 Seine-Saint-Denis" <?php if($drop_name == "93 Seine-Saint-Denis"){ ?> selected <?php } ?>>93 Seine-Saint-Denis</option>

                     <option value="94 Val-de-Marne" <?php if($drop_name == "94 Val-de-Marne"){ ?> selected <?php } ?>>94 Val-de-Marne</option>

                     <option value="95 Val-d’Oise" <?php if($drop_name == "95 Val-d’Oise"){ ?> selected <?php } ?>>95 Val-d'Oise</option>

                  	</select>

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Vos Nom et Prénom <sup class="text-danger">*</sup></label>

                    <input type="text" name="your-name" required="" id="yourname" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Votre Email <sup class="text-danger">*</sup></label>

                    <input type="text" name="your-email" value="" id="email_add" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Téléphone <sup class="text-danger">*</sup></label>

                    <input type="text" maxlength="16" onkeypress="return isNumberKey1(event)" name="tel" id="tele_no" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Adresse de départ :</label>

                    <input type="text" name="adresse" id="adresse"  class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Code Postal:</label>

                    <input type="text" maxlength="5" onkeypress="return isNumberKey(event)" name="CP" id="postcode" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Ville:</label>

                    <input type="text" name="ville" id="city"  class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Destination:</label>

                    <input type="text" name="dest" id="dest" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Date de départ:</label>

                    <input type="text" name="dep_date" id="dp1598335005261" class="form-control calendar">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Heure de Départ:</label>

                    <input type="text" name="heure" required="" id="timeset" class="form-control timepicker hasWickedpicker">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Numéro de Sécurité Social:</label>

                    <input type="text"  name="num" id="snum" maxlength="20" class="form-control">

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Prise en Charge CPAM:</label><br>

                    <div class="form-check form-check-inline">

                      <input class="form-check-input" type="radio"  id="inlineRadio1" name="checkbox-165" required="" value="65%">

                      <label class="form-check-label" for="inlineRadio1">65%</label>

                    </div>

                    <div class="form-check form-check-inline">

                      <input class="form-check-input" type="radio" id="inlineRadio2" name="checkbox-165" required="" value="100%">

                      <label class="form-check-label" for="inlineRadio2">100%</label>

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">BON DE TRANSPORT:</label><br>

                    <div class="form-check form-check-inline">

                      <input class="form-check-input" type="radio"  id="inlineRadio3" name="BondeTransport" required="" value="OUI">

                      <label class="form-check-label" for="inlineRadio3">OUI</label>

                    </div>

                    <div class="form-check form-check-inline">

                      <input class="form-check-input" type="radio"  id="inlineRadio4" name="BondeTransport" required="" value="NON">

                      <label class="form-check-label" for="inlineRadio4">NON</label>

                    </div>

                    <div class="form-check form-check-inline">

                      <input class="form-check-input" type="radio" id="inlineRadio5" name="BondeTransport" required="" value="AU RETOUR">

                      <label class="form-check-label" for="inlineRadio5">AU RETOUR</label>

                    </div>

                  </div>

                  <div class="form-group">

                    <label for="exampleInputEmail1">Informations complémentaires</label>

                    <textarea class="form-control" id="infos" cols="40" rows="4"></textarea>

                  </div>

                  <div class="form-button">

                    <input type="submit" class="btn btn-form mb-2" value="Envoyer" onclick="sendEmail()"  name="submit"  />

                  </div>

                </form>

            </div>