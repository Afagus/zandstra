<?php


class ShopProduct
{
    public string $title = 'Стандартный товар';
    public string $producerMainName = 'Фамилия автора';
    public string $producerFirstName = 'Имя автора';
    public float $price = 0.00;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    ){
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
     }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producerMainName . ' '
            . $this->producerFirstName;
    }

}

class ShopProductWriter
{
    public function write (ShopProduct $shopProduct): void
    {
        $str = $shopProduct->title . ': '
            . $shopProduct->getProducer()
            . ' (' . $shopProduct->price . ')';
        print $str;

    }
}

$product = new ShopProduct('Book', 'John', 'Smith', 123);

var_dump($product);
