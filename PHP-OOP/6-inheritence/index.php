<?
/* 
-------- CLASS ----------
Di dalam pemrograman berorientasi objek (OOP), sebuah class adalah sebuah blueprint atau cetakan untuk menciptakan INSTANCE dari objek-objek yang memiliki data dan perilaku yang disebut dengan atribut (property) dan metode (fungsi) yang sama. Class menyediakan struktur dasar yang mendefinisikan bagaimana sebuah objek harus dibentuk.

Dalam PHP, untuk membuat sebuah class, Anda dapat menggunakan kata kunci `class` diikuti dengan nama class yang ingin Anda buat dan dibatasi dengan kurung kurawal "{}" untuk menyimpan property dan method. Berikut adalah contoh sederhana cara membuat sebuah class dalam PHP:

// Mendefinisikan class "Person"
class Person {
    // Atribut atau properti dari class
    public $name;
    public $age;

    // Metode atau fungsi dari class
    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person"
$person1 = new Person();
$person1->name = "John";
$person1->age = 25;

// Memanggil metode greet()
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
?>
```

*catatan: penamaan class diusakah menggunakan huruf kapital disetiap kata termasuk kata pertama

Dalam contoh di atas, kita telah membuat sebuah class bernama `Person` yang memiliki dua properti yaitu `$name` dan `$age`, serta sebuah metode bernama `greet()` yang mengembalikan salam dengan nama dan umur yang diberikan. Setelah itu, kita membuat sebuah objek dari class `Person` dengan menggunakan kata kunci `new`, dan mengisi nilai properti `$name` dan `$age`, lalu memanggil metode `greet()` dari objek yang telah dibuat.
*/

/* 
------ OBJECT -------
Untuk membuat sebuah objek dalam PHP, Anda harus menggunakan class yang telah didefinisikan sebelumnya. Objek adalah instansi atau contoh konkret dari sebuah class, yang memiliki akses ke semua properti dan metode yang didefinisikan di dalam class tersebut.

Berikut adalah contoh cara membuat objek dalam PHP:

// Mendefinisikan class "Person"
class Person {
    // Atribut atau properti dari class
    public $name;
    public $age;

    // Metode atau fungsi dari class
    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person"
$person1 = new Person();
$person1->name = "John";
$person1->age = 25;

// Memanggil metode greet() dari objek
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.

// Membuat objek lain dari class "Person"
$person2 = new Person();
$person2->name = "Alice";
$person2->age = 30;

// Memanggil metode greet() dari objek lain
echo $person2->greet(); // Output: Hello, my name is Alice and I am 30 years old.
?>
```

Dalam contoh di atas, kita membuat dua objek (`$person1` dan `$person2`) dari class `Person` yang sama. Kita kemudian mengisi nilai properti `$name` dan `$age` untuk setiap objek, dan memanggil metode `greet()` dari masing-masing objek tersebut untuk menampilkan pesan salam dengan nilai yang sesuai.

*banyak object dapat dibuat dengan menggunakan satu class saja
*object dibuat dengan menggunakan keyword new
*/

/* 
------- PROPERTY DAN METHOD --------
Property (Atribut):

Property adalah variabel yang terkait dengan suatu objek atau class.
Property merepresentasikan karakteristik atau data yang dimiliki oleh objek tersebut.
Variabel yang ada di dalam object disebut dengan member variable.
Setiap objek yang dibuat dari sebuah class memiliki salinan dari setiap property yang didefinisikan dalam class tersebut.
Pembuatan property dilakukan dengan menambahkan visibility di depannya menggunakan keyword `public`, `protected`, atau `private` diikuti dengan nama property dan nilai awal jika diperlukan.
Property dideklarasikan di dalam class dan bisa diakses melalui objek yang dibuat dari class tersebut.
Contoh property bisa berupa nama, umur, alamat, dan sebagainya.

Method (Fungsi):

Method adalah fungsi yang terkait dengan suatu objek atau class.
Method merepresentasikan perilaku atau tindakan yang bisa dilakukan oleh objek tersebut.
Method dapat mengakses dan memanipulasi property objek.
Method juga dideklarasikan di dalam class dan bisa dipanggil melalui objek yang dibuat dari class tersebut.
Pembuatan method dilakukan dengan menambahkan visibility di depannya menggunakan keyword `public`, `protected`, atau `private` diikuti dengan nama method dan blok kode yang berisi implementasi method tersebut (tidak ditambahkan visibility tidak apa apa namun dengan nilai default public).
Contoh method bisa berupa greet(), walk(), eat(), dan sebagainya.
*/

/* 
------ CONSTRUCTOR ------
Constructor adalah metode khusus dalam sebuah class yang dieksekusi secara otomatis ketika sebuah objek dari class tersebut dibuat. Constructor biasanya digunakan untuk melakukan inisialisasi awal terhadap objek, seperti mengatur nilai awal untuk properti-properti objek.

Di dalam PHP, constructor didefinisikan dengan nama khusus `__construct()`. Ketika Anda membuat objek dari sebuah class, PHP secara otomatis mencari metode `__construct()` dalam class tersebut dan menjalankannya.

Berikut adalah contoh penggunaan constructor dalam PHP:

class Person {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.";
    }

    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person" dengan constructor
$person1 = new Person("John", 25);

// Memanggil method greet()
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
?>
```

Dalam contoh di atas, constructor `__construct()` menerima dua parameter, yaitu `$name` dan `$age`, dan kemudian menginisialisasi properti `$name` dan `$age` dengan nilai-nilai yang diberikan. Ketika objek `$person1` dibuat menggunakan `new Person("John", 25)`, constructor dipanggil otomatis untuk melakukan inisialisasi. Selain melakukan inisialisasi, constructor juga menampilkan pesan "A new person object has been created.".

Constructor memungkinkan Anda untuk menyediakan nilai awal untuk properti-properti objek, sehingga menghindari kebutuhan untuk menginisialisasi properti secara terpisah setelah objek dibuat. Ini membuat kode lebih bersih dan lebih mudah dipahami.
*/

/*
------ OBJECT TYPE ------
Object Type adalah tipe data yang digunakan untuk mendefinisikan objek dari sebuah class. Dalam PHP, object type digunakan untuk menentukan tipe data dari parameter atau return value yang harus berupa objek dari class tertentu.

Object type digunakan untuk memastikan bahwa parameter yang diterima oleh suatu fungsi atau metode adalah objek dari class yang diinginkan, sehingga meminimalisir kesalahan dan mempermudah debugging. Jika parameter yang diterima bukan objek dari class yang diharapkan, PHP akan menghasilkan error.

Berikut adalah contoh penggunaan object type dalam PHP:
public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
    echo "A new person object has been created.";
}

public function greet() {
    return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
}
*/

/*
------ INHERITENCE ------
Inheritance (Pewarisan) adalah konsep dalam pemrograman berorientasi objek (OOP) yang memungkinkan sebuah class (child class) untuk mewarisi properti dan metode dari class lain (parent class). Dengan inheritance, Anda dapat membuat class baru yang menggunakan properti dan metode yang telah didefinisikan dalam class yang sudah ada.

Child class mewarisi semua properti dan metode dari parent class, dan dapat menambahkan properti dan metode tambahan atau mengubah properti dan metode yang sudah ada. Dengan inheritance, Anda dapat membuat hierarki class yang memungkinkan Anda untuk mengelompokkan class-class yang memiliki kesamaan properti dan metode.

Berikut adalah contoh penggunaan inheritance dalam PHP:
// Parent class
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.";
    }

    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Child class inheriting from Person class
class Student extends Person {
    public $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }

    public function study() {
        return $this->name . " is studying in grade " . $this->grade;
    }
}

// Creating objects from both classes
$person1 = new Person("John", 25);
$student1 = new Student("Alice", 18, 12);

// Calling methods from both classes
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
echo $student1->greet(); // Output: Hello, my name is Alice and I am 18 years old.
echo $student1->study(); // Output: Alice is studying in grade 12.
*/

class Coba
{
}

$a = new Coba();
$b = new Coba();
$c = new Coba();
$d = new Coba();
