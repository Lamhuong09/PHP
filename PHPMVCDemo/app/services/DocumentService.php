<?php

require_once APP_ROOT.'/app/models/Document.php';

class PatientService {
    public function getAllPatients() {
        $patients = [];
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "SELECT * FROM tailieuql";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row['id'], $row['name'], $row['date'], $row['nsx']);
                    $patients[] = $patient;
                }
                return $patients;
            }
        }
    }

    public function insertPatients($name, $date, $nsx) {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                // Chuyển đổi định dạng ngày tháng từ 'dd/mm/yyyy' sang 'yyyy-mm-dd'
                $sqlDate = date('Y-m-d', strtotime($date));

                // Sử dụng Prepared Statement để tránh SQL Injection
                $sql = "INSERT INTO `qltl`.`tailieuql` (`name`, `date`, `nsx`) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $name, $sqlDate, $nsx);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function deletePatients($id) {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                $sql = "DELETE FROM `qltl`.`tailieuql` WHERE `id`= ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function updatePatients($id, $name, $date, $nsx) {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
                // Chuyển đổi định dạng ngày tháng từ 'dd/mm/yyyy' sang 'yyyy-mm-dd'
                $sqlDate = date('Y-m-d', strtotime($date));

                // Sử dụng Prepared Statement để tránh SQL Injection
                $sql = "UPDATE `qltl`.`tailieuql` SET `name`=?, `date`=?, `nsx`=? WHERE `id`= ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssi", $name, $sqlDate, $nsx, $id);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }

    public function getPatients($id) {
        $dbConnection = new DBConnection();

        if ($dbConnection != null) {
            $conn = $dbConnection->getConnection();

            if ($conn != null) {
    
                $sql = "SELECT * FROM `qltl`.`tailieuql` WHERE `id`= ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    return $result->fetch_assoc();
                } else {
                    return null;
                }
            }
        }
        return null;
    }
}
