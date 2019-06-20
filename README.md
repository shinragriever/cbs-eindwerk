# cbs-eindwerk

Clone project naar een folder (standaard cbs-eindwerk)

```bash
git clone https://github.com/shinragriever/cbs-eindwerk
```
Installeer Independencies

```bash
composer install && npm install
```


Maak een nieuwe database aan via phpmyadmin  en copy .env.example naar .env

voor Windows:

```
copy .env.example .env
```

Voor Linux/Unix

```bash
cp .env.example .env
```

Wijzig volgende velden in .env (Database login en Braintree api keys): 

```
DB_DATABASE=*database_naam*
DB_USERNAME=*database_gebruikersnaam*
DB_PASSWORD=*database_wachtwoord

BT_ENVIRONMENT=
BT_MERCHANT_ID=
BT_PUBLIC_KEY=
BT_PRIVATE_KEY=
```

Maak een nieuwe key aan voor de Laravel applicatie.

```bash
php artisan key:generate
```

Migrate en Seed)

```bash
php artisan migrate --seed
```

Verbind storage met public
```bash
php artisan storage:link
```



