<?php

namespace DeviceDetector;

class QuickDeviceDetector extends DeviceDetector {

    public function __construct($userAgent = '')
    {

        if ($userAgent != '') {
            $this->setUserAgent($userAgent);
        }

        /*$this->addClientParser('FeedReader');
        $this->addClientParser('MobileApp');
        $this->addClientParser('MediaPlayer');
        $this->addClientParser('PIM');*/
        $this->addClientParser('Browser');
        /*$this->addClientParser('Library');*/

        /*$this->addDeviceParser('HbbTv');
        $this->addDeviceParser('Console');
        $this->addDeviceParser('CarBrowser');
        $this->addDeviceParser('Camera');
        $this->addDeviceParser('PortableMediaPlayer');*/
        $this->addDeviceParser('Mobile');
    }
}