<?php
/**
 * @property int $id
 * @property int $id_status
 * @property string $tarefa
 * @property string $data_cadastro
 */
class Tarefa
{
    private ?int $id=null;
    private ?int $id_status=null;
    private ?string $tarefa=null;
    private ?string $data_cadastro=null;

    public function __get(string $atributo)
    {
        return $this->$atributo;
    }

    public function __set(string $atributo, mixed $valor)
    {
       $this->$atributo = $valor;
       return $this;
    }
}
