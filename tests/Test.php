<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public $user;

    public function setUp():void
    {
        $this->test = new Email();
        $this->user = new Usuario();
    }

    public function testEmailAdressForUsername():void
    {

        $this->user->set_correo_usuario("emailaddress@unsa.edu");
        $this->assertEquals("emailaddress@unsa.edu",$this->user->get_correo_usuario());

    }

    public function testNameForUsername():void
    {

        $this->user->set_first_name("Gary");
        $this->assertEquals("Gary",$this->user->get_first_name());
    }

    public function testSurNameForUsername():void
    {

        $this->user->set_sur_name("Menendez");
        $this->assertEquals("Menendez",$this->user->get_sur_name());
    }

    public function testFullNameForUsername():void
    {
        $this->user->set_first_name("Gary");
        $this->user->set_sur_name("Menendez");
        $this->assertEquals("Gary Menendez",$this->user->get_full_name());
    }

    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }

}


