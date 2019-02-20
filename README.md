# Api_importer
###### Deal with different data sources with different data format and insert it into unified database




##### Supported Data Types
* CSV
* JSON
* XML


### Usage 


###### JSON Type
```

$obj = new Importer('demo/test.json', 'json');
echo '<pre>', print_r($obj->get(), 1), '</pre>';


// Returned Array
/*
Array
(
    [0] => Array
        (
            [product_name] => product test
            [quantity] => 20
            [price] => 55
            [extra] => Array
                (
                    [x] => 1
                    [y] => 2
                )

            [breif] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

    [1] => Array
        (
            [product_name] => product test 2
            [quantity] => 30
            [price] => 45
            [breif] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

)
*/

```


###### CSV Type
```

$obj = new Importer('demo/test.csv', 'csv');
echo '<pre>', print_r($obj->get(), 1), '</pre>';


// Returned Array
/*
Array
(
    [0] => Array
        (
            [0] => product_name
            [1] => quantity
            [2] => price
            [3] => breif
        )

    [1] => Array
        (
            [0] => product test
            [1] => 20
            [2] => 55
            [3] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

    [2] => Array
        (
            [0] => product test
            [1] => 30
            [2] => 65
            [3] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

)

*/

```


###### XML Type
```

$obj = new Importer('demo/test.xml', 'xml');
echo '<pre>', print_r($obj->get(), 1), '</pre>';


// Returned Array
/*
Array
(
    [0] => Array
        (
            [product_name] => product test
            [quantity] => 20
            [price] => 55
            [extra] => Array
                (
                    [x] => 1
                    [y] => 2
                )

            [breif] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

    [1] => Array
        (
            [product_name] => product test 2
            [quantity] => 30
            [price] => 45
            [breif] => Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        )

)
*/

```

##### Installation 
You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):
```
composer require ahmedelzarzmony/api_importer:dev-master
```

If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:
```
composer require --dev ahmedelzarzmony/api_importer:dev-master
```
