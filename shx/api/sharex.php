<?php header("Content-Type: application/json"); ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include("sharex_keys.php");
    include("sharex_INC_functions.php");
    include("sharex_INC_config.php");
    $searchfor=$_POST["apikey"];
    $search=array_search($searchfor,$keys,true);
    if($search!==false){
        $dir="shx/".date("Y")."/".date("m")."/".date("d")."/";
        if(!is_dir("../../".$dir)){
            mkdir("../../".$dir,755,true);
        }
        if(isset($_FILES["upload"])&&$_FILES["upload"]["error"]===UPLOAD_ERR_OK){
            $file_tmp=$_FILES["upload"]["tmp_name"];
            $file_name=basename($_FILES["upload"]["name"]);
            $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
            $allowed_ext=["jpg","jpeg","png","gif"];
            if(in_array($file_ext,$allowed_ext)){
                $filename=$dir.random_str($filename_length).".".$file_ext;
                $url="https://$domain_name/".$filename;
                if(move_uploaded_file($file_tmp,"../../".$filename)){
                    echo json_encode(["url"=>$url]);
                }else{
                    echo json_encode(["error"=>"failed to upload image."]);
                }
            }else{
                echo json_encode(["error"=>"invalid file type."]);
            }
        }else{
            echo json_encode(["error"=>"pls provide an image!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"]);
        }
    }else{
        echo json_encode(["error"=>"the api key does not exist."]);
    }
}else{
    echo json_encode(["error"=>"you are using the wrong request method."]);
}
?>
