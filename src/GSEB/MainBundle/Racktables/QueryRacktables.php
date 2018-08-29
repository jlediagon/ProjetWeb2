<?php

use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;

/*---------------------------------------/
/       Requête liste des salles         /
/---------------------------------------*/ 
function querySalle($conn) 
{
    $salles = $conn->fetchAll
    (
        'SELECT * '.
        'from Row'
    );
    return $salles;
}

/*---------------------------------------/
/       Requête liste des baies          /
/---------------------------------------*/ 
function queryBaie($conn, $id_salle)
{
    $baies = $conn->fetchAll
    (
        'SELECT * '.
        'FROM Rack '.
        'WHERE row_id='.$id_salle.''
    );
    return $baies;
}

/*---------------------------------------/
/   Requête liste des types d'objets     /
/---------------------------------------*/ 
function queryListObjType($conn)
{
    $object_type = $conn->fetchAll
    (
        'SELECT * '.
        'FROM Dictionary '.
        'WHERE chapter_id=1'
    );
    return $object_type;
}

/*---------------------------------------/
/   Requête liste des types d'objets     /
/---------------------------------------*/ 
function queryAttrObj($conn, $id_objtype)
{
    $caracobject = $conn->fetchAll
    (
        'SELECT a.id, a.name, a.type, am.chapter_id '.
        'FROM Attribute a '.
        'JOIN AttributeMap am '.
        'ON a.id=am.attr_id '.
        'WHERE am.objtype_id='.$id_objtype.' '
    );
    return $caracobject;
}

/*---------------------------------------/
/       Requête hauteur d'une baie       /
/---------------------------------------*/ 
function queryRackHeight($conn, $id_rack)
{
    $height = $conn->fetchAll
    (
        'SELECT height '.
        'FROM Rack '.
        'WHERE id='.$id_rack.' '
    );
    return $height[0]['height'];
}

/*---------------------------------------/
/     Requête Rackspace Allocation       /
/---------------------------------------*/ 
function queryRackspaceAlloc($conn, $id_rack)
{
    $rackspace =$conn->fetchAll
    (
        'SELECT unit_no, atom '. 
        'FROM RackSpace '.
        'WHERE rack_id='.$id_rack.' '.
        'ORDER BY unit_no DESC'
    );
    return $rackspace;
}

/*---------------------------------------/
/     Requête Nom d'une baie             /
/---------------------------------------*/ 
function queryRackName ($conn, $id_rack)
{
    $name =$conn->fetchAll
    (
        'SELECT name '. 
        'FROM Rack '.
        'WHERE id='.$id_rack.' '
    );
    return $name[0]['name'];
}

/*---------------------------------------/
/     Requête Nom d'un objtype           /
/---------------------------------------*/ 
function queryObjTypeName ($conn, $id_objtype)
{
    $name =$conn->fetchAll
    (
        'SELECT dict_value '. 
        'FROM Dictionary '.
        'WHERE dict_key='.$id_objtype.' '
    );
    return $name[0]['dict_value'];
}