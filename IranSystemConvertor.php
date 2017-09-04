<?php
namespace webafrooz;
/**
 * برنامه نویس : محمود اسکندری
 * Author: Mahmoud Eskandari
 * Email:Info@webafrooz.com
 * 
 * Source:https://en.wikipedia.org/wiki/Iran_System_encoding_standard
 * License Under MIT License.
 * Copyright 2016 Webafrooz.com.
 */
if(!function_exists("mb_str_split")){
    function mb_str_split($string,$string_length=1) {
        if(mb_strlen($string)>$string_length || !$string_length) {
            do {
                $c = mb_strlen($string);
                $parts[] = mb_substr($string,0,$string_length);
                $string = mb_substr($string,$string_length);
            }while(!empty($string));
        } else {
            $parts = array($string);
        }
        return $parts;
    }
}
class IranSystem{
    /**
     * @var array
     */
    static $List = [
        ["۰","06F0","128","۰"],
        ["۱","06F1","129","۱"],
        ["۲","06F2","130","۲"],
        ["۳","06F3","131","۳"],
        ["۴","06F4","132","۴"],
        ["۵","06F5","133","۵"],
        ["۶","06F6","134","۶"],
        ["۷","06F7","135","۷"],
        ["۸","06F8","136","۸"],
        ["۹","06F9","137","۹"],
        ["،","060C","138","،"],
        ["ـ","0640","139",""],
        ["؟","061F","140","؟"],
        ["ﺁ","FE81","141","آ"],
        ["ﺋ","FE8B","142*","ئ"],
        ["ء","0621","143","ء"],
        ["ﺍ","FE8D","144","ا"],
        ["ﺎ","FE8E","145","ا"],
        ["ﺏ","FE8F","146*","ب"],
        ["ب","FE8F","146*","ب"],
        ["ﺑ","FE91","147**","ب"],
        ["ﭖ","FB56","148*","پ"],
        ["ﭘ","FB58","149**","پ"],
        ["ﺕ","FE95","150*","ت"],
        ["ﺗ","FE97","151**","ت"],
        ["ﺙ","FE99","152*","ث"],
        ["ﺛ","FE9B","153**","ث"],
        ["ﺝ","FE9D","154*","ج"],
        ["ﺟ","FE9F","155**","ج"],
        ["ﭺ","FB7A","156*","چ"],
        ["ﭼ","FB7C","157**","چ"],
        ["ﺡ","FEA1","158*","ح"],
        ["ﺣ","FEA3","159**","ح"],
        ["خ","FEA5","160*","خ"],
        ["ﺧ","FEA7","161**","خ"],
        ["د","062F","162","د"],
        ["ذ","0630","163","ذ"],
        ["ر","0631","164","ر"],
        ["ز","0632","165","ز"],
        ["ژ","0698","166","ژ"],
        ["ﺱ","FEB1","167","س"],
        ["ﺳ","FEB3","168","س"],
        ["ﺵ","FEB5","169","ش"],
        ["ﺷ","FEB7","170","ش"],
        ["ﺹ","FEB9","171","ص"],
        ["ﺻ","FEBB","172","ص"],
        ["ﺽ","FEBD","173","ض"],
        ["ﺿ","FEBF","174","ض"],
        ["ط","0637","175","ط"],
        ["ظ","0638","224","ظ"],
        ["ﻉ","FEC9","225*","ع"],
        ["ﻊ","FECA","226**","ع"],
        ["ﻌ","FECC","227*","ع"],
        ["ﻋ","FECB","228**","ع"],
        ["ﻍ","FECD","229*","غ"],
        ["ﻎ","FECE","230**","غ"],
        ["ﻐ","FED0","231*","غ"],
        ["ﻏ","FECF","232**","غ"],
        ["ﻑ","FED1","233*","ف"],
        ["ﻓ","FED3","234**","ف"],
        ["ﻕ","FED5","235*","ق"],
        ["ﻗ","FED7","236**","ق"],
        ["ﮎ","FB8E","237*","ک"],
        ["ﮐ","FB90","238**","ک"],
        ["ﮒ","FB92","239*","گ"],
        ["ﮔ","FB94","240**","گ"],
        ["ﻝ","FEDD","241*","ل"],
        ["لا","FEFB","242*","لا"],
        ["ﻟ","FEDF","243**","ل"],
        ["ﻡ","FEE1","244*","م"],
        ["ﻣ","FEE3","245**","م"],
        ["ﻥ","FEE5","246*","ن"],
        ["ﻧ","FEE7","247**","ن"],
        ["و","0648","248","و"],
        ["ه","FEE9","249*","ه"],
        ["ﻬ","FEEC","250","ه"],
        ["ﻫ","FEEB","251","ه"],
        ["ﯽ","FBFD","252","ی"],
        ["ﯼ","FBFC","253","ی"],
        ["ﯾ","FBFE","254**","ی"],
        [" ","00A0","255"," "]];
    /**
     * @var array
     */
    static $N_LIST = [
        "۰" => ["","","",["","",""],["۰","128"]],
        "۱" => ["","","",["","",""],["۱","129"]],
        "۲" => ["","","",["","",""],["۲","130"]],
        "۳" => ["","","",["","",""],["۳","131"]],
        "۴" => ["","","",["","",""],["۴","132"]],
        "۵" => ["","","",["","",""],["۵","133"]],
        "۶" => ["","","",["","",""],["۶","134"]],
        "۷" => ["","","",["","",""],["۷","135"]],
        "۸" => ["","","",["","",""],["۸","136"]],
        "۹" => ["","","",["","",""],["۹","137"]],
        "،" => ["","","",["","",""],["،","138"]],
        " " => ["","","",["","",""],["","255"]],
        "ـ" => ["","","",["","",""],["ـ","139"]],
        "آ" => ["","","",["","",""],["ﺁ","141"]],
        "ئ" => ["ﺋ","ئ","ﺋ",["142","142","142"],["ئ","142"]],
        "ء" => ["","","",["","",""],["ء","143"]],
        "ا" => ["","ﺎ","",["","145",""],["","144"]],
        "ب" => ["ﺑ","ب","ﺑ",["147**","146**","147**"],["","146"]],
        "پ" => ["ﭘ","پ","ﭘ",["149**","148**","149**"],["","148"]],
        "ت" => ["ﺗ","ت","ﺗ",["151**","150**","151**"],["","150"]],
        "ث" => ["ﺛ","ث","ﺛ",["153**","152**","153**"],["","152"]],
        "ج" => ["ﺟ","ج","ﺟ",["155**","154**","155**"],["","154"]],
        "چ" => ["ﭼ","چ","ﭼ",["157**","156**","157**"],["","156"]],
        "ح" => ["ﺣ","ح","ﺣ",["159**","158**","159**"],["","158"]],
        "خ" => ["ﺧ","خ","ﺧ",["161**","160**","161**"],["","160"]],
        "د" => ["","د","",["","162",""],["","162"]],
        "ذ" => ["","ذ","",["","163",""],["","163"]],
        "ر" => ["","ر","",["","164",""],["","164"]],
        "ز" => ["","ز","",["","165",""],["","165"]],
        "ژ" => ["","ژ","",["","166",""],["","166"]],
        "س" => ["ﺳ","س","ﺳ",["168","167","168"],["","167"]],
        "ش" => ["ﺷ","ش","ﺷ",["170","169","170"],["","169"]],
        "ص" => ["ﺻ","ص","ﺻ",["172","171","172"],["","171"]],
        "ض" => ["ﺿ","ض","ﺿ",["174","173","174"],["","173"]],
        "ط" => ["ط","ط","ط",["175","175","175"],["","175"]],
        "ظ" => ["ظ","ظ","ظ",["224","224","224"],["","224"]],
        "ع" => ["ﻋ","ﻊ","ﻌ",["228**","226**","227*"],["","225"]],
        "غ" => ["ﻏ","ﻎ","ﻐ",["232**","230**","231*"],["","229"]],
        "ف" => ["ﻓ","ف","ﻓ",["234**","233","234"],["","233"]],
        "ق" => ["ﻗ","ق","ﻗ",["236**","235","236"],["","235"]],
        "ک" => ["ﮐ","ک","ﮐ",["238**","237","238"],["","237"]],
        "گ" => ["ﮔ","گ","ﮔ",["240**","239","240"],["","239"]],
        "لا" => ["","لا","",["","242*",""],["","242"]],
        "ل" => ["ﻟ","ل","ﻟ",["243**","241","243"],["","241"]],
        "م" => ["ﻣ","م","ﻣ",["245**","244","245"],["","244"]],
        "ن" => ["ﻧ","ن","ﻧ",["247**","246","247"],["","246"]],
        "و" => ["","و","",["","248",""],["","248"]],
        "ه" => ["ﻫ","ه","ﻬ",["251","249","250"],["","249"]],
        "ی" => ["ﯾ","ی","ﯾ",["254**","253","254"],["","253"]]
    ];
    /**
     * @var array
     */
    static $Pars_I  = [];
    /**
     * @var array
     */
    static $Pars_O  = [];

    /**
     * Convert From Utf-8 To self
     * @param null $str
     * @return mixed
     */
    public static function Toself($str = null){
        //
        $str = str_replace(["ي","\0"],["ی",""],$str);
        $ss  = mb_str_split(trim($str));
        $len = count($ss);
        for($i = 0;$i < $len;$i++){
            if(isset($ss[$i])) {
                if($ss[$i] == "ل" AND isset($ss[$i+1]) AND $ss[$i+1] == 'ا')
                {
                    self::$Pars_I[] = "لا";
                    unset($ss[$i + 1]);
                }else{
                    self::$Pars_I[] = $ss[$i];
               }
            }
        }
        //
        $len = count(self::$Pars_I);
        for($i = 0;$i < $len;$i++){
            //If is EN Char
            if(ord(self::$Pars_I[$i]) < 128){
                self::$Pars_O[] = self::$Pars_I[$i];
                //ELSE IF IS Persian Char
            }else{
                $l  = isset(self::$Pars_I[$i+1])?self::$Pars_I[$i+1]:null;
                $r  = isset(self::$Pars_I[$i-1])?self::$Pars_I[$i-1]:null;
                $in = self::howChar($l,self::$Pars_I[$i],$r);
                //Fetch Array To Find Encoding
                if($in != false){
                    self::$Pars_O[] = chr(str_replace('*','',$in));
                    //TODO: Check This Item.
                }else{
                    self::$Pars_O[] = self::$Pars_I[$i];
                }
            }

        }
        return implode(array_reverse(self::$Pars_O));
    }

    /**
     * Find Charachter Mode (Middle OR END OR FIRST)
     * @param $l
     * @param $char
     * @param $r
     * @return bool|string
     */
    public static function howChar($l,$char,$r){
        if(!isset(self::$N_LIST[$char])){
            return false;
        }
        $Result = 0;
        if(!empty($r) AND !empty(self::$N_LIST[$char][1]) AND isset(self::$N_LIST[$r])){
            if(!empty(self::$N_LIST[$r][0]))
                $Result+= 4;
        }
        if(!empty($l) AND !empty(self::$N_LIST[$char][0]) AND isset(self::$N_LIST[$l])){
            if(!empty(self::$N_LIST[$l][1]))
                $Result+=2;
        }
        if($Result == 6){
            return self::$N_LIST[$char][3][2];
        }elseif($Result == 4){
            return self::$N_LIST[$char][3][1];
        }elseif($Result == 2){
            return self::$N_LIST[$char][3][0];
        }

        return self::$N_LIST[$char][4][1];
    }

    /**
     * Conver From self To UTF-8
     * @param $str
     * @return string
     */
    public static function Fromself($str){
        $str = str_split($str);
        $str = array_reverse($str);
        $From= [];
        foreach(self::$List as $r){
            if(!empty($r[3]))
                $From[str_replace('*','',$r[2])] = $r[3];
            else
                $From[str_replace('*','',$r[2])] = $r[0];
        }
        $out = '';
        foreach($str as $rec){
            $ord = ord($rec);
            if($ord < 128){
                $out.= chr($ord);
            }else{
                if(isset($From[$ord])){
                    $out.= $From[$ord];
                }
            }
        }
        return $out;
    }
}
?>
