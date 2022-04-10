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
    if($agus["action"]=="delete"){
        if($agus["auth_key"]==$data['token']){
            $email = $agus["data"]["email"];
            
            if(!empty($email)){
                $sql_check_email = "SELECT * FROM user_data WHERE email='$email'";
                $query_check_email = mysqli_query($dbs, $sql_check_email);
                $array_check_email = mysqli_fetch_array($query_check_email);
                // echo mysqli_num_rows($query_check_email);
                if(mysqli_num_rows($query_check_email)>0){
                    $sql_delete_user = "DELETE FROM user_data WHERE email='$email'";
                    // $query_delete_user = mysqli_query($dbs, $sql_delete_user);
                    if(mysqli_query($dbs, $sql_delete_user)){
                        $out['status'] = 200;
                        $out['success'] = true;
                        $out['message'] = "Success delete user!";
                        $out['instrument'] = "Green";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }else{
                        $out['status'] = 500;
                        $out['success'] = false;
                        $out['message'] = "Internal Server Error";
                        $out['instrument'] = "Green";
                        $out['data']['action_id'] = $agus['action_id'];
                        $output = json_encode($out);
                        echo $output;
                    }   
                }else{
                    $out['status'] = 400;
                    $out['success'] = false;
                    $out['message'] = "Account Not Found!";
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
