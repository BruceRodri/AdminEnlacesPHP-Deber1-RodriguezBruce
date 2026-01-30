<?php require __DIR__ . '/partials/header.php'; ?>
<div class="border-b border-gray-200 pb-8 mb-8">
   <h2 class="text-4xl font-semibold text-gray-900 sm:text-5xl">ARREGLOS BIDIMENSIONALES</h2>
   <p class="text-lg text-gray-600 w-full max-w-4xl">
      REALIZAR ARREGLOS BIDIMENSIONALES ASOCIATIVOS EN PHP PARA ALMACENAR ENLACES CATEGORIZADOS Y MOSTRARLOS EN UNA
      PÁGINA WEB
   </p>
</div>

<div class="space-y-10">
   <!--BUCLE EXTERNO PARA RECORRER LAS CATEGORÍAS-->
   <!--LA VARIABLE $categoria EXTRAE EL NOMBRE DE LA CATEGORÍA-->
   <?php foreach ($enlacesCategorizados as $categoria => $lista): ?>
      <section class="border-t pt-6">
         <h2 class="text-2xl font-bold text-green-700 mb-4">
            <?= $categoria; ?>
         </h2>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!--BUCLE INTERNO PARA RECORRER LOS ENLACES DE CADA CATEGORÍA-->
            <?php foreach ($lista as $enlace): ?>
               <article class="p-4 border rounded-md shadow-sm">
                  <h3 class="font-medium text-blue-600 hover:underline">
                     <!--URL-->
                     <a href="<?= $enlace['url']; ?>" target="_blank">
                        Visitar página &rarr;
                     </a>
                  </h3>

                  <p class="text-gray-500 text-sm mt-1">
                     <?= $enlace['descripcion']; ?>
                  </p>

               </article>
            <?php endforeach; ?>
            <!--FIN DEL BUCLE INTERNO-->
         </div>
      </section>
   <?php endforeach; ?>
   <!--FIN DEL BUCLE EXTERNO-->
</div>

<div class="my-16">
   <a href="/links/create" class="text-sm font-semibold text-gray-900">
      Registrar &rarr;
   </a>
</div>
<?php require __DIR__ . '/partials/footer.php'; ?>