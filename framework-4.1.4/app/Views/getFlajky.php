<?php
echo $this->extend('layout2');

echo $this->section("content");
?>
<img class = "responsive" src =<?php echo base_url("assets/img/flag".$Name.".png")?>/>
<img  class = "responsive" src =<?php echo base_url("assets/img/map".$Name.".png")?>/>
<?php
echo $this->endSection();