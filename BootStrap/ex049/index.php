<?php 
  include('config.php');

  include(MAIN_PATH.'\admin\backend\database.php');

  $db = new Database;
  $sql = $db::connect()->prepare("SELECT * FROM admin_aboutsite");
  $sql->execute();
  $aboutSite = $sql->fetchAll();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mq.css">

  </head>
  <body>


    <header>

      <div class="container">

        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Omega</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      
            <div class="collapse navbar-collapse flex-grow-0" id="navbarsExample04">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
        <!--<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">

          <div class="container-fluid">

            <a class="navbar-brand" href="#">Omega</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">

              <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </div>

            </div>
          </div>

        </nav>-->

      </div>

    </header>

    <main>

      <section class="banner">

        <section class="overlay"></section>

        <div class="container">

          <h1 id="default">Omega</h1>
          <p><?php echo $aboutSite[0]['about']?></p>
          <button class="btn btn-warning btn-lg">Saiba mais</button>

        </div>

      </section>

      <section class="joinus">

        <div class="container d-flex justify-content-evenly align-content-center flex-wrap align-items-center">

         <p>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
              </svg>
            </span>
            Entre para a nossa lista!
         </p>

         <form action="" class="d-flex justify-content-end">

          <input type="text" name="txt" id="txt">
          <input type="submit" value="Enviar">

         </form>

        </div>

      </section>

      <section class="depoimento">

        <div class="container">

          <h2>Depoimento</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eos incidunt reiciendis rem ex voluptatum obcaecati ut dolorum ea hic quos odio impedit ducimus, earum praesentium consectetur officia itaque architecto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus illum architecto, asperiores est, magni unde itaque numquam placeat ea nihil cumque deserunt soluta provident sapiente voluptas tenetur deleniti dolores. Architecto. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem a, laborum quo reiciendis fuga.</p>

        </div>

      </section>

      <section class="about">

        <h2>Conheça nossa Empresa</h2>

        <div class="container d-flex justify-content-evenly">

          <div class="single">

            <div class="title">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5ZM2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175Z"/>
                <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z"/>
              </svg>
              <h3>Diferencial #1</h3>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae cumque dolor amet doloribus provident, fugit dolore minima? Iste blanditiis non accusantium, ex nemo officia doloribus debitis ullam, in, assumenda saepe?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil, magni quia sed itaque!</p>

          </div>

          <div class="single">

            <div class="title">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
              </svg>
              <h3>Diferencial #1</h3>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae cumque dolor amet doloribus provident, fugit dolore minima? Iste blanditiis non accusantium, ex nemo officia doloribus debitis ullam, in, assumenda saepe?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil, magni quia sed itaque!</p>

          </div>

          <div class="single">

            <div class="title">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg>
              <h3>Diferencial #1</h3>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae cumque dolor amet doloribus provident, fugit dolore minima? Iste blanditiis non accusantium, ex nemo officia doloribus debitis ullam, in, assumenda saepe?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores nihil, magni quia sed itaque!</p>

          </div>

        </div>

      </section>

      <section class="equipe">

        <h2>Equipe</h2>

        <div class="container d-flex justify-content-around flex-wrap">

          <div class="single d-flex justify-content-evenly">

            <div class="pic"></div>

            <div class="content">

              <h3>Gabriel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque natus ipsam, sed iusto aliquam. Maxime, sint aliquam. Molestias earum repudiandae labore dicta ullam nisi possimus fugit vel consequatur aperiam.</p>

            </div>

          </div>

          <div class="single d-flex justify-content-evenly">

            <div class="pic"></div>

            <div class="content">

              <h3>Gabriel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque natus ipsam, sed iusto aliquam. Maxime, sint aliquam. Molestias earum repudiandae labore dicta ullam nisi possimus fugit vel consequatur aperiam.</p>

            </div>

          </div>

          <div class="single d-flex justify-content-evenly">

            <div class="pic"></div>

            <div class="content">

              <h3>Gabriel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque natus ipsam, sed iusto aliquam. Maxime, sint aliquam. Molestias earum repudiandae labore dicta ullam nisi possimus fugit vel consequatur aperiam.</p>

            </div>

          </div>

          <div class="single d-flex justify-content-evenly">

            <div class="pic"></div>

            <div class="content">

              <h3>Gabriel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque doloremque natus ipsam, sed iusto aliquam. Maxime, sint aliquam. Molestias earum repudiandae labore dicta ullam nisi possimus fugit vel consequatur aperiam.</p>

            </div>

          </div>

        </div>

      </section>

      <section class="contact">

        <div class="container d-flex justify-content-around">

          <div class="form">

            <h2>Fale conosco</h2>

            <form action="">

              <p>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name">
              </p>

              <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
              </p>

              <p>
                <label for="msg">Mensagem</label>
                <textarea name="msg" id="msg"></textarea>
              </p>

              <button type="submit" class="btn btn-primary">Enviar</button>

            </form>

          </div>

          <div class="prices">

            <h2>Nossos planos</h2>

            <table>

              <thead>

                <tr>

                  <th>Plano diário</th>
                  <th>Plano semanal</th>
                  <th>Plano mensal</th>

                </tr>

              </thead>

              <tbody>

                <tr>

                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>

                </tr>

                <tr>

                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>

                </tr>

                <tr>

                  <td>R$199,00</td>
                  <td>R$299,00</td>
                  <td>R$399,00</td>

                </tr>

              </tbody>

            </table>

          </div>

        </div>

      </section>

    </main>

    <footer>

      <p>Todos os direitos reservados</p>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>