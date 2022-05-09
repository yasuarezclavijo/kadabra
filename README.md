# Resolución prueba Kadabra
## Yeison Andres Suarez Clavijo

### Descripción del trabajo realizado a nivel de la prueba.

A través de Drupal Console se crea la entidad de contenido, se realizan ajustes a nivel de `baseFieldDefinitions` para generar los campos según instrucciones.

Tambien se altera el `ListBuilder` para mostrar correctamente la CRUD en función de los cambios aplicados a nivel de campos, y que el listado donde se presentan los registros se visualicen correctamente.

Se desarrollan las clases plugin para el manejo del campo calculado heradado y basado en `FieldPluginBase` y de igual forma plugin de ordenamiento basado en `SortPluginBase`

IMPORTANTE: La taxonomia TAGS debera tener campos para poder crear nuevos registros a nivel de la entidad `Ejemplo KDB`

A nivel de la vista que se creo, se relaciona a nivel de config/install para que una vez el módulo sea instalado la misma se re-cree y se pueda verificar en la ruta especificada en instrucciones **/ejercicio/kdb**

## RESPUESTAS DEL DOCUMENTO.
1. Qué tan frecuente solicita ayuda a sus pares de equipo o al team leader en caso de  existir en su organización. 

    *Rpta: A pesar de que el trabajo en equipo es importante en esta profesión, soy una persona que indaga mucho, que busca entender el por que de las cosas y hallar solución por mis medios en una primera instancia, pero no tengo problema en apoyarme en otras personas cuando la situación lo amerita, y que mejor que apoyarse en la experiencia de mis pares o mis lideres, cuando he agotado el primer recurso, de igual forma cuando alcanzo la solución tambien me gusta convertirla en conocimiento general, para evitar reprocesos de compañeros y miembros del equipo. Pero siempre mi proceso es igual, agoto mis recursos investigativos, y en una segunda instancia busco apoyo en pares y lideres, pero me gusta ser recursivo y no depender siempre del conocimiento de alguien mas.*

2. ¿Ha contribuido con módulos de Drupal?, en caso afirmativo explique un problema o  solución que realizó.  
    *Rpta: No soy muy activo en la comunidad hace poco me registre y reporte un issue, pero por desconocimiento de la plataforma no pude subir mi patch, y alguien mas me gano :) apenas estoy empezando a entrar, pues normalmente me he desempeñado en la industria privada y no he sido muy activista de la comunidad.*

3. ¿Ha trabajado en un equipo donde se aplique Code Review? 
    *Rpta: No tengo completamente dominado el concepto, pero asumo que si, recientemente he pasado por proyectos donde se hace analisis estatico de codigo con SONAR y SONARQUBE, ademas de revisiones por parte humana de deptos de arquitectura*

4. Nombre un problema que tuvo que solucionar y representó un desafío para usted.

    *Rpta: A nivel de drupal, apoye un proyecto donde se solicitaba la creación de un PROFILE Custom, no habia tenido la oportunidad de llevar a cabo previamente este tipo de desarrollo, pero entendi de hooks que nunca habia usado, manejo de sincronización a la configuración, manejo de traducciones, ademas de la inclusión de Web components, por nombrar retos de los mas relevantes, entre otro retos que el dia a dia de dicho proyecto nos fue exponiendo y por fortuna luego de arduo trabajo logro tocar buen puerto, este proyecto se desarrollo para una institución universitaria de Colombia, y constituyo un bonito reto lleno de aprendizaje y con resultados satisfactorios. 
    La solución por ejemplo a uno de los desafios mas grandes, fue la inclusión de Web Components a traves de libreria stencil y su ejecución dentro de Drupal, esto fue a solicitud de arquitectura y bueno para ese momento mi conocimiento era nulo del tema, tuve que indagar mucho, probar mucho hasta que al fin se dio cumplimiento a los requerimientos.*

5. Nombre herramientas que utiliza para desarrollar en Drupal en su día a día. 
    - *Drupal console*
    - *Drush*
    - *Docker*
    - *VsCode*
    - *WSL2 / Ubuntu*

6. ¿Ha escrito test unitarios sobre Drupal? 
    *Rpta: He iniciado procesos en proyectos actuales, de incial uso de PhpUnit para hacer test estandar PHP, de unitTest, aunque mi investigación me ha ido mostrando las diferentes clases que tiene drupal para hacer diferentes tipos de pruebas, debo hacer honor a la verdad y no he tenido la oportunidad de desarrollar este tipo de Test's*