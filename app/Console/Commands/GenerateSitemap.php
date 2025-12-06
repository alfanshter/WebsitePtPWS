<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create('/about')->setPriority(0.8)->setChangeFrequency('weekly'))
            ->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('weekly'))
            ->add(Url::create('/portfolio')->setPriority(0.8)->setChangeFrequency('weekly'))
            ->add(Url::create('/android')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/ios')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/website')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/desktop')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/cctv')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/iot')->setPriority(0.7)->setChangeFrequency('weekly'))
            ->add(Url::create('/otomasi')->setPriority(0.7)->setChangeFrequency('weekly'));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
