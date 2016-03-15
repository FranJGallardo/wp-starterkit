#Starter Kit para crear temas de Wordpress

##Objetivo
Crear un punto de partida y crear un entorno de desarrollo basado en _stylus_ como pre-procesador de **CSS** y _gulp_ con browser-sync y desarrollo real time.
El archivo más importante es el _gulpfile.js_

##Iniciar el Proyecto

Para iniciar el proyecto:

1.- Lanzar MAMP si estamos en local para arrancar nuestros servidores
1.- Abrir el wp-admin de wordpress y activar la plantilla starter
1.- Arrancamos gulp:

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