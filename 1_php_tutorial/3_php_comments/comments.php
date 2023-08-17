<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <!-- Comments en php -->
    <!-- un comentario en codigo php es una linea que noes ejecutada como parte de el programa, Es solo para ser leido
         por laguien quien esta buscando en el codigo-->
    <!-- comentarios pueden se usados para:
         dejar a otros entender su codigo
         recordarte a ti mismo de que hiciste.
         muchos programadores han experimentado regresar a su propio trabajo un anio o
         dos anios despues y teniendo que re-descubrir lo que ellos hicieron. Cooments pueden recordarte lo que etsbas pensando
         cuando you escribiste el codigo 
        -->
    <!-- php soporta muchas maneras de commentar -->
    <!-- EJEMPLO -->
    <!-- comentarios de una sola linea  -->
    <?php 
        //This a single-line comment
        # This is also a singles-line comment

    ?>

    <!-- comentarios de multiples lineas -->
    <?php 
        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */
    ?>

    <!-- Using comments to leave out parts oft he code -->
    <?php 
        //you can also use comments to leave out parts of o code lines
        $x = 5 /* + 15 */ + 5;
        echo $x;
    ?>
    
</body>
</html>