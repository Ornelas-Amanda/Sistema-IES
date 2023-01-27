<?php
class Horarios
{

    private $id;
    private $nome;
    //Matutino
    private $segManha;
    private $terManha;
    private $quaManha;
    private $quiManha;
    private $sexManha;
    //Noturno
    private $segNoite;
    private $terNoite;
    private $quaNoite;
    private $quiNoite;
    private $sexNoite;

    private $dda;

   
    public function cadastrar($Horarios)
    {

                $Conexao = Conexao::pegarConexao();


                $stmt = $Conexao->prepare("INSERT INTO tbhorario(id, nome, 
                                                      segManha, terManha, quaManha, quiManha, sexManha,
                                                      segNoite, terNoite, quaNoite, quiNoite, sexNoite)
                                                        VALUES(:id,:nome,:segM,:terM,:quaM,:quiM,:sexM,:segN,:terN,:quaN,:quiN,:sexN)");

        

                $stmt->bindValue(":id", $Horarios->getId());
                $stmt->bindValue(":nome", $Horarios->getNome());
                $stmt->bindValue(":segM", $Horarios->getSegManha());
                $stmt->bindValue(":terM", $Horarios->getTerManha());
                $stmt->bindValue(":quaM", $Horarios->getQuaManha());
                $stmt->bindValue(":quiM", $Horarios->getQuiManha());
                $stmt->bindValue(":sexM", $Horarios->getSexManha());
                $stmt->bindValue(":segN", $Horarios->getSegNoite());
                $stmt->bindValue(":terN", $Horarios->getTerNoite());
                $stmt->bindValue(":quaN", $Horarios->getQuaNoite());
                $stmt->bindValue(":quiN", $Horarios->getQuiNoite());
                $stmt->bindValue(":sexN", $Horarios->getSexNoite());

                //   $conteudo = "...";
                //    $fp = fopen("teste2.txt","wb");
                //    fwrite($fp,$conteudo);
                //    fclose($fp);

                $stmt->execute();



                echo "cadastrado";
            }
        
    
    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $querySelect = " select  id, nome,segManha, terManha, quaManha, quiManha, sexManha,
        segNoite, terNoite, quaNoite, quiNoite, sexNoite from tbhorario order by nome";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function atualizar($Horarios , $id){

        $conexao = Conexao::pegarConexao();


        $stmt = $conexao->prepare("UPDATE tbhorario SET nome = :nome, 
                                              segManha = :segM, terManha = :terM, quaManha = :quaM, quiManha = :quiM, sexManha = :sexM,
                                              segNoite = :segN, terNoite = :terN, quaNoite = :quaN, quiNoite = :quiN, sexNoite = :sexN
                                                WHERE id = '".$id."'");
                                      
                                      
        // $conteudo = $stmt;
        // $fp = fopen("teste2.txt","wb");
        // fwrite($fp,$conteudo);
        // fclose($fp); 

        
        $stmt->execute(array(
            //  ':id'  => $Horarios->getId(),
            ':nome' =>  $Horarios->getNome(),
            ':segM' => $Horarios->getSegManha(),
            ":terM" => $Horarios->getTerManha(),
            ":quaM" => $Horarios->getQuaManha(),
            ":quiM" => $Horarios->getQuiManha(),
            ":sexM" => $Horarios->getSexManha(),
            ":segN" => $Horarios->getSegNoite(),
            ":terN" => $Horarios->getTerNoite(),
            ":quaN" => $Horarios->getQuaNoite(),
            ":quiN" => $Horarios->getQuiNoite(),
            ":sexN" => $Horarios->getSexNoite()
        ));

       
        echo $stmt->rowCount();

         

       
    }

    public function compara($id){
        $conexao = Conexao::pegarConexao();
        $querySelect = " select  id from tbhorario where id = '".$id."' ";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetch();
        return $lista;
     }

     public function Segunda($dda){
        $conexao = Conexao::pegarConexao();
        $stmt = $conexao->prepare( " SELECT nome,segManha,segNoite FROM tbhorario 
                           WHERE segManha LIKE '%pw%' OR segNoite LIKE ''%pw%' ");                   
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }
     public function Terca($dda){
        $conexao = Conexao::pegarConexao();
        $querySelect = " SELECT terManha,terNoite from tbhorario where terManha like '".$dda."%' AND terNoite like '".$dda."%' ";
        $resultado = $conexao->query($querySelect);
        return $resultado;
    }
     public function Quarta($dda){
        $conexao = Conexao::pegarConexao();
        $querySelect = " SELECT quaManha,quaNoite from tbhorario where quaManha like '%".$dda."%' AND quaNoite like '%".$dda."%' ";
        $resultado = $conexao->query($querySelect);
        return $resultado;
    }
     public function Quinta($dda){
        $conexao = Conexao::pegarConexao();
        $querySelect = " SELECT quiManha,quiNoite from tbhorario where quiManha like '%".$dda."%' AND quiNoite like '%".$dda."%' ";
        $resultado = $conexao->query($querySelect);
        return $resultado;
    }
     public function Sexta($dda){
        $conexao = Conexao::pegarConexao();
        $querySelect = " SELECT sexManha,sexNoite from tbhorario where sexManha like '%".$dda."%' AND sexNoite like '%".$dda."%' ";
        $resultado = $conexao->query($querySelect);
        return $resultado;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of segManha
     */
    public function getSegManha()
    {
        return $this->segManha;
    }

    /**
     * Set the value of segManha
     *
     * @return  self
     */
    public function setSegManha($segManha)
    {
        $this->segManha = $segManha;

        return $this;
    }

    /**
     * Get the value of terManha
     */
    public function getTerManha()
    {
        return $this->terManha;
    }

    /**
     * Set the value of terManha
     *
     * @return  self
     */
    public function setTerManha($terManha)
    {
        $this->terManha = $terManha;

        return $this;
    }

    /**
     * Get the value of quaManha
     */
    public function getQuaManha()
    {
        return $this->quaManha;
    }

    /**
     * Set the value of quaManha
     *
     * @return  self
     */
    public function setQuaManha($quaManha)
    {
        $this->quaManha = $quaManha;

        return $this;
    }

    /**
     * Get the value of quiManha
     */
    public function getQuiManha()
    {
        return $this->quiManha;
    }

    /**
     * Set the value of quiManha
     *
     * @return  self
     */
    public function setQuiManha($quiManha)
    {
        $this->quiManha = $quiManha;

        return $this;
    }

    /**
     * Get the value of sexManha
     */
    public function getSexManha()
    {
        return $this->sexManha;
    }

    /**
     * Set the value of sexManha
     *
     * @return  self
     */
    public function setSexManha($sexManha)
    {
        $this->sexManha = $sexManha;

        return $this;
    }

    /**
     * Get the value of segNoite
     */
    public function getSegNoite()
    {
        return $this->segNoite;
    }

    /**
     * Set the value of segNoite
     *
     * @return  self
     */
    public function setSegNoite($segNoite)
    {
        $this->segNoite = $segNoite;

        return $this;
    }

    /**
     * Get the value of terNoite
     */
    public function getTerNoite()
    {
        return $this->terNoite;
    }

    /**
     * Set the value of terNoite
     *
     * @return  self
     */
    public function setTerNoite($terNoite)
    {
        $this->terNoite = $terNoite;

        return $this;
    }

    /**
     * Get the value of quaNoite
     */
    public function getQuaNoite()
    {
        return $this->quaNoite;
    }

    /**
     * Set the value of quaNoite
     *
     * @return  self
     */
    public function setQuaNoite($quaNoite)
    {
        $this->quaNoite = $quaNoite;

        return $this;
    }

    /**
     * Get the value of quiNoite
     */
    public function getQuiNoite()
    {
        return $this->quiNoite;
    }

    /**
     * Set the value of quiNoite
     *
     * @return  self
     */
    public function setQuiNoite($quiNoite)
    {
        $this->quiNoite = $quiNoite;

        return $this;
    }

    /**
     * Get the value of sexNoite
     */
    public function getSexNoite()
    {
        return $this->sexNoite;
    }

    /**
     * Set the value of sexNoite
     *
     * @return  self
     */
    public function setSexNoite($sexNoite)
    {
        $this->sexNoite = $sexNoite;

        return $this;
    }

    /**
     * Get the value of dda
     */ 
    public function getDda()
    {
        return $this->dda;
    }

    /**
     * Set the value of dda
     *
     * @return  self
     */ 
    public function setDda($dda)
    {
        $this->dda = $dda;

        return $this;
    }
}
