 <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Markaz faoliyati</h4>
            <ul>
              @foreach ($footer1 as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="/page/{{$item->id}}">{{$item->title}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Markaz haqida</h4>
            <ul>
              @foreach ($footer2 as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="/page/{{$item->id}}">{{$item->title}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Aloqalar</h4>
            <p>
              Sirdaryo viloya <br>
              Guliston shahri<br>
              Toshkent  ko'chasi 112 uy<br><br>
              <strong>Tel:</strong> +998 67 227 79 00<br>
              <strong>Email:</strong> sirdaryomalaka@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Biz haqimizda</h3>
            <p>Mazkur ilm dargohi 1964-yil  25-aprelda Sirdaryo viloyati markaz Guliston shahrida tashkil etilgan bo‘lib, hozirgi kunda Sirdaryo viloyat xalq ta’limi xodimlarini qayta tayyorlash va ularning malakasini oshirish hududiy markazi nomi bilan faoliyat ko‘rastmoqda.</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright by <strong><span>Mr. Kurbanov</span></strong>. 
      </div>

    </div>
  </footer><!-- End Footer -->