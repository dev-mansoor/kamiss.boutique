<?php
// ? get different sizes in clothes image's name
function getSize($data,$sizeName)
{
    if($sizeName == "xl")
    {
        $xl= strpos($data,$sizeName);
        $xxl = strpos($data,"xxl");

        if($xl==($xxl+1))
        {
            return "";
        }
        else
        {
            $s_index =  strpos($data,$sizeName);
            $s_start = strpos($data,"(",$s_index);
            $s_end = strpos($data,")",$s_index);
        
            $size = substr($data,$s_start+1,$s_end-$s_start-1);
        }
    }
    else
    {
        if(strpos($data,$sizeName))
        {
            $s_index =  strpos($data,$sizeName);
            $s_start = strpos($data,"(",$s_index);
            $s_end = strpos($data,")",$s_index);
        
            $size = substr($data,$s_start+1,$s_end-$s_start-1);
        }
        else
        {
            return "";
        }
    }
    return $size;
}



// ?Loading the entire images from the images folder
// ?  
function getImages()
{
    $url = "./img";
    $open_dir = opendir($url);

    
    $data = array();
        
    while(($file = readdir($open_dir))!=false)
    {
        if($file !="." && $file !="..")
        {
            array_push($data,$file);
        }
    }

    closedir($open_dir); 

    $title_index = strpos($data[0],"-");
    $title_value = substr($data[0],0,$title_index);
    $title_name = $title_value;

    $int_val = intval(strlen($title_name))+1;

    $index = strpos($data[0],"-",$int_val);
    $value = substr($data[0],$int_val,$index-$int_val);
    $first = $value;

    $image_name = "";
    $len=0;
    $j = 0;
    $image_id= 0;
    $image_names = array();
    $title_names = array();

    for($i=0; $i<count($data); $i++)
    {
        $len = $i;

        $title_index = strpos($data[$i],"-");
        $title_value = substr($data[$i],0,$title_index);
    
        $int_val = intval(strlen($title_value))+1;
    
        $index = strpos($data[$i],"-",$int_val);
        $value = substr($data[$i],$int_val,$index-$int_val);

        if($i==0)
        {
            $s = getSize($data[$i],"-s");
            $m = getSize($data[$i],"-m");
            $l = getSize($data[$i],"-l");
            $xl = getSize($data[$i],"-xl");
            $xxl = getSize($data[$i],"-xxl");
        }

        if($title_name==$title_value)
        {   
           if($first==$value)
            { 
               if($image_name=="")
               {
                   $image_name = $data[$i];
               }
               else
               {
                   $image_name =$image_name.",".$data[$i];
               }
               $first = $value;
            }
            else
            {

                $image_id +=1;
                $j +=1;
                $size = (($s!="")?"S":"")."".(($m!="")?",M":"")."".(($l!="")?",L":"")."".(($xl!="")?",XL":"")."".(($xxl!="")?",XXL":"");  
                
                $image_names+=array(
                    $j => array(
                        'image_id'=>$image_id,
                        'image_name'=>$image_name,
                        'size'=>$size,
                        "S"=>$s,
                        "M"=>$m,
                        "L"=>$l,
                        "XL"=>$xl,
                        "XXL"=>$xxl
                        )
                );

                $image_name = $data[$i];
                $first = $value;

                $s = getSize($data[$i],"-s");
                $m = getSize($data[$i],"-m");
                $l = getSize($data[$i],"-l");
                $xl = getSize($data[$i],"-xl");
                $xxl = getSize($data[$i],"-xxl");
            }
        }
        else
        {   
            $image_id +=1;
            $j +=1;  
            $size = (($s!="")?"S":"")."".(($m!="")?",M":"")."".(($l!="")?",L":"")."".(($xl!="")?",XL":"")."".(($xxl!="")?",XXL":"");  

            $image_names+=array(
                $j => array(
                    'image_id'=>$image_id,
                    'image_name'=>$image_name,
                    'size'=>$size,
                    "S"=>$s,
                    "M"=>$m,
                    "L"=>$l,
                    "XL"=>$xl,
                    "XXL"=>$xxl
                    )
            );
        
            $title_names+=array(
                $title_name =>  $image_names
            );
  
            $image_name = $data[$i];
            $first = $value;
            $title_name = $title_value;

            $s = getSize($data[$i],"-s");
            $m = getSize($data[$i],"-m");
            $l = getSize($data[$i],"-l");
            $xl = getSize($data[$i],"-xl");
            $xxl = getSize($data[$i],"-xxl");

            $image_names=array();
            $j = 0;
        }
        if(($len+1)==count($data))
        {   
            $image_id +=1;
            $j +=1;
            $size = (($s!="")?"S":"")."".(($m!="")?",M":"")."".(($l!="")?",L":"")."".(($xl!="")?",XL":"")."".(($xxl!="")?",XXL":""); 

            $image_names+=array(
                $j => array(
                    'image_id'=>$image_id,
                    'image_name'=>$image_name,
                    'size'=>$size,
                    "S"=>$s,
                    "M"=>$m,
                    "L"=>$l,
                    "XL"=>$xl,
                    "XXL"=>$xxl
                    )
            );
            $title_names+=array(
                $title_name =>  $image_names
            );
        }
  
    }

    return $title_names;
}


// $file = fopen("image_names.json","w");

// fwrite($file,json_encode(getImages()));

// fclose($file);
    
echo json_encode(getImages());

?>