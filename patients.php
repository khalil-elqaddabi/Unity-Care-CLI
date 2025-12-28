<?php
require_once "cpatient.php";

class PatientMenu {
    private $patient;
    
    public function __construct() {
        $db = new Database();
        $conn = $db->getConnection();
        $this->patient = new Patient($conn);
    }
    
    public function showMenu() {
        while (true) {
            echo "\n=== UNITY CARE CLI ===\n";
            echo "1. toute patients\n";
            echo "2. ajouter patient \n";
            echo "3. modifie patient\n";
            echo "5. Supprime patient\n";
            echo "0. quiter\n";
            echo "choix: ";
            
            $choice = trim(fgets(STDIN));
            
            switch ($choice) {
                case '1': $this->allPatients(); break;
                case '2': $this->addPatient(); break;
                case '3': $this->editPatient(); break;
                case '4': $this->viewPatient(); break;
                case '5': $this->deletePatient(); break;
                case '0': echo "Bye!"; exit(0);
                default: echo "aucune";
            }
        }
    }
    
    private function allPatients() {
        echo "\n===LES PATIENTS ===\n";
        $patients = $this->patient->getAll();
        
        if (empty($patients)) {
            echo "Pas de patient\n";
            return;
        }
        
        foreach ($patients as $p) {
            echo "- ID: {$p['id']} | {$p['first_name']} {$p['last_name']} | {$p['phone']}\n";
        }
    }
    
    private function addPatient() {
        echo "\n=== ZID PATIENT JDIDA ===\n";
        echo "first name: "; $first = trim(fgets(STDIN));
        echo "last name: "; $last = trim(fgets(STDIN));
        echo "Tel: "; $phone = trim(fgets(STDIN));
        echo "Email: "; $email = trim(fgets(STDIN));
        
       
        echo "Patient '$first $last'";
    }
    
    private function editPatient() {
        echo "\n=== edit PATIENT ===\n";
        $this->allPatients();
        echo "ID  patient: "; $id = trim(fgets(STDIN));
        echo "first_name/last_name/phone/email: ";
        $field = trim(fgets(STDIN));
        echo "new "; $value = trim(fgets(STDIN));
        echo "Patient ID $id - $field = $value ";
    }
    
   
    
    private function deletePatient() {
        echo "\n=== SUPPRIME PATIENT ===\n";
        $this->allPatients();
        echo "ID patient: "; $id = trim(fgets(STDIN));
        echo "Patient ID $id delete\n";
    }
}


$menu = new PatientMenu();
$menu->showMenu();
?>
