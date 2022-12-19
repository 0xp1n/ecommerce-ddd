<?php

namespace Tests\Ecommerce\Customers\Infrastructure\Persistence;

use App\Models\Customer as EloquentCustomer;
use Ecommerce\Customers\Domain\Customer;
use Ecommerce\Customers\Domain\CustomerId;
use Ecommerce\Customers\Infrastructure\Persistence\EloquentCustomerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EloquentCustomerRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_should_find_an_existing_customer_by_id(): void
    {
        $repository = new EloquentCustomerRepository();
        $customer = EloquentCustomer::factory()->create();

        $customer_retrieved = $repository->find(new CustomerId($customer->id));

        $this->assertInstanceOf(Customer::class, $customer_retrieved);
        $this->assertEquals($customer_retrieved->id()->value(), $customer->id);
    }

    public function test_should_return_null_when_customer_not_exists(): void
    {
        $repository = new EloquentCustomerRepository();

        $this->assertNull($repository->find(new CustomerId(11918291)));
    }
}
