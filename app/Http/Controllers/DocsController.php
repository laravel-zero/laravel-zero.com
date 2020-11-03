<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Support\Parsedown;
use App\Support\Documentation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Contracts\Foundation\Application;

class DocsController extends Controller
{
    protected const DEFAULT_PAGE = 'introduction';
    protected const EXCLUDED = ['readme', 'license'];

    /**
     * Handle the incoming request.
     *
     * @param Documentation $docs
     * @param string|null $page
     * @return Application|Factory|View|RedirectResponse
     */
    public function __invoke(Documentation $docs, string $page = null)
    {
        $defaultVersion = config('site.defaultVersion');

        if ($page === null) {
            return redirect()->route('docs', [self::DEFAULT_PAGE]);
        }

        if (! $docs->exists($defaultVersion, $page) || in_array($page, self::EXCLUDED)) {
            abort(404);
        }

        $parsedown = new Parsedown;

        $index = $parsedown->text($docs->getIndex($defaultVersion));
        $contents = YamlFrontMatter::parse($docs->get($defaultVersion, $page));

        $body = $parsedown->text($contents->body());
        $matter = $contents->matter();

        return view('docs', compact('body', 'matter', 'page', 'index'));
    }
}
