<?php
    session_start();
    include_once('login/config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profª Ingrid Cardoso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./media/img/svg.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/area_aluno.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    </head>
    <body class="d-flex flex-column h-100 ">
      <main class="flex-shrink-0">
          <!-- Navigation-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container px-5">
                  <a class="navbar-brand" href="index.html"><img src="./media/img/logo02.png"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item"><a class="nav-link" href="index_01.php">Home</a></li>
                          <li class="nav-item"><a class="nav-link" href="about.html">Sobre</a></li>
                          <li class="nav-item"><a class="nav-link" href="#features_contato">Contato</a></li>
                          <li>       <div class="d-flex">
            <a href="login/sair.php" class="btn btn-danger me-5">Sair</a>
        </div>

                              </ul>
                  </div><!--collapse navbar-collapse-->
              </div><!--container px-5-->
          </nav>

      

      <main class="container">
        <div class="video">
      <iframe id="video" width="800" height="450" src="" frameborder="0" allowfullscreen></iframe>
      
        </div>
      <div class="button_tx fundo_menu ">
      <button id="video1" class="video-button video_px ">Assistir vídeo 1</button>
      <button id="video2" class="video-button video_px ">Assistir vídeo 2</button>
      <button id="video3" class="video-button video_px">Assistir vídeo 3</button>
      <button id="video4" class="video-button video_px ">Assistir vídeo 4</button>
    </div>
      <!-- adicione botões para os outros vídeos -->
      
      <script>
      var videoLinks = {
        "video1": "https://www.youtube.com/embed/GQpQha2Mfpg",
        "video2": "https://www.youtube.com/embed/XQkf-6Yl3WM",
        "video3": "https://www.youtube.com/embed/Ofktsne-utM",
        "video4": "https://www.youtube.com/embed/Ofktsne-utM"
        // mapeie os botões para os links dos vídeos
      };
      
      var buttons = document.querySelectorAll(".video-button");
      for (var i = 0; i < buttons.length; i++) {
        var button = buttons[i];
        button.addEventListener("click", function() {
          var videoLink = videoLinks[this.id];
          playVideo(videoLink);
        });
      }
      
      function playVideo(videoLink) {
        var videoFrame = document.getElementById("video");
        videoFrame.src = videoLink;
      }
      </script>

      </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">developer cristiano &copy; Your Website 2023</div></div>
                    <div class="----">
                        <a class="link-light small" href="#!">Privacidade</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Termos de uso</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contato</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>