# covid-19
 Prooyecto COVID-19

## Introducción

La idea inicial es posicionar los motores de busqueda de googlo, despues se implementará el resto de las funcionalidades.

## Instalación

Descargar [COMPOSER][https://getcomposer.org/]

Descargar [XAMMP][https://www.apachefriends.org/es/index.html]

Clonar el repositorio con [Github Desktop][https://desktop.github.com/] y ejecutar el comando 
``` bash 
$ composer install 
```
## Dependencias
[Redsys][https://github.com/ssheduardo/redsys-laravel]
[Solución][https://github.com/ssheduardo/redsys-laravel/issues/38] Para las notificaciones

[DOMPDF][https://github.com/barryvdh/laravel-dompdf]

[USO de Email][https://laravel.com/docs/7.x/notifications]

## Documentación
[Documentación Oficial Laravel][https://laravel.com/docs/7.x/]


##compresion gzip `compress text, html, javascript, css, xml, `
```php
<ifmodule mod_deflate.c>
	AddOutputFilterByType DEFLATE text/plain
	AddOutputFilterByType DEFLATE text/html
	AddOutputFilterByType DEFLATE text/xml
	AddOutputFilterByType DEFLATE text/css
	AddOutputFilterByType DEFLATE application/xml
	AddOutputFilterByType DEFLATE application/xhtml+xml
	AddOutputFilterByType DEFLATE application/rss+xml
	AddOutputFilterByType DEFLATE application/javascript
	AddOutputFilterByType DEFLATE application/x-javascript
</ifmodule>
```

