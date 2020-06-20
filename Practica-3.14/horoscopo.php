<?php

switch ($_POST['zodiaco']) {
    case 'aries':
        echo "Aries es el primer signo del zodíaco, el primero de naturaleza positiva (masculina) y 
        de cualidad cardinal. Simboliza el renacimiento y su símbolo representa los cuernos 
        de un carnero; pertenece junto a Leo y Sagitario al elemento fuego. Está regido por 
        Marte. Su signo opuesto y compatible es Libra.";
        break;
    
    case 'tauro':
        echo "Tauro es el segundo signo del zodiaco y el primero de cualidad fija. Este signo según 
        la astrología occidental, regido por el planeta Venus, tierra y naturaleza, influye y 
        presenta cualidades similares a lo leal en el contexto de la cualidad afectiva. Su 
        Signo Opuesto y Complementario a la vez es Escorpio.";
        break;
    
    case 'geminis':
        echo "Géminis es el tercer signo del Zodiaco, el segundo de naturaleza positiva (masculina) 
        y de cualidad mutable. Simboliza la conciencia concreta y está representado por los 
        Dióscuros, Cástor y Pólux. Pertenece junto a Libra y Acuario al elemento aire. Está 
        regido por Mercurio. Su signo opuesto es Sagitario.";
        break;
    
    case 'cancer':
        echo "Cáncer es el cuarto signo del zodíaco, el segundo de naturaleza negativa y de 
        cualidad cardinal. Simboliza la familia y su símbolo representa un cangrejo, 
        pertenece junto a Escorpio y a Piscis al elemento agua. Está regido por la Luna. Su 
        signo opuesto es Capricornio.";
        break;

    case 'leo':
        echo "Leo es el quinto signo del zodíaco, el tercero de naturaleza positiva y de cualidad 
        fija. Simboliza la fuerza de la vida y su símbolo representa la melena del león, 
        pertenece junto a Aries y Sagitario al elemento fuego. Está regido por el Sol. Su 
        signo opuesto es Acuario.";
        break;

    case 'virgo':
        echo "Virgo es el sexto signo del zodíaco, el tercero de naturaleza negativa, nocturna, 
        pasiva, yin, femenina y de cualidad mutable. Simboliza el trabajo y su símbolo 
        representa una Virgen, pertenece junto a Tauro y Capricornio al elemento Tierra. Está 
        regido por Mercurio.";
        break;

    case 'libra':
        echo "Libra es el séptimo signo del zodíaco, el cuarto de naturaleza positiva y el tercero 
        de cualidad cardinal. Simboliza el equilibrio y la armonía y su símbolo representa la 
        balanza. Pertenece junto a Géminis y Acuario al elemento aire. Está regido por Venus 
        y su signo opuesto y compatible es Aries.";
        break;

    case 'escorpio':
        echo "Escorpio es el octavo signo del zodiaco, el primero de naturaleza negativa y el 
        tercero de cualidad fija. Simboliza la destrucción y el renacimiento, está regido por 
        los planetas Marte y Plutón.";
        break;

    case 'sagitario':
        echo "Sagitario es el noveno signo del zodíaco, el quinto de naturaleza [Naturaleza de los 
        signos (astrología)|positiva]] y de cualidad mutable. Simboliza la conciencia 
        superior y su símbolo representa la flecha del arquero, pertenece junto a Aries y Leo 
        al elemento fuego. Está regido por Júpiter. Su signo opuesto y compatible es Géminis.";
        break;
        
    case 'capricornio':
        echo "Capricornio es el décimo signo del zodíaco, el quinto de naturaleza negativa 
        (femenina) y de cualidad cardinal. Simboliza la sabiduría y las aguas por el dios 
        primordial de los sumerios: Enki; su símbolo representa la montaña, pertenece junto a 
        Tauro y Virgo al elemento tierra. Está regido por Saturno y dentro de esa trilogía de 
        Tierra representa la Siembra. Su signo opuesto es Cáncer.";
        break;
        
    case 'acuario':
        echo "Acuario es el undécimo signo del zodiaco, el sexto de naturaleza positiva y el cuarto 
        de cualidad fija —junto con Tauro, Leo y Escorpio—. Simboliza la revolución y su 
        símbolo representa la sabiduría al ser. El signo está representado por el aguador o 
        portador del agua ya que en la antigua sumeria este era un símbolo de difundir la 
        sabiduría (el agua); pertenece junto a Géminis y Libra al elemento aire.";
        break;
        
    case 'piscis':
        echo "Piscis es el duodécimo signo del zodíaco, el sexto de naturaleza negativa (femenina) 
        y de cualidad mutable. Simboliza la disolución y su símbolo representa dos peces 
        nadando en sentidos opuestos. Pertenece, junto a Cáncer y Escorpio al elemento agua. 
        Está regido por Neptuno y Júpiter. Su signo opuesto y compatible es Virgo.";
        break;
    
    default:
        echo "Elija una opción del despegable.";
        break;
}


?>

<br><br><br>
<a href="zodiaco.html">Volver</a>