<!--PHP para validação de login-->
<?php
    try {
        // Por algum motivo o conexao.php não tá sendo chamado
        require_once("../../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }

    //Verificar se existe o email e senha na hora do login
    if(isset($_POST['email-login']) || isset($_POST['senha-login'])){
        //Verificar se o email foi preenchido ou não
        if(strlen($_POST['email-login']) == 0){
            header("Location: ../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['senha-login']) == 0){
            header("Location: ../View/pages/viewLoginCadastro.php");
        }
        else{
            //Pra previnir SQLInjection, limpa o campo (usando uma função do mysqli)
            //$mysqli está vindo do conexao.php (puxando do include)
            $email = $mysqli->real_escape_string($_POST['email-login']);
            $senha = $mysqli->real_escape_string($_POST['senha-login']);

            //Verificar query
            $sql_code = "SELECT * FROM clientes WHERE email = '$email';";
            // Caso dê erro encerra
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);
            
            $usuario = $sql_query->fetch_assoc();
            //Verificar se a senha deste email é a mesma da do banco de dados (ambas criptografadas)
            // Como verificar já que sempre muda? Usa essa função (retorna 1 ou 0 - 1 se senha correta e 0 se senha errada)
            if(password_verify($senha, $usuario['senha'])){
                //Se não existir sessão
                if(!isset($_SESSION)){
                    session_start();
                }

                //Atribuindo os dados da sessão
                //Sessão é uma variável que se mantém válida mesmo que o usuário troque de página
                $_SESSION['id'] = $usuario['idClientes'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['sobrenome'] = $usuario['sobrenome'];
                $_SESSION['cpf'] = $usuario['cpf'];
                $_SESSION['rg'] = $usuario['rg'];

                //Depois de logar, redirecionar o usuário para a página da conta
                header("Location: ../../View/pages/viewConta.php");
            }
            else{
                header("Location: ../../View/pages/viewLoginCadastro.php");
            }
        }
    }

    die();
?>