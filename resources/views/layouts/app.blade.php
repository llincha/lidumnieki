<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biedrība "Darba un kultūras centrs Līdumnieki"</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
            <span class="ml-3 text-xl" >Biedrība "Darba un kultūras centrs Līdumnieki"</span>
            </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="/about">Par mums</a>
      <a class="mr-5 hover:text-gray-900" href="/photos">Fotogalerija</a>
      <a class="mr-5 hover:text-gray-900" href="/contactus">Saziņai</a>
      <a class="mr-5 hover:text-gray-900" href="https://8ecde0-bf.myshopify.com/lv">E-veikals</a>
    </nav>
  </div>
</header>
        <main class="max-w-6xl mx=auto">
            {{ $slot }}
        </main>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900" href="/">
      <span class="ml-3 text-xl">Biedrība "Darba un kultūras centrs Līdumnieki"</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2024 Biedrība "Darba un kultūras centrs Līdumnieki"
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24" xlink:href="https://www.facebook.com/lidumnieki">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
    </span>
  </div>
</footer>

    </body>
</html>
