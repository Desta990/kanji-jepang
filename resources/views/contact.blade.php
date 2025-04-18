@extends('layouts.home')

@section('content')
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Hubungi Kami
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="relative">
   <img alt="Latar belakang pemandangan kota" class="w-full h-96 object-cover" height="600" src="https://storage.googleapis.com/a1aa/image/8NDLIJt7r6YBMhWwxKuof38690ZwiBwL9qlWUpj8CAbBqdAKA.jpg" width="1920"/>
   <div class="absolute inset-0 bg-black opacity-50">
   </div>
   <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
    <h1 class="text-4xl font-bold mb-4">
     HUBUNGI KAMI
    </h1>
    <p class="text-lg">
     Butuh bantuan? Anda dipersilakan untuk meninggalkan informasi kontak Anda dan kami akan segera menghubungi.
    </p>
   </div>
  </div>
  <div class="bg-white py-16">
   <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <div>
     <i class="fas fa-home text-4xl text-gray-900 mb-4">
     </i>
     <h2 class="text-xl font-semibold mb-2">
      KUNJUNGI KAMI
     </h2>
     <p class="text-gray-600 mb-2">
      Silakan kunjungi alamat kami untuk informasi lebih lanjut.
     </p>
     <p class="text-gray-900">
        Jl. Kanji No. 123, Tokyo, Jepang
     </p>
    </div>
    <div>
     <i class="fas fa-phone-alt text-4xl text-gray-900 mb-4">
     </i>
     <h2 class="text-xl font-semibold mb-2">
      HUBUNGI KAMI
     </h2>
     <p class="text-gray-600 mb-2">
      Jangan ragu untuk menghubungi kami melalui telepon.
     </p>
     <p class="text-gray-900">
        +123 456 7890
     </p>
    </div>
    <div>
     <i class="fas fa-envelope text-4xl text-gray-900 mb-4">
     </i>
     <h2 class="text-xl font-semibold mb-2">
      EMAIL KAMI
     </h2>
     <p class="text-gray-600 mb-2">
      Kirimkan pertanyaan Anda melalui email.
     </p>
     <p class="text-gray-900">
        info@kanjistudy.com
     </p>
    </div>
   </div>
  </div>
 </body>
</html>



@endsection
