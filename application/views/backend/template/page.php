<?php $this->load->view('backend/template/head'); ?>
<?php $header===FALSE ? '' : $this->load->view('backend/template/header'); ?>
<?php !empty($main_content)?$this->load->view('backend/'.$main_content):''; ?>
<?php $this->load->view('backend/template/footer'); ?>