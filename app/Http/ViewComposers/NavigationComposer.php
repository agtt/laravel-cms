<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Contracts\View\View;

class NavigationComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $categories;
    protected $menus;

    /**
     * Create a new profile composer.
     *
     * @param UserRepository $users
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->categories =  Category::whereParent_id(0)->get();
        $this->menus['left'] = Menu::whereEmplacement('left')->orderBy('weight')->get();
        $this->menus['right'] = Menu::whereEmplacement('right')->orderBy('weight')->get();
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories)->with('menus', $this->menus);
    }
}
