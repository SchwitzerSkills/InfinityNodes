<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Docker\API\Model\ContainersCreatePostBody;
use Docker\API\Model\HostConfig;
use Docker\API\Model\PortBinding;
use Docker\Docker;

class DockerController extends Controller
{
    public function createContainer(){
        $docker = Docker::create();
        $infos = $docker->systemInfo();

        if($infos->getContainers() >= 3){
            return redirect("/")->with("message", "Es dürfen maximal 3 Containers gestartet sein!");
        }

        $containerConfig = new ContainersCreatePostBody();
        $containerConfig->setImage('httpd');

        $portBinding = new PortBinding();
        // $portBinding->setHostPort('8080');
        $portBinding->setHostIp('0.0.0.0');

        $portMap = new \ArrayObject();
        $portMap['80/tcp'] = [$portBinding];

        $hostConfig = new HostConfig();
        $hostConfig->setPortBindings($portMap);

        $containerConfig->setHostConfig($hostConfig);
        $containerCreateResult = $docker->containerCreate($containerConfig);
        $docker->containerStart($containerCreateResult->getId());

        return redirect("/");
    }

    public function getContainers(){   
        $docker = Docker::create();
        $containers = $docker->containerList();
        $containerInfos = array();

        foreach ($containers as $container) {
            foreach($container->getNames() as $containerName){
                foreach($container->getPorts() as $ports){
                    $containerInfos[] = array("id" => $container->getId(), "image" => $container->getImage(), "name" => $containerName, "state" => $container->getState(), "port" => $ports->getPublicPort(), "ip" => $_SERVER["SERVER_ADDR"]);
                }
            }
        }
        return view("dashboard", ["containers" => $containerInfos]);
    }

    public function stopContainer(Request $request){
        $conatinerId = $request->stopContainer;
        $docker = Docker::create();
        $docker->containerPause($conatinerId);

        return redirect("/");
    }

    public function startContainer(Request $request){
        $conatinerId = $request->startContainer;
        $docker = Docker::create();
        $docker->containerUnpause($conatinerId);

        return redirect("/");
    }

    public function deleteContainer(Request $request){
        $conatinerId = $request->deleteContainer;
        $docker = Docker::create();
        $docker->containerStop($conatinerId);
        $docker->containerDelete($conatinerId);

        return redirect("/");
    }
}
