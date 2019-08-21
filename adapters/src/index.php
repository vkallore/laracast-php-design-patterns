<?php
    // An adaptor allows you to translate one interface for use with another
    require('./vendor/autoload.php');
    require('./src/Person.php');

    use Acme\Book;
    use Acme\Kindle;
    use Acme\KindleAdapter;
    use Acme\CustomReader;
    use Acme\CustomReaderAdapter;

    (new Person)->read(new Book);
    echo PHP_EOL,PHP_EOL;
    (new Person)->read(new KindleAdapter(new Kindle));
    echo PHP_EOL,PHP_EOL;
    (new Person)->read(new CustomReaderAdapter(new CustomReader));
    echo PHP_EOL,PHP_EOL;