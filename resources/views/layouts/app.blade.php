<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/d3a1b40e2e.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="section">
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <figure class="image is-48x48 mt-1">
            <img src="./img/icon/logo.png" alt="Logo">
        </figure>                    
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>        
    
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="">
                Home
            </a>
            <a class="navbar-item">
                Profile
            </a>
            <a class="navbar-item">
                Project
            </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <span class="icon">
                            <i class="fab fa-github fa-lg"></i> <!-- Tambahkan ukuran icon -->
                        </span>
                        <strong>Github</strong>
                    </a>
                    <a class="button is-primary">
                        <span class="icon">
                            <i class="fab fa-instagram fa-lg"></i> <!-- Tambahkan ukuran icon -->
                        </span>
                        <strong>Instagram</strong>
                    </a>
                </div>
            </div>
        </div>            
    </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    
    // Add a click event on each of them
    $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {
        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);
                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        });
    </script>
</section>
</body>
</html>
