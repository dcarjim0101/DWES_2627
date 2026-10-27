# Proyecto 31 - CRUD TABLA LIBROS

## Funcionalidad del proyecto

- Mostrar tabla libros
- Crear nuevo libro
- Editar libro
- Eliminar libro
- Mostrar libro (sin edición)
- Ordenar tabla libros
- Buscar libros

## Campos de la tabla libros

La tabla libro estará formada por los siguientes campos:
- id
- titulo
- autor
- editorial
- generos 
- precio

Observaciones:

- Géneros se trata de un array que contiene los géneros a los que se le puede asociar el libro ['ficción', 'Bélica']

## Metodología MVC light

La metodología MVC light consiste en lo siguiente:

1. Los contraladores irán todos en la carpeta raiz del proyecto
2. Los modelos no se usarán, puesto que no requiere el acceso a base de datos, aunque se debe crear la carpeta `models`
3. Las vistas irán en la carpeta `views` y las vistas se nombrarán `[nombre controlador].view.php`
4. Los controladores han de ir debidamente documentados

## Fases del proyecto 

El proyecto se realizará por fases,  cada una independiente de la otra, aunque la siguiente fase acumulará la anterior.

Fases:

- Fase 01 - Mostrar Tabla
- Fase 02 - Añadir nuevo libro
- Fase 03 - Editar Libro
- Fase 04 - Eliminar Libro
- Fase 05 - Mostrar Libro
- Fase 06 - Ordenar Tabla Libros
- Fase 07 - Buscar o Filtrar tabla Libros

### Fase 01 - Mostrar Tabla

#### Objetivos
Mostrará en una tabla HTML/CSS BOOTSTRAP 6.0 alpha los detalles de la tabla libros ordenados por id.

#### Librería
Se deberá crear una librería con la función `get_libros()`que devolverá un array con los detalles de la tabla libros. El archivo que contendrá la librería se llamará `functions.php` y se colocará en la carpeta `libs`del proyecto

### Estructura de archivos y directorio

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   └── index.view.php
└── index.php
```

### Fase 02 - Añadir nuevo libro

#### Objetivos

Permitirá al usuario añadir los detalles de un nuevo libro a la tabla. Los detalles del nuevo libro se mostrarán finalmente en la vista principal. Hay que tener en cuenta que una vez añadido el libro y solicitemos cualquier otra acción, cargará la tabla originaria y desaparecerá el nuevo libro introducido. 

#### Controladores

Para la ejecución de esta fase vamos a necesitar dos controladores:

1. **new.php**. Mostrará un formulario en blanco que permita introducir los detalles del nuevo libro
2. **create.php**. Este controador estará asociado a `Añadir Libro` botón que se mostrará en el formulario anterior. Y procederá a añadir el nuevo libro a la tabla libros.

#### Vistas

En cuanto a las vistas tendremos que realizar las siguientes tareas:

1. Vista Principal **index.view.php**. Añadir menú con la opción Nuevo o Añadir, que irá asociado al controlador `new.php`
2. Vista formulario nuevo libro **new.views.php**. Contendrá un formulario que permita añadir los detalles del nuevo libro. El `id` del libro lo ha de obtener a partir del último `id`de la tabla.

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   └── new.view.php
├── index.php
├── new.php
└── create.php
```

### Fase 03 - Editar Libro

#### Objetivos

Permitirá modificar los datos de un libro existente. El formulario mostrará los valores actuales y, al confirmar los cambios, se volverá al listado con el libro actualizado.

#### Controladores

1. **edit.php**. Recibirá el índice del libro que se desea editar, cargará los libros mediante `get_libros()` y enviará el libro seleccionado y su índice a la vista de edición.
2. **update.php**. Recibirá el índice y los campos enviados por el formulario, construirá el libro actualizado conservando su `id`, sustituirá el elemento correspondiente del array y mostrará el listado.

El índice se enviará como parámetro `indice` en la URL. Los campos editables son `titulo`, `autor`, `editorial`, `generos` y `precio`. Los géneros se introducirán como texto separado por comas y se convertirán en un array para mantener el formato utilizado por los libros.

#### Vistas

1. **index.view.php**. Incorporará una acción «Editar» en cada fila, enlazada con `edit.php` y el índice del libro.
2. **edit.view.php**. Mostrará un formulario precargado con los datos del libro. El formulario enviará los cambios a `update.php`; también ofrecerá las acciones «Cancelar» y «Borrar» (restablecer el formulario).

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   ├── new.view.php
│   └── edit.view.php
├── index.php
├── new.php
├── create.php
├── edit.php
└── update.php
```

### Fase 04 - Eliminar Libro

#### Objetivos

Permitirá eliminar del listado el libro seleccionado y volver a mostrar los libros restantes. La operación deberá actuar únicamente sobre el libro cuyo índice se envíe.

#### Controladores

1. **delete.php**. Recibirá el índice del libro que se va a eliminar, cargará el array, comprobará que el índice corresponde a un elemento existente, lo quitará y mostrará el listado actualizado. Después de eliminar, se reindexará el array para que los índices usados por las acciones del listado sean consecutivos.

La eliminación se enviará mediante un formulario `POST` desde cada fila del listado, incluyendo el índice en un campo oculto. Así, la acción de borrar no se ejecutará al visitar un enlace de lectura.

#### Vistas

1. **index.view.php**. Añadirá una acción «Eliminar» en cada fila. Puede solicitar confirmación antes de enviar el formulario para evitar borrados accidentales.

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   ├── new.view.php
│   └── edit.view.php
├── index.php
├── new.php
├── create.php
├── edit.php
├── update.php
└── delete.php
```

### Fase 05 - Mostrar Libro

#### Objetivos

Permitirá consultar todos los datos de un libro sin modificarlos. El listado seguirá mostrando una acción «Mostrar» para acceder a la ficha individual.

#### Controladores

1. **show.php**. Recibirá el índice del libro, cargará los libros mediante `get_libros()`, comprobará que el índice existe y pasará el libro seleccionado a la vista de detalle.

#### Vistas

1. **index.view.php**. Añadirá una acción «Mostrar» en cada fila, enlazada con `show.php` y el índice del libro.
2. **show.view.php**. Presentará en modo de solo lectura el `id`, título, autor, editorial, géneros y precio. Incluirá una acción para volver al listado.

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   ├── new.view.php
│   ├── edit.view.php
│   └── show.view.php
├── index.php
├── new.php
├── create.php
├── edit.php
├── update.php
├── delete.php
└── show.php
```

### Fase 06 - Ordenar Tabla Libros

#### Objetivos

Permitirá ordenar el listado por `id`, título, autor, editorial o precio, en orden ascendente o descendente. El orden se aplicará únicamente a la presentación y no modificará los datos del libro.

#### Controladores

1. **order.php**. Recibirá el campo y el sentido de ordenación, validará que sean valores permitidos, obtendrá los libros y ordenará una copia del array antes de mostrar el listado. Los campos numéricos (`id` y `precio`) se compararán numéricamente; los campos de texto, sin distinguir mayúsculas y minúsculas.

Los parámetros se enviarán por `GET`, por ejemplo `order.php?campo=titulo&sentido=asc`. Si falta un parámetro o no es válido, se utilizará un orden predeterminado o se mostrará el listado sin aplicar la ordenación solicitada.

#### Vistas

1. **index.view.php**. Proporcionará controles de ordenación (por ejemplo, enlaces en las cabeceras o un formulario) para seleccionar el campo y el sentido. El listado resultante conservará las acciones de editar, eliminar y mostrar.

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   ├── new.view.php
│   ├── edit.view.php
│   └── show.view.php
├── index.php
├── new.php
├── create.php
├── edit.php
├── update.php
├── delete.php
├── show.php
└── order.php
```

### Fase 07 - Buscar o Filtrar la Tabla Libros

#### Objetivos

Permitirá buscar libros por un texto introducido por el usuario. La búsqueda se realizará, sin distinguir mayúsculas y minúsculas, en título, autor, editorial y géneros. El listado mostrará únicamente los libros coincidentes e indicará cuando no haya resultados.

#### Controladores

1. **filter.php**. Recibirá el término de búsqueda por `GET`, obtendrá los libros y generará un array con los que coincidan en alguno de los campos de texto. Si el término está vacío, mostrará todos los libros. El controlador pasará a la vista tanto el resultado como el término para mantenerlo visible en el formulario.

#### Vistas

1. **index.view.php**. Incluirá un formulario de búsqueda que enviará el término a `filter.php`, mostrará el término aplicado y ofrecerá una opción para limpiar el filtro y regresar al listado completo. Las acciones de cada libro se conservarán en los resultados.

#### Estructura de Archivos y Directorios

```text
01-crud-libros/
├── libs/
│   └── functions.php
├── views/
│   ├── index.view.php
│   ├── new.view.php
│   ├── edit.view.php
│   └── show.view.php
├── index.php
├── new.php
├── create.php
├── edit.php
├── update.php
├── delete.php
├── show.php
├── order.php
└── filter.php
```

#### Consideración sobre los datos

En estas fases se mantiene el planteamiento inicial: `get_libros()` devuelve un array en memoria y no existe persistencia en base de datos ni sesión. Por tanto, los cambios de crear, editar y eliminar solo estarán disponibles durante la petición que los procesa; al realizar otra petición se volverá a cargar el array original. Para conservar los cambios entre peticiones será necesario incorporar persistencia en una fase posterior.

    


