<?php

try
{
        //Open database connection
        include(".dbconfig.php");
        //Getting records (listAction)
        if($_GET["action"] == "list")
        {
            
              
                //Get records from database
                $result = mysqli_query($dbconfig, "SELECT * FROM olt ORDER BY description;");

                //Add all records to an array
                $rows = array();
                while($row = mysqli_fetch_array($result))
                {
                    $rows[] = $row;
                }

                
                //Return result to jTable
                $jTableResult = array();
                $jTableResult['Result'] = "OK";
                $jTableResult['Records'] = $rows;
                print json_encode($jTableResult);

                
        }
        //Creating a new record (createAction)
        else if($_GET["action"] == "create")
        {
 //         $ultimadescription = mysqli_query("last_value(description)");  

            //SIN TELEFONO NI INTERNET
            if($_POST["linea1"] == null && $_POST["us"] == null && $_POST["ds"] == null && $_POST["mode"] == null){
                exec("date >> log");
                exec("sh AltaONTSinTelefonoNiInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' >> log");
            }
            //CON TELEFONO SIN INTERNET
            else if($_POST["us"] == null && $_POST["ds"] == null && $_POST["mode"] == null){
                exec("date >> log");
                exec("sh AltaONTTelefonoSinInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' '" . $_POST["linea1"] . "' >> log");
            }
            //SIN TELEFONO CON INTERNET
            else if($_POST["linea1"] == null){
                //MODO ROUTER
                if($_POST["mode"] == "Router"){
                    exec("date >> log");
                    exec("sh AltaONTSinTelefonoConInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' >> log");
                }
                //MODO BRIDGE
                else{
                    exec("date >> log");
                    exec("sh AltaONTSinTelefonoConInternetBridge.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' >> log");
                }
            }
            //CON TELEFONO CON INTERNET
            else{
                //MODO ROUTER
                if($_POST["mode"] == "Router"){
                    exec("date >> log");
                    exec("sh AltaONTTelefonoConInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' '" . $_POST["linea1"] . "' >> log");
                }
                //MODO BRIDGE
                else{
                    exec("date >> log");
                    exec("sh AltaONTTelefonoConInternetBridge.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' '" . $_POST["linea1"] . "' >> log");
                }
            }
            
            //exec("echo ERROR NO CUMPLE NI UNA CONDICION PARA EL ALTA > log");
            //exec("sh AltaONT.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["sn"] . "' '" . $_POST["description"] . "' > log");
        

            //Insert record into database
            $result = mysqli_query("INSERT INTO olt (fsp, ontid, sn, us, ds, mode, linea1, description) VALUES ('" . $_POST["fsp"] . "', '" . $_POST["ontid"] . "', '" . $_POST["sn"] . "', '" . $_POST["us"] . "', '" . $_POST["ds"] . "', '" . $_POST["mode"] . "', '" . $_POST["linea1"] . "', '" . $_POST["description"] . "');");

            //Get last inserted record (to return to jTable)
            $result = mysqli_query("SELECT * FROM olt WHERE id = LAST_INSERT_ID();");
            $row = mysqli_fetch_array($result);

            //Return result to jTable
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['Record'] = $row;
            print json_encode($jTableResult);

        }

        //Updating a record (updateAction)
        else if($_GET["action"] == "update")
        {
            //ACTUALIZAR QUITANDO INTERNET Y QUITANDO TELEFONO
            if($_POST["us"] == null && $_POST["ds"] == null && $_POST["linea1"] == null){
                exec("date >> log");
                exec("sh BajaInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' >> log");
            }
            //ACTUALIZAR VELOCIDAD SIN TELEFONO O QUITAR TELEFONO
            else if($_POST["us"] == null && $_POST["ds"] == null){
                exec("date >> log");
                exec("sh BajaInternet.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' >> log");
                exec("date >> log");
                exec("sh BajaTelefono.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' >> log");
            }
            //ACTUALIZAR VELOCIDAD SIN TELEFONO O QUITAR TELEFONO
            else if($_POST["linea1"] == null){
                exec("date >> log");
                exec("sh UpdateVelocidad.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' >> log");
                exec("date >> log");
                exec("sh BajaTelefono.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' >> log");
            }
            //ACTUALIZA SOLO VELOCIDAD CUANDO TIENE TELEFONO E INTERNET
            else{
                exec("date >> log");
                exec("sh UpdateVelocidad.sh '" . $_POST["fsp"] . "' '" . $_POST["ontid"] . "' '" . $_POST["us"] . "' '" . $_POST["ds"] . "' >> log");
            }

            //Update record in database
            $result = mysqli_query("UPDATE olt SET us = '" . $_POST["us"] . "', ds = '" . $_POST["ds"] . "', linea1 = '" . $_POST["linea1"] . "', description = '" . $_POST["description"] . "' WHERE id = " . $_POST["id"] . ";");

            //$result = mysqli_query("SELECT * FROM olt ORDER BY description;");


            //Return result to jTable
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }

        //Deleting a record (deleteAction)
        else if($_GET["action"] == "delete")
        {   
            //BORRAR ONT
            $resu1 = mysqli_query("SELECT fsp FROM olt WHERE id = " . $_POST["id"] . ";");
            $resu2 = mysqli_query("SELECT ontid FROM olt WHERE id = " . $_POST["id"] . ";");

            $fspArray = mysqli_fetch_row($resu1);
            $fsp = $fspArray[0];
            $ontidArray = mysqli_fetch_row($resu2);
            $ontid = $ontidArray[0];
            exec("date >> log");
            exec("sh BajaOnt.sh '" . $fsp . "' '" . $ontid . "' >> log");
            
            //Delete from database
            $result = mysqli_query("DELETE FROM olt WHERE id = " . $_POST["id"] . ";");

            //Return result to jTable
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            print json_encode($jTableResult);
        }

        	
        //Close database connection
        closelog();
        mysqli_close($con);

}
catch(Exception $ex)
{
    //Return error message
        $jTableResult = array();
        $jTableResult['Result'] = "ERROR";
        $jTableResult['Message'] = $ex->getMessage();
        print json_encode($jTableResult);
}

?>
