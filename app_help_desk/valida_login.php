<title>Login</title>
    <?php
    session_start();

    $usuarios_autenticado = false;
    $usuarios_id = null;
    $usuarios_perfil_id = null;
    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123', 'perfil_id' => 2),
    );

foreach($usuarios_app as $user){
   
    if($user ['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
        $usuarios_id = $user['id'];
        $usuarios_perfil_id = $user ['perfil_id'];
    }
}
if($usuarios_autenticado){
    echo 'Usuario autenticado';
    $_SESSION ['autenticado'] = 'Sim';
    $_SESSION ['id'] = $usuarios_id;
    $_SESSION ['perfil_id'] = $usuarios_perfil_id;
    header('Location: home.php');
}else{
    $_SESSION ['autenticado'] = 'Não';
   header('Location: index.php?login=erro');
   
}

    ?>
