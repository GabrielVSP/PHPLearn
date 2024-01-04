<?php

    //include_once(MAIN_PATH.'\admin\backend\panel.php');
    //include_once('../backend/panel.php');

    if (isset($_GET['logout'])) {

        Logout::Logout();

    }

?>



    <header>

         <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Omega - Control Panel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse flex-grow-0" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active btn menuBtn" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn menuBtn" href="#">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn menuBtn" href="#">Equipe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn" href="?logout">Log-out</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    
    </header>

    <main>


        <div class="container">

            
            <div class="marker Home title w-100 p-2 bg-white text-center rounded">Home</div>

            <section class="panel mt-3 w-100 d-flex justify-content-evenly">

                <div class="sidebar">

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active btn menuBtn" aria-current="true">
                         Home
                        </a>
                        <a href="#" class="list-group-item list-group-item-action btn menuBtn">Sobre</a>
                        <a href="#" class="list-group-item list-group-item-action btn menuBtn">Equipe</a>
                      </div>

                </div>

                <div class="utilities d-flex flex-column flex-wrap">

                    <div class="marker Sobre"></div>
                    <div class="utility flex-grow-1">

                        <h2 class="w-100 p-1 text-light bg-blue bg-primary border border-3 border-primary-subtle rounded">Sobre</h2>

                        <div class="content p-2 bg-white">

                            <form method="post" id="form" php_src="define-about.php">

                                <div class="mb-3">
                                    <label for="about" class="form-label">Código HTML:</label>
                                    <textarea name="about" id="about" style="resize:vertical;height:120px" class="form-control border-1 border-black" required></textarea>
                                </div>

                                <input type="submit" value="Enviar">

                            </form>

                        </div>

                    </div>

                    <div class="utility flex-grow-1">

                        <h2 class="w-100 p-1 text-light bg-blue bg-primary border border-3 border-primary-subtle rounded">Cadastrar equipe</h2>

                        <div class="content p-2 bg-white">

                            <form action="" method="post" php_src="add-team.php">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome do membro:</label>
                                    <input type="text" name="team-name" class="form-control border-dark" id="name" required maxlength="20">

                                </div>

                                <div class="mb-3">
                                    <label for="aboutMember" class="form-label">Sobre o membro:</label>
                                    <textarea name="team-about" id="aboutMember" style="resize:vertical;height:120px" class="form-control border-1 border-black" required></textarea>
                                </div>

                                <input type="submit" value="Enviar">

                            </form>

                        </div>

                    </div>

                    <div class="utility flex-grow-1">

                        <h2 class="w-100 p-1 text-light bg-blue bg-primary border border-3 border-primary-subtle rounded">Equipe</h2>

                        <div class="content p-2 bg-white">

                            <table class="table table-bordered border-dark-subtle table-striped table-light">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Membro</th>
                                        <th>Deletar</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <?php 

                                        foreach($members as $key => $value) {
                                    ?>

                                    <tr>
                                        <td><?php echo $value['id']?></td>
                                        <td><?php echo $value['name']?></td>

                                        <td>
                                            <button class="btn btn-danger deleteBtn" name="delete-btn" element_id="<?php echo $value['id']?>">Deletar</button>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                </tbody>

                            </table>

                        </div>

                    </div>
                    <div class="marker Equipe"></div>

                </div>

            </section>

        </div>

    </main>

    <script src="scripts/jquery.js"></script>
    <script src="scripts/menuHandler.js"></script>
    <script src="scripts/ajax.js"></script>