<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farros - Landing Clone</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="styles/style.css">
  <style>
    body { font-family: 'Inter', 'Segoe UI', sans-serif; }
  </style>
</head>
<body class="bg-[#F3F3E0]">

  <!-- Navbar -->
  <?php include "partials/nav.php" ?>
  <!-- Hero Section -->
  <section class="w-full bg-[#27548A] relative pt-20 pb-0">
      <div class="max-w-7xl mx-auto flex flex-col items-center justify-center">
          <!-- Image + Ring effect -->
          <div class="relative mt-8 mb-0">
              <!-- Background ring -->
              <div class="absolute inset-0 flex items-center justify-center z-0">
                  <div class="rounded-full bg-[#27548A] opacity-50" style="width:350px;height:350px;"></div>
                  <div class="absolute rounded-full border-4 border-[#DDA853] opacity-30" style="width:330px;height:330px;"></div>
                  <div class="absolute rounded-full border-4 border-[#F3F3E0] opacity-30" style="width:260px;height:260px;"></div>
                </div>
                <!-- Foto utama -->
                <img src="foto/farros.png" class="relative z-10 w-[300px] h-[370px] object-cover" />
      </div>
    </div>
</section>


  
  <section class="w-full bg-[#F3F3E0] pt-2 pb-16">
    <div class="max-w-2xl mx-auto px-4">
      <!-- Accent and Heading -->
      <div class="flex items-center mb-5 mt-10">
        <div class="h-5 w-2 rounded-sm bg-[#DDA853] mr-1"></div>
        <div class="h-3 w-2 rounded-sm bg-[#DDA853] mr-3"></div>
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#183B4E]">Tentang Farros</h2>
      </div>
      <p class="text-[#183B4E] text-lg leading-relaxed font-normal mb-5">
        Farros memiliki rekam jejak kepemimpinan lengkap sejak masa kecil. Ia dikenal sebagai sosok yang memiliki integritas, amanah, cerdas, dan berani. Farros memiliki kemampuan membuat perubahan, inovatif, memimpin di saat krisis, dan bisa membuat kebijakan yang tepat serta cepat. Menjiwai persoalan di akar rumput rakyat dan menguasai medan di arena percaturan dunia.
      </p>
      <a href="#" class="inline-flex items-center text-[#27548A] font-semibold hover:text-[#DDA853] transition">
        Lihat Selengkapnya
        <svg class="ml-1 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </section>
  
<div>
    <div class="flex items-center justify-center gap-2 mb-4">
    <div class="w-2 h-3 bg-[#DDA853] rounded-sm"></div>
    <div class="w-2 h-2 bg-[#DDA853] rounded-sm"></div>
</div>
<h2 class="text-3xl md:text-4xl text-center font-extrabold text-[#183B4E] mb-10">Keluarga</h2>
<div class="flex items-center justify-center">
    <img class="h-auto max-w-xl transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://i.imgur.com/v82brms.jpeg" alt="Foto Farros dari Imgur">
</div>

  <!-- Section Latest -->
  <?php include "section/latest.php" ?>



<?php include "partials/footer.php" ?>
<script src="js/carousel.js"></script>
<script async src="//www.instagram.com/embed.js"></script>
</body>
</html>
