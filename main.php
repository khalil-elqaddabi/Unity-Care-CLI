<?php
// require_once "coonfig.php";
require_once "patient.php";

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
            echo "1. Chuf kull patients\n";
            echo "2. Zid patient jdida\n";
            echo "3. Baddel patient\n";
            echo "4. Chuf patient wa7ed\n";
            echo "5. Supprime patient\n";
            echo "0. Khruj\n";
            echo "Chno bghiti? (0-5): ";
            
            $choice = trim(fgets(STDIN));
            
            switch ($choice) {
                case '1': $this->allPatients(); break;
                case '2': $this->addPatient(); break;
                case '3': $this->editPatient(); break;
                case '4': $this->viewPatient(); break;
                case '5': $this->deletePatient(); break;
                case '0': echo "Bye! 👋\n"; exit(0);
                default: echo "Choisis 0-5 ghadi! 😅\n";
            }
        }
    }
    
    private function allPatients() {
        echo "\n=== KULL LES PATIENTS ===\n";
        $patients = $this->patient->getAll();
        
        if (empty($patients)) {
            echo "Makaynch patients! Zid wa7da! 😊\n";
            return;
        }
        
        foreach ($patients as $p) {
            echo "- ID: {$p['id']} | {$p['first_name']} {$p['last_name']} | {$p['phone']}\n";
        }
    }
    
    private function addPatient() {
        echo "\n=== ZID PATIENT JDIDA ===\n";
        echo "Semya (first_name): "; $first = trim(fgets(STDIN));
        echo "Jem3 (last_name): "; $last = trim(fgets(STDIN));
        echo "Tel: "; $phone = trim(fgets(STDIN));
        echo "Email: "; $email = trim(fgets(STDIN));
        
        // Ajoute f DB (khass t3awd create method)
        echo "Patient '$first $last' zadd! ✅\n";
    }
    
    private function editPatient() {
        echo "\n=== BADDEL PATIENT ===\n";
        $this->allPatients();
        echo "ID dyal patient: "; $id = trim(fgets(STDIN));
        echo "Chno bghiti tbadl? (first_name/last_name/phone/email): ";
        $field = trim(fgets(STDIN));
        echo "Chno jdida? "; $value = trim(fgets(STDIN));
        echo "Patient ID $id - $field = $value ✅\n";
    }
    
    private function viewPatient() {
        echo "\n=== CHUF PATIENT ===\n";
        echo "ID: "; $id = trim(fgets(STDIN));
        echo "Patient ID $id mzyan! 🔍\n";
    }
    
    private function deletePatient() {
        echo "\n=== SUPPRIME PATIENT ===\n";
        $this->allPatients();
        echo "ID dyal patient: "; $id = trim(fgets(STDIN));
        echo "Patient ID $id mchiy! 🗑️\n";
    }
}

// LANCE LE MENU!
$menu = new PatientMenu();
$menu->showMenu();
?>
