## Contexto

Un equipo posee un requerimiento para realizar una página web, la cual debe tener ciertas características descritas en las historias de usuario, las cuales funcionan como mapa, para que el equipo de desarrollo pueda realizar una a una y así acercarse más a las necesidades y requerimientos del cliente, a su vez el equipo de desarrollo debe realizar un trabajo en conjunto usando la interfaz de git para realizar un correcto manejo de versiones en la medida que se va agregando código y funcionalidades adicionales a la aplicación web.

Con el fin de mantener una correcta documentación del software, en el readme de la aplicación web debe constar la información que se podrá encontrar en el programa, así como tambien de una forma más detallada la información de los ajustes en el código.

![](media/475c2f415c1d52d8fd4d5ab9ca8a2a5a.png)Según lo descrito se procede a realizar el comando de git init, el cual permitirá iniciar un repositorio en git para hacer el correcto manejo de las versiones del software, así como tambien para poder hacer un trabajo colaborativo, a continuación, se indican algunos pasos que se realizaron para la publicación de este antes de llegar a las historias de usuario.

Luego de esto se procede a usar el comando git status, para consultar los archivos que están dentro de la carpeta y que aún no se han cargado al staging, esto quiere decir que están solo en el computador local pero aún no se cargan en git.

![Texto Descripción generada automáticamente](media/1c9c1b39a0f152b05d99e5df36b316bc.png)

![Texto Descripción generada automáticamente](media/04cd32fba4f4fea7b6785da11c7f0901.png)En el cual, se indica que aún no se ha hecho ningún commit y que si queremos incluir los archivos debemos utilizar la función git add, posteriormente se usa la función “git add .” para poder incluir los archivos correctamente al staging, luego de esto se

Luego de hacer la adición de los archivos al staging, al ejecutar el comando “git status” la consola muestra en verde los archivos que están cargados al staging.

Posteriormente se realiza un “commit -m “Punto de partida del proyecto, se cargan los archivos”” este commit se utiliza para añadir los cambios y archivos que están en el staging al repositorio que se está trabajando, el commit se realizó desde Visual Studio Code, por ende, no está documentado en la consola, pero con el fin de consultar los commits que hasta ahora tiene el programa, hacemos uso de la función “git log” la cual muestra la siguiente información.

![Texto Descripción generada automáticamente](media/1949e0f2d9fe8560b50216954be019ef.png)

Posterior a ello se realiza la creación del repositorio en la web github, con el fin de poder hacer el cargue de los archivos locales al repositorio en git, para esto desde la consola se conecta a la dirección, para ello usamos el siguiente comando “git remote add origin https://github.com/FCamiloRO/site-project.git”

![Texto Descripción generada automáticamente](media/1a3f5913daff2859664ffd1cc9f65e42.png)

![](media/bfc6ce59ccea83f81e1af230dc6d9e3d.png)En consecuencia se ejecuta el comando “git push -u origin master” para llevar todos los archivos que están en el repositorio al repositorio en línea, el cual estará en el enlace señalado en el comando, la respuesta de la consola es.

El sistema de ramas o Branch es el método que usa git para mantener diferentes ramas de código para que luego puedan unirse, esto hace que la posibilidad de trabajar en equipo sea mucho mejor sin tener tantos conflictos a la hora de hacer la unión entre los diferentes trabajos de los desarrolladores, se puede conocer la cantidad de ramas con el comando “git Branch”

![Texto Descripción generada automáticamente](media/e0d3a677ee27b543834831649032370a.png)

La respuesta de la consola muestra que solo hay una rama actualmente en el repositorio y en caso de tener más, mostrará en verde la rama en la que actualmente se está trabajando, con un fin lúdico se creará un nuevo Branch con el comando “git branch login”

![Texto Descripción generada automáticamente](media/3534c11d2859800e8fc7edec2ecb418c.png)

Y ahora se consultarán las ramas existentes con el comando “git branch”

![Imagen que contiene Texto Descripción generada automáticamente](media/1df8df797831e47e91bd2284fcf7dbc3.png)

En el caso de querer cambiar de Branch, se usa el comando “git checkout login” y luego se consulta con el comando “git branch”

![](media/7a47ecd08a55a27cf87c0cc90a2142e9.png)

De esta forma se puede cambiar de branch y así mismo trabajar en una funcionalidad y volver a la otra rama y seguir trabajando sin los cambios que pueda tener la otra rama.

Repositorio:

# Historias de Usuario

### Historia de Usuario 1

Como: cliente

Puedo: Ver un menú de navegación

Para: que el usuario pueda navegar por diferentes opciones

Detalle:

Para el primer commit la página web, como bien lo indicaba el primer commit, lo que se pretendía con este era subir los archivos que iban a ser tratados por los desarrolladores en diferentes momentos, con lo cual su interfaz lucia así.

![](media/f6a3ea8dc4f7bf09b41ceac41384588a.png)

Para ello se realizaron los cambios pertinentes para tratar la historia de usuario, a su ves se hace la consulta del status para saber los archivos modificados.

![](media/6feb0278a9146b6fdab91434a218b1a7.png)

como bien lo indica la respuesta del comando de status, se está en el brench de login, para llevar estos cambios al brench master, se debe cambiar al brench master y usar el comando merge, para unir los cambios hechos en el brench de login al brench de master, con el siguiente comando “git merge login”  
![](media/65fcfddb0a2172e96d10997aa442c204.png)

La respuesta indica que hay cambios en los archivos indicados, y que hay líneas modificadas indicando con una cruz verde si se añadieron cambios y si hay modificaciones a lo que antes estaba en el código lo marcara con una cruz roja.

Como se está de acuerdo con la corrección hecha, se procede a hacer el commit con el siguiente titulo.

![Texto Descripción generada automáticamente](media/c30fcd4306772592ca45c0b481359ab9.png)

De esta forma la barra de navegación queda de la siguiente forma.

![](media/41e3364c604daa72b53cca72091b508a.png)

### Historia de Usuario 2

Como: usuario

Puedo: Ver amigablemente el entorno de inicio

Para: Tener mejor interfaz con información acerca de la página

Detalle:

![](media/cd5e748faf3fac450b9f0cbddb4a0319.png)El software presentaba la siguiente interfaz

Se realizó el ajuste en el titulo y se agregó la imagen y la descripción en el archivo index.html

![](media/dd8f09df4a7a31d1dbd4ae66517bd01a.png)

Posterior a ello se realiza el commit y la carga de los archivos al repositorio en línea.

![Texto Descripción generada automáticamente](media/e2aaa76a5b591b9fa5f9269e273f0be9.png)

Comparaciones en el código incluido

![](media/885657d92a3764128a03ee2487598984.png)

![Pantalla de computadora Descripción generada automáticamente con confianza media](media/885657d92a3764128a03ee2487598984.png)

Con el siguiente avance para el final de la historia 2.

![Interfaz de usuario gráfica Descripción generada automáticamente](media/ba9cafb42c52444afc4564b38c60f574.png)

## Historia de Usuario 3

Como: cliente

Puedo: Iniciar sesión en la página web

Para: Tener un espacio personal en el sitio web

Detalle:

Para el inicio de esta historia de usuario no se contaba con un archivo de login, luego de realizar el desarrollo del login, se hace el merge con el branch master y posteriormente se realiza el commit![](media/687ce26ca3430f74b1490226689db93f.png)

![](media/10ca8e6770f16f76728ea7b1685323f9.png)

![](media/7b046b2c1b1cff997bd86684256887db.png)

Adición de código:

![](media/f9a49cb65d0d389c8fffb1eb60e981af.png)

Al finalizar la historia, el login queda de la siguiente forma.

![](media/816c87373ef358267b46414fbba2f028.png)

## Historia de Usuario 4

Como: Usuario

Puedo: tener un espacio de registro

Para: posteriormente poder acceder a hacer el login

Detalle:

Para el inicio de esta historia de usuario no se contaba con un archivo de registro, luego de realizar el desarrollo del registro.html, se realiza el commit como se evidencia en el screen abajo.

![](media/ff650b9eb61f119d5721b65176fcbca2.png)![Texto Descripción generada automáticamente](media/3db58264afdb0e1b9efe4fa994f5892a.png) Adición de código:

Al finalizar la historia 4, el registro queda de la siguiente forma.

![Interfaz de usuario gráfica, Aplicación Descripción generada automáticamente](media/77d8e14fd08a39df16dbb741576d46b9.png)

### 

### Historia de Usuario 5

Como: usuario

Puedo: ingresar a un home luego de haber iniciado sesión

Para: tener un espacio luego de haberme autenticado en la pagina

Detalles:

Para el inicio de esta historia de usuario no se contaba con una pagina de home, luego de realizar el desarrollo del home.html, se ingresa el código de php que permita tener una conexión e interacción con el fin de que la página pueda consultar a la base de usuarios registrados posterior a eso se realiza el commit como se evidencia en el screen abajo.

(media/7d8354cc5daa296d7656ae3fb042206b.png)

La interfaz del home queda de la siguiente forma.

![Un hombre con una computadora portátil Descripción generada automáticamente con confianza media](media/868eb534964cc0a709b9e4ab6b49906a.png)

# Conclusiones

A medida que se avanzó en la ejecución de la actividad se pudo obtener un refresh de las informaciones, comandos e interfaz de git, adicional a eso, de forma práctica se pudo ejecutar el proyecto adicionando los diferentes commits y archivos paulatinamente simulando el desarrollo real que existe actualmente en las empresas de software, agradezco por la oportunidad de participar en esta actividad, y adoptaré los conocimientos adquiridos en la investigación y desarrollo de la actividad para continuar practicando en la herramienta de git, como adicional, no usé el comando git clone, por lo que ya estaba instalado el repositorio en el computador pero lo haré de forma personal, así como también la utilización del archivo git ignore, lo cual es bastante útil para no tener en cuenta ciertos archivos y tener en cuenta lo que realmente se necesita en el repositorio y a los que se debe hacer seguimiento por sus cambios durante el desarrollo del software, por último se comparte el screen de los commits que constan en la interfaz de github, así como también el link del repositorio al inicio de la actividad para su posible consulta.

![](media/4e1061d5ccf71babc57b6139ce105b66.png)

# Bibliografía

*¿Qué es GITHub y para qué sirve?* (s.f.). Obtenido de webempresa: https://www.webempresa.com/hosting/que-es-github.html

Dudler, R. (s.f.). *git - la guía sencilla*. Obtenido de git - la guía sencilla: https://rogerdudler.github.io/git-guide/index.es.html
