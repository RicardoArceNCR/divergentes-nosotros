<?php
/**
 * Divergentes Child Theme — functions.php
 *
 * Solo encola assets adicionales.
 * El tema padre (divergentes) ya carga Bootstrap, jQuery y sus propios estilos.
 */

// ── 1. Heredar estilos del tema padre ──────────────────────────────────────
add_action( 'wp_enqueue_scripts', 'divergentes_child_enqueue_styles' );
function divergentes_child_enqueue_styles() {

    // Hereda el stylesheet del padre
    wp_enqueue_style(
        'divergentes-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // ── 2. Fuentes de la página Nosotros (solo en esa página) ──────────────
    if ( is_page( 'nosotros' ) || is_page( 'quienes-somos' ) ) {

        wp_enqueue_style(
            'divergentes-nosotros-fonts',
            'https://fonts.googleapis.com/css2?family=Anton&family=Lora:ital,wght@0,400;0,500;0,600;1,400;1,600&family=Archivo:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
            array(),
            null
        );

        // ── 3. CSS exclusivo de Nosotros ───────────────────────────────────
        wp_enqueue_style(
            'divergentes-nosotros-style',
            get_stylesheet_directory_uri() . '/css/nosotros.css',
            array( 'divergentes-parent-style' ),
            '1.0.0'
        );

        // ── 4. JS exclusivo de Nosotros (sidenav scroll) ───────────────────
        wp_enqueue_script(
            'divergentes-nosotros-script',
            get_stylesheet_directory_uri() . '/css/nosotros.js',
            array( 'jquery' ),  // depende de jQuery que ya carga el padre
            '1.0.0',
            true  // cargar en el footer
        );
    }
}

/**
 * Nota para desarrolladores:
 * Si la página "Nosotros" tiene un slug diferente (ej: "about", "equipo"),
 * agregarlo en el is_page() de arriba:
 *   is_page( array( 'nosotros', 'quienes-somos', 'equipo', 'about' ) )
 *
 * Para saber el slug exacto: WordPress Admin > Páginas > editar la página > ver URL permalink.
 */
