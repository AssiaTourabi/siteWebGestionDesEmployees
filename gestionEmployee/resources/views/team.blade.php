@extends('layouts/app')

@section('titre')
    Team page
@endsection

@section('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; 
    scroll-behavior: smooth;
    border: none;
    outline: none;
    text-decoration: none;
}
:root{
    --bg-color:green;
    --second-color:black;
    --main-color:rgb(75, 128, 226);
}

body {
    position: relative;
}
html {
    scroll-behavior: smooth;
    
    overflow-x: hidden;
}

header{
    background-color: #f0f0f0;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 140px;}

header img{
    height: 45px ;
    width: 65px;
}

span {color: #27ae60;}

.logo {
    text-decoration: none;
    color: rgb(0, 179, 0);
    text-transform:uppercase ;
    font-weight: 600;
    font-size: 1.8em;}

.navi a{
    color: rgb(0, 179, 0);
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 500;
    padding-left: 35px;
}

.navi a:hover{
    color: black;
}

section{
    padding: 150px 120px;
}

.social-icons a {
    color: #fff;
    font-size: 1.7em;
    padding-right: 30px;}

    span {
    color: #27ae60;
   
}

 .portfolio h2{
    color: #ffffff;
 }


  .portfolio{
   
    background: linear-gradient(rgba(0, 0, 0), rgb(17, 175, 2));
  }

  .service{
    font-size: 40px;
    margin-left: 43%;
    margin-bottom: 100px;
  }

  .portfolio-container{
    font-size: 62.5%;
    display: grid;
    grid-template-columns:   repeat(4, 2fr);
    
    align-items: center;
    gap: 2.5rem;
  }
  .portfolio-container .portfolio-box{
    font-size: 62.5%;
    position: relative;
    border-radius: 2rem;
    box-shadow: 0 0 1rem rgb(110, 108, 247);
    overflow: hidden;
    display: flex;
    margin-bottom: 20px;
   
  }
  .portfolio-box img{
    width: 100%;
    transition: .5s ease;
  }
  .portfolio-box:hover img{
     transform: scale(1.1);
  }
  .portfolio-box .portfolio-layer {
    font-size: 62.5%;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(0, 0, 0, 0.1), var(--main-color));
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 0 4rem;
    transform: translateY(100%);
    transition: .5s ease;
  }
  .portfolio-box:hover .portfolio-layer{
    transform: translateY(0);

  }
.portfolio-layer h4{
    font-size: 2rem;
}
.portfolio-layer p{
    
    font-size: 1rem;
    margin: .3rem 0 1rem;    
}
.portfolio-layer a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width:5rem;
    height: 5rem;
    background: rgb(255, 255, 255);
    border-radius: 50%;
    text-decoration: 0;

}

.portfolio-layer a i {
    font-size: 2rem;
    color: #27ae60;
    
}
.footer {
    background-color: #000016;
    color: #fff;
    padding: 1.5em;
    display: flex;
    justify-content: space-between;
}
.footer-title {
    font-size: 1.3em;
    font-weight: 300;
}
.footer-title span {
    color: rgb(0, 128, 0);
}
.footer .social-icons a{
    font-size: 1.3em;
    padding: 0 12px 0 0;}

    @media (max-width:1023px){
    header{
        padding: 12px 20px;
    }

    .navigation a{
        padding-left: 10px;
    }

    .title{
        font-size: 1.8em;
    }

    section{
        padding: 80px 20px;}

    .main-content h2{
        font-size: 1em;
    }

    .main-content h3{
        font-size: 1.6em;
    }
    .content{
        flex-direction: column;
        align-items: center;}
}

@media (max-width:641px){
    
    .main-content h2{
        font-size: 0.8em;}
    .main-content h3{
        font-size: 1.4em;}}

@media (max-width:300px){
    body{
        font-size: 10px;}}
</style>
@endsection

@section('content')
    <header>
            <a href="#" class="lien-icone">
                <img src="images/ocp.webp" alt="OCP Khouribga" >
            </a>
            <nav class="navi">
                <a href="/" > Acceuil </a>
                <a href="/#services" > Services </a>
                <a href="/#contact" > Contact </a>
            </nav>
    </header>


    <section class="portfolio" id="portfolio">
        <h2 class="service"> Our <span>team</span></h2>

       <div class="portfolio-container">
           <div class="portfolio-box">
                <img src="images/assia.jpg" alt="">
             <div class="portfolio-layer">
               <h4>Assia Tourabi</h4>
                 <p>Etudiante en deuxieme année cycle d'ingenieur génie informatique.</p>
              <a href="#"><i class='bx bx-link-external' ></i></a>       
             </div>
          </div>

         <div class="portfolio-box">
               <img src="images/aya.jpg" alt="">
             <div class="portfolio-layer">
                <h4>Aya Fakri</h4>
                  <p>Etudiante en deuxieme année cycle d'ingenieur génie informatique.</p>
                <a href="#"><i class='bx bx-link-external' ></i></a>       
              </div>
           </div>

          <div class="portfolio-box">
             <img src="images/chaimae.png" alt="">
                  <div class="portfolio-layer">
                      <h4>Chaimae Bouzadi</h4>
                       <p>Etudiante en deuxieme année cycle d'ingenieur génie informatique et ingenierie de données.</p>
                       <a href="#"><i class='bx bx-link-external' ></i></a>       
                  </div>
          </div>

          <div class="portfolio-box">
               <img src="images/rabab.webp" alt="">
                 <div class="portfolio-layer">
                     <h4>Rabab Bousaid</h4>
                     <p>Etudiante en deuxieme année cycle d'ingenieur et ingenierie de données.</p>
                       <a href="#"><i class='bx bx-link-external' ></i></a>       
                 </div>
         </div>
  
    </div>
 </section>   
    
<footer class="footer">
        <p class="footer-title">Copyrights &copy; 2023 by our team |All rights Reserved <span>OCP khouribga </span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
 </footer>
@endsection

@section('scripts')
   <script src="js/script.js"></script>
@endsection