<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="htpps://fonts.googleapis.com">
    <link rel="preconnect" href="htpps://fonts.gstatic.com" crossorigin>
    <link href="htpps://fonts.googleapis.com/css2? family=Work+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/script.js">
    <link rel="stylesheet" href="js/gmbr.js">
    <link rel="stylesheet" href="js/txtjln.js">
    <title>Evo Style</title>
</head>
<body>
    <header>
        <nav>
            <div class="hac">
                <div class="tb">
                <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="#" id="home">Home</a></li>
                    <li><a href="#" id="about">About</a></li>
                    <li><a href="#" id="collect">Collection</a></li>
                </ul>
            </div>
            <div class="jdl">
                <h1>Evo Style</h1>
            </div>
            <div class="acc">
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
                <a href=""><img src="Asset/shopping-bag.png" alt=""></a>
            </div>
        </nav>
        
        <div class="dm">
            <li><a href="#" id="home">Home</a></li>
            <li><a href="#" id="about">About</a></li>
            <li><a href="#" id="collect">Collection</a></li>
        </div>
        <script>
            document.getElementById('home').addEventListener('click', function(event) {
                event.preventDefault();
                const bottomSection = document.getElementById('clt');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
    
            document.getElementById('about').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link default
                const bottomSection = document.getElementById('abs');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
    
            document.getElementById('collect').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link default
                const bottomSection = document.getElementById('crtul');
                bottomSection.scrollIntoView({ behavior: 'smooth' });
            });
        </script>
        </header>
        <Main>
            <div class="clt" id="clt">
                <img src="Asset/Virtualthreads 1.png" alt="Collection" id="image1">
            </div>
    
            <div id="txtjln" class="txtjln">
                <div id="txt" class="txt">
                <h2 class="eys">elevating your style</h2>
                <img class="allert" src="Asset/alert-triangle.png" alt="">
                <h2 class="eys">elevating your style</h2>
                <img class="allert" src="Asset/alert-triangle.png" alt="">
                <h2 class="eys">elevating your style</h2>
                <img class="allert" src="Asset/alert-triangle.png" alt="">
                <h2 class="eys">elevating your style</h2>
                <img class="allert" src="Asset/alert-triangle.png" alt="">
                <h2 class="eys">elevating your style</h2>
                <img class="allert" src="Asset/alert-triangle.png" alt="">
                </div>
            </div>
    
            <div class="abs" id="abs">
                <h2>About Us</h2>
                <div class="p1">
                <p>Kami adalah startup brand desain baju yang didirikan pada tahun 2024, dengan misi menghadirkan desain kekinian yang memadukan kreativitas dan inovasi dalam setiap desain. Berangkat dari semangat untuk mengekspresikan gaya hidup modern dan dinamis, kami percaya bahwa setiap pakaian harus mencerminkan kepribadian dan keunikan pemakainya.</p>
                </div>
            </div>
    
            <div class="gmbrjls">
                <img src="Asset/image.png" alt="">
            </div>
    
            <div class="image-mem">
                <img src="Asset/arkan.png" alt="">
                <img src="Asset/gwe.png" alt="">
                <img src="Asset/isal.png" alt="">
                <img src="Asset/kumar.png" alt="">
            </div>
            <div class="tk">
                <div class="crtul" id="crtul"><h1>Our Collection</h1></div>
                <div class="oc"> 
                    @foreach ($product as $row)
                    <div class="cr">
                        <img src="storage/{{ $row->picture }}" alt="">
                        <div class="crd">
                            <h3>{{ $row->product }}</h3>
                            <div class="bwh">
                                <h3>{{ $row->price }}</h3>
                                <a href="#" class="crb">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
        </Main>
        <script src="script.js"></script>
    
        <Footer>
            <section class="footer">
                <div class="footer-content">
                    <img src="Asset/Screenshot_2024-09-19_072930-removebg-preview.png" alt="">
                    <p>Sebagai startup yang terus berkembang, kami selalu terbuka untuk kolaborasi dengan individu dan komunitas yang memiliki visi serupa.</p>
        
                    <div class="iconsig">
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
        
                <div class="footer-content">
                    <h4>Our Company</h4>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Collection</a></li>
                </div>
        
                <div class="footer-content">
                    <h4>Resources</h4>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Conditions</a></li>
                    <li><a href="#">Policy</a></li>
                </div>
        
                <div class="footer-content">
                    <h4>Contact Us</h4>
                    <li><a href="#">Evostyle@gmail.com</a></li>
                    <li><a href="#">+6282138448982</a></li>
                </div>
            </section>    
        </Footer>
</body>
</html>