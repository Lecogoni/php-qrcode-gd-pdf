<?php 

// GET NAVBAR PAGE PARAMS
if (isset($_GET["page"])){
  $page = strtolower($_GET["page"]);
}

function getContentFolderFiles()
  {
    $dir    = './content';
    $files = scandir($dir);
    unset($files[1]);
    unset($files[0]);
    foreach ($files as $key => $value){
      if (str_starts_with($value, 'new') or str_starts_with($value, 'updt')) {
        unset($files[$key]);
      }
    }
    //var_dump($files);
    return $files;
  }

  function removePHPExtension($file){
    return substr($file, 0, -4);
  }
  
?>


