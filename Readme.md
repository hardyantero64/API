//Api using Symfony and Swagger// //Instruction also available from https://digitalfortress.tech/tutorial/rest-api-with-symfony-and-api-platform//

$ composer create-project symfony/skeleton api

$ composer require symfony/maker-bundle --dev // enable entity maker//

$ composer require doctrine/annotations

$ composer require api

$ composer require symfony/orm-pack

$ composer require doctrine/doctrine-bundle

$ npm install -g swagger //api through swagger//

$ npm install -g npm@8.3.2 //version//

in .env file, alter database url to approrpiate settings

DATABASE_URL="mysql://root:password@127.0.0.1:3306/name_of_your_new_database"

//To create: //

$ php bin/console doctrine:database:create

// Database should be created after this command. If drivers not found, check that php.ini files are updated with drivers//

//after database created:

$ php bin/console list make //shows list of all possible make options (example:  $ php bin/console make:controller)

$ php bin/console make:entity //create entity and enter relevant fields//

//When finished field input://

 $ php bin/console make:migration...

$ php bin/console doctrine:schema:update --dump-sql //check the raw sql query before executing//

$ php bin/console doctrine:schema:update --force //To execute the SQL query//