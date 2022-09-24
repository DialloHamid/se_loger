<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/feuille.css">
   
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="blue">
            <div class="box  ">
                <h2>Salut tu as un compte</h2>
                <button class="signinBtn" > sign in</button>
            </div>
            <div class="box  ">
                <h2>vous n'avez pas de compte</h2>
                <button class="signupBtn" > creer un compte</button>
            </div>

        </div>
        <div class="formBx">

      
        <div class="form signinForm">
                <form action="">
                <h3>Se Connecter</h3>
                <input type="text" placeholder="nom d'utilisateur">
                <input type="password" placeholder="mot de passe ">
                <input type="submit" value="Login">
                <a href="#" class="forgot">Mot de passe oublier</a>

                </form>
             </div>
  <div class="form signupForm">
  <form action="">
  <h3>S'inscrire</h3>
  <input type="text" placeholder="nom ">
  <input type="text" placeholder="prenom">
  <input type="password" placeholder="mot de passe ">
  <input type="password" placeholder="Confirmation ">
  <input type="submit" value="Enregistrer">
  
  </form>

</div>
        </div>
    </div>

    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body =   document.querySelector(' body');
         
        signupBtn.onclick = function()
        {
            formBx.classList.add('active')
            body.classList.add('active')
        }

        signinBtn.onclick = function()
        {
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
</body>
</html>