<?php
function isMobileDevice(){
  return preg_match("/(android|blackberry|mini|mobilpalm|phone|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
  echo "This user/visitor is using a mobile device";
}
else{
  echo "This user/visor is using desktop or computer device";
}
?>
