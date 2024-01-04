<?php 

    Class User {

        public function updateUser($nome, $pass, $img, $actImg) {

            $sql = Database::connect()->prepare("UPDATE `admin_users` SET name = ?, password = ?, img = ? WHERE user = ?");

            if($sql->execute([$nome, $pass, $img, $_SESSION['user']])) {
                return true;
            }
            else
            {
                return false;
            }

        }

        public static function userExists($user) {
        
            $sql = Database::connect()->prepare("SELECT id FROM `admin_users` WHERE user = ?");
            $sql->execute([$user]);

            if ($sql->rowCount() == 1) {

                return true;

            }else {
                return false;
            }
        
        }

        public function createUser($login, $nome, $senha, $img, $cargo){

            $sql = Database::connect()->prepare("INSERT INTO `admin_users` VALUES (null, ?, ?, ?, ?, ?)");
            $sql->execute([$login, $senha, $nome, $cargo, $img]);

        }

    }

?>