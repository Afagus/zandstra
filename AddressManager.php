<?php


class AddressManager
{
    private array $addresses = ['209.131.36.159', '216.58.213.174'];
    public function outputAddresses(bool $resolve): void
    {
        foreach ($this->addresses as $address){
            print $address;
            if ($resolve){
                print " (". gethostbyaddr($address).")";
            }
            print '<br />';
        }
    }
}
$settings = simplexml_load_string(file_get_contents(__DIR__ . '/resolve.xml'));
$manager = new AddressManager();
$manager->outputAddresses((string) $settings->resolvedomains);