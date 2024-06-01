<?php

require_once APP_ROOT.'/app/services/DocumentService.php';

class PatientController{
    
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();

        include APP_ROOT.'/app//views/home/index.php';
    }
    
}
?>