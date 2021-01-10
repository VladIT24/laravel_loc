<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\People;
use Illuminate\Support\Facades\DB;
use Collective\Html\FormBuilder;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {

        if ($request->isMethod('post'))
        {
            $messages = [
                'required' => 'The field :attribute is required to be filled',
                'email' => 'The field :attribute have to follow by email address'
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ], $messages);

            $data = $request->all();

//            Mail::send('site.email', ['data' => $data], function($message) use ($data) {
//                $mail_admin = env('MAIL_FROM_ADDRESS');
//                $message->from($data['email'], $data['name']);
//                $message->to($mail_admin)->subject('Test');
//            });
        }
        $pages = Page::all();
        $people = People::all();
        $portfolios = Portfolio::all();
        $services = Service::all();

        $tags = DB::table('portfolios')->distinct()->get('filter');

        $menu = [];

        foreach ($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }

        $item = array('title' => 'Services', 'alias' => 'services');
        array_push($menu, $item);

        $item = array('title' => 'Portfolio', 'alias' => 'Portfolio');
        array_push($menu, $item);

        $item = array('title' => 'Clients', 'alias' => 'clients');
        array_push($menu, $item);

        $item = array('title' => 'Team', 'alias' => 'team');
        array_push($menu, $item);

        $item = array('title' => 'Contact', 'alias' => 'contact');
        array_push($menu, $item);

//        dd($menu);

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'peoples' => $people,
            'portfolios' => $portfolios,
            'tags' => $tags
        ));
    }
}
