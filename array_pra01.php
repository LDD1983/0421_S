<?php

$students=[ 'judy'=>[ '國88' ,
                       '英95',           
                       '數85',
                       '地73',
                       '歷22',] ,

           'amo' =>['國' ,
                    '英',           
                    '數',
                    '地',
                    '歷',
                    ],

         'john' => ['國' ,
                    '英',           
                    '數',
                    '地',
                    '歷',

                     ],
                    



];


print_r($students);

echo"<hr>";



foreach ($students as $stu => $sco) {
    echo $stu ; 
    echo"<br>";

    
    # code...
}

print_r($sco);

echo "<hr>";




echo "<pre>";
print_r($students) ;
echo "</pre>";





?>