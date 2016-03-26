// JavaScript Document


function menuJs()
    {
      var estilo = document.getElementById("menuSmart").className;<!-- Aqui (donde pone capa) pones el nombre de la clase que le des a la caja que quieres que se despliegue -->	
      if (estilo == "hidden")
      {
      document.getElementById("menuSmart").className = "show";	
      }
      else 
      {
        document.getElementById("menuSmart").className = "hidden"; <!-- Lo mismo aquí (donde pone capa) y donde pones "hidden" seria el estilo de la caja escondida -->		
      }
    }