<?php
    if(!isset($_SESSION['id'])){
        //"Revivendo" a sessão pra poder utilizar as variáveis dela
        session_start();
    }
    var_dump($_SESSION);

    // Por algum motivo chamar o conexao.php não tá funcionando
    try {
        require_once("../../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
    
    $host = "mysql.ozzatech.kinghost.net";
    $usuario = "ozzatech";
    $senha = "MySql2005password";
    $dbname = "ozzatech";
    try{
        // Criando uma nova conexão ao criar um objeto mysqli
        $mysqli = new mysqli($host, $usuario, $senha, $dbname);
    }
    catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
    }


    //Verificar se existe o email e senha na hora do cadastro
    if(isset($_POST['nome-cadastro']) || isset($_POST['sobrenome-cadastro']) || isset($_POST['cpf-cadastro']) || isset($_POST['rg-cadastro']) || isset($_POST['email-cadastro']) || isset($_POST['senha-cadastro']) || isset($_POST['pessoa-cadastro'])){
        //Verificar se o email foi preenchido ou não
        if(strlen($_POST['nome-cadastro']) == 0){
            header("Location: ../..//View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['sobrenome-cadastro']) == 0){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['cpf-cadastro']) < 14){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['rg-cadastro']) < 12){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['email-cadastro']) == 0){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['senha-cadastro']) == 0){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else if(strlen($_POST['pessoa-cadastro']) == 0){
            header("Location: ../../View/pages/viewLoginCadastro.php");
        }
        else{
            //Pra previnir SQLInjection, limpa o campo (usando uma função do mysqli)
            //$mysqli está vindo do conexao.php (puxando do include)
            $nome = $mysqli->real_escape_string($_POST['nome-cadastro']);
            $sobrenome = $mysqli->real_escape_string($_POST['sobrenome-cadastro']);
            $cpf = $mysqli->real_escape_string($_POST['cpf-cadastro']);
            $rg = $mysqli->real_escape_string($_POST['rg-cadastro']);
            $email = $mysqli->real_escape_string($_POST['email-cadastro']);
            $senhaCadastro = $mysqli->real_escape_string($_POST['senha-cadastro']);
            //Criptografia melhor que md5
            $senhaCriptografada = password_hash($senhaCadastro, PASSWORD_DEFAULT);
            $pessoa = $mysqli->real_escape_string($_POST['pessoa-cadastro']);

            //Verificar se a quantidade retornada é 1 (só pode ter 1 registro na mesma conta/senha/email)
            $sql_code_check = "SELECT * FROM `clientes` WHERE cpf = \"$cpf\" OR rg = \"$rg\" OR email = \"$email\";";
            // Caso dê erro encerra
            $sql_query_check = $mysqli->query($sql_code_check) or die("Falha na execução do código SQL: ".$mysqli->error);
            //Retorna quantidade de linhas
            $quantidade = $sql_query_check->num_rows;

            if($quantidade == 0){
                //Verificar query
                $sql_code = "INSERT INTO `cli.entes`(nome, sobrenome, cpf, rg, email, senha, pessoa) VALUES (\"$nome\", \"$sobrenome\", \"$cpf\", \"$rg\", \"$email\", \"$senhaCriptografada\", $pessoa);";
                // Caso dê erro encerra
                $sql_query = $mysqli->query($sql_code);
                if(!$sql_query){
                    die("Falha na execução do código SQL: ".$mysqli->error);
                }

                //Verificar query
                $sql_code_criado = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senhaCriptografada'";
                // Caso dê erro encerra
                $sql_query_criado = $mysqli->query($sql_code_criado) or die("Falha na execução do código SQL: ".$mysqli->error);
                
                $usuario = $sql_query_criado->fetch_assoc();
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