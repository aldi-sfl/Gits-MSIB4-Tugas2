<?php
echo '<nav class="sidebar close">
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
      <input type="text" placeholder="Search..." />
    </li>

    <ul class="menu-links">
      <li class="nav-link">
        <a href="#">
          <i class="fa-solid fa-house icon"></i>
          <span class="text nav-text">Home</span>
        </a>
      </li>

      <li class="nav-link">
        <a href="#">
          <i class="fa-solid fa-chart-simple icon"></i>
          <span class="text nav-text">Skill</span>
        </a>
      </li>

      <li class="nav-link">
        <a href="#">
          <i class="fa-sharp fa-solid fa-business-time icon"></i>
          <span class="text nav-text">Experience</span>
        </a>
      </li>

      <li class="nav-link">
        <a href="#">
          <i class="fa-solid fa-envelope icon"></i>
          <span class="text nav-text">Contact</span>
        </a>
      </li>

      <li class="nav-link">
        <a href="#">
          <i class="fa-sharp fa-solid fa-circle-info icon"></i>
          <span class="text nav-text">Information</span>
        </a>
      </li>
    </ul>
  </div>

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
</nav>';
?>