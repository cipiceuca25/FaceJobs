<?php
general::requerirModulo(array('plantilla','cv','plantilla-general'));

general::registrarEstiloCSS('FaceBox','facebox');

general::registrarScriptJS('fileuploader','fileuploader');
general::registrarScriptJS('FaceBox','jquery.facebox');

pln::procesar('ver.perfil');
echo pln::$pln;
?>
<script type="text/javascript">
    $(function(){
         plnJS_iniciar();
    });
</script>
