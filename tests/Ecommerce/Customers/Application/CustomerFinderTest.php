<?php

namespace Tests\Ecommerce\Customers\Application;

use Ecommerce\Customers\Application\CustomerFinder;
use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerId;
use Ecommerce\Customers\Domain\Exceptions\CustomerNotExists;
use Ecommerce\Customers\Domain\Persistence\CustomerRepository;
use Mockery\MockInterface;
use Tests\Ecommerce\Customers\Domain\MotherObjects\CustomerMother;
use Tests\TestCase;

class CustomerFinderTest extends TestCase
{
    public function test_should_throw_exception_when_customer_not_exists(): void
    {
        /** @var CustomerRepository $repository  */
        $repository = $this->mock(CustomerRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('find')->andReturnNull();
        });

        $finder = new CustomerFinder($repository);

        $this->expectException(CustomerNotExists::class);
        $this->expectExceptionMessage("The customer does not exist");

        ($finder)(new CustomerId(12909));
    }

    public function test_should_return_a_customer_aggregate_when_is_found(): void
    {
        /** @var CustomerRepository $repository  */
        $repository = $this->mock(CustomerRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('find')->andReturn(CustomerMother::create());
        });

        $finder = new CustomerFinder($repository);

        $customer = ($finder)(new CustomerId(12909));

        $this->assertInstanceOf(Customer::class, $customer);
    }
}
