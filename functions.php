<?php
/**
 * Divergentes Child Theme — functions.php
 *
 * Orden de carga de assets:
 *   1. Bootstrap / tema padre        (prioridad default de Understrap)
 *   2. tokens-bridge.css             (prioridad 15 — después del padre)
 *   3. Fuentes del design system     (prioridad 15 — junto al bridge)
 *   4. nosotros.css                  (prioridad 20 — después del bridge)
 *   5. nosotros.js                   (footer)
 *
 * Fuentes del design system:
 *   Display: Sora
 *   Body:    Source Serif 4
 *   Mono:    JetBrains Mono
 */


// ── ESTILOS GLOBALES ────────────────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function() {

    // 1. Heredar stylesheet del tema padre
    wp_enqueue_style(
        'divergentes-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // 2. Bridge de tokens — carga después del padre, antes que todo lo demás
    //    Conecta el design system con Bootstrap y WordPress.
    wp_enqueue_style(
        'divergentes-tokens-bridge',
        get_stylesheet_directory_uri() . '/css/tokens-bridge.css',
        array( 'divergentes-parent-style' ),
        '1.0.0'
    );

    // 3. Fuentes globales del design system (Sora + Source Serif 4 + JetBrains Mono)
    //    Se cargan en todas las páginas porque son las fuentes del sistema.
    wp_enqueue_style(
        'divergentes-ds-fonts',
        'https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );

}, 15 );


// ── ASSETS DE LA PÁGINA NOSOTROS ────────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function() {

    if ( ! is_page_template( 'page-nosotros.php' ) ) {
        return;
    }

    // nosotros.css depende del bridge para poder usar las variables CSS
    wp_enqueue_style(
        'divergentes-nosotros-style',
        get_stylesheet_directory_uri() . '/css/nosotros.css',
        array( 'divergentes-tokens-bridge' ),
        '1.0.0'
    );

    // JS del sidenav (scroll activo)
    wp_enqueue_script(
        'divergentes-nosotros-script',
        get_stylesheet_directory_uri() . '/css/nosotros.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );

    // Desactivar estilos de bloques de Gutenberg — no se usan en esta página
    // y generan cascada inesperada con el design system
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );

}, 20 );


// ── ADMIN BAR ───────────────────────────────────────────────────────────────

// Ocultar en el front-end — agrega 32px de offset al layout mientras esté activa
add_filter( 'show_admin_bar', function( $show ) {
    return is_admin() ? $show : false;
} );


// ── BODY CLASS ──────────────────────────────────────────────────────────────

// Agrega 'nosotros-page' al body para scope CSS específico de la página
add_filter( 'body_class', function( $classes ) {
    if ( is_page_template( 'page-nosotros.php' ) ) {
        $classes[] = 'nosotros-page';
    }
    return $classes;
} );


/**
 * NOTA PARA DIVERGENTES:
 * Si la página tiene un slug diferente al asignado por el template,
 * el template se identifica por nombre de archivo, no por slug.
 * Asegurarse de que en WP Admin > Páginas > [esta página] > Plantilla
 * esté seleccionada la opción "Nosotros".
 */