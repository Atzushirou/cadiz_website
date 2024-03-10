<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ralph Cadiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="/images/FORMAL PICTURE.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<header class="site-header">
    <nav class="site-nav">
        <a class="logo" href="home.php">Ralph Cadiz</a>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="about_me.php">About Me</a></li>
            <li><a href="usages.php">Usages</a></li>
            <li><a href="Cadiz_Resume.pdf" download>Download CV</a></li>
            <li><a href="mailto:rmcadiz121@gmail.com">Contact Me</a></li>
        </ul>
        <ul class="menu menu-social">
            <li><a href="https://www.facebook.com/ralph.cadiz.35/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/sizzlingplatezx/" target="_blank"><i class="fab fa-instagram" style="color:var(--dark-pink)"></i></a></li>
            <li><a href="https://github.com/Atzushirou" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="logout.php" target="_self">Logout</a></li>
        </ul>
    </nav>
</header>
<main class="content">
    <header class="single-header content-inner full-width">
        <h1 class="single-title">Usages</h1>
    </header>

    <p>Here are my daily drivers that I mainly use for school purposes and practicing my coding skills.</p>

    <aside class="note">
        <strong class="note-header">Disclosure</strong>
        Keep in mind that having these will not necessary affect your skills, but only help the technology process. Even without the said equipments, our skills will compromise everything.
    </aside>

    <h2 id="hardware">Hardware</h2>
    <ul>
        <li>For my laptop, I use a <strong><a href="https://villman.com/Product-Detail/gigabyte_g5-ke-52ph263sh-156in-fhd-144hz--core-i5-12500h-25ghz--rtx3060-6gb-gddr6--8gb-ram--512gb-ssd--win11" target="_blank" rel="noopener">Gigabyte K5 KE</a></strong>, a Intel 12500H laptop that seems to fit the deal when I bought it. Since I was playing very often when I don't code, I wanted to also be able to game on it. Its RAM and SSD slots are upgradable, so it was pretty worth it.</li>

        <li>For my mouse, I use <strong><a href="https://easypc.com.ph/products/rakk-gahum-trimode-3395-lightweight-minimalist-design-black-and-white-gaming-mouse?variant=42530419933355" target="_blank" rel="noopener">RAKK Gahum</a></strong>. It's very comforting, and very cheap for its price. It's even tri-mode for its price, a bang for the buck.</li>

        <li>For my keyboard, I use <strong><a href="https://kprepublic.com/products/feker-ik75-v3-3-mode-wireless-75-gasket-mechanical-keyboard-kit-hot-swappable-switch-lighting-effects-rgb-led-type-c-2-4g-bt" target="_blank" rel="noopener">IK75 Pro 3</a></strong>. This external keyboard does the trick for me, with a tri-mode feature that can be used via Bluetooth, wired, or even a USB Dongle. I'd recommend a full layout for coding, since you <em>might</em> need the additional function keys.</li>
    </ul>
    <h2 id="software">Software</h2>
    <ul>
        <li>For my operating system, I use <strong><a href="https://www.microsoft.com/en-ph/" target="_blank" rel="noopener">Windows</a></strong>. Currently using the 10 version, you can download it <strong><a href="https://www.microsoft.com/en-us/software-download/windows10"> here</a></strong>. I also practice on using <strong><a href="https://almalinux.org/">Almalinux</a></strong>. Practicing on it might become useful one day, as I plan to have a job on the cybersecurity field.</li>

        <li>For my web browser, I mainly use <strong><a href="https://brave.com/" target="_blank" rel="noopener">Brave</a></strong>. I use other browsers too, but for me Brave usually works the best, that adblocker feature they have is the sweetest free deal they have. I also use <strong><a href="https://www.google.com/intl/en_ph/chrome/">Google Chrome</a></strong>, when there are some features that don't work in Brave.
        </li>
    </ul>
    <h2 id="applications">Applications</h2>
    <ul>

        <li><strong><a href="https://code.visualstudio.com/" target="_blank" rel="noopener">VSCode</a></strong> is my preferred code editor and compiler. I'm very comfortable to this editor, and it is very easy to use, with installable extensions that ranges from different UI's and IDEs to automatic text formatting.</li>

        <li>For hosting my websites, I use <strong><a href="https://ph.000webhost.com/" target="_blank" rel="noopener">000webhost</a></strong>. I plan to use a different hosting app and a separate domain for my future projects when I have a job ready.</li>

        <li>For email, I use <strong><a href="https://mail.google.com/mail/u/0/" target="_blank" rel="noopener">Gmail</a></strong>. I'm still finding future other apps for me to use for independent use of email usage.</li>

        <li>For running my Almalinux virtual machine, I'm using <strong><a href="https://www.putty.org/">PuTTy</a></strong>. Using the in-build terminal in the VM is too slow, so it's best for me to install a separate terminal in order to run scripts in it.</li>

    </ul>
</main>

<footer class="site-footer">
    <p>Created by Ralph Cadiz. All rights reserved.</p>
    <ul class="menu menu-social">
        <li>
            <a href="https://www.facebook.com/ralph.cadiz.35/" target="_blank"><i class="fab fa-facebook"></i></a>
            </a>
          </li><li>
            <a href="https://www.instagram.com/sizzlingplatezx/" target="_blank"><i class="fab fa-instagram" style="color:var(--dark-pink)"></i></a>
          </li><li>
            <a href="https://github.com/Atzushirou" target="_blank"><i class="fab fa-github"></i></a>
          </li>
    </ul>
</footer>
</body>
</html>