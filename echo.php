<?
$zephyrLooked = false;
function hasZephyrLooked($hmm) {
    if($hmm == 20) {
      $zephyrLooked = true;
      echo 'PHP Successfully looked at enough, yay!';
   }
}
$timesZephyrLooked = 0;
while($zephyrLooked===false) {
    hasZephyrLooked($timesZephyrLooked);
    $timesZephyrLooked++;
}
?>