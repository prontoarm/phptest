<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase{
    private $helloWorld;
    
    public function setUp(){
        require_once './src/HelloWorld.php';
        $this->helloWorld = new HelloWorld();
        print_r("Setup");
    }

    public function tearDown(){
        $this->helloWorld = NULL;
        print_r("tearDown");
    }

    public function testGeeting(){
        $given = "arm";
        $result = $this->helloWorld->greeting($given);
        $this->assertEquals("Hello ".$given, $result);
    }

    public function testHello(){
        $given = "arm";
        $result = $this->helloWorld->greeting($given);
        $this->assertEquals("Hello ".$given, $result);
    }

}
/*
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE hello (what VARCHAR(50) NOT NULL)");
    }

    public function tearDown()
    {
        $this->pdo->query("DROP TABLE hello");
    }

    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello World', $helloWorld->hello());
    }

    public function testHello()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }

    public function testWhat()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertFalse($helloWorld->what());

        $helloWorld->hello('Bar');

        $this->assertEquals('Bar', $helloWorld->what());
    }
*/
    ?>
