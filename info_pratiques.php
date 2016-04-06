<div class="contenu_texte">
	<!-- include jQuery library -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- include script perso -->
	<script type="text/javascript" src="js/changemap.js"></script>
	
	<h1> Informations pratiques </h1>

	<p>
		
		<div id="sub">Où nous trouver ?</div>
			<p id="encadre">
				119, avenue André Morizet<br />
				92 100 Boulogne-Billancourt<br />
				Bâtiment D<br />
			</p>
			<p>
				Le cabinet se situe au rez-de-chaussée et possède un accès handicapés.
			</p><br />
			<table>
				<tr><td id="al_right"><strong>Métro</strong></td><td> Boulogne – Pont de Saint Cloud </td>
					<td>
																		<img src="img/metro10.png" height=25 alt="metro 10"/>
					</td>
				</tr>
				<tr><td id="al_right"><strong>Bus</strong></td><td>arrêt Rhin et Danube&nbsp;</td>
					<td>
																		<img src="img/bus_30.gif" height=21 width=21 alt="bus"/>
																		<span class="bus b72">&nbsp;72&nbsp;</span>
																		<span class="bus b126">126</span>
																		<span class="bus b160">160</span>
																		<span class="bus b175">175</span>
																		<span class="bus b467">467</span>
																		<span class="bus b552">552</span>
					</td>
				</tr>
				<tr><td id="al_right"><strong>Bus Optile</strong></td><td>arrêt Rhin et Danube </td>
					<td>
																		<img src="img/bus_30.gif" height=21 width=21 alt="bus"/>
																		<span class="bus b15">&nbsp;15&nbsp;</span>
																		<span class="bus b17">&nbsp;17&nbsp;</span>
																		<span class="bus b26">&nbsp;26&nbsp;</span>
																		<span class="bus b460">460</span>
					</td>
				</tr>
			</table>
				<a 
				<?php // Récupère le type de la carte google afin d'afficher le bon type
				/*	if (isset($_GET["map_type"]))
					{
						$map_type = $_GET["map_type"];
						if ($map_type == "roadmap")
							$map_type = 
					}
					else
						$map_type = "hybrid";
					print " href=\"index.php?page=info_pratiques&map_type=" . $map_type . "\" ";*/
				?>
				class="btn_change_map" onMouseOver="changeMapType();">Changer de type de carte</a>
			<br />
			<img id="plan" class="plan_roadmap slct<?php/* if ($map_type == slct*/?>" src="http://maps.google.com/maps/api/staticmap?center=48.8400377,2.2296076&zoom=17&size=850x850&maptype=roadmap&sensor=false&markers=color:green%7Clabel:V%7C48.8400377,2.2296076"/>
			<img id="plan" class="plan_hybrid noslct" src="http://maps.google.com/maps/api/staticmap?center=48.8400377,2.2296076&zoom=17&size=850x850&maptype=hybrid&sensor=false&markers=color:green%7Clabel:V%7C48.8400377,2.2296076"/>
			<br />
		<hr>
		<a href="#" class="btn_pied_de_page">Haut de page</a>
	</p>
</div>