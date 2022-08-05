<title>Login</title>
    <?php
    session_start();

    $usuarios_autenticado = false;
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '12345678'),
        array('email' => 'user@teste.com.br', 'senha' => 'estudante'),
    );

foreach($usuarios_app as $user){
   
    if($user ['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
    }
}
if($usuarios_autenticado){
    echo 'Usuario autenticado';
    $_SESSION ['autenticado'] = 'Sim';
    header('Location: home.php');
}else{
    $_SESSION ['autenticado'] = 'Não';
   header('Location: index.php?login=erro');
   
}

    ?>
