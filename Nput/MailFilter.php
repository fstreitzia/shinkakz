<?php
error_reporting(0);

$banner = "\e[36;1m                                                                                 
                                                                                 
           #         ######   
           #    #             
  ######   #    #  ########## 
           #    #  #        # 
           #######        ##  
##########      #       ##    
                #     ##      
                              
                                                                                 
[#] email filter [#]    
                                   
Coded by : Revan AR                  
Team   : IndoSec                   
Github : https//github.com/revan-ar/\n\n\e[0;1m";

sleep(2);
echo $banner;
sleep(2);
echo "Nama File Mailist : ";
$mailist = trim(fgets(STDIN));
sleep(2);
echo "Filter (ex : yahoo) : ";
$filter = trim(fgets(STDIN));
sleep(1);
echo "sedang memfilter email.. silahkan tunggu ^_^\n";
sleep(4);
$list = file_get_contents($mailist);
preg_match_all("/(.+)(@$filter)(.*+)*/ix", $list, $hasil);

foreach ($hasil[0] as $result) {

      $jumlah = count($hasil[0]);
      if ($jumlah <= 0) {
        echo "email $filter tidak ditemukan\n";
      }else{
          $file = "filter_result.txt";
        //meggabungkan hasil filter..
        touch($file);
        $o = fopen($file, 'a');
        fwrite($o, $result."\n");
        fclose($o);

        }
}

// A34ECAAF
echo $jumlah." email $filter ditemukan..\nCek hasilnya di $file\n";

?>
