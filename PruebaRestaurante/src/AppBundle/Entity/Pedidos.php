<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidosRepository")
 */
class Pedidos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrecliente", type="string", length=50)
     */
    private $nombrecliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreplato", type="string", length=80)
     */
    private $nombreplato;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**         
     * @var string
     *
     * @ORM\Column(name="preciounitario", type="decimal", precision=2, scale=2)
     */
    private $preciounitario;

    /**
     * @var string
     *
     * @ORM\Column(name="preciototal", type="decimal", precision=2, scale=2)
     */
    private $preciototal;






    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="pedidos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;

    /**
     * Get cliente
     * @return \AppBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    

    /**
     * Set cliente
     * @param \AppBundle\Entity\Cliente $cliente
     * * @return Cliente
     */
    public function setClientes($cliente)
    {
        $this->cliente = $cliente;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombrecliente
     *
     * @param string $nombrecliente
     *
     * @return Pedidos
     */
    public function setNombrecliente($nombrecliente)
    {
        $this->nombrecliente = $nombrecliente;

        return $this;
    }

    
    
    
    
    /**
     * Get nombrecliente
     *
     * @return string
     */
    public function getNombrecliente()
    {
        return $this->nombrecliente;
    }

    /**
     * Set nombreplato
     *
     * @param string $nombreplato
     *
     * @return Pedidos
     */
    public function setNombreplato($nombreplato)
    {
        $this->nombreplato = $nombreplato;

        return $this;
    }

    /**
     * Get nombreplato
     *
     * @return string
     */
    public function getNombreplato()
    {
        return $this->nombreplato;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Pedidos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set preciounitario
     *
     * @param string $preciounitario
     *
     * @return Pedidos
     */
    public function setPreciounitario($preciounitario)
    {
        $this->preciounitario = $preciounitario;

        return $this;
    }

    /**
     * Get preciounitario
     *
     * @return string
     */
    public function getPreciounitario()
    {
        return $this->preciounitario;
    }

    /**
     * Set preciototal
     *
     * @param string $preciototal
     *
     * @return Pedidos
     */
    public function setPreciototal($preciototal)
    {
        $this->preciototal = $preciototal;

        return $this;
    }

    /**
     * Get preciototal
     *
     * @return string
     */
    public function getPreciototal()
    {
        return $this->preciototal;
    }
}

