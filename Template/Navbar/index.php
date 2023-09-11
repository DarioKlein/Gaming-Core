 <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <a href="index.html"><img class="img2" src="../Template/Navbar/imgs-navbar/logo.svg" alt=""></a>
                    <span>Gaming Core</span>
                </div>
                <div class="paginas">
                    <ul>
                        <li> <a href="../Home/index.php"> <img class="icones-mobile" src="../Template/Navbar/imgs-navbar/home.svg" alt=""> Início</a></li>
                        <li> <a href="../Jogos/index.php"><img class="icones-mobile" src="../Template/Navbar/imgs-navbar/controle.svg" alt=""> Jogos</a></li>
                        <li> <a href="../Ranking/ranking.php"><img class="icones-mobile" src="../Template/Navbar/imgs-navbar/ranking.svg" alt=""> Ranking</a></li>
                        <li><a href="../Suporte/index_1.php"><img class="icones-mobile" src="../Template/Navbar/imgs-navbar/suporte.svg" alt=""> Suporte</a></li>
                    </ul>
                </div>
                <div class="espacamento-mobile"></div>
    <div class="action-dropdown">
            <div class="login" onclick="menuToggle()">
                    <img class="img3" src="../Template/Navbar/imgs-navbar/login.svg" alt="">
            </div>
        <div class="menu-dropdown">
                     <?php
                        echo "<h3>$username</h3>";
                     ?>
                    <ul>
                        <li><img src="../Template/Navbar/imgs-navbar/profile.svg" alt=""><a href="../Perfil/index.php">Meu perfil</a></li>
                        <li><img src="../Template/Navbar/imgs-navbar/list.svg" alt="../Perfil/lista.php"><a href="">Minha lista</a></li>
                        <li><img src="../Template/Navbar/imgs-navbar/logout.svg" alt=""><a href="../Template/Logout/logout.php">Sair</a></li>
                    </ul>
        </div>
    </div>

                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
        </nav>
    </header>