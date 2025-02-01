<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="10styl.css">
</head>
<body>
    

        <!----------Page compte--------->


        
            
                        <div class="form-container">
                            
                            <h1 class="titreh1">Crée un compte</h1>
                            <form method="POST" action="config.php">
                                <label  for="nom">Votre nom</label>
                                <input type="text"  name="nom" placeholder="Votre nom">

                                <label for="prenom">Votre prénom</label>
                                <input type="text"  name="prenom" placeholder="Votre prenom">
                                
                                <label for="email">Votre mail</label>
                                <input type="email" name="email" placeholder="Email">

                          
                                <label for="password"> Mots de pass</label>
                                <input type="password" name="password" placeholder="Passwordr">
                                
                                <div class="a3">
                                    <input type="file" name="ficher">
                                </div>
                            
                            <div>
                                <select name="genre" id="genre" >
                                    <option value="homme" name="homme">homme</option>
                                    <option value="homme" name="femme">femme</option>
                                    <option value="homme" name="femme">autre</option>
                                </select>
                                <button type="submit" class="btn">S'inscrire</button>
                            </form>
                        </div>
                    </div>
    
        
                    <!--<div class="col-2">
                        <img class="compte-page" src="compt-img1.jpeg">
                    </div>-->
                

    <!----------Footer------------
    <div class="footer">
       
            <div class="row">
                <div class="footer-col-1">
                    <h3>Telechager cette App</h3>
                    <p>Telecharger pour Android et IOS</p>
                </div>
                <div class="footer-col-2">
                    <img src="">
                    <p>Nous proposons de nombreux service sur nos platformes.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Utilisez ces liens</h3>
                    <ul>
                        <li>Coupon</li>
                        <li>Blogs</li>
                        <li>Autres</li>
                        <li>rejoin le Forum</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>suivez nous</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>telegram</li>
                        <li>twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="Copyright">Copyright 2024 projet Sessions</p>
        </div>
    </div>       
   
</body>
</html>