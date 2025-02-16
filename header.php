<header>
    <div class="logo">
        <img src="Images\logo.jpg" alt="Logo">
    </div>
    <nav>
        <ul>
            <li class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">
                <a href="index.php">Home</a>
                
                <link rel="stylesheet" href="css/style.css">

            </li>
            <li class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>">
                <a href="about.php">About Us</a>
            </li>
        </ul>
    </nav>
</header>