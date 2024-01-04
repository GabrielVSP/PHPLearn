<?php

    class Warn {

        public static function Warn($type, $msg) {

            $sent_msg = "<div class='$type'> $msg</div>";
            echo json_encode($sent_msg, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        }

    }

    class Session {

        public static function isLogged() {

            return $_SESSION['login'] ? true : false;
            session_start();

        }

    }

    class Logout {

        public static function Logout() {

            session_destroy();
            setcookie('user', null, -1, '/');
            Header("Location: http://localhost/cursoDanki/BootStrap/ex049/admin/");

        }

    }

    class Remember {

        public static function Remember($user) {

            setcookie('user', $user, time() + (60 * 60 * 24 * 3), '/');

        }

    }

?>