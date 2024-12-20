$arr = array("a", "b", "c");//create array

$numbers = range(1, 5); // [1, 2, 3, 4, 5]

array_push($arr, "d");

array_pop($arr);

array_unshift($arr, "x");

array_shift($arr);

if (in_array("b", $arr)) { echo "Found"; }

if (array_key_exists("key", $arr)) { echo "Key exists"; }

if (is_array($arr)) { echo "It's an array"; }

sort($arr);

rsort($arr);

asort($arr);

ksort($arr);

$string1 = "Hello, World!"; // باستخدام علامات مزدوجة
$string2 = 'Hello, World!'; // باستخدام علامات فردية

$name = "Ahmed";
echo "Hello, $name"; // يطبع: Hello, Ahmed
echo 'Hello, $name'; // يطبع: Hello, $name

echo strlen("Hello"); // النتيجة: 5

echo strpos("Hello World", "World"); // النتيجة: 6

echo str_replace("World", "PHP", "Hello World"); // النتيجة: Hello PHP

$text = "Hello,World,PHP";
$array = explode(",", $text); // [Hello, World, PHP]

$arr = ["Hello", "PHP"];
echo implode(" ", $arr); // النتيجة: Hello PHP


echo strtolower("HELLO"); // النتيجة: hello

echo strtoupper("hello"); // النتيجة: HELLO

echo ucfirst("hello"); // النتيجة: Hello

echo ucwords("hello world"); // النتيجة: Hello World

echo trim("  Hello  "); // النتيجة: Hello

echo substr("Hello World", 0, 5); // النتيجة: Hello

echo strrev("Hello"); // النتيجة: olleH

$name = "Ahmed";
echo "Hello, " . $name . "!"; // النتيجة: Hello, Ahmed!

heredoc:

$text = <<<EOT
This is a
multi-line string.
EOT;

echo $text;

nowdoc (single quote):

$text = <<<'EOT'
This is a
multi-line string with no parsing.
EOT;

echo $text;
