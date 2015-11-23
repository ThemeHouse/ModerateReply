<?php

class ThemeHouse_ModerateReply_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/ModerateReply/Extend/XenForo/ControllerPublic/Forum.php' => '2100d175fe1cfa6cb6523d72c70a588b',
                'library/ThemeHouse/ModerateReply/Extend/XenForo/ControllerPublic/Thread.php' => '59afab0c9a1420e2981381fd26159211',
                'library/ThemeHouse/ModerateReply/Extend/XenForo/DataWriter/Discussion/Thread.php' => '588ac41b52a96507f42f484ea8690998',
                'library/ThemeHouse/ModerateReply/Extend/XenForo/Model/Forum.php' => '0bfc882f1198ea42d439a8d821f1e6d0',
                'library/ThemeHouse/ModerateReply/Extend/XenForo/Model/Post.php' => 'ef4c78c76ef9488ba681a2e2d009a217',
                'library/ThemeHouse/ModerateReply/Install/Controller.php' => '5e2bf07621bb2d856bdbcbea00c3135a',
                'library/ThemeHouse/ModerateReply/Listener/LoadClass.php' => '6a90637443f32b186cd575c123d49958',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}