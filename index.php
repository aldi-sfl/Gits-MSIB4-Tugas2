<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="skill.css" />
    <link rel="stylesheet" href="pendidikan.css" />

    <link rel="shortcut icon" type="png" href="img/logo.png" />

    <!----===== link icon yang digunakan ===== -->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/645c6ff9e5.js" crossorigin="anonymous"></script>

    <title>ASL</title>
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="img/logo.png" alt="" class="img-fluid" />
          </span>

          <div class="text logo-text">
            <span class="name">ALDI</span>
            <span class="profession">Salfandi</span>
          </div>
        </div>

        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="text" placeholder="Search..." id="search-input" />
            <i class="fa-solid fa-right-to-bracket icon send" onclick="searchTextt()"></i>
          </li>

          <ul class="menu-links">
            <li class="nav-link">
              <a href="#">
                <i class="fa-solid fa-house icon"></i>
                <span class="text nav-text">Home</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#skill">
                <i class="fa-solid fa-chart-simple icon"></i>
                <span class="text nav-text">Skill</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#sekolah">
                <i class="fa-solid fa-school icon"></i>
                <span class="text nav-text">Pendidikan</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#contac">
                <i class="fa-solid fa-envelope icon"></i>
                <span class="text nav-text">Kontak</span>
              </a>
            </li>
          </ul>
        </div>
        <p class="text tanggal"><?php include 'data.php'; tanggal() ?></p>

        <div class="bottom-content">
          <li class="mode">
            <div class="sun-moon">
              <i class="bx bx-moon icon moon"></i>
              <i class="bx bx-sun icon sun"></i>
            </div>
            <span class="mode-text text">Light Mode</span>

            <div class="toggle-switch">
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>

    <section class="home">
      <div class="container">
        <div class="text">
          <img class="logo-web img-fluid" src="img/foto.jpg" alt="" />
          <h1 class="home-text">Aldi Salfandi</h1>
        </div>
        <div class="content-home">
          <p>Saya adalah Aldi Salfandi kelahiran tahun 2002. Saya berasal dan tinggal di Banyumas.</p>
          <p>saya saat ini sedang menempuh studi di Universitas Amikom Purwokerto</p>
          <!-- <p id="result"></p> -->
        </div>

        <div class="content-skill" id="skill">
          <h1 class="text">Kemampuan</h1>
          <div class="main-top"></div>
          <div class="users">
            <div class="card">
              <i class="fa-brands fa-html5 icon-skill"></i>
              <h4>Html</h4>
              <p>Tahap belajar</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>70%</span></td>
                  </tr>
                  <tr>
                    <td>Pemahaman</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card">
              <i class="fa-brands fa-css3-alt icon-skill"></i>
              <h4>Css</h4>
              <p>Tahap belajar</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>60%</span></td>
                  </tr>
                  <tr>
                    <td>Pemahaman</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card">
              <i class="fa-brands fa-php icon-skill"></i>
              <h4>PHP</h4>
              <p>Tahap belajar</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>50%</span></td>
                  </tr>
                  <tr>
                    <td>Pemahaman</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card">
              <i class="fa-brands fa-laravel icon-skill"></i>
              <h4>Laravel</h4>
              <p>Tahap belajar</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>30%</span></td>
                  </tr>
                  <tr>
                    <td>Pemahaman</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="content-exp" id="sekolah">
          <h1 class="text">Pendidikan</h1>
          <div class="conntainer">
            <div class="education-item">
              <div class="education-year">2014 - 2017</div>
              <div class="education-details">
                <h3 class="education-title">SMP N 2 Sokaraja</h3>
                <br />
              </div>
            </div>
            <div class="education-item">
              <div class="education-year">2017 - 2020</div>
              <div class="education-details">
                <h3 class="education-title">SMK N 1 Banyumas</h3>
                <p class="education-description">Jurusan Multimedia</p>
                <br />
              </div>
            </div>
            <div class="education-item">
              <div class="education-year">2020 - Sekarang</div>
              <div class="education-details">
                <h3 class="education-title">Universita Amikom Purwokerto</h3>
                <p class="education-description">Informatika</p>
              </div>
            </div>
          </div>
        </div>

        <div class="contact" id="contac">
          <h1 class="text">Contact</h1>
          <form action="#" method="post">
            <table>
              <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" required /></td>
              </tr>
              <tr>
                <td><label for="email">Email</label></td>
                <td><input type="text" id="email" name="email" required /></td>
              </tr>
              <tr>
                <td><label for="message">Message</label></td>
                <td><textarea id="message" name="message" required></textarea></td>
              </tr>
              <tr>
                <td></td>

                <td>
                  <button type="submit" class="btn btn-primary btn-sm" id="submit-btn"><i class="bx bx-mail-send"></i> Submit</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <!-- div container  -->
    </section>
    <!-- section home -->

    <script src="script.js"></script>
    <a href="#"><i class="fa-solid fa-arrow-up-long icon-up"></i></a>
  </body>
</html>
