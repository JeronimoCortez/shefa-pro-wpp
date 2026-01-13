<?php
$hero_fields = get_field("hero");
get_header(); ?>

<a href="https://wa.me/5491166685574" target="_blank"
  class="whatsapp-btn fixed bottom-6 right-6 z-[1001] bg-[#25D366] p-3 rounded-full shadow-lg hover:bg-[#20ba5a] transition">
  <img src="./message-circle-verde.svg" alt="WhatsApp" class="w-6 h-6 sm:w-8 sm:h-8" />
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
      <div class="mt-6 sm:mt-8 text-sm sm:text-base md:text-lg font-semibold text-center max-w-2xl mx-auto">
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
        <button
          class="bg-[#2F7823] w-full sm:w-auto px-6 py-2 rounded flex justify-center items-center gap-2 sm:gap-4 text-sm sm:text-base hover:bg-[#1f5517] transition">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/message-circle.webp" alt="icon-wpp"
            class="w-5 h-5 sm:w-6 sm:h-6" />
          <span><?php
          echo $hero_fields["llamado_a_la_accion"] ?> </span>
        </button>
      </div>
    </div>
  </div>

  <!-- PRODUCTOS -->
  <section class="bg-[#EBEBE8] p-4 sm:p-6 md:p-8 w-full">
    <div class="max-w-6xl mx-auto flex flex-col gap-4">
      <h3 class=" text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold p-2">
        Productos disponibles para obra
      </h3>
      <p class="text-sm sm:text-base md:text-lg text-[#555555] p-2">
        Materiales ideales para constructoras, arquitectos, desarrolladores,
        electricistas y obras en ejecución.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-4">
        <!-- Zócalos -->
        <div class="bg-white rounded-lg overflow-hidden flex flex-col">
          <img src="./zocalos.jpeg" alt="Zócalos img" class="w-full object-cover h-40 sm:h-44" />
          <div class="p-3 sm:p-4 flex flex-col gap-2">
            <p class="font-bold text-sm sm:text-base">Zócalos</p>
            <p class="text-xs sm:text-sm text-gray-600">
              Terminaciones de alta calidad para obras exigentes.
            </p>
          </div>
        </div>

        <!-- Teclas y enchufes -->
        <div class="bg-white rounded-lg overflow-hidden flex flex-col">
          <img src="./teclas-enchufes.jpeg" alt="teclas y enchufes img" class="w-full object-cover h-40 sm:h-44" />
          <div class="p-3 sm:p-4 flex flex-col gap-2">
            <p class="font-bold text-sm sm:text-base">Teclas y enchufes</p>
            <p class="text-xs sm:text-sm text-gray-600">
              Componentes eléctricos de primera marca.
            </p>
          </div>
        </div>

        <!-- Placas PVC -->
        <div class="bg-white rounded-lg overflow-hidden flex flex-col">
          <img src="./placas-pvc.png" alt="Placas PVC img" class="w-full object-cover h-40 sm:h-44" />
          <div class="p-3 sm:p-4 flex flex-col gap-2">
            <p class="font-bold text-sm sm:text-base">Placas PVC</p>
            <p class="text-xs sm:text-sm text-gray-600">
              Revestimientos estéticos y duraderos.
            </p>
          </div>
        </div>

        <!-- Espejo -->
        <div class="bg-white rounded-lg overflow-hidden flex flex-col">
          <img src="./espejos.png" alt="Espejo LED img" class="w-full object-cover h-40 sm:h-44" />
          <div class="p-3 sm:p-4 flex flex-col gap-2">
            <p class="font-bold text-sm sm:text-base">
              Espejo Rectangular Retroiluminado LED
            </p>
            <p class="text-xs sm:text-sm text-gray-600">
              Diseño moderno con luz LED integrada
            </p>
          </div>
        </div>

        <!-- Otros insumos -->
        <div class="bg-white rounded-lg p-3 sm:p-4 flex flex-col justify-center gap-2">
          <p class="font-bold text-sm sm:text-base">Otros insumos de obra</p>
          <p class="text-xs sm:text-sm text-gray-600">
            Variedad de materiales según stock disponible.
          </p>
        </div>
      </div>

      <p class="text-xs sm:text-sm font-light text-[#555555] text-center my-2">
        Stock variable – consultá disponibilidad y precios actualizados por
        WhatsApp.
      </p>

      <button
        class="bg-[#2F7823] w-full py-2 sm:py-3 rounded flex justify-center items-center gap-2 sm:gap-4 text-white text-sm sm:text-base hover:bg-[#1f5517] transition">
        <img src="./message-circle.png" alt="icon-wpp" class="w-5 h-5" />
        <span>Ver productos y precios por WhatsApp</span>
      </button>
    </div>
  </section>

  <!-- About US -->
  <section class="my-16 w-full px-4 sm:px-6 md:px-8">
    <div class="max-w-6xl mx-auto flex flex-col gap-4">
      <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold">
        ¿Sos profesional y estas cotizando una obra?
      </h3>
      <p class="text-sm sm:text-base md:text-lg">
        Escribinos y te asesoramos según tu necesidad. Atendemos consultas de
        profesionales, obras en curso y compras por volumen.
      </p>
      <div class="flex flex-col gap-3 my-2">
        <p class="flex gap-2 text-sm sm:text-base">
          <img src="./check.svg" alt="check icon" class="w-5 h-5 flex-shrink-0" />Productos nuevos
        </p>
        <p class="flex gap-2 text-sm sm:text-base">
          <img src="./check.svg" alt="check icon" class="w-5 h-5 flex-shrink-0" />Calidad de desarrollo inmobiliario
        </p>
        <p class="flex gap-2 text-sm sm:text-base">
          <img src="./check.svg" alt="check icon" class="w-5 h-5 flex-shrink-0" />Precios por debajo de mercado
        </p>
        <p class="flex gap-2 text-sm sm:text-base">
          <img src="./check.svg" alt="check icon" class="w-5 h-5 flex-shrink-0" />Atención directa y rápida
        </p>
      </div>
      <button
        class="bg-[#2F7823] w-full sm:w-auto py-2 sm:py-3 rounded flex justify-center items-center gap-2 sm:gap-4 text-white text-sm sm:text-base hover:bg-[#1f5517] transition">
        <img src="./message-circle.png" alt="icon-wpp" class="w-5 h-5 sm:w-6 sm:h-6" />
        Hablar ahora por WhatsApp
      </button>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-[#EBEBE8] p-4 sm:p-6 md:p-8">
    <p class="text-[#4A4A42] text-sm sm:text-base md:text-lg text-center font-semibold mb-6">
      Seguinos y conocé mas de Shefa Home
    </p>
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-6">
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="./instagram.svg" alt="Instagram logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="" class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline">@shefahome.ba</a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="./facebook.svg" alt="Facebook logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="" class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline">Shefa Home</a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="./message-circle-verde.svg" alt="WhatsApp logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <a href="" class="text-xs sm:text-sm md:text-base text-[#4A4A42] hover:underline">+5491166685574</a>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="./truck.svg" alt="Envios logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <p class="text-xs sm:text-sm md:text-base text-[#4A4A42]">Envios a todo el país</p>
      </div>
      <div class="flex items-center justify-center sm:justify-start gap-2">
        <img src="./dollar-sign.svg" alt="Pagos logo" class="w-5 h-5 sm:w-6 sm:h-6" />
        <p class="text-xs sm:text-sm md:text-base text-[#4A4A42]">Aceptamos todos los medios de pago</p>
      </div>
    </div>
  </footer>