<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new KitBaseBundle\KitBaseBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
            new CodeWave\MysqlDumperCommandBundle\CodeWaveMysqlDumperCommandBundle(),
            new KitAdminBundle\KitAdminBundle(),
            new KitRbacBundle\KitRbacBundle(),
            new KitNewsBundle\KitNewsBundle(),
            new KitUserBundle\KitUserBundle(),
            new Kit\CaseBundle\KitCaseBundle(),
            new Kit\MenuBundle\KitMenuBundle(),
            new Kit\MonitorBundle\KitMonitorBundle(),
            new Kit\WarningBundle\KitWarningBundle(),
            new Kit\AnalysisBundle\KitAnalysisBundle(),
            new Kit\InquireBundle\KitInquireBundle(),
            new Kit\ArchiveBundle\KitArchiveBundle(),
            new Kit\SettingsBundle\KitSettingsBundle(),
            new Kit\ApiBundle\KitApiBundle(),
            new KitBackupBundle\KitBackupBundle(),
            new KitWebBundle\KitWebBundle(),
            new KitVideoBundle\KitVideoBundle(),
            new KitDnspodBundle\KitDnspodBundle(),
            new KitHouseBundle\KitHouseBundle(),
            new KitLayuiBundle\KitLayuiBundle(),
            new KitBbsBundle\KitBbsBundle(),
            new KitFaqBundle\KitFaqBundle(),
            new KitCommandBundle\KitCommandBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
