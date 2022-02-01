<?php 

/**
 * 
 */
class Usuario 
{
    private $idusuario;
    private $deslogin;
    private $desenha;
    private $dtcadastro;

    public function getUsuario()
    {
        return $this->idusuario;
    }

    public function setUsuario($value)
    {
        $this->idusuario = $value;
    }

    public function getLogin()
    {
        return $this->deslogin;
    }

    public function setLogin($value)
    {
        $this->deslogin = $value;
    }

    public function getSenha()
    {
        return $this->desenha;
    }

    public function setSenha($value)
    {
        $this->desenha = $value;
    }
    
    public function getData()
    {
        return $this->dtcadastro;
    }

    public function setData($value)
    {
        $this->dtcadastro = $value;
    }

    public function loadById($id)
    {
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID",array(
            ":ID" => $id
        ));

        if (count($results) > 0) 
        {
            $row = $results[0];

            $this->setUsuario($row["ID_USUARIO"]);
            $this->setLogin($row['DESLOGIN']);
            $this->setSenha($row['DESENHA']);
            $this->setData($row['DT_CADASTRO']);
        }
    }

    public static function search($login)
    {
        $db = new Sql();
        return $db->select("SELECT * FROM tb_usuarios where deslogin like :LOGIN order by deslogin", array(
            ":LOGIN" => "%" . $login . "%"
        ));

    }

    public function autenticaLogin($login, $password)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE DESLOGIN = :LOGIN AND DESENHA = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $password
        ));

        if (count($result) > 0) 
        {
            $row = $result[0];

            $this->setUsuario($row['ID_USUARIO']);
            $this->setLogin($row['DESLOGIN']);
            $this->setSenha($row['DESENHA']);
            $this->setData($row['DT_CADASTRO']);
        }
        else 
        {
            throw new Exception("Usuario sem autenticacao", 1);
            // code...
        }


    }

    public static function getList() // é estático pois não referenciou dentro do método a variável $this
    {
        $sql = new Sql();
        $list = $sql->select("SELECT * FROM tb_usuarios ORDER BY DESLOGIN");
        return $list;
    }

    public function __toString()
    {
        return json_encode(array(
            "idusuario"=> $this->getUsuario(),
            "deslogin"=> $this->getLogin(),
            "desenha"=> $this->getSenha(),
            "dtcadastro"=> $this->getData()
        ));
    }


}

 ?>