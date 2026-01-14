<?php
$hero_fields = get_field("hero");
$productos_fields = get_field("productos");
$sobre_nosotros_fields = get_field("sobre_nosotros");
$footer_fields = get_field("footer");
$contactos_fields = get_field("contactos");
get_header(); ?>

<a href="https://wa.me/<?php echo esc_attr($contactos_fields['whatsapp']); ?>?text=<?php echo urlencode($contactos_fields["mensaje_predeterminado_whatsapp"])?>" target="_blank"
  class="whatsapp-btn fixed bottom-6 right-6 z-[1001] bg-[#25D366] p-3 rounded-full shadow-lg hover:bg-[#20ba5a]
  transition">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle.webp" alt="icon-wpp"
    class="w-6 h-6 sm:w-8 sm:h-8" />
</a>

<!-- HERO -->
<section class="hero w-full min-h-screen text-white">
  <div
    class="bg-[url(<?php echo $hero_fields["fondo"]["url"] ?>)] bg-cover relative bg-no-repeat bg-center w-full min-h-screen flex items-center justify-center">
    <div class="bg-[#000000]/60 top-0 left-0 z-[999] absolute w-full h-full"></div>
    <div class="relative z-[1000] w-full px-4 sm:px-6 md:px-8 lg:px-16">
      <div class="flex flex-col gap-4 max-w-8xl mx-auto justify-center items-center">
        <h2 class="text-center text-xl sm:text-2xl md:text-2xl lg:text-4xl font-thin uppercase">
          <span class="font-semibold">
            <?php
            echo $hero_fields["empresa"]["destacado"] ?></span>
          <?php
          echo $hero_fields["empresa"]["principal"] ?>
        </h2>
        <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-5xl font-semibold">
          <?php
          echo $hero_fields["titulo_principal"] ?>
        </h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-regular">
          <?php
          echo $hero_fields["descripcion_principal"] ?>
        </p>
      </div>
      <div class="mt-6 sm:mt-8 text-sm sm:text-base md:text-lg font-semibold text-center max-w-3xl mx-auto">
        <p>
          <?php
          echo $hero_fields["lista_productos"] ?>
        </p>
        <p class="mt-3 sm:mt-4">
          <?php
          echo $hero_fields["mensaje_comercial"] ?>
        </p>
      </div>
      <div class="flex justify-center mt-6 sm:mt-8">
        <a href="https://wa.me/<?php echo esc_attr($contactos_fields['whatsapp']); ?>?text=<?php echo urlencode($contactos_fields["mensaje_predeterminado_whatsapp"])?>" target="_blank"
          class="!bg-[#2F7823] w-full sm:w-auto px-6 py-2 rounded flex justify-center items-center gap-2 sm:gap-4 text-sm sm:text-base hover:!bg-[#1f5517] transition">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle.webp" alt="icon-wpp"
            class="w-5 h-5 sm:w-6 sm:h-6" />
          <span><?php
          echo $hero_fields["llamado_a_la_accion"] ?> </span>
        </a>
      </div>
    </div>
  </div>

  <!-- PRODUCTOS -->
  <section class="bg-[#EBEBE8] p-4 sm:p-6 md:p-8 w-full">
    <div class="max-w-6xl mx-auto flex flex-col gap-4">
      <h3 class="text-[#000] text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold p-2">
        <?php
        echo $productos_fields["titulo"] ?>
      </h3>
      <p class="text-sm sm:text-base md:text-lg text-[#555555] p-2">
        <?php
        echo $productos_fields["descripcion"] ?>
      </p>

      <?php if (!empty($productos_fields['lista_productos']) && is_array($productos_fields['lista_productos'])): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-4">

          <?php foreach ($productos_fields['lista_productos'] as $producto): ?>

            <?php
            $titulo = $producto['titulo'] ?? '';
            $descripcion = $producto['descripcion'] ?? '';

            // Normalización de imagen (Group anidado)
            $imagen = $producto['imagen'] ?? null;
            $imagen_url = '';
            $imagen_alt = $titulo;

            if (is_array($imagen) && !empty($imagen['url'])) {
              $imagen_url = $imagen['url'];
              $imagen_alt = $imagen['alt'] ?? $titulo;
            } elseif (is_numeric($imagen)) {
              $img = wp_get_attachment_image_src($imagen, 'full');
              if ($img) {
                $imagen_url = $img[0];
              }
            }

            // Validación obligatoria
            if (empty($titulo) || empty($descripcion)) {
              continue;
            }

            // 👉 CONDICIONAL PARA CENTRADO
            $sin_imagen = empty($imagen_url);
            ?>

            <div class="bg-white rounded-lg overflow-hidden flex flex-col h-full">

              <?php if ($imagen_url): ?>
                <img src="<?php echo esc_url($imagen_url); ?>" alt="<?php echo esc_attr($imagen_alt); ?>"
                  class="w-full object-cover h-40 sm:h-44" />
              <?php endif; ?>

              <div class="p-3 sm:p-4 flex flex-col gap-2 flex-1 <?php echo $sin_imagen ? 'justify-center' : ''; ?>">
                <p class="font-bold text-sm sm:text-base text-[#000]">
                  <?php echo esc_html($titulo); ?>
                </p>
                <p class="text-xs sm:text-sm text-gray-600">
                  <?php echo esc_html($descripcion); ?>
                </p>
              </div>

            </div>

          <?php endforeach; ?>

        </div>
      <?php endif; ?>



      <p class="text-xs sm:text-sm font-light text-[#555555] text-center my-2">
        <?php
        echo $productos_fields["texto_informativo"] ?>
      </p>

      <a href="https://wa.me/<?php echo esc_attr($contactos_fields['whatsapp']); ?>?text=<?php echo urlencode($contactos_fields["mensaje_predeterminado_whatsapp"])?>" target="_blank"
        class="!bg-[#2F7823] w-full sm:w-auto px-6 py-2 rounded flex justify-center items-center gap-2 sm:gap-4 text-sm sm:text-base hover:!bg-[#1f5517] transition">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle.webp" alt="icon-wpp"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <span><?php
        echo $productos_fields["llamado_a_la_accion"] ?></span>
      </a>
    </div>
  </section>

  <!-- About US -->
  <section class="my-16 w-full px-4 sm:px-6 md:px-8 text-[#000] bg-![#fff]">
    <div class="max-w-6xl mx-auto flex flex-col gap-4">
      <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold">
        <?php
        echo $sobre_nosotros_fields["titulo"] ?>
      </h3>
      <p class="text-sm sm:text-base md:text-lg">
        <?php
        echo $sobre_nosotros_fields["descripcion"] ?>
      </p>

      <?php if (!empty($sobre_nosotros_fields['items']) && is_array($sobre_nosotros_fields['items'])): ?>
        <div class="flex flex-col gap-3 my-2">

          <?php foreach ($sobre_nosotros_fields['items'] as $item): ?>

            <?php if (!empty($item)): ?>
              <p class="flex gap-2 text-sm sm:text-base">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/check.svg" alt="check icon"
                  class="w-5 h-5 flex-shrink-0" />
                <?php echo esc_html($item); ?>
              </p>
            <?php endif; ?>

          <?php endforeach; ?>

        </div>
      <?php endif; ?>

      <a href="https://wa.me/<?php echo esc_attr($contactos_fields['whatsapp']); ?>?text=<?php echo urlencode($contactos_fields["mensaje_predeterminado_whatsapp"])?>" target="_blank"
        class="!bg-[#2F7823] w-full sm:w-auto px-6 py-2 rounded flex justify-center items-center gap-2 sm:gap-4 text-sm sm:text-base hover:!bg-[#1f5517] transition text-[#fff]">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle.webp" alt="icon-wpp"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <?php
        echo $sobre_nosotros_fields["llamado_a_la_accion"] ?>
      </a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#EBEBE8] p-4 sm:p-6 md:p-8">
    <p class="text-[#4A4A42] text-sm sm:text-base md:text-lg text-center font-semibold mb-6">
      <?php echo $footer_fields["titulo"] ?>
    </p>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram logo"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="<?php echo esc_attr($contactos_fields['instagram']); ?>"
          class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline" target="_blank"><?php echo $footer_fields["texto_instagram"] ?></a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook logo"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="<?php echo esc_attr($contactos_fields['facebook']); ?>"
          class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline" target="_blank"><?php echo $footer_fields["texto_facebook"] ?></a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle-verde.svg"
          alt="WhatsApp logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="https://wa.me/<?php echo esc_attr($contactos_fields['whatsapp']); ?>?text=<?php echo urlencode($contactos_fields["mensaje_predeterminado_whatsapp"])?>" target="_blank"
          class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline"><?php echo $footer_fields["texto_whatsapp"] ?></a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truck.svg" alt="Envios logo"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <p class="text-xs sm:text-sm md:text-base text-[#4A4A42]"><?php echo $footer_fields["texto_envios"] ?></p>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dollar-sign.svg" alt="Pagos logo"
          class="w-5 h-5 sm:w-6 sm:h-6" />
        <p class="text-xs sm:text-sm md:text-base text-[#4A4A42]"><?php echo $footer_fields["texto_pagos"] ?></p>
      </div>
    </div>
  </footer>