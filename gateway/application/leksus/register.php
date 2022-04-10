<?
require "config.php";
require "randomizer.php";
require "sender.php";

$input = file_get_contents("php://input");
$agus = json_decode($input, true);

if($agus['data_table']!="user_data"){
    $out['status'] = 400;
    $out['success'] = false;
    $out['message'] = "Invalid Data_Table or you don't have access to this table!";
    $out['instrument'] = "Green";
    $out['data']['action_id'] = $agus['action_id'];
    $output = json_encode($out);
    echo $output;
    exit();
}

if(!empty($input)){
    if($agus["action"]=="register"){
        if($agus["auth_key"]==$data['token']){
            $email = $agus["data"]["email"];
            $password = $agus["data"]["password"];
            $username = $agus["data"]["username"];
            $randstr = random(50);
            
            $sql_test_email = "SELECT * FROM user_data WHERE email = '$email'";
            $query_test_email = mysqli_query($dbs, $sql_test_email);
            if(mysqli_num_rows($query_test_email)<1){
                $sql_test_username = "SELECT * FROM user_data WHERE username = '$username'";
                $query_test_username = mysqli_query($dbs, $sql_test_username);
                if(mysqli_num_rows($query_test_username)<1){
                    $sql_register = "INSERT INTO user_data (email, password, username, email_verified, verification_str) VALUES ('$email', '$password', '$username','0', '$randstr')";
                    if(mysqli_query($dbs, $sql_register)){
                        $out['status'] = 200;
                        $out['success'] = true;
                        $out['message'] = "Process Finish";
                        $out['instrument'] = "Green";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }else{
                        $out['status'] = 500;
                        $out['success'] = false;
                        $out['message'] = "Internal Server Error";
                        $out['instrument'] = "Red";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }
                }else{
                    $out['status'] = 400;
                    $out['success'] = false;
                    $out['message'] = "Username Already Exist!";
                    $out['instrument'] = "Green";
                    $out['data']['action_id'] = $agus['action_id'];
                    $output = json_encode($out);
                    echo $output;
                }
            }else{
                $out['status'] = 400;
                $out['success'] = false;
                $out['message'] = "Email Already Exist!";
                $out['instrument'] = "Green";
                $out['data']['action_id'] = $agus['action_id'];
                $output = json_encode($out);
                echo $output;
            }
        }else{
            echo "sussy agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus sussy bakaa lol amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus ";
        }
    }else{
        echo "sussy agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus sussy bakaa lol amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus ";
    }
}else{
    $out['status'] = 400;
    $out['success'] = false;
    $out['message'] = "Empty Parameter Request or invalid request";
    $out['instrument'] = "Green";
    $output = json_encode($out);
    echo $output;
}

?>
