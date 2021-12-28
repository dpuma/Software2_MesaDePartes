# PROYECTO FINAL - INGENIERÍA DE SOFTWARE II
### IMPLEMENTACIÓN DE UN ENTORNO DE INTEGRACIÓN CONTINUA (CI/CD)
## Integrantes
Edward Luis Huayllasco Carlos

Dennis Pumaraime Espinoza

Solange Aracely Romero Chacón

Santiago Javier Vilca Limachi

## Proyecto
[Anderson Bastidas](https://github.com/Anders87x/Tutorial_MesaDePartes) 

### Plan
![plan](Imagenes/plan.png)

## Gestión de Issues
[Trello](https://trello.com/b/IEpbXa8p) 

## Manual instalación/configuración Pipeline CI Jenkins

### Requisitos previos: 

1. Instalación de Servidor SonarQube https://www.sonarqube.org
2. Instalación de Servidor Jenkins https://www.jenkins.io

### Pasos para la integración 

- En Servidor de Sonarqube 

1. Generar un token para realizar la autenticación en Jenkins 
![reporte](Imagenes/SonarqubeToken.png)

- En Jenkins 

1. Instalar el pluguin de Sonarqube 
![reporte](Imagenes/Jenkins-Sonar01-plugin.png)

2. Configurar las credenciales de Sonarqube
![reporte](Imagenes/Jenkins-Sonar02-credenciales.png)

3. Agregar SonarQube al sistema de configuración de Jenkins
![reporte](Imagenes/Jenkins-Sonar03-server.png)

4. Configurar instalación de SonarScanner
![reporte](Imagenes/Jenkins-Sonar04-scanner.png)

5. Crear y ejecutar el pipeline


## Análisis Estático con SONARQUBE
![reporte](Imagenes/sonarQube.png)

### Vulnerabilidad (6)
![reporteV](Imagenes/Vulnerabilidad.png)
### Bugs (436)
![reporteB](Imagenes/Bugs.png)
### Code Smell (6.3k)
![reporteCS](Imagenes/codeSmell.png)

## Pruebas de Seguridad con OWASP ZAP

### Recuentos de alerta por riesgo y confiabilida
Esta tabla muestra el número de alertas para cada nivel de riesgo y confiabilidad incluidas en el informe. (Los porcentajes entre paréntesis representan el recuento como porcentaje del número total de alertas incluidas en el informe, redondeado a un decimal).
![reporteO1](Imagenes/Owasp1.png)

### Recuento de alertas por centro y riesgo
Esta tabla muestra, para cada centro en el que se han emitido una o más alertas, el número de alertas emitidas en cada nivel de riesgo. Las alertas con un nivel de confianza de "falso positivo" se han excluido de estos recuentos. (Las cifras entre paréntesis son el número de alertas emitidas para el centro en ese nivel de riesgo o por encima de él).
![reporteO2](Imagenes/Owasp2.png)

### Recuento de alertas por tipo de alerta
Esta tabla muestra el número de alertas de cada tipo de alerta, junto con el nivel de riesgo del tipo de alerta. (Los porcentajes entre paréntesis representan cada recuento como porcentaje, redondeado a un decimal, del número total de alertas incluidas en este informe).
![reporteO3](Imagenes/Owasp3.png)

## Pruebas de Performance con JMeter
Se realizo una prueba infinita para ver el rendimiento del programa, donde los resultados fueron:

En View Results Tree:
![reporteJ1](Imagenes/ResultsTree.png)
En Aggregate Report: donde vemos el numero de usuarios que testearon cada una de las pruebas y sus tiempos respectivos
![reporteJ2](Imagenes/AggregateReport.png)
En Active Threads Over Time, en este observaremos el tiempo de cada uno de los hilos(usuarios) activos.
![reporteJ3](Imagenes/ActiveThreadsOverTime.png)
En Response Times Over Time, en este veremos el tiempo de respuesta de cada prueba por hilo(usuario).
![reporteJ4](Imagenes/ResponseTimesOverTime.png)


# Pruebas Unitarias usando PHPUNIT
Puede agregar PHPUnit como una dependencia local, a su proyecto usando Composer:

![prueba](Imagenes/phpUnit1.PNG)
![prueba1](Imagenes/phpUnit2.PNG)

El ejemplo que se muestra arriba asume que el composer está agregado a su $ PATH.
Su composer.json debería verse similar a esto:

![prueba2](Imagenes/phpUnit3.PNG)


En el siguiente caso estaremos probando la clase USUARIO y Email creada para guardar datos correspondientes
## Code
models/Usuario.php.

![prueba3](Imagenes/phpUnit4.PNG)

### Test Code
tests/Test.php.

![prueba4](Imagenes/phpUnit5.PNG)

Crearemos una funcion setUP que nos ayudara a inicializar las variables que usaremos
Las siguientes funciones realizan pruebas correspondientes a las clases USUARIO y EMAIL.

![prueba5](Imagenes/phpUnit6.PNG)

### testEmailAdressForUsername()
se asegura que la funcion Usuario->set_correo_usuario guarde el correo correspondiente
y devuelva el mismo con la funcion Usuario->get_correo_usuario.

![prueba6](Imagenes/phpUnit7.PNG)

### testNameForUsername
se asegura que la funcion Usuario->set_first_name guarde el nombre del usuario
y devuelva el mismo con la funcion Usuario->get_first_name.

![prueba7](Imagenes/phpUnit8.PNG)

### testSurNameForUsername
se asegura que la funcion Usuario->set_sur_name guarde el apellido del usuario
y devuelva el mismo con la funcion Usuario->get_sur_name.

![prueba8](Imagenes/phpUnit9.PNG)

### testFullNameForUsername
Se asegura que las funciones Usuario->set_first_name guarde el nombre del usuario,
que la funcion Usuario->set_sur_name guarde el apellido del usuario
y devuelva el nombre y apellido con la funcion Usuario->get_full_name.

![prueba9](Imagenes/phpUnit10.PNG)

## Funciones aun por terminar
### testCanBeCreatedFromValidEmailAddress(): void.

![prueba10](Imagenes/phpUnit11.PNG)

### testCannotBeCreatedFromInvalidEmailAddress(): void.

![prueba11](Imagenes/phpUnit12.PNG)

### testCanBeUsedAsString(): void.

![prueba12](Imagenes/phpUnit13.PNG)
