<?php

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientes")
 * @ORM\Entity(repositoryClass="Livraria\Entity\ClienteRepository")
 */
class Cliente {

    public function __construct($options = null) {
        Configurator::configure($this, $options);
        $this->livros = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $razao_social;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $fantasia;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $cnpj;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $ie;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $endereco;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $cidade;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $bairro;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $telefone;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    protected $email;

    public function getRazao_social() {
        return $this->razao_social;
    }

    public function getFantasia() {
        return $this->fantasia;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getIe() {
        return $this->ie;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    public function setFantasia($fantasia) {
        $this->fantasia = $fantasia;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setIe($ie) {
        $this->ie = $ie;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function __toString() {
        return $this->razao_social;
    }

    public function toArray() {
        return array('id' => $this->getId(),
            'razao_social' => $this->getRazao_social(),
            'fantasia'     => $this->getFantasia(),
            'cnpj'         => $this->getCnpj(),
            'ie'           => $this->getIe(),
            'endereco'     => $this->getEndereco(),
            'cidade'       => $this->getCidade(),
            'bairro'       => $this->getBairro(),
            'telefone'     => $this->getTelefone(),
            'email'        => $this->getEmail(),
            );
    }

}
