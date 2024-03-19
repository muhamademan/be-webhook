<?php

class M_bewebhook extends CI_Model
{
    public function getAll() {
        $queryData = $this->db->query("SELECT NAMA_CUSTOMER, STATUS_WEBHOOK, QUERY, CREATE_DATE, ESB_ID FROM WEBHOOK_DASHBOARD_ALERT")->result_array();
        return $queryData;
    }  

}