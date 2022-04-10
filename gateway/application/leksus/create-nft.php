<?
require "config.php";

$input = file_get_contents("php://input");
$agus = json_decode($input, true);

if($agus['data_table']!="nft_list"){
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
    if($agus["action"]=="createnft"){
        if($agus["auth_key"]==$data['token']){
            $nftid = $agus["data"]["nft_id"];
            $objecturl = $agus["data"]["object_url"];
            $price = $agus["data"]["price"];
            
            $sql_test_id = "SELECT * FROM nft_list WHERE nft_id = '$nftid'";
            $query_test_id = mysqli_query($dbs, $sql_test_id);
            if(mysqli_num_rows($query_test_id)<1){
                $sql_test_url = "SELECT * FROM nft_list WHERE object_url = '$objecturl'";
                $query_test_url = mysqli_query($dbs, $sql_test_url);
                if(mysqli_num_rows($query_test_url)<1){
                    $sql_register = "INSERT INTO nft_list (nft_id, object_url, price) VALUES ('$nftid', '$objecturl', '$price')";
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
                    $out['message'] = "An object with this url already exist!";
                    $out['instrument'] = "Green";
                    $out['data']['action_id'] = $agus['action_id'];
                    $output = json_encode($out);
                    echo $output;
                }
            }else{
                $out['status'] = 400;
                $out['success'] = false;
                $out['message'] = "An object with this NFT-ID already exist!";
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
