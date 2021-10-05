# Extract all products from WooCommerce 

Problem with WooCommerce REST API is that when requesting a large number of products, the Wordpress server will time out and return HTTP 500. 
This function will split the request into 100 products at a time and merge to array. 

1. If response contains 100 products, get next 100 and so on. 
2. If request contains less than 100 products, then there are no more products to request. 

## Usage

1. Clone the project with `git clone`
2. Duplicate `.env.example` to `.env` and edit domain, CK and CS API keys from WooCommerce
3. Run `composer install`
