<?hh

function f($a, $b, $c) {
 return 'hello';
 }
function test($a) {
  $x = ($a->foo = f($b++, $b++, $b++)) . f(1,2,3);
  return $x;
}
<<__EntryPoint>> function main(): void { echo "Done.\n"; }
