<h3>Servicio ITE</h3>
<form action="<?= base_url()?>tuNegocio_c/guardar_servicio" method="post">
<table class="table">			
					<tr>
						<th>Superficie total<br> construida (m2)</th><th colspan="7">Antigüedad del edificio (Años)</th>
					</tr><tr>
						<th></th>
						<th><input name="antiguedad[]" type="hidden" value="30-35" size="6" maxlength="8">30-35</th>
						<th><input name="antiguedad[]" type="hidden" value="36-40" size="6" maxlength="8">36-40</th>
						<th><input name="antiguedad[]" type="hidden" value="41-50" size="6" maxlength="8">41-50</th>
						<th><input name="antiguedad[]" type="hidden" value="51-75" size="6" maxlength="8">51-75</th>
						<th><input name="antiguedad[]" type="hidden" value="76-100" size="6" maxlength="8">76-100</th>
						<th><input name="antiguedad[]" type="hidden" value="Más 100" size="6" maxlength="8">Más 100</th>

						<!--#############################-->
						<input name="por[]" type="hidden" value="0" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="5" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="10" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="15" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="25" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="40" size="6" maxlength="8">


					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="Menos de 175" size="6" maxlength="8">Menos de 175</th>
						<td><input name="precio[]" value="255" size="6" maxlength="8"><br>85</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>						
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="176-350" size="6" maxlength="8">176-350</th>
						<td><input name="precio[]" value="270" size="6" maxlength="8"><br>90</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="351-500" size="6" maxlength="8">351-500</th>
						<td><input name="precio[]" value="300" size="6" maxlength="8"><br>100</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="501-700" size="6" maxlength="8">501-700</th>
						<td><input name="precio[]" value="345" size="6" maxlength="8"><br>115</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="701-1000" size="6" maxlength="8">701-1000</th>
						<td><input name="precio[]" value="390" size="6" maxlength="8"><br>130</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1001-1350" size="6" maxlength="8">1001-1350</th>
						<td><input name="precio[]" value="435" size="6" maxlength="8"><br>145</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1351-1700" size="6" maxlength="8">1351-1700</th>
						<td><input name="precio[]" value="495" size="6" maxlength="8"><br>165</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1701-2000" size="6" maxlength="8">1701-2000</th>
						<td><input name="precio[]" value="555" size="6" maxlength="8"><br>185</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="2001-2500" size="6" maxlength="8">2001-2500</th>
						<td><input name="precio[]" value="600" size="6" maxlength="8"><br>200</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="2501-3000" size="6" maxlength="8">2501-3000</th>
						<td><input name="precio[]" value="675" size="6" maxlength="8"><br>225</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="3001-3500" size="6" maxlength="8">3001-3500</th>
						<td><input name="precio[]" value="720" size="6" maxlength="8"><br>240</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="3501-4000" size="6" maxlength="8">3501-4000</th>
						<td><input name="precio[]" value="765" size="6" maxlength="8"><br>255</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="4001-4500" size="6" maxlength="8">4001-4500</th>
						<td><input name="precio[]" value="855" size="6" maxlength="8"><br>285</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="4501-5000" size="6" maxlength="8">4501-5000</th>
						<td><input name="precio[]" value="900" size="6" maxlength="8"><br>300</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="5001-5500" size="6" maxlength="8">5001-5500</th>
						<td><input name="precio[]" value="960" size="6" maxlength="8"><br>320</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="5501-6000" size="6" maxlength="8">5501-6000</th>
						<td><input name="precio[]" value="1005" size="6" maxlength="8"><br>335</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="6001-6500" size="6" maxlength="8">6001-6500</th>
						<td><input name="precio[]" value="1095" size="6" maxlength="8"><br>365</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="6501-7000" size="6" maxlength="8">6501-7000</th>
						<td><input name="precio[]" value="1140" size="6" maxlength="8"><br>380</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="7001-7500" size="6" maxlength="8">7001-7500</th>
						<td><input name="precio[]" value="1185" size="6" maxlength="8"><br>395</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="7501-8000" size="6" maxlength="8">7501-8000</th>
						<td><input name="precio[]" value="1230" size="6" maxlength="8"><br>410</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="8001-9000" size="6" maxlength="8">8001-9000</th>
						<td><input name="precio[]" value="1335" size="6" maxlength="8"><br>445</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="9001-9500" size="6" maxlength="8">9001-9500</th>
						<td><input name="precio[]" value="1380" size="6" maxlength="8"><br>460</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="9501-10000" size="6" maxlength="8">9501-10000</th>
						<td><input name="precio[]" value="1470" size="6" maxlength="8"><br>490</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="10001-12500" size="6" maxlength="8">10001-12500</th>
						<td><input name="precio[]" value="1560" size="6" maxlength="8"><br>550</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="Más de 12500" size="6" maxlength="8"> Más de 12500</th>
						<td><input name="precio[]" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>				
					</tr>
			</table>
			<input type="submit" value="Enviar">
</form>			
<!--
<h3>Servicio ITE</h3>
<form action="<?= base_url()?>tuNegocio_c/guardar_servicio" method="post">
<table class="table">			
					<tr>
						<th>Superficie total<br> construida (m2)</th><th colspan="7">Antigüedad del edificio (Años)</th>
					</tr><tr>
						<th></th>
						<th><input name="antiguedad[]" type="hidden" value="30-35" size="6" maxlength="8">30-35</th>
						<th><input name="antiguedad[]" type="hidden" value="36-40" size="6" maxlength="8">36-40</th>
						<th><input name="antiguedad[]" type="hidden" value="41-50" size="6" maxlength="8">41-50</th>
						<th><input name="antiguedad[]" type="hidden" value="51-75" size="6" maxlength="8">51-75</th>
						<th><input name="antiguedad[]" type="hidden" value="76-100" size="6" maxlength="8">76-100</th>
						<th><input name="antiguedad[]" type="hidden" value="Más 100" size="6" maxlength="8">Más 100</th>

						#############################
						<input name="por[]" type="hidden" value="0" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="5" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="10" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="15" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="25" size="6" maxlength="8">
						<input name="por[]" type="hidden" value="40" size="6" maxlength="8">


					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="Menos de 175" size="6" maxlength="8">Menos de 175</th>
						<td><input name="precio[]" value="85" size="6" maxlength="8"><br>85</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>						
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="176-350" size="6" maxlength="8">176-350</th>
						<td><input name="precio[]" value="90" size="6" maxlength="8"><br>90</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="351-500" size="6" maxlength="8">351-500</th>
						<td><input name="precio[]" value="100" size="6" maxlength="8"><br>100</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="501-700" size="6" maxlength="8">501-700</th>
						<td><input name="precio[]" value="115" size="6" maxlength="8"><br>115</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="701-1000" size="6" maxlength="8">701-1000</th>
						<td><input name="precio[]" value="130" size="6" maxlength="8"><br>130</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1001-1350" size="6" maxlength="8">1001-1350</th>
						<td><input name="precio[]" value="145" size="6" maxlength="8"><br>145</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1351-1700" size="6" maxlength="8">1351-1700</th>
						<td><input name="precio[]" value="165" size="6" maxlength="8"><br>165</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="1701-2000" size="6" maxlength="8">1701-2000</th>
						<td><input name="precio[]" value="185" size="6" maxlength="8"><br>185</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="2001-2500" size="6" maxlength="8">2001-2500</th>
						<td><input name="precio[]" value="200" size="6" maxlength="8"><br>200</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="2501-3000" size="6" maxlength="8">2501-3000</th>
						<td><input name="precio[]" value="225" size="6" maxlength="8"><br>225</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="3001-3500" size="6" maxlength="8">3001-3500</th>
						<td><input name="precio[]" value="240" size="6" maxlength="8"><br>240</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="3501-4000" size="6" maxlength="8">3501-4000</th>
						<td><input name="precio[]" value="255" size="6" maxlength="8"><br>255</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="4001-4500" size="6" maxlength="8">4001-4500</th>
						<td><input name="precio[]" value="285" size="6" maxlength="8"><br>285</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="4501-5000" size="6" maxlength="8">4501-5000</th>
						<td><input name="precio[]" value="300" size="6" maxlength="8"><br>300</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="5001-5500" size="6" maxlength="8">5001-5500</th>
						<td><input name="precio[]" value="320" size="6" maxlength="8"><br>320</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="5501-6000" size="6" maxlength="8">5501-6000</th>
						<td><input name="precio[]" value="335" size="6" maxlength="8"><br>335</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="6001-6500" size="6" maxlength="8">6001-6500</th>
						<td><input name="precio[]" value="365" size="6" maxlength="8"><br>365</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="6501-7000" size="6" maxlength="8">6501-7000</th>
						<td><input name="precio[]" value="380" size="6" maxlength="8"><br>380</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="7001-7500" size="6" maxlength="8">7001-7500</th>
						<td><input name="precio[]" value="395" size="6" maxlength="8"><br>395</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="7501-8000" size="6" maxlength="8">7501-8000</th>
						<td><input name="precio[]" value="410" size="6" maxlength="8"><br>410</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="8001-9000" size="6" maxlength="8">8001-9000</th>
						<td><input name="precio[]" value="445" size="6" maxlength="8"><br>445</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="9001-9500" size="6" maxlength="8">9001-9500</th>
						<td><input name="precio[]" value="460" size="6" maxlength="8"><br>460</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="9501-10000" size="6" maxlength="8">9501-10000</th>
						<td><input name="precio[]" value="490" size="6" maxlength="8"><br>490</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="10001-12500" size="6" maxlength="8">10001-12500</th>
						<td><input name="precio[]" value="550" size="6" maxlength="8"><br>550</td>
						<td><input name="" value="" size="6" maxlength="8"><br>5%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>10%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>15%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>25%</td>
						<td><input name="" value="" size="6" maxlength="8"><br>40%</td>							
					</tr>
					<tr>
						<th><input name="superficie[]" type="hidden" value="Más de 12500" size="6" maxlength="8"> Más de 12500</th>
						<td><input name="precio[]" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>
						<td><input name="" type="hidden" value="0" size="6" maxlength="8">Consultar</td>				
					</tr>
			</table>
			<input type="submit" value="Enviar">
</form>			
-->