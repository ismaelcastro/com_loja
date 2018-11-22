<?php
    defined('_JEXEC') or die('Restricted Access');
    if(!defined('DS',DIRECTORY_SEPARATOR)){
    	define('DS',DIRECTORY_SEPARATOR);
    }

    //$controller = JController::getInstance('HelloWorld');
    $controller = JController::getInstance('HelloWorld');

    //class HelloWorldViewHelloWords extends JView
    class HelloWorldViewHelloWorlds extends JViewLegacy;

    class HelloWorldController extends JControllerLegacy;

    class HelloWorldModelHelloWorld extends JModelItemLegacy;

    class HelloWorldModelUpdHelloWorld extends JModelFormLegacy;

    //Convert smaple to JRegistry with LoadJSON - Sample from Joomla! 3.0 sourcecode

    // $params = new JRegistry;
    // $params->LoadJSON($this->item->params);
    // $this->item->params = $params;

    $params = new JRegistry;
    $params->loadString($item->params);
    $item->params = $params;
