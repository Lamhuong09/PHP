    <?php

    require_once APP_ROOT.'/app/services/DocumentService.php';

    class HomeController{
        public function index(){
            $patientService = new PatientService();
            $patients = $patientService->getAllPatients();

            include APP_ROOT.'/app//views/home/index.php';
        }
        public function insert($name, $date,$nsx){
            $patientService = new PatientService();
            $sqlDate = date('Y-m-d', strtotime($date));
            $patients = $patientService->insertPatients($name, $date,$nsx);
            // include APP_ROOT.'/app/views/home/add.php';
            return $patients;
        }

        public function delete($id){
            $patientService = new PatientService();
            
            $patients = $patientService->deletePatients($id);
            // include APP_ROOT.'/app/views/home/add.php';
            return $patients;
        }
        public function update($id, $name, $date,$nsx){
            $patientService = new PatientService();
            $patients = $patientService->updatePatients($id, $name, $date,$nsx);
            // include APP_ROOT.'/app/views/home/add.php';
            return $patients;
        }

    }
    ?>