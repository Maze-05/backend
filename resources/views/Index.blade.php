<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> QuickKick </title>
    <link rel="icon" type="image/ico" href="../../public/ASSETS/favicon.ico">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
   
   <video autoplay loop muted playsinline class="background-video">
    <source src="../../public/ASSETS/WhatsApp Video 2025-03-11 at 16.10.20_62b9b585.webm" type="video/webm">
</video>

      
    <header>
        <h1>Football Field Reservation</h1>
        
        <nav>
            <ul>
                <li>
                <a href="login.blade.php" class="login">
                    <img src=../../public/ASSETS/login.png  class="login-icon"> Login
                </a>
            </li>
            </ul>
        </nav>
       
    </header>

    <main>
        <div class="main">
            <h1>Book Your Field Easily</h1>
            <button class="book" onclick=
            "window.location.href='reservation.blade.php'">Book Now</button>
        </div>
        
        </div>
            <div class="expanding-cards">
                <div class="container">
                    <div
                      class="panel active"
                      style="
                        background-image: url('../../public/ASSETS/field A.jpg');">
                   
                    <div>
                      <h3 >Field A</h3>
                    </div>
                    </div>
                    <div
                      class="panel"
                      style="
                        background-image: url('../../public/ASSETS/field B.jpg');">
                      
                      <h3>Field B</h3>
                    </div>
                    <div
                      class="panel"
                      style="
                        background-image: url('../../public/ASSETS/field C.jpg');">
                     
                      <h3>Field C</h3>
                    </div>
                    <div
                      class="panel"
                      style="
                        background-image: url('../../public/ASSETS/field D.jpg');
                      "
                    >
                      <h3>Field D</h3>
                    </div>
                    <div
                      class="panel"
                      style="
                        background-image: url('../../public/ASSETS/field E.jpg');
                      "
                    >
                      <h3>Field E</h3>
                    </div>
                  </div>
            </div>
          </section>
    </main>

  <footer><div class="social-icons">
    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://wa.me/yourphonenumber" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
</div>
<div class="contact-info">
    <p>Email: <a href="mailto:QuickKick@gmail.com" style="color: white;"> QuickKick@gmail.com </a></p>
    <p>Phone: <a href="tel:+1234567890" style="color: white;">+1 234 567 890</a></p>
</div>
<p>© 2025 QuickKick Foundation </p>
</footer>

<script>
  // Select all panels
  const panels = document.querySelectorAll('.panel');

  // Add click event listener to each panel
  panels.forEach(panel => {
      panel.addEventListener('click', () => {
          // Remove 'active' class from all panels
          panels.forEach(p => p.classList.remove('active'));
          // Add 'active' class to the clicked panel
          panel.classList.add('active');
      });
  });
</script>
       
</body>
</html>
