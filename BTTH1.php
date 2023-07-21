<?php
//bt1:
  $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
  function calculate($arrs) {
      // Tính tổng
      $sum = array_sum($arrs);

      // Tính tích
      $product = array_product($arrs);

      // Tính hiệu
      $diff = $arrs[0];
      for ($i = 1; $i < count($arrs); $i++) {
          $diff -= $arrs[$i];
      }

      // Tính thương
      $quotient = $arrs[0];
      for ($i = 1; $i < count($arrs); $i++) {
          $quotient /= $arrs[$i];
      }

      // In kết quả
      echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
      echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
      echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>";
      echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quotient . "<br>";
  }

  // Sử dụng hàm
  $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
  calculate($arrs);

//BT2:

$color = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];

// Tạo chuỗi
$str = '';
foreach ($color as $key => $value) {
    if ($key == count($color) - 1) {
        $str .= "còn màu yêu thích của tôi là màu " . $value;
    } else {
        $str .= "Màu " . $value . " là màu yêu thích của " . $names[$key] . ", ";
    }
}

// Hiển thị chuỗi
echo $str;

//BT4

$arrs1 = array(
  "Italy" => "Rome",
  "Luxembourg" => "Luxembourg",
  "Belgium" => "Brussels",
  "Denmark" => "Copenhagen",
  "Finland" => "Helsinki",
  "France" => "Paris",
  "Slovakia" => "Bratislava",
  "Slovenia" => "Ljubljana",
  "Germany" => "Berlin",
  "Greece" => "Athens",
  "Ireland" => "Dublin",
  "Netherlands" => "Amsterdam",
  "Portugal" => "Lisbon",
  "Spain" => "Madrid",
  "Sweden" => "Stockholm",
  "United Kingdom" => "London",
  "Cyprus" => "Nicosia",
  "Lithuania" => "Vilnius",
  "Czech Republic" => "Prague",
  "Estonia" => "Tallin",
  "Hungary" => "Budapest",
  "Latvia" => "Riga",
  "Malta" => "Valetta",
  "Austria" => "Vienna",
  "Poland" => "Warsaw"
);

// Hiển thị thông tin
foreach ($arrs1 as $key => $value) {
  echo "Thủ đô của " . $key . " là " . $value . "<br>";
}

//BT5:
$a = [
  'a' => [
      'b' => 0,
      'c' => 1
  ],
  'b' => [
      'e' => 2,
      'o' => [
          'b' => 3
      ]
  ]
];

// Lấy giá trị = 3 mà có key là b
$value1 = $a['b']['o']['b'];

// Lấy giá trị = 1 mà có key là c
$value2 = $a['a']['c'];

// Lấy thông tin của phần tử có key là a
$info = $a['a'];

// Hiển thị kết quả
echo "Giá trị = " . $value1 . " mà có key là b<br>";
echo "Giá trị = " . $value2 . " mà có key là c<br>";
echo "Thông tin của phần tử có key là a:<br>";
print_r($info);

//BT6:
$keys = array(
  "field1" => "first",
  "field2" => "second",
  "field3" => "third"
);

$values = array(
  "field1value" => "dinosaur",
  "field2value" => "pig",
  "field3value" => "platypus"
);

// Tạo mảng kết quả
$keysAndValues = array();
foreach ($keys as $key => $value) {
  $keysAndValues[$value] = $values[$key . "value"];
}

// Hiển thị kết quả
print_r($keysAndValues);

//BT7
$array1 = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

// Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5
$resultArray = array();
for ($i = 0; $i < count($array1); $i++) {
    if ($array1[$i] >= 100 && $array1[$i] <= 200 && $array1[$i] % 5 == 0) {
        array_push($resultArray, $array1[$i]);
    }
}

// Hiển thị kết quả
echo "Các số từ 100 đến 200 và chia hết cho 5 trong mảng là:<br>";
print_r($resultArray);


//BT8
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Tìm chuỗi có độ dài lớn nhất và nhỏ nhất
$maxLength = 0;
$minLength = PHP_INT_MAX;
$maxString = '';
$minString = '';
foreach ($array as $value) {
    $length = strlen($value);
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $value;
    }
    if ($length < $minLength) {
        $minLength = $length;
        $minString = $value;
    }
}

// Hiển thị kết quả
echo "Chuỗi lớn nhất là " . $maxString . ", độ dài = " . $maxLength . "<br>";
echo "Chuỗi nhỏ nhất là " . $minString . ", độ dài = " . $minLength . "<br>";


//BT9
function convertToLowerCase($array) {
  for ($i = 0; $i < count($array); $i++) {
      if (is_string($array[$i])) {
          $array[$i] = strtolower($array[$i]);
      }
  }
  return $array;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$arr1 = convertToLowerCase($arr1);
$arr2 = convertToLowerCase($arr2);
$arr3 = convertToLowerCase($arr3);

print_r($arr1);
print_r($arr2);
print_r($arr3);


//Bt10

function convertToUpperCase($array) {
  for ($i = 0; $i < count($array); $i++) {
      if (is_string($array[$i])) {
          $array[$i] = strtoupper($array[$i]);
      }
  }
  return $array;
}

$arr11 = ['a', 'b', 'ABC'];
$arr22 = ['1', 'b', 'c', 'd'];
$arr33 = ['a', 0, null, false];

$arr11 = convertToUpperCase($arr11);
$arr22 = convertToUpperCase($arr22);
$arr33 = convertToUpperCase($arr33);

print_r($arr11);
print_r($arr22);
print_r($arr33);

//bt11:
$array11 = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 trong mảng
unset($array11[2]);

// Đảm bảo key của mảng là tuần tự
$array11 = array_values($array11);

// Hiển thị kết quả
print_r($array11);


//BT12:

$numbers = [
  'key1' => 12,
  'key2' => 30,
  'key3' => 4,
  'key4' => -123,
  'key5' => 1234,
  'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);

// Sắp xếp mảng theo chiều tăng, giảm các giá trị
sort($numbers);
$ascendingOrder = $numbers;
rsort($numbers);
$descendingOrder = $numbers;

// Sắp xếp mảng theo chiều tăng, giảm các key
ksort($numbers);
$ascendingKeyOrder = $numbers;
krsort($numbers);
$descendingKeyOrder = $numbers;

// Hiển thị kết quả
echo "Phần tử đầu tiên của mảng là: " . $firstElement . "<br>";
echo "Phần tử cuối cùng của mảng là: " . $lastElement . "<br>";
echo "Số lớn nhất trong mảng là: " . $maxValue . "<br>";
echo "Số nhỏ nhất trong mảng là: " . $minValue . "<br>";
echo "Tổng các giá trị trong mảng là: " . $sum . "<br>";

echo "Mảng được sắp xếp theo chiều tăng các giá trị: <br>";
print_r($ascendingOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều giảm các giá trị: <br>";
print_r($descendingOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều tăng các key: <br>";
print_r($ascendingKeyOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều giảm các key: <br>";
print_r($descendingKeyOrder);


//bt13:
$numbers1 = [
  'key1' => 12,
  'key2' => 30,
  'key3' => 4,
  'key4' => -123,
  'key5' => 1234,
  'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và cuối cùng trong mảng
$firstElement = reset($numbers1);
$lastElement = end($numbers1);

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
$maxValue = max($numbers1);
$minValue = min($numbers1);
$sum = array_sum($numbers1);

// Sắp xếp mảng theo chiều tăng, giảm các giá trị
sort($numbers1);
$ascendingOrder = $numbers1;
rsort($numbers1);
$descendingOrder = $numbers1;

// Sắp xếp mảng theo chiều tăng, giảm các key
ksort($numbers1);
$ascendingKeyOrder = $numbers1;
krsort($numbers1);
$descendingKeyOrder = $numbers1;

// Hiển thị kết quả
echo "Phần tử đầu tiên của mảng là: " . $firstElement . "<br>";
echo "Phần tử cuối cùng của mảng là: " . $lastElement . "<br>";
echo "Số lớn nhất trong mảng là: " . $maxValue . "<br>";
echo "Số nhỏ nhất trong mảng là: " . $minValue . "<br>";
echo "Tổng các giá trị trong mảng là: " . $sum . "<br>";

echo "Mảng được sắp xếp theo chiều tăng các giá trị: <br>";
print_r($ascendingOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều giảm các giá trị: <br>";
print_r($descendingOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều tăng các key: <br>";
print_r($ascendingKeyOrder);
echo "<br>";
echo "Mảng được sắp xếp theo chiều giảm các key: <br>";
print_r($descendingKeyOrder);


//bt14:

$array14 = [
  [77, 87],
  [23, 45]
];
$array24 = [
  'giá trị 1', 'giá trị 2'
];

$result = array();
for ($i = 0; $i < count($array14); $i++) {
  $result[$i] = array_merge(array($array24[$i]), $array14[$i]);
}

print_r($result);


//bt15:

// interface IBook
interface IBook
{
    public function setName($name);
    public function getName();
    public function setAuthor($author);
    public function getAuthor();
    public function setPublisher($publisher);
    public function getPublisher();
    public function setPublishYear($year);
    public function getPublishYear();
    public function setISBN($isbn);
    public function getISBN();
    public function setChapters($chapters);
    public function getChapters();
}

//class Book
class Book implements IBook
{
  private $name;
  private $author;
  private $publisher;
  private $publishYear;
  private $isbn;
  private $chapters;

  public function setName($name)
  {
      $this->name = $name;
  }

  public function getName()
  {
      return $this->name;
  }

  public function setAuthor($author)
  {
      $this->author = $author;
  }

  public function getAuthor()
  {
      return $this->author;
  }

  public function setPublisher($publisher)
  {
      $this->publisher = $publisher;
  }

  public function getPublisher()
  {
      return $this->publisher;
  }

  public function setPublishYear($year)
  {
      $this->publishYear = $year;
  }

  public function getPublishYear()
  {
      return $this->publishYear;
  }

  public function setISBN($isbn)
  {
      $this->isbn = $isbn;
  }

  public function getISBN()
  {
      return $this->isbn;
  }

  public function setChapters($chapters)
  {
      $this->chapters = $chapters;
  }

  public function getChapters()
  {
      return $this->chapters;
  }
}

//class Booklist
class BookList
{
    private $books;

    public function __construct()
    {
        $this->books = array();
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function sortByName()
    {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getName(), $b->getName());
        });
    }

    public function sortByAuthor()
    {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    public function sortByPublishYear()
    {
        usort($this->books, function ($a, $b) {
            return $a->getPublishYear() - $b->getPublishYear();
        });
    }
}

// Khởi tạo danh sách các cuốn sách
$bookList = new BookList();

// Thêm sách mới
$book1 = new Book();
$book1->setName('Sách 1');
$book1->setAuthor('Tác giả A');
$book1->setPublisher('NXB X');
$book1->setPublishYear(2021);
$book1->setISBN('1234567890');
$book1->setChapters(array('Chương 1', 'Chương 2', 'Chương 3'));
$bookList->addBook($book1);

$book2 = new Book();
$book2->setName('Sách 2');
$book2->setAuthor('Tác giả B');
$book2->setPublisher('NXB Y');
$book2->setPublishYear(2022);
$book2->setISBN('0987654321');
$book2->setChapters(array('Chương 1', 'Chương 2'));
$bookList->addBook($book2);

// Hiển thị danh sách các cuốn sách
echo '<h1>Danh sách các cuốn sách</h1>';
echo '<ul>';
foreach ($bookList->getBooks() as $book) {
    echo '<li>' . $book->getName() . ' (' . $book->getAuthor() . ')</li>';
}
echo '</ul>';

// Sắp xếp danh sách theo thứ tự được sắp theo tên tác giả, tên sách, năm xuất bản
$bookList->sortByAuthor();

echo '<h1>Danh sách các cuốn sách (sắp xếp theo tác giả)</h1>';
echo '<ul>';
foreach ($bookList->getBooks() as $book) {
    echo '<li>' . $book->getAuthor() . ': ' . $book->getName() . '</li>';
}
echo '</ul>';

$bookList->sortByName();

echo '<h1>Danh sách các cuốn sách (sắp xếp theo tên sách)</h1>';
echo '<ul>';
foreach ($bookList->getBooks() as $book) {
    echo '<li>' . $book->getName() . ' (' . $book->getAuthor() . ')</li>';
}
echo '</ul>';

$bookList->sortByPublishYear();

echo '<h1>Danh sách các cuốn sách (sắp xếp theo năm xuất bản)</h1>';
echo '<ul>';
foreach ($bookList->getBooks() as $book) {
    echo '<li>' . $book->getName() . ' (' . $book->getPublishYear() . ')</li>';
}
echo '</ul>';