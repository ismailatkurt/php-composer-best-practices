## Install dependencies on development environment
```
composer install --dev
```

## Install dependencies on production environment
If you install your dependencies this command, it will not integrate the libraries placed inside "require-dev" section of your composer.json file.
```
composer install --no-dev -o
```

-o: stands for optimize option of composer. It generates classmap so that filesystem check will not be needed

More info [here](https://getcomposer.org/doc/articles/autoloader-optimization.md#optimization-level-1-class-map-generation).

## How to run the project