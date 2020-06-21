<?php 
switch (@$_GET['pag']){ 


case 'projeto': 
include "projeto.php"; 
break; 

case 'pontos': 
include "pontos.php"; 
break; 

case 'praca': 
include "praca.php"; 
break; 


case 'contato': 
include "contato.php"; 
break; 


case 'deodoro': 
include "praca-deodoro.php"; 
break; 

case 'mplitoranea': 
include "mapaLitoranea.php"; 
break; 

case 'mpmapas': 
include "mapas.php"; 
break; 

case 'puxa': 
include "conexao/puxa.php"; 
break; 


case 'alegria': 
include "praca-alegria.php"; 
break; 

case 'pantheon': 
include "praca-pantheon.php"; 
break; 

case 'saudade': 
include "praca-saudade.php"; 
break; 

case 'adventury': 
include "adventury.php"; 
break; 

case 'lapero': 
include "lapero.php"; 
break; 

case 'senzala': 
include "senzala.php"; 
break; 

case 'cponto': 
include "contraponto.php"; 
break; 

//IGREJAS E TEMPLOS
/* ============================================================================================ */
case 'igrejas':
    include "igrejas.php";
    break;
    /*-----------------------------------------*/
    case 'mccp':
    include "igreja-mccp.php";
    break;
    /*-----------------------------------------*/
    case 'catedral':
    include "igreja-catedral.php";
    break;
    /*-----------------------------------------*/
    case 'iba':
    include "igreja-iba.php";
    break;
    /*-----------------------------------------*/
    case 'igrejanossasenhoradosremedios':
    include "igreja-nossasenhora-remedios.php";
    break;
    /* ============================================================================================ */
    
    
    //PARQUES
    /* ============================================================================================ */
    case 'parques':
        include "parques.php";
    break;
    /*-----------------------------------------*/
    case 'rangedor':
        include "parque-rangedor.php";
    break;
    /*-----------------------------------------*/
    case 'itapiraco':
        include "parque-itapiraco.php";
    break;
    /*-----------------------------------------*/
    case 'botanico':
        include "parque-botanico-vale.php";
    break;
    /*-----------------------------------------*/
    case 'bommenino':
        include "parque-bom-menino.php";
    break;
    /* ============================================================================================ */
    
    
    //CENTRO
    /* ============================================================================================ */
    case 'centro':
        include "centro-historico.php";
    break;
    /*-----------------------------------------*/
    case 'palacio':
        include "palacio-dos-leoes.php";
    break;
    
    case 'tapioca':
        include "reviver-tapioca-cafe.php";
    break;
    
    case 'galeria':
        include "galeria-reviver.php";
    break;
    
    case 'hostel':
        include "reviver-hostel.php";
    break;
    /* ============================================================================================ */
    
    
    //MUSEUS E TEATROS
    /* ============================================================================================ */
    case 'museu':
        include "museu-teatro.php";
    break;
    /*-----------------------------------------*/
    case 'teatroarthur':
        include "teatro-arthurazevedo.php";
    break;
    /*-----------------------------------------*/
    case 'centroDePesquisa':
        include "centro-de-pesquisa.php";
    break;
    /*-----------------------------------------*/
    case 'museuArtistico':
        include "museu-artistico.php";
    break;
    /*-----------------------------------------*/
    case 'teatroJoaoVale':
        include "teatro-joao-vale.php";
    break;
    /* ============================================================================================ */
    
    
    //OUTROS
    /* ============================================================================================ */
    case 'outros':
        include "outros.php";
    break;
    /*-----------------------------------------*/
    case 'valparaiso':
        include "valparaiso.php";
    break;
    /* ============================================================================================ */
    
    
    //ARREDORES
    /* ============================================================================================ */
    case 'arredores':
        include "arredores.php";
    break;
    
    case 'lencois':
        include "lencois.php";
    break;
    /* ============================================================================================ */
    
    //PRAIAS
    /* ============================================================================================ */
    case 'litoranea':
        include "litoranea.php";
    break;
    
    
    //PRAÇAS
    /* ============================================================================================ */
    case 'praca': 
        include "praca.php"; 
    break; 
    /*-----------------------------------------*/
    case 'deodoro': 
    include "praca-deodoro.php"; 
    break;
    /*-----------------------------------------*/
    case 'alegria': 
    include "praca-alegria.php"; 
    break; 
    /*-----------------------------------------*/
    case 'pantheon': 
    include "praca-pantheon.php"; 
    break; 
    /*-----------------------------------------*/
    case 'saudade': 
    include "praca-saudade.php"; 
    break; 
    /* ============================================================================================ */

case 'colonial': 
include "colonial.php"; 
break; 


case 'crioulas': 
include "crioulas.php"; 
break; 

case 'sanluis': 
include "hotelsaoluis.php"; 
break; 

case 'barcanal': 
include "barcanal.php"; 
break; 

case 'cafofo': 
include "cafofodica.php"; 
break; 

case 'flor': 
include "flor.php"; 
break; 

case 'hmaranhense': 
include "hmaranhense.php"; 
break; 


case 'taberna': 
include "taberna.php"; 
break; 

case 'porto': 
include "porto.php"; 
break; 

case 'nelson': 
include "nelson.php"; 
break; 

case 'hostel': 
include "hostel.php"; 
break; 

case 'contato': 
include "contato.php"; 
break; 


case 'select': 
include "select.php"; 
break; 

case 'select2': 
include "select2.php"; 
break; 



case 'jg2': 
include "jg2.php"; 
break; 


case 'jg3': 
include "jg3.php"; 
break; 



default: 
include "home.php"; 
break; 


} 

?> 

