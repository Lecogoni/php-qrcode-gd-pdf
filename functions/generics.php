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
    return $files;
  }

  function removePHPExtension($file){
    return substr($file, 0, -4);
  }
  
?>