<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Docker\API\Model\ContainersCreatePostBody;
use Docker\API\Model\HostConfig;
use Docker\API\Model\PortBinding;
use Docker\Docker;
use Docker\API\Endpoint\ContainerAttach;

class DockerController extends Controller
{
    public function createContainer(){
        $docker = Docker::create();
        $infos = $docker->systemInfo();

        if($infos->getContainers() >= 3){
            return redirect("/")->with("message", "Es dürfen maximal 3 Containers gestartet sein!");
        }

        $containerConfig = new ContainersCreatePostBody();
        $containerConfig->setImage('test');
        $containerConfig->setCmd(["httpd-foreground"]);
        $containerConfig->setExposedPorts(["80/tcp" => new \ArrayObject(), "22/tcp" => new \ArrayObject()]);

        $PortBinding = new PortBinding();
        
        $hostConfig = new HostConfig();
        $hostConfig->setPortBindings(new \ArrayObject([
            "80/tcp" => [$PortBinding],
            "22/tcp" => [$PortBinding]
        ]));
        $containerConfig->setHostConfig($hostConfig);

        $containerCreateResult = $docker->containerCreate($containerConfig);
        $docker->containerStart($containerCreateResult->getId());
        
        return redirect("dashboard");
}

    public function getContainers(){   
        $docker = Docker::create();
        $containers = $docker->containerList();
        $containerInfos = array();
        $containerPorts = array();

        foreach ($containers as $container) {
            foreach($container->getNames() as $containerName){
                // $containerInfos[] = array("id" => $container->getId(), "image" => $container->getImage(), "name" => $containerName, "state" => $container->getState(), "ip" => $_SERVER["SERVER_ADDR"]);
                foreach($container->getPorts() as $ports){
                    // $containerPorts[] = $ports;
                    var_dump($ports);
                }
                // $containerInfos["ports"] = $containerPorts;
            }
        }
        exit;
        return view("dashboard", ["containers" => $containerInfos]);
    }

    public function stopContainer(Request $request){
        $conatinerId = $request->stopContainer;
        $docker = Docker::create();
        $docker->containerPause($conatinerId);

        return redirect("dashboard");
    }

    public function startContainer(Request $request){
        $conatinerId = $request->startContainer;
        $docker = Docker::create();
        $docker->containerUnpause($conatinerId);

        return redirect("dashboard");
    }

    public function deleteContainer(Request $request){
        $conatinerId = $request->deleteContainer;
        $docker = Docker::create();
        $docker->containerStop($conatinerId);
        $docker->containerDelete($conatinerId);

        return redirect("dashboard");
    }

    public function attachContainer(Request $request){
        $docker = Docker::create();
  
    }
}
