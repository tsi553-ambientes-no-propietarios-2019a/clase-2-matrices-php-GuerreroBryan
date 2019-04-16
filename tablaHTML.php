<?php
$tabla = array( 
    "1"=>array("nombre"=>"NOMBRE", "apellido"=>"APELLIDO" , "edad"=>"EDAD"),
    "2"=>array("nombre"=>"Carlos", "apellido"=>"Granda" , "edad"=>32),
    "3"=>array("nombre"=>"Juan", "apellido"=>"Martinez" , "edad"=>31),
    "4"=>array("nombre"=>"Maria", "apellido"=>"Jimenez" , "edad"=>22) 
    ); 
?>
    
<<body>
<table border="1" align="center">
    <tbody>
        <tr>
            <?php
            $tabla = array("nombre"=>"NOMBRE", "apellido"=>"APELLIDOS" , "edad"=>"EDAD");
            foreach ($tabla as $nombre => $nM){
                echo '<td>'.$nM.'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            $tabla = array("nombre"=>"Carlos", "apellido"=>"Granda" , "edad"=>32);
            foreach ($tabla as $nombre => $nM){
                echo '<td>'.$nM.'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            $tabla = array("nombre"=>"Juan", "apellido"=>"Martinez" , "edad"=>31);
            foreach ($tabla as $nombre => $nM){
                echo '<td>'.$nM.'</td>';
            }
            ?>
        </tr>
        <tr>
            <?php
            $tabla = array("nombre"=>"Maria", "apellido"=>"Jimenez" , "edad"=>22);
            foreach ($tabla as $nombre => $nM){
                echo '<td>'.$nM.'</td>';
            }
            ?>
        </tr>
            
    </tbody>
</table>