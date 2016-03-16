#Starter Kit para crear temas de Wordpress

##Objetivo
Crear un punto de partida y crear un entorno de desarrollo basado en _stylus_ como pre-procesador de **CSS** y _gulp_ con browser-sync y desarrollo real time.
El archivo más importante es el _gulpfile.js_

##Iniciar el Proyecto

Para iniciar el proyecto:

1. Arrancamos el servidor local Apache o Ngix
1. Entrar al backend wordpress y en Aspecto activar la plantilla starter
1. Arrancamos gulp en el terminal:

```
npm install
```

Este comando instalará todas los módulos de node que necesita.
Una vez instalado, basta con usar:

```
gulp
```

Y ya tendremos nuestros servidor corriendo en localhost:3000.

_Importante: En el gulpfile, hay que poner el proxy donde está escuchando nuestra instalación de WP_

**Notas**:
Es muy importante cargar datos de ejemplo o archivos sample para editar en caliente los elementos.
En desarrollo, comentar la línea 35 de gulpfile.js y descomentarla para producción:
```js
	// .pipe(minifyCSS())
```	
Al descomentarlar hay que añadir en style.css los títulos del theme:
```css
/*
Theme Name: Starter Kit Para WordPress
Theme URI: http://gallardoramos.com
Author: Fran Gallardo (@fran__gallardo)
Author URI: http://gallardoramos.com
Description: Este es un tema de inicio para crear themes de Wordpress usando como entorno de desarrollo Gulp y Stylus
Version: 0.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: fg-starterkit
*/
```