<?php

namespace App\Listeners;

use App\Events\LanguageChanged;
use App\Models\AboutData;
use App\Models\AdvantagesData;
use App\Models\ContactsData;
use App\Models\ContactsLocationsData;
use App\Models\HomePageSeoData;
use App\Models\Language;
use App\Models\MenuItem;
use App\Models\NewsCategoryData;
use App\Models\NewsData;
use App\Models\PageData;
use App\Models\ProductCategoryData;
use App\Models\ProductData;
use App\Models\ServiceData;
use App\Models\SlideLinks;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LanguageChangedHandler
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\LanguageChanged  $event
     * @return void
     */
    public function handle(LanguageChanged $event)
    {
        switch ($event->type){
            case $event->type == 'add':
                HomePageSeoData::duplicateRow($event->language->id);
                MenuItem::duplicateRow($event->language->id);
                SlideLinks::duplicateRow($event->language->id);
                NewsData::duplicateRow($event->language->id);
                NewsCategoryData::duplicateRow($event->language->id);
                PageData::duplicateRow($event->language->id);
                ContactsData::duplicateRow($event->language->id);
                ContactsLocationsData::duplicateRow($event->language->id);
                ProductData::duplicateRow($event->language->id);
                ProductCategoryData::duplicateRow($event->language->id);
                ServiceData::duplicateRow($event->language->id);
                AdvantagesData::duplicateRow($event->language->id);
                AboutData::duplicateRow($event->language->id);
                break;
            case $event->type == 'remove':
                HomePageSeoData::rowRemove($event->language->id);
                MenuItem::rowRemove($event->language->id);
                SlideLinks::rowRemove($event->language->id);
                NewsData::rowRemove($event->language->id);
                NewsCategoryData::rowRemove($event->language->id);
                PageData::rowRemove($event->language->id);
                ContactsData::rowRemove($event->language->id);
                ContactsLocationsData::rowRemove($event->language->id);
                ProductData::rowRemove($event->language->id);
                ProductCategoryData::rowRemove($event->language->id);
                ServiceData::rowRemove($event->language->id);
                AdvantagesData::rowRemove($event->language->id);
                AboutData::rowRemove($event->language->id);
                break;
        }
    }
}
