<h1 align="center">
Toko Bunga
</h1>

<p align="left">
Here are the installation steps for this project:
</p>

1.Clone this repository to your local machine by running the following command in your terminal or command prompt:


```bash
git clone git@github.com:arjunstein/toko-bunga.git
```

2. Navigate to the project directory:
```bash
cd toko-bunga
```
3. Install the composer packages, run the following command :
```bash
composer install
```
4. In the root directory, you will find a file named .env.example rename the given file name to .env and run the following command to generate the key (and you can also edit your data base credentials here)
```bash
php artisan key:generate
```
5. Install all dependencies by running the command:
```bash
npm install
```
6. To run the project you need to run following command in the project directory. It will compile the vue files & all the other project files. If you are making any changes in any of the .vue file then you need to run the given command again.

```bash
# For yarn
yarn dev
    
# For npm
npm run dev
```
7. To serve the application you need to run the following command in the project directory. (This will give you an address with port number 8000)
Now navigate to the given address you will see your application is running 

```bash
php artisan serve
```
