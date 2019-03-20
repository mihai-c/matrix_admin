<?php $this->load->view('frontend/template/header'); ?>
<?php !empty($main_content)?$this->load->view('frontend/'.$main_content):''; ?>
<?php $this->load->view('frontend/template/footer'); ?>