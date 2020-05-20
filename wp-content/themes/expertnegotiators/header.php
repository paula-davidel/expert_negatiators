<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Saira:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo style_src(); ?>style.css" />
    <title>Acasa</title>
  </head>

  <body>
    <nav>
      <div class="nav-grid">
        <div class="navbar-header">
          <div class="navbar-logo">
            <img
              src="<?php echo img_src(); ?>nav-logo.png"
              alt="expert negotiators logo: choose smart, spend less"
            />
          </div>

          <div id="navbar-mobile-toggle" class="navbar-mobile">
            <div id="navbar-line-1" class="navbar-mobile-line"></div>
            <div id="navbar-line-2" class="navbar-mobile-line"></div>
          </div>
        </div>

        <a class="link1 mobile-hide" href="index.html">Acasa</a>
        <a class="link2 mobile-hide" href="./pages/about.html">Despre Noi</a>
        <a class="link3 mobile-hide" href="./pages/servicii.html">Servicii</a>
        <a class="link4 mobile-hide" href="./pages/blog.html">Blog </a>
        <a class="link5 mobile-hide" href="./pages/contact.html">Contact</a>
        <a class="link6 btn navbar-btn mobile-hide">Analiza GRATUITA</a>
      </div>

      <div>
        <div class="navbar-language-selector mobile-hide">
          <div class="flag hide">
            <img src="<?php echo img_src(); ?>en.png" alt="usa flag" />
          </div>
          <div class="flag">
            <img src="<?php echo img_src(); ?>en.png" alt="romania flag" />
          </div>
          <div class="select">
            <select name="language">
              <option value="en">en</option>
              <option value="ro">ro</option>
            </select>
            <img
              class="select-arrow-down"
              src="<?php echo img_src(); ?>arrow-down.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </nav>
