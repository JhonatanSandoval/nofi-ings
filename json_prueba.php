<?php

$servicios = array(
    array('nombre' => 'Consultoría de Proyectos', 'id' => 'consultoria',
        'subcateg' => array(
            array('nombre' => 'Licitaciones públicas y privadas', 'id' => 'lic_pub_priv')
        )),


    array('nombre' => 'Elaboración de Plano de Construcción', 'id' => 'elaboracion_plano',
        'subcateg' => array(
            array('nombre' => 'Vivienda', 'id' => 'vivienda', 'texto' => ''),
            array('nombre' => 'Comercio', 'id' => 'comercio', 'texto' => ''),
            array('nombre' => 'Industria', 'id' => 'industria', 'texto' => ''),
            array('nombre' => 'Educación', 'id' => 'educacion', 'texto' => ''),
        )),


    array('nombre' => 'Regularización de Licencia de Construcción', 'id' => 'reg_licencia',

        'subcateg' => array(
            array('nombre' => 'Construcciones avanzadas en cualquier etapa o nivel',
                'id' => 'cons_avanz', 'texto' => ''),
        )),


    array('nombre' => 'Declaratoria de Fábrica e Independización', 'id' => 'dec_fabrica',
        'subcateg' => array(
            array('nombre' => 'Inscripción de la propiedad inmueble en la SUNARP', 'id' => 'ins_sunarp',
                'texto' => '')
        )),


    array('nombre' => 'Planos para Defensa Civil y Bomberos', 'id' => 'planos_defensa',

        'subcateg' => array(
            array('nombre' => 'Permisos de funcionamientos de locales públicos', 'id' => 'perm_locales',
                'texto' => 'Locales de comercios, restaurantes, ferreterías, panaderías, cabinas de Internet, farmacias,
                 instituciones educativas, etc.')
        )),


    array('nombre' => 'Servicio de Topografía y GPS', 'id' => 'top_gps',

        'subcateg' => array(
            array('nombre' => 'Locación de terrenos geográficamente', 'id' => 'loc_terrenos', 'texto' => ''),
            array('nombre' => 'Estaca', 'id' => 'estaca', 'texto' => ''),
            array('nombre' => 'Delimitación de lotes', 'id' => 'del_lotes', 'texto' => ''),
        )),


    array('nombre' => 'Planos perimétricos y Lotizaciones', 'id' => 'planos_peri',

        'subcateg' => array(
            array('nombre' => 'Conformidad del predio en ubicación geográfica', 'id' => 'conf_predio',
                'texto' => 'Son sus respectivos datos técnicos')
        )),


    array('nombre' => 'Prescripción Adquisitiva de Dominio', 'id' => 'pres_adq',

        'subcateg' => array(
            array('nombre' => 'Regularización de propiedad por posesión', 'id' => 'reg_propiedad', 'texto' => '')
        ))
);

echo json_encode($servicios);