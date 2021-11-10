
<?php
echo "Hello, world!!\n";
#variable declaration

$day = "Thursday";


#variable being called along with string in double quotes
/*it will not work
if we use single quotes*/
echo "today is $day\n";

#added repetition in file;
$advisors = array("Mahatma Gandhi", "Dalai Lama", "Vanilla Ice");
for ($count = 0; $count<3; ++$count){
    echo "$count $advisors[$count]\n";
}

