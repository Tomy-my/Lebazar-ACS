<?php 
$titre = "Inscription";

include('view/header.php');

    include('view/navigation.php');
include("controller/register.php");
?>
<div class="page_annonce">
    <div class="container_annonce">
        <div class="top_annonce">
            <div class="top_left">
                <h1>Le<span id="B">b</span>azar<br></h1>
                <h2>Les annonces</h2>
            </div>
            <div class="top_right">

            </div>
        </div>
        <div class="annonce">
            <div class="ct_img_annonce">
                <img src="#" alt="#">
            </div>
            <div class="txt_annonce">
                <h3>Titre de l'annonce</h3>
                <p>20 000€</p>
                <div class="under_txt">
                    <p>
                        Dans le monde, en Fance
                        <br>
                        Le 10/02/200
                    </p>
                </div>
            </div>
            <div class="heart">
                icone
            </div>

        </div>
    </div>
    
</div>

<script type="text/javascript" src="./public/js/password.js"></script>

<?php    
include('view/footer.php');    
?>