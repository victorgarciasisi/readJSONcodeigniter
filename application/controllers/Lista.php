<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lista extends CI_Controller
{
    public function index()
    {
        $this->load->model("Datos_model"); // Carga el modelo
        $datos['listaItems'] = $this->Datos_model->obtenerTodos();

        $this->load->view('head');
        $this->load->view('inicio', $datos);
        $this->load->view('footer');
    }
    public function ficha($id)
    {
        $this->load->model("Datos_model"); // Carga el modelo
        $datos['itemPorId'] = $this->Datos_model->obtenerPorId($id);

        $this->load->view('head');
        $this->load->view('ficha', $datos);
        $this->load->view('footer');
    }
}
