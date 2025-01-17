<? 
    include_once $_SERVER['DOCUMENT_ROOT']."/php/db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Yu-mi's Profile</title>
    <link rel="stylesheet" href="../css/contact-style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/contact.js"></script>
</head>
<body>
<div class="wrap">
       <header>
           <a href="../index.html"><img src="../img/icon/YM-LOGO-WH.png"></a>
           
           <div class="menu">
               <a href="#">★
                           ★
                           ★</a>
           </div>
       </header>
       <!------------------------------------------------------->
       <section> 
          <div id="contact-box" class="SlideInDown">
              <div class="contact-txt">
                  <h1>CONTACT</h1>
                  <h2>Would you like to work with me?</h2>
                  
                  <p>Name : Yu-Mi, Kim</p>
                  <p>E-mail : originalymk@gmail.com</p>
                  <p>Phone : 010.8082.0811</p>
                  
                  <small class="blinkle">*더 궁금하신 사항 있으시면 언제든 연락주세요 :) </small>
              </div>
              <form class="contact-input" action="contact_ok.php" method="POST">
                  <input class="contact" type="text" id="name" name="name" placeholder="Name*" required>
                  <input class="contact" type="email" id="email" name="email" placeholder="E-mail*" required>
                  <textarea class="contact" id="message" name="message" placeholder="Send a message" required></textarea>
                  
                  <input class="contact" type="submit" value="SEND">
              </form>
              
          </div>
           
           
           
        <!--------------------------------->
           <div id="menu">
               <a href="../sub/about.html" class="about">ABOUT</a>
               <a href="../sub/work.html" class="work">WORK</a>
           </div>
           <div id="contact">
               <a href="../sub/contact.html" class="contact">CONTACT</a>
           </div>
           <!--<div class="star-twk">
               <span></span>
               <span></span>
               <span></span>
           </div>-->
       </section>
</div>
    
</body>
</html>




