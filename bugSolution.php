//Instead of modifying the array element directly within the function,
//return the modified value and reassign it.
function my_function3(&$var) {
  $new_var = $var;
  $new_var[] = 'd';
  return $new_var; 
}

$my_array3 = ['a', 'b', 'c'];
$my_array3[0] = my_function3($my_array3[0]);
echo $my_array3[0]; //Outputs a
print_r($my_array3); //Outputs Array ( [0] => a [1] => b [2] => c [3] => d )

//Or, if you need to change the value directly, use the reference as expected:
function my_function4(&$var) {
  $var = 'new value';
}

$my_array4 = ['a', 'b', 'c'];
my_function4($my_array4[0]);
echo $my_array4[0]; //Outputs new value