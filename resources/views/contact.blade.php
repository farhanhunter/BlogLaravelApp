<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h3 class="text-xl">Informasi lebih lanjut</h3>
  <div class="container">
    <div class="contact-item">
        <h3>Email</h3>
        <p>example@example.com</p>
    </div>
    <div class="contact-item">
        <h3>Social Media</h3>
        <ul>
            <li>Facebook: <a href="#">Example</a></li>
            <li>Twitter: <a href="#">@example</a></li>
            <li>Instagram: <a href="#">@example</a></li>
        </ul>
    </div>
    <div class="contact-item">
        <h3>WhatsApp</h3>
        <a aria-label="Chat on WhatsApp" href="https://wa.me/6282134294964"><img alt="Chat on WhatsApp" src="img/WhatsAppButtonGreenMedium.png" />
          <a />
    </div>
</div>
</x-layout>