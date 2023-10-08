<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CategoryItemRepository;
use App\Repositories\CategoryItemRepositoryInterface;

use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\ProductDetailRepository;
use App\Repositories\ProductDetailRepositoryInterface;
use App\Repositories\ProductImageRepository;
use App\Repositories\ProductImageRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryItemRepositoryInterface::class, CategoryItemRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(ProductDetailRepositoryInterface::class, ProductDetailRepository::class);
        $this->app->bind(ProductImageRepositoryInterface::class, ProductImageRepository::class);

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
