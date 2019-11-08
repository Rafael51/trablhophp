<?php
class Banco
{
    private static $dbNome = 'trabalhophp'; // define nome banco
    private static $dbHost = 'localhost'; // exdcuta o banco
    private static $dbUsuario = 'root'; // usuario  do banco
    private static $dbSenha = ''; // senha para logar
    
    private static $conn = null; // cria string de conexao

    public function __construct() 
    {
        die('A função init não é permitida'); 
    }
    public static function conectar(){ // funcao p/ coneectar no banco
        if(self::$conn == null) {
            try
            {
                self::$conn = new PDO('mysql:host=' . self::$dbHost .
                                      ';dbname=' . self::$dbNome.';charset=utf8',
                                      self::$dbUsuario, self::$dbSenha); // string de coneexao
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage()); // msg erro caso nao conecte
            }
        }
        return self::$conn;
    }

    public static function desconectar() { // funcao para desconetar do banco
        self::$conn = null; 
    }

}
?>