# Laravel-Redis
Optimize your Apps with Redis

# 1. Install Redis Server
First, you need Redis Server in your Env.
For Example in ubuntu https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-redis-on-ubuntu-16-04.

# 2. Install GUI Redis with Redis Commander
Install GUI Redis with NPM https://www.npmjs.com/package/redis-commander

# 3. Clone this Repository
use git clone https://github.com/Thomas-wangsa/Laravel-Redis.git

# 4. Run Factory Faker
just type phpunit test/Unit to populate 50.000 rows dummy data users, dont forget set your env :)

# 5. Compare the result process time 
1. run your artisan with php artisan serve, then visit the home route and check the process time
2. use composer require predis/predis and the uncommented function index in Home Controller and see redis make your apps more faster :D
 