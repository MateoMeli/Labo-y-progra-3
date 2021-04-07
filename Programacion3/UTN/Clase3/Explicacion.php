<?php
    /*
    fopen(archivo, modo):int(referenciar al archivo)
    fclose(archivo):bool(cerro o no)
    fread(archivo, filesize(archivo)):string(lo que leyo)
    fgets(lee lineas)(archivo):string(lo que leyo)
    feof(archivo):bool(si llego al final)
    fwrite/fputs(escribir archivo abierto y para cuando llega al fin del archivo o a donde le dijiste)(archivo, texto [,longitud]):bool(si se escribio o no)
    fcopy(copiar archivo)(archivo origen, archivo destino):bool(como anduvo)
    unlink(borrar archivo)(archivo):bool(como anduvo)
    */
    var_dump($_GET);
    var_dump($_POST);
?>