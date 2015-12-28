<?php


namespace Litipk\JupyterPhpInstaller\System;


final class LinuxSystem extends UnixSystem
{
    /** @return integer */
    public function getOperativeSystem()
    {
        return self::OS_LINUX;
    }
}
