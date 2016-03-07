        <strong><h3>Tus precios y servicios | Certificado Energético</h3> </strong><br>
    <strong><h4>Comprueba tus precios en el comparador</h4> </strong><br>
    <strong><h4>Describe tu Servicio<font color="red">(*) </font></h4> </strong><br>
                            <div id="sombra">

                                <div class="">
                                    <label class="">¿Qué diferencia tu servicio del resto de la competencia?</label>
                                    <div class="">
                                    <textarea class="form-control" placeholder=""  maxlength="250"name="desc_servicio" id="desc_servicio" autofocus required></textarea>
                                    </div>
                                    <small><font color="red">MAX. 250 Caracteres.</font></small>
                               </div></div><br><br>

        <strong><h4>Tus Precios</h4> </strong><br>

        <div class="table-responsive"><!-- TABLA DE CERTIFICADO ENERGETICO-->
                    <table class="table table-bordered" id="sombra">
                <tr>
                    <th>Tipología</th><th colspan="8">Superficie</th>
                </tr>
                <tr>
                    <td></td><th>Menos de 50</th><th>51-80</th><th>81-121</th><th>121-180</th><th>181-500</th><th>351-500</th><th>501-1000</th>
                </tr>
                <?php
                       for ($i=0; $i < count($datos); $i++) { 
                        if ($datos[$i][0]['tipologia'] == 'Piso' || $datos[$i][0]['tipologia'] == 'Unifamiliar' ||$datos[$i][0]['tipologia'] == 'Local/Oficina')
                        {   
                            echo "<tr>";
                            echo "<th>";
                                echo $datos[$i][0]['tipologia'];
                            echo "</th>";
                        
                           for ($k=1; $k < 8; $k++) { 
                            echo '<td>';
                            echo '<input type="text" value="'.$datos[$i][$k]['precio'].'" size="5" maxlength="8" onkeyPress="return validarNumero(event)"> <br>';
                             echo '<font color="red">'.$datos[$i][$k]['precio'].'</font>';
                              echo '</td>';
                                    
                           }
                          echo "</tr>";
                          } 
                       }
                
                ?>
              <tr><th colspan="8">
            <small><font color="red">*</font> Los precios no incluyen IVA.</small><br>
             <small><font color="red">*</font> Los precios no incluyen ningún tipo de tasa administrativa o gravamen.</small>   
           </th></tr>  
            </table>
            </div>
            <br>
            <div class="table-responsive">
            <table class="table table-bordered" id="sombra">
                <tr>
                    <th>Tipología</th><th colspan="8">Número de viviendas</th>
                </tr>
                <tr>
                    <td></td><th>Menos de 5</th><th>5-10</th><th>11-30</th><th>31-60</th><th>61-120</th><th>121-180</th><th>181-250</th>
                </tr>
                <?php
                       for ($i=0; $i < count($datos); $i++) { 
                        if ($datos[$i][0]['tipologia'] == 'Edificio')
                        {   
                            echo "<tr>";
                            echo "<th>";
                                echo $datos[$i][0]['tipologia'];
                            echo "</th>";
                        
                           for ($k=1; $k < 8; $k++) { 
                            echo '<td>';
                            echo '<input type="text" value="'.$datos[$i][$k]['precio'].'" size="5" maxlength="8" onkeyPress="return validarNumero(event)"> <br>';
                             echo '<font color="red">'.$datos[$i][$k]['precio'].'</font>';
                              echo '</td>';
                                    
                           }
                          echo "</tr>";
                          } 
                       }
                
                ?>
           <tr><th colspan="8">
            <small><font color="red">*</font> Los precios no incluyen IVA.</small><br>
             <small><font color="red">*</font> Los precios no incluyen ningún tipo de tasa administrativa o gravamen.</small>   
           </th></tr>
            </table>
        
         
        </div> <!-- TABLA DE CERTIFICADO ENERGETICO-->
        <div><h4>Descuentos al cliente</h4>
            <div id="sombra">
                <h5>Indica el descuento que le harías al cliente por varios inmuebles o servicios.</h5>
                <p>Establece un porcentaje de descuento sobre el precio por 2 o más inmuebles o servicios.</p>
                <p><small>Por ejemplo, si se te contratan dos certificados y tienes un descuento del 5% establecido se aplicará a los dos certificados. Si te contratan un certificado y una cédula y no tienes descuento para la cédula, se aplicara tu descuento del 5% sólo al certificado.</small></p>
                <div class="clearfix"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><label>Descuento</label></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                    <div>
                    <div>
                        <div class="input-group">
                            <input class="form-control" type="text" value="0" onkeyPress="return validarNumero(event)">
                    <div class="input-group-addon">%</div>
                </div>
                </div></div>
                <small>Si no deseas ofrecer descuento coloca 0</small>
            </div>
        </div></div></div>

        <div><h4>¿Cuál es tu plazo de entrega?</h4>
            <div id="sombra">
                <h5>Indica el plazo habitual de realización del servicio desde la solicitud por parte del cliente.</h5>
                
                <div class="clearfix"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"><label>Plazo de entrega:</label></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                    <div>
                    <div>
                        <div class="input-group">
                            <input class="form-control" type="text" value="1" onkeyPress="return validarNumero(event)">
                    <div class="input-group-addon">dias</div>
                </div>
                </div></div>
                <small>1 dias (Segerencia)</small>
            </div>
        </div></div></div>

        <div><h4>¿Qué facilidades de pago ofreces?</h4>
                
                <div class="input-group" id="sombra">
                    <label>
                      <input type="checkbox" name="" value="Pago en efectivo el día de la visita." id=""> Pago en efectivo el día de la visita
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="" value="Pago por transferencia a la entrega de la documentación." id=""> Pago por transferencia a la entrega de la documentación
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="" value="Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación." id=""> Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación.
                      
                    </label>
                    <br>
                    
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8">
                    <div>
                        <div>
                            <div class="input-group">
                                <input class="form-control" type="text" value="0" onkeyPress="return validarNumero(event)">
                                <div class="input-group-addon">%</div>
                            </div>
                        </div>
                    </div>           
                </div>       
                </div>           
        </div>
        <button type="button" class="btn btn-success btn-lg btn-block">Guardar / Activar</button>   