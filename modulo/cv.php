<?php
/*
 * Definen como opera cada paso (que tabla, que campo, que restricciones).
 * defcv = Definicion de Curriculum Vitae
 */

/******* paso1_personal **********/

cv::$defcv['paso1_personal.foto_hash']['tipo'] = uiForm::$cargarImagenOWebCam;

cv::$defcv['paso1_personal.nombres']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso1_personal.nombres']['longitud'] = 250;
cv::$defcv['paso1_personal.nombres']['texto'] = 'Nombres:';

cv::$defcv['paso1_personal.apellidos']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso1_personal.apellidos']['longitud'] = 250;
cv::$defcv['paso1_personal.apellidos']['texto'] = 'Apellidos:';

cv::$defcv['paso1_personal.estado_civil']['tipo'] = uiForm::$comboboxSimple;
cv::$defcv['paso1_personal.estado_civil']['valores'] = array('casado' => 'Casado','soltero' => 'Soltero','divorciado' => 'Divorciado','viudo' => 'Viudo','union libre' => 'Unión libre');
cv::$defcv['paso1_personal.estado_civil']['texto'] = 'Estado civil:';

cv::$defcv['paso1_personal.fecha_nacimiento']['tipo'] = uiForm::$fecha;
cv::$defcv['paso1_personal.fecha_nacimiento']['flags'] = 'DMY';
cv::$defcv['paso1_personal.fecha_nacimiento']['texto'] = 'Fecha de nacimiento:';

cv::$defcv['paso1_personal.sexo']['tipo'] = uiForm::$comboboxSimple;
cv::$defcv['paso1_personal.sexo']['valores'] = array('masculino' => 'Masculino','femenino' => 'Femenino');
cv::$defcv['paso1_personal.sexo']['texto'] = 'Sexo:';

cv::$defcv['paso1_personal.telefono_contacto']['tipo'] = uiForm::$telefono;
cv::$defcv['paso1_personal.telefono_contacto']['longitud'] = 50;
cv::$defcv['paso1_personal.telefono_contacto']['texto'] = 'Teléfono de contacto:';

cv::$defcv['paso1_personal.ID_nacionalidad']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso1_personal.ID_nacionalidad']['texto'] = 'Nacionalidad:';

cv::$defcv['paso1_personal.ID_ciudad_de_domicilio']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso1_personal.ID_ciudad_de_domicilio']['texto'] = 'Ciudad de domicilio:';

cv::$defcv['paso1_personal.direccion_domicilio']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso1_personal.direccion_domicilio']['longitud'] = 250;
cv::$defcv['paso1_personal.direccion_domicilio']['texto'] = 'Dirección de domicilio:';

cv::$defcv['paso1_personal.correo_electronico']['tipo'] = uiForm::$correo;
cv::$defcv['paso1_personal.correo_electronico']['texto'] = 'Correo electrónico:';

cv::$defcv['paso1_personal.licencia_conducir']['tipo'] = uiForm::$sino;
cv::$defcv['paso1_personal.licencia_conducir']['texto'] = 'Posee licencia de conducir:';

cv::$defcv['paso1_personal.vehiculo']['tipo'] = uiForm::$sino;
cv::$defcv['paso1_personal.vehiculo']['texto'] = 'Posee vehiculo:';

cv::$defcv['paso1_personal.discapacidad_fisica']['tipo'] = uiForm::$sino;
cv::$defcv['paso1_personal.discapacidad_fisica']['texto'] = 'Posee alguna discapacidad física:';


/******* paso2_educacion_secundaria **********/

cv::$defcv['paso2_educacion_secundaria.ID_pais']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso2_educacion_secundaria.ID_pais']['texto'] ="País:";

cv::$defcv['paso2_educacion_secundaria.institucion']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_educacion_secundaria.institucion']['longitud'] = 250;
cv::$defcv['paso2_educacion_secundaria.institucion']['texto'] = "Institución:";

cv::$defcv['paso2_educacion_secundaria.ano_finalizacion']['tipo'] = uiForm::$fecha;
cv::$defcv['paso2_educacion_secundaria.ano_finalizacion']['flags'] = 'Y';
cv::$defcv['paso2_educacion_secundaria.ano_finalizacion']['texto'] = "Año de finalización:";
cv::$defcv['paso2_educacion_secundaria.ano_finalizacion']['enLinea'] = true;

cv::$defcv['paso2_educacion_secundaria.incompleto']['tipo'] = uiForm::$cheque;
cv::$defcv['paso2_educacion_secundaria.incompleto']['texto'] = 'Incompleto:';

cv::$defcv['paso2_educacion_secundaria.titulo']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_educacion_secundaria.titulo']['longitud'] = 250;
cv::$defcv['paso2_educacion_secundaria.titulo']['texto'] = 'Titulo:';
/******* paso2_educacion_superior **********/

cv::$defcv['paso2_educacion_superior.ID_pais']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso2_educacion_superior.ID_pais']['texto'] = 'País:';

cv::$defcv['paso2_educacion_superior.institucion']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_educacion_superior.institucion']['longitud'] = 250;
cv::$defcv['paso2_educacion_superior.institucion']['texto'] = 'Institución:';

cv::$defcv['paso2_educacion_superior.ID_area_estudio']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso2_educacion_superior.ID_area_estudio']['datos']['tabla'] = 'datos_area_estudio';
cv::$defcv['paso2_educacion_superior.ID_area_estudio']['datos']['clave'] = 'ID_area_estudio';
cv::$defcv['paso2_educacion_superior.ID_area_estudio']['datos']['valor'] = 'area_estudio';
cv::$defcv['paso2_educacion_superior.ID_area_estudio']['texto'] = 'Área de estudio:';
cv::$defcv['paso2_educacion_superior.ID_area_estudio']['enLinea'] = true;

cv::$defcv['paso2_educacion_superior.completo']['tipo'] = uiForm::$cheque;
cv::$defcv['paso2_educacion_superior.completo']['texto'] = 'Completo';

cv::$defcv['paso2_educacion_superior.titulo_obtenido']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_educacion_superior.titulo_obtenido']['texto'] = 'Titulo obtenido:';

cv::$defcv['paso2_educacion_superior.nivel_alcanzado']['tipo'] = uiForm::$comboboxSimple;
cv::$defcv['paso2_educacion_superior.nivel_alcanzado']['valores'] = array('activo','abandonado','egresado','graduado','doctorado','PhD');
cv::$defcv['paso2_educacion_superior.nivel_alcanzado']['texto'] = 'Nivel alcanzado';

cv::$defcv['paso2_educacion_superior.fecha_desde']['tipo'] = uiForm::$fecha;
cv::$defcv['paso2_educacion_superior.fecha_desde']['flags'] = 'Y';
cv::$defcv['paso2_educacion_superior.fecha_desde']['texto'] = 'Desde';

cv::$defcv['paso2_educacion_superior.fecha_hasta']['tipo'] = uiForm::$fecha;
cv::$defcv['paso2_educacion_superior.fecha_hasta']['flags'] = 'Y';
cv::$defcv['paso2_educacion_superior.fecha_hasta']['texto'] = 'Hasta';

/* paso2_idiomas */

cv::$defcv['paso2_idiomas.ID_idioma']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso2_idiomas.ID_idioma']['datos']['tabla'] = 'datos_idiomas';
cv::$defcv['paso2_idiomas.ID_idioma']['datos']['clave'] = 'ID_idioma';
cv::$defcv['paso2_idiomas.ID_idioma']['datos']['valor'] = 'idioma';
cv::$defcv['paso2_idiomas.ID_idioma']['texto'] = 'Idioma:';

cv::$defcv['paso2_idiomas.nivel']['tipo'] = uiForm::$radio;
cv::$defcv['paso2_idiomas.nivel']['valores'] = array('basico', 'intermedio', 'avanzado');
cv::$defcv['paso2_idiomas.nivel']['texto'] = 'Fecha de finalización:';

/* paso2_otros_estudios */

cv::$defcv['paso2_otros_estudios.ID_pais']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso2_otros_estudios.ID_pais']['texto'] = 'País:';

cv::$defcv['paso2_otros_estudios.institucion']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_otros_estudios.institucion']['texto'] = 'Institución:';

cv::$defcv['paso2_otros_estudios.nombre_curso']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso2_otros_estudios.nombre_curso']['texto'] = 'Nombre del curso:';

cv::$defcv['paso2_otros_estudios.fecha_finalizacion']['tipo'] = uiForm::$fecha;
cv::$defcv['paso2_otros_estudios.fecha_finalizacion']['flags'] = 'Y';
cv::$defcv['paso2_otros_estudios.fecha_finalizacion']['texto'] = 'Fecha de finalización';

/* paso3_empresa */

cv::$defcv['paso3_empresa.ID_pais']['tipo'] = uiForm::$comboboxPaises;
cv::$defcv['paso3_empresa.ID_pais']['texto'] = 'País:';

cv::$defcv['paso3_empresa.nombre_empresa']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso3_empresa.nombre_empresa']['texto'] = 'Empresa:';

cv::$defcv['paso3_empresa.ID_actividad_economica']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso3_empresa.ID_actividad_economica']['datos']['tabla'] = 'datos_actividad_economica';
cv::$defcv['paso3_empresa.ID_actividad_economica']['datos']['clave'] = 'ID_actividad_economica';
cv::$defcv['paso3_empresa.ID_actividad_economica']['datos']['valor'] = 'actividad_economica';
cv::$defcv['paso3_empresa.ID_actividad_economica']['texto'] = 'Actividad económica de la empresa:';

/* paso3_cargos */
 
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['datos']['tabla'] = 'datos_puesto_desempenado';
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['datos']['clave'] = 'ID_puesto_desempenado';
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['datos']['valor'] = 'puesto_desempenado';
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['texto'] = 'Puesto desempeñado:';
cv::$defcv['paso3_cargos.ID_puesto_desempenado']['subtexto'] = 'Seleccione en la siguiente lista el puesto que mas se asemeje.';

cv::$defcv['paso3_cargos.puesto_desempenado_detalle']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso3_cargos.puesto_desempenado_detalle']['texto'] = 'Puesto exacto desempeñado:';
cv::$defcv['paso3_cargos.puesto_desempenado_detalle']['subtexto'] = 'Escriba acá el puesto exacto desempeñado';

cv::$defcv['paso3_cargos.actualmente']['tipo'] = uiForm::$cheque;
cv::$defcv['paso3_cargos.actualmente']['texto'] = 'Se desempeña actualmente en este puesto de trabajo:';

cv::$defcv['paso3_cargos.fecha_inicio']['tipo'] = uiForm::$fecha;
cv::$defcv['paso3_cargos.fecha_inicio']['flags'] = 'YM';
cv::$defcv['paso3_cargos.fecha_inicio']['texto'] = 'Fecha desde:';

cv::$defcv['paso3_cargos.fecha_final']['tipo'] = uiForm::$fecha;
cv::$defcv['paso3_cargos.fecha_final']['flags'] = 'YM';
cv::$defcv['paso3_cargos.fecha_final']['texto'] = 'Fecha hasta:';

cv::$defcv['paso3_cargos.funciones']['tipo'] = uiForm::$memo;
cv::$defcv['paso3_cargos.funciones']['texto'] = 'Descripción de funciones desempeñadas en este cargo:';

/* paso4_expectativa_laboral */

cv::$defcv['paso4_expectativa_laboral.ID_area_interes']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso4_expectativa_laboral.ID_area_interes']['datos']['tabla'] = 'datos_area_interes';
cv::$defcv['paso4_expectativa_laboral.ID_area_interes']['datos']['clave'] = 'ID_area_interes';
cv::$defcv['paso4_expectativa_laboral.ID_area_interes']['datos']['valor'] = 'area_interes';
cv::$defcv['paso4_expectativa_laboral.ID_area_interes']['texto'] = 'Área de interés:';


/* paso5_referencias_personal */

cv::$defcv['paso5_referencias_personal.empresa']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_personal.empresa']['texto'] = 'Empresa:';
cv::$defcv['paso5_referencias_personal.empresa']['subtexto'] = 'Nombre comercial de la empresa en la que labora este contacto.';

cv::$defcv['paso5_referencias_personal.nombre']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_personal.nombre']['texto'] = 'Nombre:';
cv::$defcv['paso5_referencias_personal.nombre']['subtexto'] = 'Nombre completo de la persona que ingresarás como referencia personal';

cv::$defcv['paso5_referencias_personal.cargo']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_personal.cargo']['texto'] = 'Cargo:';
cv::$defcv['paso5_referencias_personal.cargo']['subtexto'] = 'Cargo que desempeña la persona que ingresarás como referencia personal';

cv::$defcv['paso5_referencias_personal.telefono']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_personal.telefono']['texto'] = 'Teléfono:';
cv::$defcv['paso5_referencias_personal.telefono']['subtexto'] = 'Teléfono del lugar de trabajo de esta referencia personal';

/* paso5_referencias_laboral */

cv::$defcv['paso5_referencias_laboral.ID_empresa']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_laboral.ID_empresa']['texto'] = 'Empresa:';
cv::$defcv['paso5_referencias_laboral.ID_empresa']['subtexto'] = 'Selecciona la empresa en la cual laboró con este contacto de referencia laboral';


cv::$defcv['paso5_referencias_laboral.nombre']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_laboral.nombre']['texto'] = 'Nombre:';
cv::$defcv['paso5_referencias_laboral.nombre']['subtexto'] = 'Nombre completo de la persona que ingresarás como referencia laboral';

cv::$defcv['paso5_referencias_laboral.cargo']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_laboral.cargo']['texto'] = 'Cargo:';
cv::$defcv['paso5_referencias_laboral.cargo']['subtexto'] = 'Cargo que desempeña la persona que ingresarás como referencia laboral';

cv::$defcv['paso5_referencias_laboral.telefono']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso5_referencias_laboral.telefono']['texto'] = 'Teléfono:';
cv::$defcv['paso5_referencias_laboral.telefono']['subtexto'] = 'Teléfono del lugar de trabajo de esta referencia laboral';

/* paso6_info_adicional */

cv::$defcv['paso6_info_adicional.categoria']['tipo'] = uiForm::$textoSimple;
cv::$defcv['paso6_info_adicional.categoria']['texto'] = 'Nombre de categoria:';
cv::$defcv['paso6_info_adicional.categoria']['longitud'] = 25;

cv::$defcv['paso6_info_adicional.informacion']['tipo'] = uiForm::$memo;

/* paso7_privacidad */

cv::$defcv['paso8_privacidad.ocultar_telefono']['tipo'] = uiForm::$radio;
cv::$defcv['paso8_privacidad.ocultar_telefono']['valores'] = array('publico' => 'Público', 'privado' => 'Privado');
cv::$defcv['paso8_privacidad.ocultar_telefono']['texto'] = 'Teléfono de contacto';

cv::$defcv['paso8_privacidad.ocultar_domicilio']['tipo'] = uiForm::$radio;
cv::$defcv['paso8_privacidad.ocultar_domicilio']['valores'] = array('publico' => 'Público', 'privado' => 'Privado');
cv::$defcv['paso8_privacidad.ocultar_domicilio']['texto'] = 'Dirección de domicilio';

/* paso0 */

cv::$defcv['paso0.ID_idioma_nativo']['tipo'] = uiForm::$comboboxComplejo;
cv::$defcv['paso0.ID_idioma_nativo']['datos']['tabla'] = 'datos_idiomas';
cv::$defcv['paso0.ID_idioma_nativo']['datos']['clave'] = 'ID_idioma';
cv::$defcv['paso0.ID_idioma_nativo']['datos']['valor'] = 'idioma';

cv::$defcv['paso0.ID_expectativa_salarial']['tipo'] = uiForm::$comboboxSimple;
cv::$defcv['paso0.ID_expectativa_salarial']['texto'] = 'Selecciona el rango de tu expectativa salarial';
cv::$defcv['paso0.ID_expectativa_salarial']['valores'] = array(0 => 'USD \$100 - USD \$250','USD \$250 - USD \$500','USD \$500 - USD \$750','USD \$750 - USD \$1000','USD \$1000 - USD \$1500','USD \$1500 - USD \$2000','USD \$2000 - USD \$3000','> USD \$3000');
/*cv::$defcv['paso0.video_hash'];*/

cv::$deflazo['paso2_educacion_superior']['vista']['sql'] = '';
cv::$deflazo['paso2_educacion_superior']['vista'][0][0] = '$$fecha_agrupada$$';
cv::$deflazo['paso2_educacion_superior']['vista'][1][0] = '<img src="$$imgBandera$$" />';
cv::$deflazo['paso2_educacion_superior']['vista'][2][0] = '$$institucion$$';
cv::$deflazo['paso2_educacion_superior']['vista'][2][1] = '$$ID_area_estudio$$';
cv::$deflazo['paso2_educacion_superior']['vista'][2][2] = '<span class="vista_titulo_obtenido">$$titulo_obtenido$$</span> <span class="vista_nivel_alcanzado">$$nivel_alcanzado$$</span>';

cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.ID_pais';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.institucion';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.ID_area_estudio';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.completo';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.titulo_obtenido';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.nivel_alcanzado';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.fecha_desde';
cv::$deflazo['paso2_educacion_superior']['campos'][] = 'paso2_educacion_superior.fecha_hasta';

cv::$deflazo['paso2_idiomas']['campos'][] = 'paso2_idiomas.ID_idioma';
cv::$deflazo['paso2_idiomas']['campos'][] = 'paso2_idiomas.nivel';

cv::$deflazo['paso2_otros_estudios']['campos'][] = 'paso2_otros_estudios.ID_pais';
cv::$deflazo['paso2_otros_estudios']['campos'][] = 'paso2_otros_estudios.institucion';
cv::$deflazo['paso2_otros_estudios']['campos'][] = 'paso2_otros_estudios.nombre_curso';
cv::$deflazo['paso2_otros_estudios']['campos'][] = 'paso2_otros_estudios.fecha_finalizacion';

cv::$deflazo['paso4_expectativa_laboral']['campos'][] = 'paso4_expectativa_laboral.ID_area_interes';

cv::$deflazo['paso5_referencias_laboral']['campos'][] = 'paso5_referencias_laboral.ID_empresa';
cv::$deflazo['paso5_referencias_laboral']['campos'][] = 'paso5_referencias_laboral.nombre';
cv::$deflazo['paso5_referencias_laboral']['campos'][] = 'paso5_referencias_laboral.cargo';
cv::$deflazo['paso5_referencias_laboral']['campos'][] = 'paso5_referencias_laboral.telefono';

cv::$deflazo['paso5_referencias_personal']['campos'][] = 'paso5_referencias_personal.empresa';
cv::$deflazo['paso5_referencias_personal']['campos'][] = 'paso5_referencias_personal.nombre';
cv::$deflazo['paso5_referencias_personal']['campos'][] = 'paso5_referencias_personal.cargo';
cv::$deflazo['paso5_referencias_personal']['campos'][] = 'paso5_referencias_personal.telefono';

cv::$deflazo['paso6_info_adicional']['campos'][] = 'paso6_info_adicional.categoria';
cv::$deflazo['paso6_info_adicional']['campos'][] = 'paso6_info_adicional.informacion';
class cv
{
    public static $defcv = array();
    public static $deflazo = array();
    
    function cv ($ID_cuenta)
    {
       
    }    
    
    public function guardar()
    {
        
    }
}

function AgregarCampos(&$defpaso, $paso, &$defcv, array $camposDefCv)
{
    foreach($camposDefCv as $campo)
        if (isset(cv::$defcv[$campo]))
            $defpaso[$paso][$campo] = cv::$defcv[$campo];
        else
            depurar::registrar('Asignación errónea de campo "'.$campo.'" a paso',errores::$critico,'AgregarCampos');
}

?>