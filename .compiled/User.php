<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class User extends Foundation\AbstractActorDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x07554;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"password\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":\"^[a-zA-Z0-9_]{4,12}$\",\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":true,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"join_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"birthday\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":411436800,\"unique\":false,\"index\":false}},\"about\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}}}";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Lib\Graph\GraphInterface $graph , string $password, ?string $birthday = 411436800, ?string $about = "")
    {
        $this->registerIncomingEdges(UserOut\Follow::class);
        $this->registerIncomingEdges(PageOut\Mention::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        $this->registerIncomingEdges(UserOut\Message::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Post::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Post::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Star::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Star::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Comment::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Comment::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Consume::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Consume::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Message::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Message::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Create::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Create::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Follow::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Follow::class);
        parent::__construct($kernel, $graph);
                $this->setPassword($password, true);
        $this->setJoinTime(time(), true);
        $this->setBirthday(strtotime($birthday), true);
        $this->setAbout($about, true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1516418649
 * Size (in bytes): 3791
 * Compilation Time: 84
 * f84f381b5ff2131bbf5ef3c96912f048
 ******************************************************/