
<div class="card">
    <form action="index.php?page=home" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
        </div>
        <input type="submit" value="Se connecter" class="btn btn-danger ma-auto">
    </div>
</div>

<?php
    if ($_POST['password'] == "pwd" && $_POST['email'] == 'admin@exemple.com') {
        $_SESSION['connexion'] = $_POST['email'];
    }
?>