<?php
session_start();
include_once "conexao.php";
if(isset($_GET['cadastrar'])){
	$sql="insert into funcionario(nome_funcionario) values ('".$_POST['nome_funcionario']."')";
		mysql_query($sql, $a);
		header ('location: index.php');
}

if(isset($_GET['cadastrar1'])){
    $sql="insert into cliente(nome_cliente, email_cliente, telefone_cliente) values ('".$_POST['nome_cliente']."','".$_POST['email_cliente']."','".$_POST['telefone_cliente']."')";
		mysql_query($sql, $a);
		header ('location: index.php');
		}
		
if(isset($_GET['cadastrar2'])){
    $sql="insert into franquia(nome_franquia, cnpj_franquia) values ('".$_POST['nome_franquia']."','".$_POST['cnpj_franquia']."')";
		mysql_query($sql, $a);
		header ('location: index.php');
		}
if(isset($_GET['editar'])){
	if(!empty($_POST['nome'])){
		$_SESSION['nome']=$_POST['nome'];
		$_SESSION['login']=$_POST['login'];
		$_SESSION['senha']=$_POST['senha'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['sexo']=$_POST['sexo'];
		$sql="update usuario set nome='".$_POST['nome']."' , login='".$_POST['login']."' , senha='".$_POST['senha']."' , email='".$_POST['email']."' , sexo='".$_POST['sexo']."' where id=".$_GET['editar'];
		mysql_query($sql, $b);
		header ('location: inicio.php');
	}
}
?>

