<?php

require_once 'conexao.php';


function lista_representante()
{
    $conexao = cria_conexao();

    $sql = "SELECT * FROM representante";

    $stmt = $conexao->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function busca_representante_por_nome($name)
{
    $conexao = cria_conexao();

    $sql = "SELECT * FROM representante WHERE name = :name";

    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':name', $name);

    $stmt->execute();

    $representante = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return array_shift($representante);
}

function busca_representante_por_email($email)
{
    $conexao = cria_conexao();

    $sql = "SELECT * FROM representante WHERE email = :email";

    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':email', $email);

    $stmt->execute();

    $representante = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return array_shift($representante);
}


function insere_representante($name, $address, $phone, $email, $document, $state, $password)
{
    try {
        $conexao = cria_conexao();

        $passwordEncriptado = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO representante (name, address, phone, email, document, state, password) 
                    VALUES (:name, :address, :phone, :email, :document, :state, :password)";

        $stmt = $conexao->prepare($sql);

        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':address', $address);
        $stmt->bindValue(':phone', $phone);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':document', $document);
        $stmt->bindValue(':state', $state);
        $stmt->bindValue(':password', $passwordEncriptado);

        $stmt->execute();

        return $conexao->lastInsertId();
    } catch (PDOException $e) {
        print("Error: " . $e->getMessage());
    }
}

// function atualiza_aluno($id, $nome, $matricula)
// {
//     try {
//         $conexao = cria_conexao();

//         $sql = "UPDATE alunos SET nome = :nome, matricula = :matricula WHERE idalunos = :id";

//         $stmt = $conexao->prepare($sql);

//         $stmt->bindValue(':idalunos', $id);
//         $stmt->bindValue(':nome', $nome);
//         $stmt->bindValue(':matricula', $matricula);

//         $stmt->execute();

//         return $stmt->rowCount();
//     } catch (PDOException $e) {
//         throw $e;
//     }
// }

// function remove_aluno($id)
// {
//     try {
//         $conexao = cria_conexao();

//         $sql = "DELETE FROM alunos WHERE idalunos = :id";

//         $stmt = $conexao->prepare($sql);

//         $stmt->bindValue(':id', $id);

//         $stmt->execute();

//         return $stmt->rowCount();
//     } catch (PDOException $e) {
//         throw $e;
//     }
// }