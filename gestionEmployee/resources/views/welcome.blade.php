@extends('layouts/app')

@section('titre')
    Pape accueil OCP
@endsection

@section('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding:0;
    box-sizing: border-box;
    scroll-behavior: smooth;}

header{
    background-color: #f0f0f0;
    width: 100%;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 140px;}

img{
    height: 45px ;
    width: 65px;
}

.logo{
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
    padding-left: 35px; }

.navi a:hover{color: black;}

section{padding: 30px 140px;}

.main{
    width: 100%;
    min-height: 120vh;
    display: flex;
    align-items: center;
    background:linear-gradient(to right, #000000, #0f9b0f); 
    background-attachment: fixed;}

.main h2 {
    color: #fff;
    font-size: 1.25em;
    font-weight: 500;
    }

.main h2 span{
    display: inline-block;
    margin-top: 8px;
    color:  rgb(0, 179, 0);
    font-size: 2.4em;
    font-weight: 500;}

.main h4 {
    color: #fff;
    font-size: 1.4em;
    font-weight: 400;
    letter-spacing: 1px;
    margin-top: 20px;
    margin-bottom: 40px;}



/* Style du bouton "Choisir un fichier" */
input[type="file"] {
    display: none; /* Cacher le bouton réel */
}

.choose-file-btn {
    color: #fff;
    background-color: rgb(0, 179, 0);
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 500;
    display: inline-block;
    padding: 0.9375em 2.1875em;
    letter-spacing: 1px;
    border-radius: 15px;
    transition: 0.7s ease;
    cursor: pointer;
}

/* Styler le label pour le bouton "Choisir un fichier" */
.file-input-label {
    display: inline-block;
    padding: 0.9375em 2.1875em;
    border: none;
    border-radius: 15px;
    background-color: rgb(0, 179, 0);
    color: #fff;
    font-size: 1.1em;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
}
.main-btn {
    color: #fff;
    background-color: rgb(0, 179, 0);
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 500;
    display: inline-block;
    padding: 0.9375em 2.1875em;
    letter-spacing: 1px;
    border-radius: 15px;
    margin-bottom: 90px;
    margin-left: 395px;
    transition: 0.7s ease;}

.main-btn:hover {
    color: black;
    background-color: rgb(0, 128, 0);
    transform: scale(1.1);}


.social-icons a {
    color: #fff;
    font-size: 1.7em;
    padding-right: 30px;}

.title {
    display: flex;
    justify-content: center;
    color: rgb(0, 179, 0);;
    font-size: 2.2em;
    font-weight: 800;
    margin-bottom: 30px;}

.content {
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;}

.card {
    background-color: #fff;
    width: 21.25em;
    box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
    border-radius: 10px;
    padding: 25px;
    margin: 15px;
    transition: 0.7s ease;}

.card:hover {
    transform: scale(1.1);}

.card .icon {
    color: rgb(0, 179, 0);;
    font-size: 8em;
    text-align: center;}

.info {
    text-align: center;}

.info h3{
    color: rgb(0, 179, 0);;
    font-size: 1.2em;
    font-weight: 700;
    margin: 10px;}

.contact .icon{
    font-size: 4.5em;
   
}

.contact .info h3 {
    color: #000;
}

.contact .info p {
    font-size: 1em;
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
    color: rgb(0, 128, 0);}

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
    body{
        font-size: 12px;}
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
                <a href="#main">Acceuil</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
                <a href="{{url('/team')}}">Team</a>
                   @guest
                <a href="{{url('/login')}}"><i class="fa-solid fa-user"> </i> Admin</a>
                   @endguest
                   @auth
                <a href="{{url('admin/home')}}"><i class="fa-solid fa-user"> </i> Home</a>
                   @endauth 
            </nav>
    </header>

    <section class="main" id="main">
        <div>
            <h2 >Site groupe<br><span>OCP khouribga</span></h2>
            <h4 >OCP Khouribga fait référence à <b>l'Office Chérifien des Phosphates (OCP) Khouribga</b>, qui est une société minière située à Khouribga, au Maroc.
                 OCP est l'un des principaux exportateurs mondiaux de produits à base de phosphate, notamment d'acide phosphorique, d'engrais et d'autres dérivés de phosphate.</h4>
                 <form action="condidature.html" method="post">
    <!-- Utilisez une balise label pour styler le bouton "Choisir un fichier" -->
    <label class="file-input-label" for="file-input">Choisir un fichier</label>
    <!-- Utilisez une balise input de type file avec un identifiant pour le cibler avec le label -->
    <input type="file" id="file-input" name="fichier">
    <!-- Utilisez la nouvelle classe .main-btn pour le bouton "Envoyer Candidature" -->
    <input type="submit" name="Submit" value="Envoyer Candidature" class="main-btn">
</form>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                   <i class="fa-solid fa-network-wired"></i>
                </div>
                <div class="info">
                    <h3>Service réseau</h3>
                    <p> Le service réseau est chargé de la conception, de la mise en place, de la configuration et de la maintenance de l'infrastructure réseau de l'entreprise.</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                      <i class="fa-solid fa-code"></i>
                </div>
                <div class="info">
                    <h3>Service informatique</h3>
                    <p>Le service informatique est responsable de la gestion informatique globale des systèmes informatiques de l'entreprise.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">Contact</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+21260000000</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>groupe.Khouribga@ocp.com</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <p class="footer-title">Copyrights @ <span>OCP Khouribga</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
    </footer>
@endsection



    
