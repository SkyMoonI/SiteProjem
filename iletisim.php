<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="css/main.css"/>
      <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400i" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      
        <style>
        div.polaroid {
          width: 80%;
          background-color: white;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          margin-bottom: 25px;
        }

        div.container {
          text-align: center;
          padding: 10px 20px;
        }
        </style>
      
      <title>SkyMoon Website</title>
      
  </head>
  <body>  
      <section id="cover">
          <div class="container">
              <div class="row">
                  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="SkyMoon Website"/></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">           
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Hakkımda<span class="sr-only">(current)</span></a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="Ozgecmis.html">Özgeçmiş</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Sehrim.html">Şehrim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Giris.html">Giriş</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Iletisim.html">İletişim</a>
                            </li>               
                        </ul>
                      </div>
                  </nav>
              </div>
              
          </div>
          <div id="elisi-cont" class="container polaroid" style="margin-top:  150px;">
              <div class="row">
                    
                    <div class="col-sm-4" style="margin: auto;">
                        <div class="alert alert-success"  role="alert">
                          <h4 class="alert-heading">Gönderildi!</h4>
                          <p>En kısa zamanda size dönüş yapacağım.</p>
                          
                        </div>
                        <table border="50" width="200" height="30" style="margin-left: -19px;" >
                        <tr>
                            <td width="60">Adınız</td>
                            <td>:</td>
                            <td><?php echo $_POST["ad"];?></td>
                        </tr>

                        <tr>
                            <td width="60">Soyadınız</td>
                            <td>:</td>
                            <td><?php echo $_POST["soyad"];?></td>
                        </tr>

                        <tr>
                            <td width="60">Yaşadığınız Şehir</td>
                            <td>:</td>
                            <td><?php echo $_POST["sehirler"];?></td>
                        </tr>

                        <tr>
                            <td width="60">Email</td>
                            <td>:</td>
                            <td><?php echo $_POST["email"];?></td>
                        </tr>

                        <tr>
                            <td width="60">Telefon</td>
                            <td>:</td>
                            <td><?php echo $_POST["telefon"];?></td>
                        </tr>
                        <tr>		
                            <td width="60">Cinsiyetiniz</td>
                            <td>:</td>
                            <td><?php $Cinsiyet=array(1=>"Erkek","Kadın","Diğer"); 
                            echo$Cinsiyet[$_POST["Cinsiyet"]];?>
                            </td>
                        </tr>
                        <tr>
                            <td width="60">Mesajı Gönderme Amacınız</td>
                            <td>:</td>
                            <td>
                                <?php if(isset($_POST['Amac']))
                            {
                                $check=implode(",", $_POST['Amac']);
                                echo($check);
                            }?>
                            </td >
                        </tr>
                        <tr>		
                            <td width="60">Aciliyetiniz</td>
                            <td>:</td>
                            <td><?php $aciliyet=array(1=>"Çok Acil","Acil","Acil Değil"); 
                            echo$aciliyet[$_POST["aciliyet"]];?>
                            </td>
                        </tr>


                        <tr>
                            <td width="60">Mesajınız</td>
                            <td>:</td>
                            <td><?php echo $_POST["aciklama"];?></td>
                        </tr>



                    </table>
                </div>
                 
              </div>
              
              
          </div>
      </section>
      <script src="js/jQuery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
  </body>
</html>