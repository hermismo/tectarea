        <strong><h3>Tus precios y servicios | Certificado Energético</h3> </strong><br>
    <strong><h4>Comprueba tus precios en el comparador</h4> </strong><br>
    <strong><h4>Describe tu Servicio<font color="red">(*) </font></h4> </strong><br>
   <form action="<?= base_url()."negocio/activarServicio"."/".$id."/".$idPersona?>" method="post"> 
    <input type="hidden" value="" id='id_certificado' name="id_servicio">
                            <div id="sombra">

                                <div class="">
                                    <label class="">¿Qué diferencia tu servicio del resto de la competencia?</label>
                                    <div class="">
                                    <textarea class="form-control" placeholder=""  maxlength="250"name="desc_servicio" id="desc_servicio" autofocus></textarea>
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
                            echo "<th><input type='hidden' name='tipologia[]' value='".$datos[$i][0]['id_tipologia']."'>";
                                echo $datos[$i][0]['tipologia'];
                            echo "</th>";
                        
                           for ($k=1; $k < 8; $k++) { 
                            echo '<td>';
                            echo "<input type='hidden' name='superficie[]' value='".$datos[$i][$k]['id_superficie']."'>";
                            echo '<input type="text" name="precio[]" value="'.$datos[$i][$k]['precio'].'" size="5" maxlength="8" onkeyPress="return validarNumero(event)"> <br>';
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
                            echo "<th><input type='hidden' name='edificio[]' value='".$datos[$i][0]['id_tipologia']."'>";
                                echo $datos[$i][0]['tipologia'];
                            echo "</th>";
                        
                           for ($k=1; $k < 8; $k++) { 
                            echo '<td>';
                            echo "<input type='hidden' name='num_viviendas[]' value='".$datos[$i][$k]['id_superficie']."'>";
                            echo '<input type="text" name="precio_e[]" value="'.$datos[$i][$k]['precio'].'" size="5" maxlength="8" onkeyPress="return validarNumero(event)"> <br>';
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
        <input type="hidden" name="visado_s" value="null"> 
         <input type="hidden" name="monto_visado" value="0"> 
        <div><h4>¿Qué facilidades de pago ofreces?</h4>
                
                <div class="input-group" id="sombra">
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="1" id=""> Pago en efectivo el día de la visita
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="2" id=""> Pago por transferencia a la entrega de la documentación
                    </label>
                    <br>
                    <label>
                      <input type="checkbox" name="forma_pago[]" value="3" id=""> Pago fraccionado en dos veces. Por adelantado y a la entrega de la documentación.
                      
                    </label>
                    <br>
                    
                
                </div>           
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block" name="boton_s" value="certificado">Guardar / Activar</button>   
    </form>