<?php
$title = "Proyectos";
// ARREGLO BIDIMENSIONAL ASOCIATIVO
// PRIMERA DIMENSION: CATEGORÍAS Y LA SEGUNDA DIMENSIÓN: ENLACES
$enlacesCategorizados = [
    "Ciberseguridad - Aprendizaje" => [
        [
            "url" => "https://www.welivesecurity.com/es/recursos-herramientas/owasp-top-10-vulnerabilidades-criticas-aplicaciones-web/",
            "descripcion" => "Las 10 vulnerabilidades web más críticas "
        ],
        [
            "url" => "https://blog.hackmetrix.com/entrenamiento-de-hacking-etico/",
            "descripcion" => "Maneras de aprender hacking ético en linea"
        ]
    ],

    "Canales de YouTube - Ciberseguridad" => [
        [
            "url" => "https://www.youtube.com/@ElPinguinoDeMario",
            "descripcion" => "Videos sobre hacking, Linux y ciberseguridad"
        ],
        [
            "url" => "https://www.youtube.com/@rinkutech_/videos",
            "descripcion" => "Análisis de trafico de red y ciberseguridad"
        ]
    ],

    "Tecnologías Web" => [
        [
            "url" => "https://docs.weweb.io/web-development-basics/understanding-html-css-javascript.html",
            "descripcion" => "Documentación completa sobre HTML, CSS y JavaScript."
        ],
        [
            "url" => "https://keepcoding.io/desarrollo-web/7-tecnologias-para-desarrollo-web/",
            "descripcion" => "7 Tecnologías para el desarrollo web"
        ]
    ],

    "Backend y APIs" => [
        [
            "url" => "https://www.ionos.com/es-us/digitalguide/paginas-web/creacion-de-paginas-web/que-es-el-backend/",
            "descripcion" => "¿Qué es backend y para qué sirve?"
        ],
        [
            "url" => "https://www.ibm.com/es-es/think/topics/api",
            "descripcion" => "Qué son las APIs"
        ]
    ]
];

// LLAMADA A LA VISTA
require __DIR__ . '/../../resources/links.template.php';