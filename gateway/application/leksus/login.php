<?
require "config.php";

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
    if($agus["action"]=="login"){
        if($agus["auth_key"]==$data['token']){
            $email = $agus["data"]["email"];
            $password = $agus["data"]["password"];
            
            if(($email==$email)){
                $sql_logbyemail = "SELECT * FROM user_data WHERE email='$email'";
                $query_logbyemail = mysqli_query($dbs, $sql_logbyemail);
                $array_logbyemail = mysqli_fetch_array($query_logbyemail);
                // echo mysqli_num_rows($query_logbyemail);
                if(mysqli_num_rows($query_logbyemail)>0){
                    if($password == $array_logbyemail['password']){
                        $out['status'] = 200;
                        $out['success'] = true;
                        $out['message'] = "Login Success!";
                        $out['instrument'] = "Green";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }else{
                        $out['status'] = 400;
                        $out['success'] = false;
                        $out['message'] = "Invalid Password";
                        $out['instrument'] = "Green";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }   
                }else{
                    $out['status'] = 400;
                    $out['success'] = false;
                    $out['message'] = "Invalid Email";
                    $out['instrument'] = "Green";
                    $out['data']['action_id'] = $agus['action_id'];
                    $output = json_encode($out);
                    echo $output;
                }
            }else{
                $out['status'] = 400;
                $out['success'] = false;
                $out['message'] = "Empty Email Address";
                $out['instrument'] = "Green";
                $out['data']['action_id'] = $agus['action_id'];
                $output = json_encode($out);
                echo $output;
            }
        }else{
            echo "sussy agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus sussy bakaa lol amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus edcb".$agus["auth_key"];
        }
    }else{
        echo "sussy agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus sussy bakaa lol amogus lol xd xd lol impostor baka sussy lol xd amogus amogus agus baka impostor lol agus jaef".$agus["auth_key"];
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
