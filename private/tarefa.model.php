<?php
/**
 * @property int $id
 * @property int $id_status
 * @property string $tarefa
 * @property string $data_cadastro
 */
class Tarefa
{
    private int $id;
    private int $id_status;
    private string $tarefa;
    private string $data_cadastro;

    public function __get(string $atributo)
    {
        return $this->$atributo;
    }

    public function __set(string $atributo, mixed $valor)
    {
        $this->$atributo = $valor;
    }
}
