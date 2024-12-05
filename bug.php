function my_function(&$var) {
  $var = 'new value';
}

$my_var = 'original value';
my_function($my_var);
echo $my_var; // Outputs 'new value'

//However, if you use the function with an array element:
$my_array = ['a', 'b', 'c'];
my_function($my_array[0]);
echo $my_array[0]; //Outputs 'new value'

//But if you try to change the value of the array element in the function:
function my_function2(&$var) {
  $var[] = 'd';
}

$my_array2 = ['a', 'b', 'c'];
my_function2($my_array2[0]);
echo $my_array2[0]; //Outputs 'a'
print_r($my_array2); //Outputs Array ( [0] => a [1] => b [2] => c )