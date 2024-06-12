<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir(dirname(__DIR__) . '/metadata', 'Pohoda')->setPropertyNamingStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy());
$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
    // $handler->registerSubscribingHandler(new YourhandlerHere());
});

$serializer = $serializerBuilder->build();

// deserialize the XML into Demo\MyObject object
$object = $serializer->deserialize(file_get_contents(dirname(__DIR__) . '/tests/getBank.xml'), 'Pohoda\Data\DataPack', 'xml');

// some code ....
// serialize the Demo\MyObject back into XML
$newXml = $serializer->serialize($object, 'xml');

echo $newXml;
