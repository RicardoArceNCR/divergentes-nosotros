<?php
/**
 * Template Name: Nosotros
 *
 * Página del equipo de DIVERGENTES con el nuevo design system.
 * Asignar desde: WordPress Admin > Páginas > Nosotros > Plantilla > "Nosotros"
 *
 * Nota: usamos get_header() para cargar los scripts globales del tema padre
 * (jQuery, Bootstrap, etc.) pero ocultamos visualmente el header/footer del
 * padre via CSS (.nosotros-page selector en nosotros.css).
 */

// Añade la clase 'nosotros-page' al body para que el CSS sepa dónde aplicarse
add_filter( 'body_class', function( $classes ) {
    $classes[] = 'nosotros-page';
    return $classes;
} );

get_header(); // Carga scripts globales del padre (jQuery, etc.)
?>

<!-- ═══ MASTHEAD PROPIO ════════════════════════════════════════════════════ -->
<header class="nos-masthead">
  <div class="nos-masthead__inner">
    <a class="nos-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Divergentes">
      <span class="nos-brand__mark">D<span class="nos-brand__dot">·</span></span>
      <span class="nos-brand__name">DIVERGENTES</span>
    </a>
    <nav class="nos-masthead__nav" aria-label="Secciones">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Portada</a>
      <a href="#">Reportajes</a>
      <a href="#">Investigaciones</a>
      <a href="#">Centroamérica</a>
      <a href="#">Diver-Check</a>
      <a href="#">Divergencias</a>
      <a href="<?php echo esc_url( get_permalink() ); ?>" aria-current="page">Nosotros</a>
    </nav>
    <span class="nos-kicker">Periodismo desde el exilio</span>
  </div>
</header>


<!-- ═══ HERO ══════════════════════════════════════════════════════════════ -->
<section class="nos-hero">
  <div class="nos-hero__grid">
    <div>
      <p class="nos-hero__eyebrow">— Nosotros</p>
      <h1 class="nos-hero__title">
        <span class="nos-hero__line">Quienes</span>
        <span class="nos-hero__line nos-hero__line--alt">sostienen la</span>
        <span class="nos-hero__line">redacción.</span>
      </h1>
    </div>
    <div class="nos-hero__lede">
      <p>DIVERGENTES es un medio independiente que cubre Nicaragua y Centroamérica desde el exilio. Estamos organizados de forma remota desde cinco países. Aquí presentamos al equipo que hace posible cada investigación, video, boletín y producto digital.</p>
      <dl class="nos-hero__stats">
        <div><dt>Integrantes</dt><dd>21</dd></div>
        <div><dt>Áreas de trabajo</dt><dd>07</dd></div>
        <div><dt>Premios internacionales</dt><dd>+12</dd></div>
      </dl>
    </div>
  </div>
</section>


<!-- ═══ CUERPO: ROSTER + SIDENAV ═════════════════════════════════════════ -->
<div class="nos-page-body">

  <main class="nos-roster">

    <!-- ── DIRECCIÓN GENERAL ── -->
    <section class="nos-dept" id="dir-general">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección General</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <?php /* Reemplazar con: <img class="nos-card__photo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/equipo/hector-aaron.jpg" alt="Héctor Aarón Moe Aburto" /> */ ?>
            <div class="nos-card__initials">HA</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Héctor Aarón Moe Aburto</h3>
          <p class="nos-card__role">Director General</p>
          <p class="nos-card__bio">Periodista nicaragüense con más de dos décadas de trayectoria. Cofundador de DIVERGENTES. Dirige la estrategia editorial y organizacional del medio desde el exilio.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CA</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Carlos Alberto Herrera González</h3>
          <p class="nos-card__role">Subdirector General</p>
          <p class="nos-card__bio">Cofundador de DIVERGENTES. Supervisa la gestión institucional, alianzas internacionales y el desarrollo organizacional del medio.</p>
          <span class="nos-card__location">Ciudad de México, México</span>
        </div>

      </div>
    </section>

    <!-- ── DIRECCIÓN DE PROYECTOS ── -->
    <section class="nos-dept" id="dir-proyectos">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección de Proyectos</h2>
        <span class="nos-dept__count">01</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">DP</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Darwin Pichardo Ruaya</h3>
          <p class="nos-card__role">Director de Proyectos</p>
          <p class="nos-card__bio">Lidera el desarrollo de proyectos especiales, investigaciones de largo aliento y la gestión de fondos con organizaciones internacionales de libertad de prensa.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

      </div>
    </section>

    <!-- ── DIRECCIÓN EDITORIAL ── -->
    <section class="nos-dept" id="dir-editorial">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Dirección Editorial</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">WM</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Wilfredo Miranda</h3>
          <p class="nos-card__role">Director Editorial</p>
          <p class="nos-card__bio">Periodista con más de 15 años cubriendo Nicaragua y Centroamérica. Coordina la agenda investigativa y el proceso de verificación de toda la redacción.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">AM</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Andrés Martínez</h3>
          <p class="nos-card__role">Editor</p>
          <p class="nos-card__bio">Editor de contenidos y análisis político. Supervisa el flujo editorial diario y la coherencia de la voz periodística del medio.</p>
          <span class="nos-card__location">Madrid, España</span>
        </div>

      </div>
    </section>

    <!-- ── DEPARTAMENTO AUDIOVISUAL ── -->
    <section class="nos-dept" id="audiovisual">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Departamento Audiovisual</h2>
        <span class="nos-dept__count">05</span>
      </div>
      <div class="nos-grid-3">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">AH</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="Instagram">◎</a>
            </div>
          </div>
          <h3 class="nos-card__name">Alicia Hernández Frugal</h3>
          <p class="nos-card__role">Directora Audiovisual</p>
          <p class="nos-card__bio">Productora y directora de documentales. Lidera el canal Divergentes TV y los proyectos de videoperiodismo.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">MG</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Miguel Ángel Gutiérrez Niño</h3>
          <p class="nos-card__role">Periodista Audiovisual</p>
          <p class="nos-card__bio">Reportero multimedia especializado en coberturas en campo y producción de video documental para el canal.</p>
          <span class="nos-card__location">Bogotá, Colombia</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">JB</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Johanna Brea</h3>
          <p class="nos-card__role">Productora</p>
          <p class="nos-card__bio">Productora ejecutiva de contenidos audiovisuales. Gestiona la planificación y distribución en plataformas de video.</p>
          <span class="nos-card__location">Ciudad de México, México</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CS</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Instagram">◎</a>
            </div>
          </div>
          <h3 class="nos-card__name">Claudia Salinas</h3>
          <p class="nos-card__role">Editora de Video</p>
          <p class="nos-card__bio">Edición, postproducción y archivo visual. Responsable de la calidad técnica y narrativa de las piezas audiovisuales.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">AC</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Adriana Cecilia Martínez Molina</h3>
          <p class="nos-card__role">Presentadora / Conductora</p>
          <p class="nos-card__bio">Conduce los programas de análisis y noticieros del canal. Periodista con enfoque en derechos humanos y género.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

      </div>
    </section>

    <!-- ── DISTRIBUCIÓN DE CONTENIDO Y AUDIENCIAS ── -->
    <section class="nos-dept" id="distribucion">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Distribución de Contenido y Audiencias</h2>
        <span class="nos-dept__count">04</span>
      </div>
      <div class="nos-grid-3">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CP</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Cristina Peraza</h3>
          <p class="nos-card__role">Editora Digital</p>
          <p class="nos-card__bio">Gestiona la estrategia de publicación digital, los boletines semanales y el engagement con la audiencia en plataformas digitales.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">JV</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">José L. Villegas</h3>
          <p class="nos-card__role">Estratega de Redes Sociales</p>
          <p class="nos-card__bio">Administra las cuentas en X, Instagram y LinkedIn. Desarrolla la estrategia de crecimiento de audiencia y distribución de contenidos.</p>
          <span class="nos-card__location">Guadalajara, México</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">MM</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Instagram">◎</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Mariela Moreno</h3>
          <p class="nos-card__role">Coordinadora de Audiencias</p>
          <p class="nos-card__bio">Diseña y ejecuta estrategias de vinculación con lectoras y lectores. Coordina los programas de membresía y suscripción solidaria.</p>
          <span class="nos-card__location">Buenos Aires, Argentina</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">LG</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">La González</h3>
          <p class="nos-card__role">Diseñadora Gráfica</p>
          <p class="nos-card__bio">Diseña las piezas visuales, infografías y materiales de marca que acompañan cada publicación e investigación del medio.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

      </div>
    </section>

    <!-- ── CUERPO DE REDACCIÓN ── -->
    <section class="nos-dept" id="redaccion">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">Cuerpo de Redacción</h2>
        <span class="nos-dept__count">05</span>
      </div>
      <div class="nos-grid-3">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">JR</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">José Rubio Cruz</h3>
          <p class="nos-card__role">Reportero</p>
          <p class="nos-card__bio">Cubre política nicaragüense y el régimen Ortega-Murillo. Especializado en fuentes dentro del país y análisis de decisiones gubernamentales.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">ML</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Marisell Longarspena</h3>
          <p class="nos-card__role">Reportera</p>
          <p class="nos-card__bio">Periodista especializada en derechos humanos y género en Centroamérica. Documenta casos de represión política y exilio forzado.</p>
          <span class="nos-card__location">Ciudad de México, México</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">CP</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Catalina Prieto</h3>
          <p class="nos-card__role">Reportera — Economía</p>
          <p class="nos-card__bio">Cubre la paradoja energética centroamericana y los vínculos financieros del régimen con aliados regionales e internacionales.</p>
          <span class="nos-card__location">Bogotá, Colombia</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">HV</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
            </div>
          </div>
          <h3 class="nos-card__name">Helmut Vargas</h3>
          <p class="nos-card__role">Reportero</p>
          <p class="nos-card__bio">Analista político con enfoque en Centroamérica. Cubre el debate sobre autoritarismo, elecciones y democracia en la región.</p>
          <span class="nos-card__location">San José, Costa Rica</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">PG</div>
            <div class="nos-card__social">
              <a href="#" aria-label="Twitter / X">𝕏</a>
              <a href="#" aria-label="LinkedIn">in</a>
            </div>
          </div>
          <h3 class="nos-card__name">Pablo Gahona</h3>
          <p class="nos-card__role">Reportero — Venezuela y región</p>
          <p class="nos-card__bio">Sigue la transición venezolana y los paralelismos con el modelo autoritario nicaragüense. Corresponsal regional para el sur del continente.</p>
          <span class="nos-card__location">Caracas, Venezuela</span>
        </div>

      </div>
    </section>

    <!-- ── TI Y UX/UI ── -->
    <section class="nos-dept" id="ti-uxui">
      <div class="nos-dept__header">
        <div class="nos-dept__rule"></div>
        <h2 class="nos-dept__title">TI y UX/UI</h2>
        <span class="nos-dept__count">02</span>
      </div>
      <div class="nos-grid-2">

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">FQ</div>
            <div class="nos-card__social">
              <a href="#" aria-label="LinkedIn">in</a>
              <a href="#" aria-label="GitHub">GH</a>
            </div>
          </div>
          <h3 class="nos-card__name">Francisco Quintana</h3>
          <p class="nos-card__role">Desarrollador Web / TI</p>
          <p class="nos-card__bio">Responsable de la infraestructura técnica, desarrollo del sitio web y herramientas de periodismo de datos. Mantiene los sistemas del medio.</p>
          <span class="nos-card__location">Medellín, Colombia</span>
        </div>

        <div class="nos-card">
          <div class="nos-card__photo-wrap">
            <div class="nos-card__initials">FA</div>
            <div class="nos-card__social">
              <a href="#" aria-label="LinkedIn">in</a>
              <a href="#" aria-label="Portfolio">◎</a>
            </div>
          </div>
          <h3 class="nos-card__name">Franco Alberto José Aronte</h3>
          <p class="nos-card__role">Diseñador UX/UI</p>
          <p class="nos-card__bio">Diseña la experiencia de usuario del sitio, el sistema de diseño y los productos digitales de DIVERGENTES. Define la identidad visual digital.</p>
          <span class="nos-card__location">Buenos Aires, Argentina</span>
        </div>

      </div>
    </section>

  </main><!-- /nos-roster -->

  <!-- SIDENAV DERECHA -->
  <aside class="nos-sidenav" aria-label="Ir a departamento">
    <span class="nos-sidenav__label">Equipo</span>
    <a href="#dir-general">Dirección General</a>
    <a href="#dir-proyectos">Dir. de Proyectos</a>
    <a href="#dir-editorial">Dir. Editorial</a>
    <a href="#audiovisual">Audiovisual</a>
    <a href="#distribucion">Distribución</a>
    <a href="#redaccion">Redacción</a>
    <a href="#ti-uxui">TI y UX/UI</a>
    <a href="#finanzas">Finanzas</a>
  </aside>

</div><!-- /nos-page-body -->


<!-- ═══ FINANZAS Y ASUNTOS FISCALES ═══════════════════════════════════════ -->
<section class="nos-finance" id="finanzas">
  <div class="nos-finance__inner">
    <p class="nos-finance__dept">Finanzas y<br>Asuntos Fiscales</p>
    <div class="nos-finance__logo">R<em>&amp;</em>R</div>
    <div class="nos-finance__copy">
      <p>Los asuntos fiscales, contables y de cumplimiento legal de DIVERGENTES son gestionados por la firma R&amp;R, con sede en Costa Rica. Publicamos un informe financiero anual para garantizar la transparencia con nuestra audiencia y financiadores.</p>
      <a href="#" class="nos-finance__link">Ver informe financiero 2025 →</a>
    </div>
  </div>
</section>


<!-- ═══ FOOTER PROPIO ════════════════════════════════════════════════════ -->
<footer class="nos-footer">
  <div class="nos-footer__inner">
    <div class="nos-footer__mark">D<span>·</span></div>
    <nav class="nos-footer__links" aria-label="Footer">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Portada</a>
      <a href="#">Divergencias</a>
      <a href="#">Caricaturas</a>
      <a href="#">Investigaciones</a>
      <a href="#">Podcasts</a>
      <a href="#">Videos</a>
      <a href="<?php echo esc_url( get_permalink() ); ?>">Quiénes somos</a>
      <a href="#">Equipo editorial</a>
      <a href="#">Política editorial</a>
      <a href="#">Contacto</a>
    </nav>
    <p class="nos-footer__credit">© 2020–<?php echo date('Y'); ?> DIVERGENTES. Todos los derechos reservados.</p>
  </div>
</footer>

<?php get_footer(); // Necesario para que WP cierre correctamente scripts/hooks ?>
