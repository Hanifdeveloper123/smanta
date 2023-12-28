@include('partial.navbar')
<section  class="hero" id="home">
  <main class="content">
    <div class="typing">
      Selamat Datang...
    </div>
    <h1>di SMA Negeri 1 Tayu</h1>
      <p>Tidak ada yang lebih baik dari hari ini untuk memulai kesuksesan masa depanmu. Awali dengan langkah dan tempat yang lebih baik.</p>
      <a href="#" class="cta">Daftar Sekarang</a>
      <a href="#" class="cto">Cara Mendaftar</a>
  </main>
</section>

<section class="about">
  <div >
    <p>Semua Postingan</p>
  </div>
  <div class="container">
    <div class="card">
        <div class="card-header">
          <img src="{{ asset('landing/img/bg1.jpg') }}">
                </div>
        <div class="card-body">
            <span class="tag tag-teal">Admin</span>
            <h4>
               Upacara Bendera Hari Senin Tanggal 17 Agustus
            </h4>
            <a href="#" class="cta">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
          <img src="{{ asset('landing/img/bg1.jpg') }}">
        </div>
        <div class="card-body">
            <span class="tag tag-teal">Admin</span>
            <h4>
              Upacara Bendera Hari Senin Tanggal 17 Agustus
            </h4>
            <a href="#" class="cta">Lihat Selengkapnya</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
          <img src="{{ asset('landing/img/bg1.jpg') }}">
                </div>
        <div class="card-body">
            <span class="tag tag-teal">Admin</span>
            <h4>
              Upacara Bendera Hari Senin Tanggal 17 Agustus
            </h4>
            <a href="#" class="cta">Lihat Selengkapnya</a>

        </div>
    </div>
</div>
</section>

<section id="contact" class="contact">
  <h2><span>Kontak</span>Kami</h2>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non laboriosam enim cum quas iure blanditiis?</p>
  <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7928338288857!2d111.04548937402986!3d-6.547821864008055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e712b7f3a7416bf%3A0x530521968b328db9!2sSMA%20Negeri%201%20Tayu!5e0!3m2!1sid!2sid!4v1703731657810!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
      <form class="action">
          <div class="input-group">
              <i data-feather="user"></i>
              <input type="text" placeholder="masukkan nama">
          </div>
          <div class="input-group">
              <i data-feather="mail"></i>
              <input type="text" placeholder="masukkan email">
          </div>
          <div class="input-group">
              <i data-feather="phone"></i>
              <input type="text" placeholder="masukkan no HP">
          </div>
          <a href="#" class="cta">Kirim</a>
        </form>
  </div>
</section>


  

@include('partial.footer')