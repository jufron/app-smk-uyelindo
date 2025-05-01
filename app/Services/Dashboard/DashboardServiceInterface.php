<?php

namespace App\Services\Dashboard;

interface DashboardServiceInterface
{
    public function kategoryAllCount () : int;

    public function pertanyaanPpdbAllCount () : int;

    public function beritaAllCount() : int;

    public function beritaPublishCount () : int;

    public function beritaDraftCount () : int;

    public function testimoniAllCount () : int;

    public function testimoniWhereMonthCount () : int;

    public function testimoniPublishCount () : int;

    public function testimoniDraftCount () : int;
}