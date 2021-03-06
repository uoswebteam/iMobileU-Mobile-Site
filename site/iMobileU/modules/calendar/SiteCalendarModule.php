<?php

class SiteCalendarModule extends CalendarModule {
  protected $defaultSearchOption = 2;

  protected function initializeForPage() {
    switch ($this->page) {
      case 'list':
      case 'detail':
        parent::initializeForPage();
        break;
       default:
        $this->redirectTo('list');
        break;
      }
  }
}
