<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin-view-category.css')?>"> 
    <title>Admin Panel</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <img src="<?php echo base_url('assets/assets/doughnut.svg')?>" alt="img" id="active">
                    <span class="link-text">View Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin-add-category.html" class="nav-link">
                    <img src="assets/pizza (1).svg" alt="img">
                    <span class="link-text">Add Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin-view-list.html" class="nav-link">
                    <img src="assets/food (2).svg" alt="img">
                    <span class="link-text">View Menu</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin-add-menu.html" class="nav-link">
                    <img src="assets/food (1).svg" alt="img">
                    <span class="link-text">Add Menu</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="home.html" class="nav-link">
                    <img src="assets/food.svg" alt="img">
                    <span class="link-text">Sign Out</span>
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="food-category" id="menu">
            <h1>FOOD CATEGORY</h1>
            <div class="category-content">
                <!-- Buat BE nanti loop div category-itemnya ya buat nampilin data -->
                <!-- nanti yg di bawah" apusin aja, pas pagination request maks per pagenya 6 data aja ya. -->
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                <div class="category-item">
                    <div class="icon-container">
                        <img src="assets/beef.svg" alt="beef-burger">
                    </div>
                    <p class="category-name">Beef Burger</p>
                    <div class="action">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                </div>  
                
            </div>
        </div>
    </main>
</body>
</html>