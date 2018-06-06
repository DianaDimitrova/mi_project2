<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;
use App\Catalog;


class SiteComposer
{
	public function compose (View $view)
	{
		$catalogs = Catalog::all();
		$view -> with ('catalogs', $catalogs);
		
	}
}