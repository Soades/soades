<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Par_tipo_tercero extends CI_Controller {

    private $modulo = 17;

    function __construct() {
        parent::__construct();

        $this->load->model('permisos_model');
        $this->load->library('audit');
        $this->load->library('form_validation');
        $this->load->model('modules/par/par_tipo_tercero_model');
    }

    /**
     * Function index		 
     * Acceso a la vista						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function index1() {
        if ($this->session->userdata('us_usuario')) {

            $data['permisos'] = $this->permisos_model->GetPermisosModulosCheckModulos($this->modulo);
            $this->load->view('modules/par/view_par_tipo_tercero', $data);
            $this->AddAudit(array('tt_idtt' => ""), ACCESO);
        } else {

            $this->load->view('login');
        }
    }

    function index() {
        if ($this->session->userdata('us_usuario')) {
            $data['permisos'] = $this->permisos_model->GetPermisosModulosCheckModulos($this->modulo);
            $data['titulo'] = "Bancos";
//            if ($data["permisos"]["CONSULTAR"]) {
                $this->load->view('modules/par/view_par_tipo_tercero', $data);
                $this->AddAudit(array('tt_idtt' => ""), ACCESO);
//            } else {
//                $this->load->view('errors/modulos/consultar');
//            }
//        } else {
//            $this->load->view('login');
        }
    }

    /**
     * Functon create
     * 
     * Metodo de creacion 
     * Contiene auditoria
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function create() {
        $data = array(
            'tt_nombre' => $this->input->post('tt_nombre'),
        );

        $msn = array();

        $result = $this->par_tipo_tercero_model->create($data);
        $data['tt_idtt'] = $this->db->insert_id();
        $this->AddAudit($data, GUARDAR);
        $msn['result'] = $result;

        $msn['content'] = 'Registro con exito !';

        echo json_encode($msn);
    }

    /**
     * Functon get_by_id
     * 
     * Metodo de obtencion de registro
     * mediante el id de la tabla						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function get_by_id() {
        $id = (isset($_REQUEST['tt_idtt'])) ? $_REQUEST['tt_idtt'] : '';
        $result = $this->par_tipo_tercero_model->get_by_id($id);
        echo json_encode($result);
    }

    /**
     * Function get_all_paginate()		 
     * El objetivo es paginar los items						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function get_all_paginate() {

        $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
        $limit = (isset($_REQUEST['item_por_page'])) ? $_REQUEST['item_por_page'] : 20;
        $select_column = (isset($_REQUEST['select_column'])) ? $_REQUEST['select_column'] : '1';
        $order_column = (isset($_REQUEST['order_column'])) ? $_REQUEST['order_column'] : 'desc';
        $search = (isset($_REQUEST['search_column'])) ? $_REQUEST['search_column'] : '';
        $data = array(
            'page' => $page,
            'item_por_page' => $limit,
            'select_column' => $select_column,
            'order_column' => $order_column,
            'search_column' => $search
        );

        $data = $this->par_tipo_tercero_model->get_all_paginate($data);

        echo json_encode($data);
    }

    /**
     * Functon get_all
     * 
     * Metodo de obtencion de todos los registros						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function get_all() {

        $result = $this->par_tipo_tercero_model->get_all();
        echo json_encode($result);
    }

    /**
     * Functon update
     * 
     * Metodo de actualizacion y edicion 
     * Contiene auditoria
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function update() {
        $data = array(
            'tt_nombre' => $this->input->post('tt_nombre')
        );

        $msn = array();

        $id = $this->input->post('tt_idtt');

        $result = $this->par_tipo_tercero_model->update($id, $data);
        $data['tt_idtt'] = $id;
        $this->AddAudit($data, EDITAR);
        $msn['result'] = $result;

        $msn['content'] = 'Actualizado con exito !';

        echo json_encode($msn);
    }

    /**
     * Functon delete
     * 
     * Metodo de eliminacion
     * Contiene auditoria						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    function delete() {
        $data = array(
            'tt_nombre' => $this->input->post('tt_nombre')
        );

        $msn = array();

        $id = $this->input->post('tt_idtt');

        $result = $this->par_tipo_tercero_model->delete($id, $data);
        $data['tt_idtt'] = $id;
        $this->AddAudit($data, ELIMINAR);
        $msn['result'] = $result;

        $msn['content'] = 'Eliminado con exito !';

        echo json_encode($msn);
    }

    /**
     * Function AddAudit
     * Function _output
     * Metodo de registro de eventos para la auditoria						 
     * Metodologia ajax post.
     * 
     * @autor Jairo torres <ingtorres1986@gmail.com>
     * @creado   : 2017-02-04 
     * 
     * 
     * @param type 
     * @return type
     * exceptions
     *
     * Proyecto para codenigter 
     * 
     */
    public function AddAudit($add, $permiso) {

        $this->audit->setData($add);
        $this->audit->setModulo($this->modulo);
        $this->audit->setItem(isset($add['tt_idtt']) ? $add['tt_idtt'] : "");
        $this->audit->setPermiso($permiso);
        $this->audit->setResult('');
    }

    function _output($param) {
        $this->audit->register();
        echo $param;
    }

}