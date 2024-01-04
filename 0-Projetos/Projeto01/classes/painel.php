<?php 

    class Painel {

        //VARIAVEIS CARGO
         public static $cargos = [

            '1' => 'Administrador',
            '2' => 'Sub Administrador',
            '3' => 'Normal'
            
        ];

        public static function logado() {

            return isset($_SESSION['login']) ? true : false;

        }

        public static function loggout() {

            setcookie('remind', true, time() - 1, '/');
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);

        }
        public static function loadPage() {

            if (isset($_GET['url'])) {

                $url = explode("/", $_GET["url"]);

                if(file_exists('pages/'.$url[0].'.php')) {

                    include('pages/'.$url[0].'.php');

                }
                else
                {

                    //página não existe
                    header('Location: '. INCLUDE_PATH_PAINEL);

                }

            }
            else
            {

                include('pages/home.php');

            }

        }

        public static function listOnlineUsers() {

            self::clearOnlineUsers();
            //$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            $sql = Database::connect()->prepare("SELECT * FROM `admin_online`");
            $sql->execute();

            return $sql->fetchAll();

        }

        public static function clearOnlineUsers() {

            $date = date("Y-m-d H:i:s");
            $sql = Database::connect()->exec("DELETE FROM `admin_online` WHERE lastaction < '$date' - INTERVAL 1 MINUTE");

        }

        public static function alert($type, $message) {

            echo $message;
        }

        public static function isValid($img) {

            if($img['type'] == 'image/jpeg' || $img['type'] == 'image/jpg' || $img['type'] == 'image/png') {

                $size = intval($img['size'] / 1024);

                if($size < 300) {

                    return true;

                }else {

                    return false;

                }


            }
            else {

                return false;

            }

        }

        public static function uploadImage($img) {

            $imgFormat = explode('.' ,$img['name']);
            $imgName = uniqid().'.'.$imgFormat[count($imgFormat) - 1];

           if (move_uploaded_file($img['tmp_name'], BASE_DIR_PAINEL . '/uploads/'. $imgName)) {

            return $imgName;

           }
           else
           {

            return false;

           }

        }

        public static function deleteFile($file) {

            @unlink('/uploads/' . $file);

        }

        public static function insert($arr) {

            $debounce = true;
            $query = "INSERT INTO `site_depoimentos` VALUES (null";

            foreach ($arr as $key => $value) {
               
                if($key == "action"){continue;}

                if($value == '') {

                    $debounce = false;
                    break;

                }

                $query.=", ?";
                $params[] = $value;

            }

            if ($debounce){
                $query.=")";
                $sql = Database::connect()->prepare($query);
                $lastId = Database::connect()->lastInsertId();

                $sql->execute($params);
                $sql = Database::connect()->prepare("UPDATE `site_depoimentos` SET orderid = ? WHERE id = $lastId");
                $sql->execute([$lastId]);
            }

            return $debounce;

        }

        public static function selectAll($tabela, $start = null, $end = null) {

            if($start == null && $end == null) {
                $sql = Database::connect()->prepare("SELECT * FROM `$tabela` ORDER BY orderid ASC");
            }else {
                $sql = Database::connect()->prepare("SELECT * FROM `$tabela` ORDER BY orderid ASC LIMIT $start,$end");
            }

            $sql->execute();
            return $sql->fetchAll();

        }

        public static function delete($tb, $id=false) {

            if(!$id) {
                $sql = Database::connect()->prepare("DELETE * FROM `$tb`");
            }else {
                $sql = Database::connect()->prepare("DELETE FROM `$tb` WHERE id = $id");
            }

            $sql->execute();

        }

        public static function redirect($url) {

            echo "<script>location.href='$url'</script>";
            die();

        }

        public static function select($tb, $query, $arr) {

            $sql = Database::connect()->prepare("SELECT * FROM `$tb` WHERE $query");
            $sql->execute($arr);

            return $sql->fetch();

        }

        public static function update($tb, $arr) {

            $debounce = true;
            $first = false;
            $query = "UPDATE `$tb` SET ";

            foreach ($arr as $key => $value) {
               
                if($key == "action" || $key == $tb || $key == 'id'){continue;}

                if($value == '') {

                    $debounce = false;
                    break;

                }

                if(!$first) {
                    $first = true;
                    $query.="$key= ?";
                }else {
                    $query.=", $key= ?";
                }

                $params[] = $value;

            }

            if ($debounce){
                $params[] = $_GET['id'];
                $sql = Database::connect()->prepare($query.' WHERE id = ?');

                $sql->execute($params);
            }

            return $debounce;

        }

        public static function orderItem($tb, $order, $id) {

            if($order == 'up') {

                $info = Painel::select($tb, 'id=?', [$id]);
                $orderId = $info['orderid'];
                $itemBefore = Database::connect()->prepare("SELECT * FROM `$tb` WHERE orderid < $orderId ORDER BY id DESC LIMIT 1");

                $itemBefore->execute();

                if($itemBefore->rowCount() == 0) {
                    return;
                }

                $itemBefore = $itemBefore->fetch();

                Painel::update($tb, ['id' => $itemBefore['id'],'orderid' => $info['orderid']]);
                Painel::update($tb, ['id' => $info['id'], 'orderid' => $itemBefore['orderid']]);

            }else if($order == 'down') {

                $info = Painel::select($tb, 'id=?', [$id]);
                $orderId = $info['orderid'];
                $itemBefore = Database::connect()->prepare("SELECT * FROM `$tb` WHERE orderid > $orderId ORDER BY id ASC LIMIT 1");

                $itemBefore->execute();

                if($itemBefore->rowCount() == 0) {
                    return;
                }

                $itemBefore = $itemBefore->fetch();

                Painel::update($tb, ['id' => $itemBefore['id'],'orderid' => $info['orderid']]);
                Painel::update($tb, ['id' => $info['id'], 'orderid' => $itemBefore['orderid']]);

            }

        }

    }

?>