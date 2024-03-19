<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Be_webhook extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_bewebhook');
    }

    public function index() {

        $data['title'] = "Data Webhook Dashboard";
        $data['dataWebhook'] = $this->M_bewebhook->getAll();
                
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('be-webhook/index', $data);
        $this->load->view('templates/footer');
    }

    public function create_data() 
    {        
        $NAMA_CUSTOMER      = $this->input->post('NAMA_CUSTOMER', true);
        $STATUS_WEBHOOK     = $this->input->post('STATUS_WEBHOOK', true);
        $QUERY              = $this->input->post('QUERY', true);

        $data = [
            'NAMA_CUSTOMER'     => $NAMA_CUSTOMER,
            'STATUS_WEBHOOK'    => $STATUS_WEBHOOK,
            'QUERY'             => $QUERY
        ];

        $insertData = $this->db->insert('WEBHOOK_DASHBOARD_ALERT', $data);
        if($insertData) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil <strong>ditambahkan.</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('be_webhook');
        }
    }

    public function edit($ESB_ID = null) 
    {
        $ESB_ID             = $this->input->post('ESB_ID');
        $NAMA_CUSTOMER      = $this->input->post('NAMA_CUSTOMER', true);
        $STATUS_WEBHOOK     = $this->input->post('STATUS_WEBHOOK', true);
        $QUERY              = $this->input->post('QUERY', true);

        $data = [
            'ESB_ID'            => $ESB_ID,
            'NAMA_CUSTOMER'     => $NAMA_CUSTOMER,
            'STATUS_WEBHOOK'    => $STATUS_WEBHOOK,
            'QUERY'             => $QUERY
        ];

        $this->db->where("ESB_ID", $ESB_ID);
        $updateData = $this->db->update("WEBHOOK_DASHBOARD_ALERT", $data);
        
        if($updateData) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil <strong>di upadate.</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('be_webhook');
        }
    }

    public function delete($ESB_ID) {
        $this->db->where("ESB_ID", $ESB_ID);
        $deleteData = $this->db->delete("WEBHOOK_DASHBOARD_ALERT");

        if($deleteData) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data berhasil <strong>dihapus.</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('be_webhook');
        }
    }

}