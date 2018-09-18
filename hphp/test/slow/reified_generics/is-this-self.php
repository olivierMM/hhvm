<?hh

class C {
  const type T1 = int;
  const type T2 = shape(
    'a' => self::T1,
    'b' => this::T1,
  );
}

class D {
  const type T1 = string;
  public function f(mixed $x) {
    $e = new E();
    $e->f<reified C::T2>($x);
  }
}

class E {
  const type T1 = bool;
  public function f<reified T>(mixed $x) {
    var_dump($x is T);
  }
}

$d = new D();

$d->f(shape('a' => 1, 'b' => 2));
$d->f(shape('a' => 'string', 'b' => 2));
$d->f(shape('a' => 1, 'b' => 'string'));
$d->f(shape('a' => 'string', 'b' => 'string'));
