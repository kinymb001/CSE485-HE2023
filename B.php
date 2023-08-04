<?php

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