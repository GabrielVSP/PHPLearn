<?php 

    class Site {

        public static function updateOnlineUsers() {

            $page = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if (isset($_SESSION['online'])) {

                $token = $_SESSION['online'];
                $horAtual = date('Y-m-d H:i:s');
                $check = Database::connect()->prepare("SELECT `id` from `admin_online` WHERE token = ?");

                $check->execute([$_SESSION['online']]);
                
                if($check->rowCount() == 1)
                {

                    $sql = Database::connect()->prepare("UPDATE `admin_online` SET lastaction = ? AND page = ? WHERE token = ?");
                    $sql->execute([$horAtual, $page, $token]);

                }
                else
                {

                    $ip = $_SERVER['REMOTE_ADDR'];
                    $token = $_SESSION['online'];
    
                    $sql = Database::connect()->prepare("INSERT INTO `admin_online` VALUES (null, ?, ?, ?, ?)");
                    $sql->execute([$ip, $horAtual,$token, $page]);

                }

            }
            else
            {

                $_SESSION['online'] = uniqid();

                $ip = $_SERVER['REMOTE_ADDR'];
                $token = $_SESSION['online'];
                $horAtual = date('Y-m-d H:i:s');

                $sql = Database::connect()->prepare("INSERT INTO `admin_online` VALUES (null, ?, ?, ?, ?)");
                $sql->execute([$ip, $horAtual, $token, $page]);

            }

        }

        public static function count() {

            if(!isset($_COOKIE['visita'])) {

                setcookie('visita', true, time() + (60 * 60 * 24 * 5));

                $sql = Database::connect()->prepare("INSERT INTO `admin_visitas` VALUES (NULL, ?, ?)");
                $sql->execute([$_SERVER['REMOTE_ADDR'], date('Y-m-d')]);

            }

        }

    }

?>