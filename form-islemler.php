<html>
    <head>
        <meta charset="utf-8">
        <script type="text/javascript">
            function bekle_true()
            {
                 window.location = "index.html"
            }
            function bekle_false()
            {
                 window.location = "Giris.html"
            }
            function islem()
            {
                var email = "G181210078@sakarya.edu.tr";
                var sifre = "123123";
                var girilen_email = "<?php echo $_POST["email"]?>";
                var girilen_sifre = "<?php echo $_POST["sifre"]?>";
                if(email==girilen_email  && sifre==girilen_sifre)
                {
                   alert("Hoşgeldin G181210078");
                   alert("3 Saniye içinde Anasayfaya Yönlendiriliyorsun.");
                   setTimeout('bekle_true()', 3000);
                }
                else
                {
                   alert("Bilgiler Yanlış.");
                   alert("3 Saniye içinde Giriş Yap Sayfasına Yönlendiriliyorsun.");
                   setTimeout('bekle_false()', 3000)
                }                     
            }
        islem();
        </script>
        
            
    </head>
    
    <body>
        

    </body>
</html>