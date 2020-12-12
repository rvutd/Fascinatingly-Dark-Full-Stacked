<?php 
    require('config/config.php');
    require('config/db.php');
    
    // Message Variables -
    $msg = '';
    $msgClass = '';

    // Check for Submit -
    if (isset($_POST['submit'])){
        // Get Form Data
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

        //  Add to MySQL DB -
        $query = "INSERT INTO customer_detail(name, email, phone_number) VALUES('$name', '$email', '$phone_number')";

        // Direct if Succesfull else Show Error-
        if (mysqli_query($conn, $query)){
            // header('Location: '.ROOT_URL."");
            
            echo 
            "<SCRIPT> //not showing me this
                alert('Successfully Submit, Thank You For Choosing Us.')
                window.location.replace('https:/localhost/Fascinatingly_Dark/home.php');
            </SCRIPT>"; 

        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fascinatingly Dark | Let The Skin Breathe</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/utilities.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>

    <!-- NavBar -->
    <section class="navbar bg-light-grey">
        <div class="container flex">
            <h2>Fascinatingly Dark</h2>
            <nav>
                <ul>
                    <li><a href="<?php echo "http://localhost/Fascinatingly_Dark/home.php"; ?>">Home</a></li>
                    <li><a href="<?php echo "http://localhost/Fascinatingly_Dark/our-works.php"; ?>">Our Works</a></li>
                    <li><a href="<?php echo "http://localhost/Fascinatingly_Dark/our-works.php"; ?>#contact-us">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- ShowCase -->
    <section class="showcase bg-light-grey slide">
        <div class="container grid">
            <div class="py-4">
                <h2 class="md text-red">"Beauty is about enchancing what you have. Let Yourself shine through."</h2>
                <p class="text-black sm">- Janelle Monae</p>

                <p class="sm">This all-natural lotion provides heavy-duty moisture to very dry skin. Can be an excellent 
                   overnight treatment or used in the winter to protect the skin from bitter cold and harsh
                   artificial heat.
                </p>
                <p class="sm">   
                   Mango butter provides excellent nourishment with coconut oil, while our 
                   CreamMaker Green Coffee gives the cream a silky, moisturizing feel.
                </p>
            </div>

            <!-- Contact Us Form -->
            <div class="showcase-form card" id="contact-us">
                <h2>Contact Us</h2>
                <form method='POST' acion="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" value="<?php echo isset($_POST['Name']) ? $name : ''; ?>" required>
                    </div>
                    <div class="form-control">
                        <input type="text" name="email" placeholder="Email" value="<?php echo isset($_POST['Email']) ? $email : ''; ?>" required>
                    </div>
                    <div class="form-control">
                        <input type="tel" name="phone_number" placeholder="Phone Number" value="<?php echo isset($_POST['Phone']) ? $phone : ''; ?>" required>
                    </div>
                    <div class="form-control">
                        <input type="submit" name="submit" value="submit" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Hero -->
    <section class="hero py-4">
        <div class="container grid-1 text-center">
            <!-- Product Appreciation -->
            <h2 class="hero-head py-3 text-black text-center">5 <span class="text-red">Reasons</span> to Choose <span>Fascinatingly Dark </span>Kajal & Eyeliner</h2>
            <div class="flex f-wrap">
                <!-- Product Details -->
                <div class="card">
                    <img src="assets/icons/organic-food.svg" alt="" class="">
                    <h3>100% Organic With Kohl Powder & Many more</h3>
                </div>
    
                <div class="card">
                    <img src="assets/icons/vegan.svg" alt="" class="">
                    <h3>Pure Herbal & Well Treated</h3>
                </div>
    
                <div class="card">
                    <img src="assets/icons/herbal-massage.svg" alt="" class="">
                    <h3>Made with Ancient Methodology</h3>
                </div>
    
                <div class="card">
                    <img src="assets/icons/clock.svg" alt="" class="">
                    <h3>Longlasting with Various Advantages</h3>
                </div>
    
                <div class="card">
                    <img src="assets/icons/family.svg" alt="" class="">
                    <h3>Safe For all Skin Types</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Difference -->
    <section class="diff bg-light-grey py-4">
        <div class="container grid-1">
            <div class="flex py-2">
                <h1 class="xl">What Makes Us Different</h1>
                <i class="fas fa-question fa-5x py-4 p-1"></i>
            </div>
            <div class="grid">
            <img src="assets/images/working-girl.png" alt="">
                <div class="py-4">
                    <h2 class="text-red">Designer, Sis, Tinkerer</h2>
                    <p>I've always been interested by how design influences the experience of any product. 
                        Now with +10 years of experience in skin care, health, and physiology.
                    </p>
                    <p>Take a look around to see that <a class="text-red" href="#"> I've helped people with, health and skin care</a>, 
                        people I've mentored, and what <a class="text-red" href="#">I've seen.</a> 
                    </p>
                    <div class="social">
                        <a href="https://www.instagram.com/fascinatingly_dark/" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                        <a href="https://www.instagram.com/fascinatingly_dark/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.instagram.com/fascinatingly_dark/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Ingredients -->
    <section class="ingredients">
        <div class="grid-1 py-4">
            <!-- Ingredients & It's Details -->
            <h2 class="hero-head py-3 text-black text-center">5 <span class="text-red">Ingredients</span> which makes <span>Kajal & Eyeliner</span> Exceptional!</h2>
            <div class="flex f-wrap text-center">
                <div class="card">
                    <p class="md">#01</p>
                    <h3>Kohl Powder</h3>
                    <p>It has been claimed to keep the keeps cool and clean, improve
                       vision and strengthen the eyes.
                    </p>
                </div>
    
                <div class="card">
                    <p class="md">#02</p>
                    <h3>BeesWax</h3>
                    <p>BeesWax leaves lashes nourished, as well as protected from the elements.
                    </p>
                </div>
    
                <div class="card">
                    <p class="md">#03</p>
                    <h3>Castrol Oil</h3>
                    <p>It helps to lubricate the eyes and prevent moisture from leaving the eyes. 
                    </p>
                </div>
    
                <div class="card">
                    <p class="md">#04</p>
                    <h3>Vitamin-E</h3>
                    <p>Reduces the risk of developing macular degeneration and cataracts,
                       eyesight. 
                    </p>
                </div>
    
                <div class="card">
                    <p class="md">#05</p>
                    <h3>Ghee</h3>
                    <p>It maintains the hydration level of eyes that prevents dry eye syndrome.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Info -->
    <footer class="footer bg-black">
        <div class="container flex">
            <h1 class="lg">We make creative <span>products</span> only.</h1>
            <ul>
                <h3 class="md">Contacts</h3>
                <li class="py-1"><i class="fas fa-phone-alt"></i> <span class="text-light-black">+99 080 070 4224</span></li>
                <li><i class="fas fa-envelope yellow"></i> <span class="text-light-black">fascinating@gmail.com</span></li>
            </ul>
            <ul>
                <h3 class="md">Our Location</h3>
                <li class="py-1"><i class="fas fa-home"></i> <span class="text-light-black">Av. Vijay Nagar - Radison Square, Indore - MP, MP India</span></li>
            </ul>
        </div>
    </footer>
</body>
</html>